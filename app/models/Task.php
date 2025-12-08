<?php

class Task extends Model
{
    protected $db;

    public function __construct($db = null)
    {
        return parent::__construct($db);
    }
public function getPaginated($limit, $offset, $search = '')
{
    $sql = "SELECT t.*, 
                   e.full_name AS employee_name, 
                   e.photo AS photo, 
                   e.employee_id AS employee_code
            FROM tasks AS t
            JOIN employees AS e ON t.employee_id = e.id
            WHERE 1";

    $params = [];
    $types = "";

    if (!empty($search)) {
        $sql .= " AND t.title LIKE ?";
        $params[] = "%$search%";
        $types .= "s";
    }

    $sql .= " ORDER BY t.id DESC LIMIT ? OFFSET ?";

    $params[] = $limit;
    $params[] = $offset;
    $types .= "ii";

    $stmt = $this->db->prepare($sql);
    $stmt->bind_param($types, ...$params);
    $stmt->execute();
    $result = $stmt->get_result();

    return $result->fetch_all(MYSQLI_ASSOC);
}




public function getAll(){
    $sql = $this->db->prepare("SELECT e.full_name,e.photo,e.employee_id,  desg.name AS designation_name, 
                   dept.name AS department_name   FROM employees AS e
            JOIN designations AS desg ON e.designation_id = desg.id
            JOIN departments AS dept ON e.department_id = dept.id");

            $sql->execute();
            $result = $sql->get_result();
            return $result->fetch_all(MYSQLI_ASSOC);
}

    public function countAll($search = '')
    {
        $sql = "SELECT COUNT(*) as total FROM employees WHERE 1";
        $params = [];
        $types = "";

        if ($search) {
            $sql .= "  AND (t.title LIKE ?)";
            $params[] = "%$search%";
            $types .= "s";
        }


        $stmt = $this->db->prepare($sql);
        if ($params) {
            $stmt->bind_param($types, ...$params);
        }
        $stmt->execute();
        $result = $stmt->get_result()->fetch_assoc();
        return $result['total'];
    }

  

 public function create($data)
{
    $stmt = $this->db->prepare(
        "INSERT INTO tasks
        (title, employee_id, description, start_date, deadline, employee_accept, status, progress, priority)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)"
    );

    $stmt->bind_param(
        "sisssisis",
        $data['title'],
        $data['employee_id'],
        $data['description'],
        $data['start_date'],
        $data['deadline'],
        $data['employee_accept'],
        $data['status'],
        $data['progress'],
        $data['priority']
    );

    if ($stmt->execute()) {
        return true;
    } else {
        echo "ERROR: " . $stmt->error;
        return false;
    }
}



    //employee id find for edit
      public function find($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM employees WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    /**
     * Update employee
     */
public function update($id, $data, $photoInputName = null)
{
    // 1. পুরানো employee info
    $oldEmployee = $this->find($id);
    $oldPhoto = $oldEmployee['photo'];

    // 2. নতুন photo upload
    $newPhoto = null;
    if ($photoInputName && !empty($_FILES[$photoInputName]['name'])) {
        $newPhoto = uploadImage($photoInputName, 'employees');
    }

    // 3. Decide final photo
    $finalPhoto = $newPhoto ?? $oldPhoto;

    // 4. পুরানো photo delete (যদি নতুন আসে)
    if ($newPhoto && !empty($oldPhoto) && file_exists(dirname(__DIR__, 2) . "/public/uploads/employees/" . $oldPhoto)) {
        unlink(dirname(__DIR__, 2) . "/public/uploads/employees/" . $oldPhoto);
    }

    // 5. Update query
    $sql = "UPDATE employees SET
        full_name = ?, employee_id = ?, username = ?, email = ?, father_name = ?, phone = ?, emergency_contact = ?,
        qualification = ?, experience = ?, address = ?, pass_num = ?, department_id = ?, designation_id = ?, joining_date = ?,
        account_holder_name = ?, account_number = ?, bank_name = ?, branch_name = ?, social_media1 = ?, social_media2 = ?, social_media3 = ?, 
        photo = ?
    WHERE id = ?";

    $stmt = $this->db->prepare($sql);

    $stmt->bind_param(
        "sssssssssssiisssssssssi",
        $data['full_name'],
        $data['employee_id'],
        $data['username'],
        $data['email'],
        $data['father_name'],
        $data['phone'],
        $data['emergency_contact'],
        $data['qualification'],
        $data['experience'],
        $data['address'],
        $data['pass_num'],
        $data['department_id'],
        $data['designation_id'],
        $data['joining_date'],
        $data['account_holder_name'],
        $data['account_number'],
        $data['bank_name'],
        $data['branch_name'],
        $data['social_media1'],
        $data['social_media2'],
        $data['social_media3'],
        $finalPhoto,
        $id
    );

    return $stmt->execute();
}




       public function delete($id)
    {
        $stmt = $this->db->prepare("DELETE FROM employees WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }

}




?>

