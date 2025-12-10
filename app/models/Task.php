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
        // Base SQL
        $sql = "SELECT 
                t.*, 
                e.full_name AS employee_name, 
                e.photo AS employee_photo, 
                e.employee_id AS employee_code,
                u.full_name AS assigned_by_name,
                u.photo AS user_photo,
                u.email AS assigned_by_email
            FROM tasks AS t
            JOIN employees AS e ON t.employee_id = e.id
            JOIN users AS u ON t.assigned_by = u.id
            WHERE 1";

        $params = [];
        $types = "";

        // Search by title
        if (!empty($search)) {
            $sql .= " AND t.title LIKE ?";
            $params[] = "%$search%";
            $types .= "s";
        }

        // Add LIMIT & OFFSET
        $sql .= " ORDER BY t.id DESC LIMIT ? OFFSET ?";
        $params[] = $limit;
        $params[] = $offset;
        $types .= "ii";

        // Prepare statement
        $stmt = $this->db->prepare($sql);
        if (!$stmt) {
            die("Prepare failed: " . $this->db->error);
        }

        // Bind parameters dynamically
        $stmt->bind_param($types, ...$params);

        // Execute & fetch
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }



    public function getAll()
    {
        $sql = $this->db->prepare("SELECT e.full_name,e.photo,e.employee_id,  desg.name AS designation_name, 
                   dept.name AS department_name  FROM employees AS e
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
        (title, employee_id, description, start_date, deadline, employee_accept, status, progress, priority,assigned_by)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?,?)"
        );
        $stmt->bind_param(
            "sisssiisis", 
            $data['title'],
            $data['employee_id'],
            $data['description'],
            $data['start_date'],
            $data['deadline'],
            $data['employee_accept'],
            $data['status'],
            $data['progress'],
            $data['priority'],
            $data['assigned_by']
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
        $stmt = $this->db->prepare("
    SELECT 
        t.*, 
        e.full_name AS employee_name, 
        e.email AS employee_email, 
        e.designation_id,
        e.photo as emp_photo,
        u.full_name AS assigned_by_name,
        u.email AS assigned_by_email,
        u.photo as assigned_photo,
        u.designation AS assigned_by_designation,
        desg.name AS employee_designation
    FROM tasks AS t
    JOIN employees AS e ON t.employee_id = e.id
    JOIN users AS u ON t.assigned_by = u.id
    JOIN designations AS desg ON e.designation_id = desg.id
    WHERE t.id = ?
");

        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    /**
     * Update employee
     */
    public function update($id, $data)
    {
        // 1. old employee info
        $oldEmployee = $this->find($id);

        // 5. Update query
        $sql = "UPDATE tasks SET
        title = ?, description = ?, start_date = ?, deadline = ?, priority = ?, progress = ?, status = ?,
        employee_id = ?,
    WHERE id = ?";

        $stmt = $this->db->prepare($sql);

        $stmt->bind_param(
            "sssssisi",
            $data['title'],
            $data['description'],
            $data['start_date'],
            $data['deadline'],
            $data['priority'],
            $data['progress'],
            $data['status'],
            $data['employee_id'],
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
