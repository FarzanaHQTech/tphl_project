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



    // public function getRolesWithPermissions()
    // {
    //     $sql = "
    //         SELECT r.id AS role_id, r.name AS role_name,
    //                p.id AS permission_id, p.name AS permission_name
    //         FROM roles r
    //         LEFT JOIN role_permissions rp ON r.id = rp.role_id
    //         LEFT JOIN permissions p ON rp.permission_id = p.id
    //         ORDER BY r.id ASC
    //     ";

    //     $result = $this->db->query($sql);
    //     $data = $result->fetch_all(MYSQLI_ASSOC);

    //     $roles = [];

    //     foreach ($data as $row) {
    //         $role_id = $row['role_id'];

    //         if (!isset($roles[$role_id])) {
    //             $roles[$role_id] = [
    //                 "role_id" => $role_id,
    //                 "role_name" => $row['role_name'],
    //                 "permissions" => []
    //             ];
    //         }

    //         if ($row['permission_id']) {
    //             $roles[$role_id]["permissions"][] = $row['permission_name'];
    //         }
    //     }

    //     return $roles;
    // }


public function getRolesWithPermissions()
{
    $sql = "
        SELECT r.id AS role_id, r.name AS role_name, rp.permission_id, p.name AS permission_name
        FROM roles r
        LEFT JOIN role_permissions rp ON r.id = rp.role_id
        LEFT JOIN permissions p ON rp.permission_id = p.id
        ORDER BY r.id ASC
    ";

    $result = $this->db->query($sql)->fetch_all(MYSQLI_ASSOC);

    $roles = [];
    foreach ($result as $row) {
        $id = $row['role_id'];
        if (!isset($roles[$id])) {
            $roles[$id] = [
                'role_id' => $id,
                'role_name' => $row['role_name'],
                'permissions' => [] // store permission IDs
            ];
        }
        if ($row['permission_id']) {
            $roles[$id]['permissions'][] = $row['permission_id'];
        }
    }
    return $roles;
}


 // Update role name + permissions
    public function update($data)
    
    
    {
        // Update role name
        $stmt = $this->db->prepare("UPDATE roles SET name = ? WHERE id = ?");
        $stmt->bind_param("si", $data['name'], $data['id']);
        if (!$stmt->execute()) return false;

        // Remove old permissions
        $del = $this->db->prepare("DELETE FROM role_permissions WHERE role_id = ?");
        $del->bind_param("i", $data['id']);
        $del->execute();

        // Insert new permissions
        if (!empty($data['permissions']) && is_array($data['permissions'])) {
            foreach ($data['permissions'] as $perm_id) {
                $stmt_perm = $this->db->prepare("INSERT INTO role_permissions (role_id, permission_id) VALUES (?, ?)");
                $stmt_perm->bind_param("ii", $data['id'], $perm_id);
                $stmt_perm->execute();
            }
        }

        $stmt->close();
        return true;
    }

    // Get single role with its permissions
    public function getRoleById($id)
    {
        $sql = "
            SELECT r.id AS role_id, r.name AS role_name, rp.permission_id
            FROM roles r
            LEFT JOIN role_permissions rp ON r.id = rp.role_id
            WHERE r.id = ?
        ";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

        if (empty($result)) return null;

        $role = [
            "id" => $result[0]['role_id'],
            "name" => $result[0]['role_name'],
            "permissions" => []
        ];

        foreach ($result as $row) {
            if ($row['permission_id']) {
                $role['permissions'][] = $row['permission_id'];
            }
        }

        return $role;
    }




    // Get role with its permissions

}
