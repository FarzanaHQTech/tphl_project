<?php

class User extends Model
{


    protected $table = "users";
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
        (full_name, phone, email, designation, address, nid, role_id, user_name ,password, photo,media_link1,media_link2)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?,?,?,?)"
        );

     

        $stmt->bind_param(
            "ssssssisssss",
            $data['full_name'],
            $data['phone'],
            $data['email'],
            $data['designation'],
            $data['address'],
            $data['nid'],
            $data['role_id'],
            $data['user_name'],
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



public function getByEmail($email)
{
    $stmt = $this->db->prepare(
        "SELECT u.*, LOWER(r.name) AS role_name 
         FROM users u 
         JOIN roles r ON u.role_id = r.id
         WHERE u.email = ?"
    );

    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc();
}


public function getPermissionsByRole($role_id)
{
    $stmt = $this->db->prepare(
        "SELECT p.name
         FROM permissions p
         JOIN role_permissions rp ON p.id = rp.permission_id
         WHERE rp.role_id = ?"
    );

    $stmt->bind_param("i", $role_id); 
    $stmt->execute();
    $result = $stmt->get_result();
    $permissions = [];
    while ($row = $result->fetch_assoc()) {
        $permissions[] = $row['name'];
    }
    return $permissions;
}


public function updateLogoutTime($userId) {
    $stmt = $this->db->prepare("UPDATE users SET last_logout = NOW() WHERE id = ?");
    return $stmt->execute([$userId]);
}





}
