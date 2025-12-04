<?php

class Role extends Model
{
    protected $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    // Get all roles
    public function getAll()
    {
        $stmt = $this->db->prepare("SELECT * FROM roles ORDER BY id DESC");
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    // Create a new role
    public function create($data)
    {
        $stmt = $this->db->prepare("INSERT INTO roles (name) VALUES (?)");
        $stmt->bind_param("s", $data['name']);
        if ($stmt->execute()) {
            $role_id = $this->db->insert_id;

            // Insert role permissions
            if (isset($data['permissions']) && is_array($data['permissions'])) {
                foreach ($data['permissions'] as $permission_id) {
                    $stmt_perm = $this->db->prepare("INSERT INTO role_permissions (role_id, permission_id) VALUES (?, ?)");
                    $stmt_perm->bind_param("ii", $role_id, $permission_id);
                    $stmt_perm->execute();
                }
            }
            return true;
        }
        return false;
    }

    // Get role with its permissions
    public function getRoleWithPermissions($id)
    {
        $stmt = $this->db->prepare("
            SELECT r.id as role_id, r.name as role_name, p.id as permission_id, p.name as permission_name
            FROM roles r
            LEFT JOIN role_permissions rp ON r.id = rp.role_id
            LEFT JOIN permissions p ON rp.permission_id = p.id
            WHERE r.id = ?
        ");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
        
    }
}
