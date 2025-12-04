<?php
class RoleController extends Controller
{
    protected $roleModel;
    protected $permissionModel;

    public function __construct($db)
    {
        $this->roleModel = new Role($db);
        $this->permissionModel = new Permission($db);
    }

    // List all roles
    public function index()
    {
        $roles = $this->roleModel->getAll();
        $this->view("permissions/permission-list", [
            "current_route" => "permissions",
            "active" => "roles",
            "page_title" => "Roles Management",
            "show_breadcrumb" => true,
            "roles" => $roles
        ]);
    }

    // Show create role form
    // public function create()
    // {
    //     $permissions = $this->permissionModel->getAll();
    //     $this->view("permissions/permission-list", [
    //         "current_route" => "create-role",
    //         "active" => "create-role",
    //         "page_title" => "Create Role",
    //         "show_breadcrumb" => true,
    //         "permissions" => $permissions
    //     ]);
    // }

    // Handle create role form submission
    public function store($data)
    {
        if ($this->roleModel->create($data)) {
            header("Location: /permissions");
        } else {
            echo "Error creating role";
        }
    }
}
