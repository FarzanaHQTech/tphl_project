<?php

class User extends Model
{
    protected $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    // Get all users with paginate
  public function getPaginated($limit, $offset, $search = '', $role = '')
{
    $sql = "SELECT * FROM users WHERE 1";
    $params = [];
    $types = "";

    if ($search) {
        $sql .= " AND (full_name LIKE ? OR phone LIKE ? OR email LIKE ?)";
        $params[] = "%$search%";
        $params[] = "%$search%";
        $params[] = "%$search%";
        $types .= "sss";
    }

    if ($role) {
        $sql .= " AND role_id = ?";
        $params[] = $role;
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

    // Create a new role

public function create($data)
{
    // Module name দিয়ে photo upload
    $photo = uploadImage('userphoto', 'users');

    // Password hash
    $password = password_hash($data['password'], PASSWORD_DEFAULT);

    $stmt = $this->db->prepare(
        "INSERT INTO users
        (full_name, phone, email, designation, address, nid, role_id, password, photo,media_link1,media_link2)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?,?,?)"
    );

   $stmt = $this->db->prepare(
    "INSERT INTO users
    (full_name, phone, email, designation, address, nid, role_id, password, photo, media_link1, media_link2)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"
);

$stmt->bind_param(
    "ssssssissss",
    $data['full_name'],
    $data['phone'],
    $data['email'],
    $data['designation'],
    $data['address'],
    $data['nid'],
    $data['role_id'],
    $password,         
    $photo,            
    $data['media_link1'],
    $data['media_link2']
);


    if ($stmt->execute()) {
        return true;
    } else {
        echo "ERROR: " . $stmt->error;
        return false;
    }
}


public function countAll($search = '', $role = '')
{
    $sql = "SELECT COUNT(*) as total FROM users WHERE 1";
    $params = [];
    $types = "";

    if ($search) {
        $sql .= " AND (full_name LIKE ? OR phone LIKE ? OR email LIKE ?)";
        $params[] = "%$search%";
        $params[] = "%$search%";
        $params[] = "%$search%";
        $types .= "sss";
    }

    if ($role) {
        $sql .= " AND role_id = ?";
        $params[] = $role;
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




}
