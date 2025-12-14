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
        $sql = "SELECT
                u.*,
                e.id AS employee_id,
                e.photo AS employee_photo,
                e.make_user,
                d.name AS designation_name
            FROM users u
            LEFT JOIN employees e ON e.user_id = u.id
            JOIN designations AS d ON d.id = u.designation_id
            WHERE 1=1";

        $params = [];
        $types = "";

        if ($search) {
            $sql .= " AND (u.full_name LIKE ? OR u.phone LIKE ? OR u.email LIKE ?)";
            $params[] = "%$search%";
            $params[] = "%$search%";
            $params[] = "%$search%";
            $types .= "sss";
        }

        if ($role) {
            $sql .= " AND u.role_id = ?";
            $params[] = $role;
            $types .= "i";
        }

        $sql .= " ORDER BY u.id DESC LIMIT ? OFFSET ?";
        $params[] = $limit;
        $params[] = $offset;
        $types .= "ii";

        $stmt = $this->db->prepare($sql);
        $stmt->bind_param($types, ...$params);
        $stmt->execute();

        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }




    public function getAll()
    {

        // SELECT 
        //     u.*,
        //     e.id AS employee_id,
        //     e.photo AS employee_photo,
        //     e.make_user
        // FROM users u
        // LEFT JOIN employees e ON e.user_id = u.id


        $sql = $this->db->prepare("
        SELECT
            u.id, 
           u.full_name  From users AS u
    ");
        if (!$sql->execute()) {
            return []; // Error handle koro
        }

        $result = $sql->get_result();
        return $result ? $result->fetch_all(MYSQLI_ASSOC) : [];
    }



    // models/User.php
    public function create($data)
    {
        // Require the helper
        // require_once __DIR__ . '/../helpers/password_helper.php';

        // Module name দিয়ে photo upload
        $photo = uploadImage('userphoto', 'users', 'fixed', 300, 300);

        // Ensure password is hashed using helper
        $password = ensureHashedPassword($data['password']);

        $stmt = $this->db->prepare(
            "INSERT INTO users
        (full_name, phone, email, designation_id, address, nid, role_id, user_name, password, photo, media_link1, media_link2)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"
        );

        $stmt->bind_param(
            "sssississsss",
            $data['full_name'],
            $data['phone'],
            $data['email'],
            $data['designation_id'],
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
            return $this->db->insert_id; // Return inserted ID
        } else {
            error_log("User creation failed: " . $stmt->error);
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

    public function find($id): mixed
    {
        $stmt = $this->db->prepare("
        SELECT 
            u.*,
            e.id AS employee_id,
            e.photo AS employee_photo,
            d.name AS designation_name
        FROM users u
        LEFT JOIN employees e ON e.user_id = u.id
        LEFT JOIN designations d ON d.id = u.designation_id
        WHERE u.id = ?
        LIMIT 1
    ");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }



    public function update($data, $id, $photoInputName = null)
    {
        $oldUser  = $this->find($id);
        $oldPhoto = $oldUser['photo'] ?? '';

        /* ---------- PHOTO ---------- */
        $newPhoto = null;
        if ($photoInputName && !empty($_FILES[$photoInputName]['name'])) {
            $newPhoto = uploadImage($photoInputName, 'users', 'fixed', 300, 300);
        }

        $finalPhoto = $newPhoto ?? $oldPhoto;

        if ($newPhoto && !empty($oldPhoto)) {
            $oldPath = dirname(__DIR__, 2) . "/public/uploads/users/" . $oldPhoto;
            if (file_exists($oldPath)) {
                unlink($oldPath);
            }
        }

        /* ---------- PASSWORD ---------- */
        $finalPassword = !empty($data['password'])
            ? password_hash($data['password'], PASSWORD_DEFAULT)
            : $oldUser['password'];

        /* ---------- UPDATE QUERY ---------- */
        $sql = "UPDATE users SET 
        full_name = ?, 
        user_name = ?, 
        phone = ?, 
        email = ?, 
        designation_id = ?, 
        address = ?, 
        nid = ?, 
        role_id = ?, 
        media_link1 = ?, 
        media_link2 = ?, 
        photo = ?, 
        password = ?
    WHERE id = ?";

        $stmt = $this->db->prepare($sql);

        $stmt->bind_param(
            "ssssississssi",
            $data['full_name'],
            $data['user_name'],
            $data['phone'],
            $data['email'],
            $data['designation_id'],
            $data['address'],
            $data['nid'],
            $data['role_id'],
            $data['media_link1'],
            $data['media_link2'],
            $finalPhoto,
            $finalPassword,
            $id
        );

        return $stmt->execute();
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


    public function updateLogoutTime($userId)
    {
        $stmt = $this->db->prepare("UPDATE users SET last_logout = NOW() WHERE id = ?");
        return $stmt->execute([$userId]);
    }

    public function getEmployeeByUserId($userId)
    {
        $stmt = $this->db->prepare("SELECT photo FROM employees WHERE user_id = ? LIMIT 1");
        $stmt->bind_param("i", $userId);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }
    // UserModel.php-এ এই method যোগ করুন
    public function getByEmailCaseInsensitive($email)
    {
        $email = trim($email);

        // First try exact match
        $stmt = $this->db->prepare(
            "SELECT u.*, LOWER(r.name) AS role_name 
         FROM users u 
         LEFT JOIN roles r ON u.role_id = r.id
         WHERE u.email = ?"
        );

        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        }

        // If not found, try case-insensitive
        $stmt2 = $this->db->prepare(
            "SELECT u.*, LOWER(r.name) AS role_name 
         FROM users u 
         LEFT JOIN roles r ON u.role_id = r.id
         WHERE LOWER(u.email) = LOWER(?)"
        );

        $stmt2->bind_param("s", $email);
        $stmt2->execute();
        $result2 = $stmt2->get_result();

        if ($result2->num_rows > 0) {
            return $result2->fetch_assoc();
        }

        return null;
    }

    // Existing getByEmail method (keep it as is)
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

        if ($result->num_rows === 0) {
            return null;
        }

        return $result->fetch_assoc();
    }
}
