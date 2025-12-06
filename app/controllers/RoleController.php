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
        $roles = $this->roleModel->getRolesWithPermissions();
        $permissions = $this->permissionModel->getAll();

        $this->view("permissions/permission-list", [
            "roles" => $roles,
            "permissions" => $permissions,
            "page_title" => "Roles Management",
        ]);
    }
    // Show create role form

    // Handle create role form submission
    public function store($data = [])

    {
        $data = $_POST;
        if ($this->roleModel->create($data)) {
            header("Location: {$GLOBALS['base_url']}/permissions");
        } else {
            echo "Error creating role";
        }
    }
    public function edit()
    {
        $id = $_GET['id'] ?? 0;
        if (!$id) {
            header("Location: {$GLOBALS['base_url']}/permissions");
            exit;
        }

        $role = $this->roleModel->getRoleById($id); // role + permissions
        $permissions = $this->permissionModel->getAll(); // all permissions
        $roles = $this->roleModel->getRolesWithPermissions(); // for table listing

        $this->view("permissions/permission-list", [
            "roles" => $roles,
            "role_edit" => $role,
            "permissions" => $permissions,
            "page_title" => "Edit Role",
        ]);
    }

    // Handle update form submission
    public function update()
    {
        $data = $_POST;
        if ($this->roleModel->update($data)) {
            header("Location: {$GLOBALS['base_url']}/permissions");
            exit;
        } else {
            echo "Failed to update role";
        }
    }
}
