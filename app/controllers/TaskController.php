<?php
class TaskController extends Controller
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
   

    $this->view("tasks/task-lists", [
        "current_route"   => "tasks",
        "page_title"      => "task List",
        
    ]);
}
    // Create User Page
    // Create user form
    public function create()
    {
        $roles = $this->roleModel->getAll();

        $this->view("tasks/create-task", [
            "current_route"   => "create-task",
            "active"          => "create-task",
            "page_title"      => "Add task",
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



    public function show()
    {
        $this->view("tasks/view-task", [
            "current_route" => "show-task",
            "active" => "show-task",
            "psge_title" => "Show Task",
            "show_breadcrumb" => true,
        ]);
    }
    public function edit()
    {
        $this->view("tasks/edit-user", [
            "current_route" => "edit-user",
            "active" => "edit-user",
            "psge_title" => "Edit User",
            "show_breadcrumb" => true,
        ]);
    }
}
