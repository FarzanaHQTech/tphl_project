<?php

class Department extends Model
{
    protected $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    // Get all Departments with paginate
public function getPaginated($limit, $offset, $search = '')
{
    $sql = "SELECT * FROM departments WHERE 1";
    $params = [];
    $types = "";

    if ($search) {
        $sql .= " AND (name LIKE ?)";
        $params[] = "%$search%";
        $types .= "s";
    }

    $sql .= " ORDER BY id DESC LIMIT ? OFFSET ?";
    $params[] = $limit;
    $params[] = $offset;
    $types .= "ii";

    $stmt = $this->db->prepare($sql);
    $stmt->bind_param($types, ...$params);
    $stmt->execute();
    return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
}
public function getAll() {
    $stmt = $this->db->prepare("SELECT * FROM departments");
    
    if (!$stmt) {
        die("Prepare failed: " . $this->db->error);
    }

    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_all(MYSQLI_ASSOC);
    $stmt->close();

    return $data;
}


    // Create a new role

public function create($data)
{
    // Module name দিয়ে photo upload
   

    $stmt = $this->db->prepare(
        "INSERT INTO departments
        (name, status)
        VALUES (?, ?)"
    );


$stmt->bind_param(
    "si",
    $data['name'],
    $data['status'],
    
);
    if ($stmt->execute()) {
        return true;
    } else {
        echo "ERROR: " . $stmt->error;
        return false;
    }
}


public function countAll($search = '')
{
    $sql = "SELECT COUNT(*) as total FROM departments WHERE 1";
    $params = [];
    $types = "";

    if ($search) {
        $sql .= " AND (name LIKE ?)";
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
 // Update role name + permissions
public function update($data)
{
    // Prepare update statement
    $stmt = $this->db->prepare("UPDATE departments SET name = ?, status = ? WHERE id = ?");
    if (!$stmt) {
        echo "Prepare failed: " . $this->db->error;
        return false;
    }

    $stmt->bind_param(
        "sii",
        $data['name'],    
        $data['status'],  
        $data['id']       
    );

    if (!$stmt->execute()) {
        echo "Execute failed: " . $stmt->error;
        return false;
    }

    $stmt->close();
    return true;
}

public function delete($id)
{
    // 1️⃣ Delete all designations linked to this department
    $stmt1 = $this->db->prepare("DELETE FROM designations WHERE department_id = ?");
    $stmt1->bind_param("i", $id);
    $stmt1->execute();
    $stmt1->close();

    // 2️⃣ Delete the department
    $stmt2 = $this->db->prepare("DELETE FROM departments WHERE id = ?");
    $stmt2->bind_param("i", $id);
    $stmt2->execute();
    $stmt2->close();

    return true;
}





}