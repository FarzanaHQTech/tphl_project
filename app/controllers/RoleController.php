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
        $permissions = $this->permissionModel->getAll();
        $this->view("permissions/permission-list", [
            "current_route" => "permissions",
            "active" => "roles",
            "page_title" => "Roles Management",
            "show_breadcrumb" => true,
            "permissions"=> $permissions,
            "roles" => $roles
        ]);
    }

    // Show create role form
  
    // Handle create role form submission
    public function store($data=[])
  
    {
          $data = $_POST;
        if ($this->roleModel->create($data)) {
            header("Location: {$GLOBALS['base_url']}/permissions");
        } else {
            echo "Error creating role";
        }
    }
}
