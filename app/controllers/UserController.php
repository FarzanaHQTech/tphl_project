<?php
class UserController extends Controller
{
    protected $db;
    protected $userModel;
    protected $designationModel;
    protected $roleModel;
    public function __construct($db)
    {
        $this->db = $db;
        $this->designationModel = new Designation($this->db);
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
        $designations = $this->designationModel->getAll();
        $roles = $this->roleModel->getAll();

        $this->view("users/create-user", [
            "current_route"   => "create-user",
            "active"          => "create-user",
            "page_title"      => "Add User",
            "show_breadcrumb" => true,
            "roles"           => $roles,
            "designations"           => $designations,
        ]);
    }

    // Handle form submission
    public function store()
    {
        $data = [
            'full_name'    => $_POST['full_name'] ?? '',
            'user_name'    => $_POST['user_name'] ?? '',
            'phone'       => $_POST['phone'] ?? '',
            'email'       => $_POST['email'] ?? '',
            'designation_id' => $_POST['designation_id'] ?? '',
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


    public function edit($id)
    {
        $user = $this->userModel->find($id);
        $designations = $this->designationModel->getAll();
        $roles = $this->roleModel->getAll();
        if (!$user) {
            setError("User not found");
            header("Location: {$GLOBALS['base_url']}/user-lists");
            exit;
        }

        // Pass user to view
        $this->view("users/edit-user", [
            "current_route" => "edit-user",
            "active" => "edit-user",
            "page_title" => "Edit User",
            "show_breadcrumb" => true,
            "user" => $user,
            "designations" => $designations,
            "roles" => $roles,
        ]);
    }

    public function show($id){
        $user = $this->userModel->find($id);
        $designations = $this->designationModel->getAll();
        $roles = $this->roleModel->getAll();
        if (!$user) {
            setError("User Not Found");
        }
        $this->view("users/show-user",[
            "current_route" => 'user-profile',
            "active" => 'user-profile',
            "page_title" => 'User Profile',
            "user" => $user,
        ]);
    }


    public function update($id)
    {
        $data = [
            'full_name'      => $_POST['full_name'] ?? '',
            'user_name'      => $_POST['user_name'] ?? '',
            'phone'          => $_POST['phone'] ?? '',
            'email'          => $_POST['email'] ?? '',
            'designation_id' => $_POST['designation_id'] ?? 0,
            'address'        => $_POST['address'] ?? '',
            'nid'        => $_POST['nid'] ?? '',
            'role_id'        => $_POST['role_id'] ?? 0,
            'password'       => $_POST['password'] ?? '',
            'media_link1'    => $_POST['media_link1'] ?? '',
            'media_link2'    => $_POST['media_link2'] ?? '',
        ];

        

        $photoInputName = 'photo';

        


        try {
            if ($this->userModel->update($data, $id, $photoInputName)) {
                setSuccess("User updated successfully");
            } else {
                setError("User update failed");
            }
        } catch (\Throwable $th) {

            // setError("User update failed: ".$th->getMessage());
            setError($th->getMessage());
        }

        header("Location: {$GLOBALS['base_url']}/user-lists");
        exit;
    }
}
