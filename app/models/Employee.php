<?php

class Employee extends Model
{
    protected $db;

    public function __construct($db = null)
    {
        return parent::__construct($db);
    }
    public function getPaginated($limit, $offset, $search = '', $department_id = '')
    {
        $sql = "SELECT * FROM employees WHERE 1";
        $params = [];
        $types = "";

        if ($search) {
            $sql .= " AND (full_name LIKE ? OR phone LIKE ? OR email LIKE ? OR username LIKE ? OR employee_id LIKE ?)";
            $params[] = "%$search%";
            $params[] = "%$search%";
            $params[] = "%$search%";
            $params[] = "%$search%";
            $params[] = "%$search%";
            $types .= "sssss";
        }

        if ($department_id) {
            $sql .= " AND department_id = ?";
            $params[] = $department_id;
            $types .= "i";
        }

        $sql .= " ORDER BY id DESC LIMIT ? OFFSET ?";
        $params[] = $limit;
        $params[] = $offset;
        $types .= "ii";

        $stmt = $this->db->prepare($sql);
        $stmt->bind_param($types, ...$params);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    public function countAll($search = '', $department_id = '')
    {
        $sql = "SELECT COUNT(*) as total FROM employees WHERE 1";
        $params = [];
        $types = "";

        if ($search) {
            $sql .= " AND (full_name LIKE ? OR phone LIKE ? OR email LIKE ? OR username LIKE ? OR employee_id LIKE ?)";
            $params[] = "%$search%";
            $params[] = "%$search%";
            $params[] = "%$search%";
            $params[] = "%$search%";
            $params[] = "%$search%";
            $types .= "sssss";
        }

        if ($department_id) {
            $sql .= " AND department_id = ?";
            $params[] = $department_id;
            $types .= "i";
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
        $photo = uploadImage('employeePhoto', 'employees');

        $stmt = $this->db->prepare(
            "INSERT INTO employees
        (full_name, employee_id, username, email, father_name, phone, emergency_contact, qualification, experience, address, pass_num,
         department_id, designation_id, joining_date, account_holder_name, account_number, bank_name, branch_name,
         social_media1, social_media2, social_media3)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"
        );

        $stmt->bind_param(
            "sssssssssssiissssssss",
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
            $data['social_media3']
        );
        if ($stmt->execute()) {
            return true;
        } else {
            echo "ERROR: " . $stmt->error;
            return false;
        }
    }


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
    public function update($id, $data)
    {
        $sql = "UPDATE employees SET
            full_name = ?, employee_id = ?, username = ?, email = ?, father_name = ?, phone = ?, emergency_contact = ?,
            qualification = ?, experience = ?, address = ?, pass_num = ?, department_id = ?, designation_id = ?, joining_date = ?,
            account_holder_name = ?, account_number = ?, bank_name = ?, branch_name = ?, social_media1 = ?, social_media2 = ?, social_media3 = ?";

        $types = "sssssssssssiissssssss";

        // Update password if provided
        if (!empty($data['password'])) {
            $sql .= ", password = ?";
            $types .= "s";
            $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        }

        $sql .= " WHERE id = ?";

        $types .= "i";

        $stmt = $this->db->prepare($sql);

        $params = [
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
            $data['social_media3']
        ];

        if (!empty($data['password'])) {
            $params[] = $data['password'];
        }

        $params[] = $id;

        $stmt->bind_param($types, ...$params);
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

