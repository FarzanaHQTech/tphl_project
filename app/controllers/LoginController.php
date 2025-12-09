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
            $email = $_POST['email'];
            $password = $_POST['password'];
            $user = $this->userModel->getBYEmail($email);

            if ($user) {
                if (password_verify($password, $user['password'])) {
                    $_SESSION['user'] = [
                        "id" => $user['id'],
                        "name" => $user["full_name"],
                        "user_name" => $user["user_name"],
                        "email" => $user["email"],
                        "role_id" => $user["role_id"],
                        "role_name" => $user["role_name"],
                    ];

                    $permissions = $this->userModel->getPermissionsByRole($user['role_id']);
                    $_SESSION['user']['permissions'] = $permissions;


                    // Role-wise redirect (case-insensitive)
                    $role = strtolower($user['role_name']);

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
                    $message = "Incorrect Password!";
                }
            } else {
                $message = "User Not Found";
            }
        }
        $this->view("auth/login", [
            "current_route" => "admin-login",
            "page_title" => "Admin Login",
            "message" => $message,
        ], false); // false means don't use master layout

    }

public function logout()
{
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    if (isset($_SESSION['user']['id'])) {
        $userId = $_SESSION['user']['id'];
        $stmt = $this->db->prepare("UPDATE users SET last_logout = NOW() WHERE id = ?");
        $stmt->bind_param("i", $userId);
        $stmt->execute();
    }

    // Destroy session
    session_unset();
    session_destroy();

    // Redirect to login page
    header("Location: {$GLOBALS['base_url']}/admin-login");
    exit;
}



}
