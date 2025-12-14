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
        $sql = "SELECT e.*, 
                   desg.name AS designation_name, 
                   dept.name AS department_name  
            FROM employees AS e
            JOIN designations AS desg ON e.designation_id = desg.id
            JOIN departments AS dept ON e.department_id = dept.id
            WHERE 1";

        $params = [];
        $types = "";

        if ($search) {
            $sql .= " AND (e.full_name LIKE ? 
                    OR e.phone LIKE ? 
                    OR e.email LIKE ? 
                    OR e.username LIKE ?
                    OR e.employee_id LIKE ?)";

            $params[] = "%$search%";
            $params[] = "%$search%";
            $params[] = "%$search%";
            $params[] = "%$search%";
            $params[] = "%$search%";
            $types .= "sssss";
        }

        if ($department_id) {
            $sql .= " AND e.department_id = ?";
            $params[] = $department_id;
            $types .= "i";
        }

        $sql .= " ORDER BY e.id DESC LIMIT ? OFFSET ?";
        $params[] = $limit;
        $params[] = $offset;
        $types .= "ii";

        $stmt = $this->db->prepare($sql);
        $stmt->bind_param($types, ...$params);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getAll()
    {
        $sql = $this->db->prepare("
        SELECT 
            e.id, 
            e.full_name, 
            e.photo, 
            e.employee_id,  
            desg.name AS designation_name, 
            dept.name AS department_name
        FROM employees AS e
        LEFT JOIN designations AS desg ON e.designation_id = desg.id
        LEFT JOIN departments AS dept ON e.department_id = dept.id
    ");

        if (!$sql->execute()) {
            return [];
        }

        $result = $sql->get_result();
        return $result ? $result->fetch_all(MYSQLI_ASSOC) : [];
    }
    public function countAll($search = '', $department_id = 'employeePhoto')
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
    // models/Employee.php
    public function create($data, $photoInputName = '')
    {
        // Upload photo if exists
        $photo = null;

        if (!empty($_FILES[$photoInputName]['name'])) {

            $photo = uploadImage($photoInputName, 'employees', 'fixed', 300, 300);
        }
        if (!$photo) {
            $photo = '';
        }


        // Prepare all variables
        $full_name       = $data['full_name'];
        $employee_id     = $data['employee_id'];
        $username        = $data['username'];
        $email           = $data['email'];
        $father_name     = $data['father_name'];
        $phone           = $data['phone'];
        $emergency_contact = $data['emergency_contact'];
        $qualification   = $data['qualification'];
        $experience      = $data['experience'];
        $address         = $data['address'];
        $pass_num        = $data['pass_num'] ?? '';
        $nid        = $data['nid'] ?? '';
        $department_id   = $data['department_id'];
        $designation_id  = $data['designation_id'];
        $dob             = $data['dob'];
        $joining_date    = $data['joining_date'] ?? null;
        $account_holder_name = $data['account_holder_name'];
        $account_number  = $data['account_number'];
        $bank_name       = $data['bank_name'];
        $branch_name     = $data['branch_name'];
        $social_media1   = $data['social_media1'] ?? '';
        $social_media2   = $data['social_media2'] ?? '';
        $social_media3   = $data['social_media3'] ?? '';
        $make_user       = $data['make_user'] ?? 0;
        $password        = $data['password'] ?? '';

        $stmt = $this->db->prepare(
            "INSERT INTO employees 
    (full_name, employee_id, username, email, father_name, phone, emergency_contact, 
     qualification, experience, address, pass_num, nid, department_id, designation_id, dob, 
     joining_date, account_holder_name, account_number, bank_name, branch_name, 
     social_media1, social_media2, social_media3, photo, make_user, password) 
    VALUES (?, ?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"
        );

        $stmt->bind_param(
            "ssssssssssssiissssssssssis",
            $full_name,
            $employee_id,
            $username,
            $email,
            $father_name,
            $phone,
            $emergency_contact,
            $qualification,
            $experience,
            $address,
            $pass_num,
            $nid,
            $department_id,
            $designation_id,
            $dob,
            $joining_date,
            $account_holder_name,
            $account_number,
            $bank_name,
            $branch_name,
            $social_media1,
            $social_media2,
            $social_media3,
            $photo,
            $make_user,
            $password
        );

        if ($stmt->execute()) {
            return true;
        } else {
            error_log("Employee creation failed: " . $stmt->error);
            return false;
        }
    }

    //employee id find for edit
    public function find($id): mixed
    {
        $stmt = $this->db->prepare("SELECT 
            e.*, 
            desg.name AS designation_name, 
            dept.name AS department_name
        FROM employees AS e
        LEFT JOIN designations AS desg ON e.designation_id = desg.id
        LEFT JOIN departments AS dept ON e.department_id = dept.id
        WHERE e.id = ?
");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }
    /**
     * Update employee
     */
    public function update($id, $data, $photoInputName = null)
    {
        // 1. old employee info
        $oldEmployee = $this->find($id);
        $oldPhoto = $oldEmployee['photo'];

        // 2. নতুন photo upload
        $newPhoto = null;
        if ($photoInputName && !empty($_FILES[$photoInputName]['name'])) {
            $newPhoto = uploadImage($photoInputName, 'employees', 'fixed', 300, 300);
        }

        // 3. Decide final photo          
        $finalPhoto = $newPhoto ?? $oldPhoto;

        // 4. old photo delete (if new add )
        if ($newPhoto && !empty($oldPhoto) && file_exists(dirname(__DIR__, 2) . "/public/uploads/employees/" . $oldPhoto)) {
            unlink(dirname(__DIR__, 2) . "/public/uploads/employees/" . $oldPhoto);
        }

        // 5. Update query
        $sql = "UPDATE employees SET
        full_name = ?, employee_id = ?, username = ?, email = ?, father_name = ?, phone = ?, emergency_contact = ?,
        qualification = ?, experience = ?, address = ?, pass_num = ?, department_id = ?, designation_id = ?,dob=?, joining_date = ?,
        account_holder_name = ?, account_number = ?, bank_name = ?, branch_name = ?, social_media1 = ?, social_media2 = ?, social_media3 = ?, 
        photo = ?
    WHERE id = ?";

        $stmt = $this->db->prepare($sql);

        $stmt->bind_param(
            "sssssssssssiissssssssssi",
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
            $data['dob'],
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

    public function taskNotification()
    {
        $loggedUserId = $_SESSION['user']['id'];

        $stmt = $this->db->prepare("SELECT id FROM employees WHERE user_id = ?");
        $stmt->bind_param("i", $loggedUserId);
        $stmt->execute();
        $emp = $stmt->get_result()->fetch_assoc();

        $employeeId = $emp['id'];

        // Notifications fetch
        $stmt = $this->db->prepare("
            SELECT n.*, u.full_name AS assigned_by_name
            FROM notifications n
            JOIN users u ON n.assigned_by = u.id
            WHERE n.employee_id = ?
            AND n.is_read = 0
            ORDER BY n.created_at DESC
");
        $stmt->bind_param("i", $employeeId);

        // $stmt->bind_param("i", $userId);
        $stmt->execute();
        $notifications = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

        return $notifications; // 
    }
}
