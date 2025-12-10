<?php
class LoginController extends Controller
{
    protected $db;

    protected $userModel;

    public function __construct($db)
    {
        $this->db = $db;
        $this->userModel = new User($this->db);
    }

 public function index()
{
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    $message = "";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = trim($_POST['email'] ?? '');
        $password = trim($_POST['password'] ?? '');

        // Validate
        if (empty($email) || empty($password)) {
            $message = "Both fields are required!";
        } else {
            // Direct database query (temporary for debugging)
            $stmt = $this->db->prepare(
                "SELECT u.*, r.name as role_name 
                 FROM users u 
                 LEFT JOIN roles r ON u.role_id = r.id 
                 WHERE u.email = ? OR LOWER(u.email) = LOWER(?)"
            );
            $stmt->bind_param("ss", $email, $email);
            $stmt->execute();
            $result = $stmt->get_result();
            $user = $result->fetch_assoc();

            if ($user) {
                // Verify password
                if (password_verify($password, $user['password'])) {
                    // Login success
                    $_SESSION['user'] = [
                        "id" => $user['id'],
                        "name" => $user["full_name"],
                        "user_name" => $user["user_name"],
                        "email" => $user["email"],
                        "role_id" => $user["role_id"],
                        "role_name" => strtolower($user['role_name'] ?? 'user'),
                    ];

                    // Get permissions
                    $permissions = $this->userModel->getPermissionsByRole($user['role_id']);
                    $_SESSION['user']['permissions'] = $permissions;

                    // Redirect
                    $role = $_SESSION['user']['role_name'];
                    if (in_array($role, ['admin', 'super admin'])) {
                        $redirect_url = "{$GLOBALS['base_url']}/home";
                    } elseif ($role === 'employee') {
                        $redirect_url = "{$GLOBALS['base_url']}/employee-dashboard";
                    } elseif ($role === 'manager') {
                        $redirect_url = "{$GLOBALS['base_url']}/manager-dashboard";
                    } else {
                        $redirect_url = "{$GLOBALS['base_url']}/home";
                    }

                    header("Location: $redirect_url");
                    exit;
                } else {
                    $message = "Wrong password!";
                }
            } else {
                $message = "User not found! Check your email.";
            }
        }
    }

    $this->view("auth/login", [
        "current_route" => "admin-login",
        "page_title" => "Admin Login",
        "message" => $message,
    ], false);
}

    //   private function updateLastLogin($userId)
    // {
    //     try {
    //         $stmt = $this->db->prepare("UPDATE users SET last_login = NOW() WHERE id = ?");
    //         $stmt->bind_param("i", $userId);
    //         $stmt->execute();
    //     } catch (Exception $e) {
    //         error_log("Failed to update last login: " . $e->getMessage());
    //     }
    // }

    /**
     * Logout function
     */
    public function logout()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        // Update last logout if user is logged in
        if (isset($_SESSION['user']['id'])) {
            $userId = $_SESSION['user']['id'];
            try {
                $stmt = $this->db->prepare("UPDATE users SET last_logout = NOW() WHERE id = ?");
                $stmt->bind_param("i", $userId);
                $stmt->execute();
            } catch (Exception $e) {
                error_log("Failed to update last logout: " . $e->getMessage());
            }
        }

        // Destroy session
        session_destroy();

        // Redirect to login page
        header("Location: {$GLOBALS['base_url']}/login");
        exit;
    }

    // public function logout()
    // {
    //     if (session_status() === PHP_SESSION_NONE) {
    //         session_start();
    //     }
    //     if (isset($_SESSION['user']['id'])) {
    //         $userId = $_SESSION['user']['id'];
    //         $stmt = $this->db->prepare("UPDATE users SET last_logout = NOW() WHERE id = ?");
    //         $stmt->bind_param("i", $userId);
    //         $stmt->execute();
    //     }

    //     // Destroy session
    //     session_unset();
    //     session_destroy();

    //     // Redirect to login page
    //     header("Location: {$GLOBALS['base_url']}/admin-login");
    //     exit;
    // }
}
