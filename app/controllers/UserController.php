<?php
class UserController extends Controller
{
    protected $db;
    protected $userModel;
    protected $roleModel;
    public function __construct($db)
    {
        $this->db = $db;
        $this->userModel = new User($this->db);
        $this->roleModel = new Role($this->db);
    }
public function index()
{
    $searchTerm = $_GET['q'] ?? '';
    $roleFilter = $_GET['role'] ?? '';

    $currentPage = isset($_GET['page']) ? intval($_GET['page']) : 1;
    $perPage = 10;
    $offset = ($currentPage - 1) * $perPage;

    // Total user count with filters
    $totalUsers = $this->userModel->countAll($searchTerm, $roleFilter);
    $totalPages = ceil($totalUsers / $perPage);

    // Get paginated users with search & role filter
    $users = $this->userModel->getPaginated($perPage, $offset, $searchTerm, $roleFilter);

    // Roles for filter dropdown
    $roles = $this->roleModel->getAll();

    $this->view("users/user-lists", [
        "current_route"   => "user-lists",
        "page_title"      => "User List",
        "currentPage"     => $currentPage,
        "totalPages"      => $totalPages,
        "users"           => $users,
        "roles"           => $roles,
        "searchTerm"      => $searchTerm,
        "selectedRole"    => $roleFilter
    ]);
}
    // Create User Page
    // Create user form
    public function create()
    {
        $roles = $this->roleModel->getAll();

        $this->view("users/create-user", [
            "current_route"   => "create-user",
            "active"          => "create-user",
            "page_title"      => "Add User",
            "show_breadcrumb" => true,
            "roles"           => $roles,
        ]);
    }

    // Handle form submission
    public function store()
    {
        $data = [
            'full_name'    => $_POST['full_name'] ?? '',
            'phone'       => $_POST['phone'] ?? '',
            'email'       => $_POST['email'] ?? '',
            'designation' => $_POST['designation'] ?? '',
            'address'     => $_POST['address'] ?? '',
            'nid'         => $_POST['nid'] ?? '',
            'role_id'     => $_POST['role_id'] ?? 0,
            'password'    => $_POST['password'] ?? '',
            'media_link1'    => $_POST['media_link1'] ?? '',
            'media_link2'    => $_POST['media_link2'] ?? '',
        ];

        // Call model create function
        if ($this->userModel->create($data)) {
            //    echo "<pre>";
            // print_r($_POST);
            // echo "</pre>";
            header("Location: {$GLOBALS['base_url']}/user-lists");
         

            exit;
        } else {
            echo "<h3 style='color:red'>Failed to create user</h3>";
        }
    }



    public function edit()
    {
        $this->view("users/edit-user", [
            "current_route" => "edit-user",
            "active" => "edit-user",
            "psge_title" => "Edit User",
            "show_breadcrumb" => true,
        ]);
    }
}
