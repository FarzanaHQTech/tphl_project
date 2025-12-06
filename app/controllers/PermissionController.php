<?php
class PermissionController extends Controller
{
    protected $permissionModel;
    protected $roleModel;
    public function __construct($db = null)
    {
        $this->permissionModel = new Permission($db);
        $this->roleModel = new Role($db);
    }
  // List all permissions
    public function index()
    {
        $roles = $this->roleModel->getRolesWithPermissions();
        $permissions = $this->permissionModel->getAll();
        $this->view("permissions/permission-list", [
            "current_route" => "permissions",
            "active" => "permissions",
            "page_title" => "Permissions List",
            "show_breadcrumb" => true,
            "permissions" => $permissions,
            "roles" => $roles,
        ]);

          
    }

    // Show create form
    public function create()
    {
        $this->view("permissions/create-permission", [
            "current_route" => "create-permission",
            "active" => "create-permission",
            "page_title" => "Create Permission",
            "show_breadcrumb" => true
            
        ]);
    }

    // Handle create submission
public function store()
{
    $data = [
        'name' => $_POST['name'] ?? '',
        'status' => isset($_POST['status']) ? (int)$_POST['status'] : 0
    ];

    $result = $this->permissionModel->create($data);

    if ($result) {
        // Global base_url use
        header("Location: {$GLOBALS['base_url']}/permissions");
        exit;
    } else {
        echo "<h3 style='color: red;'>Failed to Create Permission</h3>";
        echo "<pre>";
        var_dump($this->permissionModel->getDb()->error);
        echo "</pre>";
    }

}






    
    // Show edit form
    public function edit($id)
    {
        $permission = $this->permissionModel->getById($id);
        $this->view("permissions/edit", [
            "current_route" => "edit-permission",
            "active" => "edit-permission",
            "page_title" => "Edit Permission",
            "show_breadcrumb" => true,
            "permission" => $permission
        ]);
    }

    // Handle update submission
    public function update($id, $data)
    {
        if ($this->permissionModel->update($id, $data)) {
            header("Location: /permissions");
        } else {
            echo "Error updating permission";
        }
    }

    // Delete permission
    public function delete($id)
    {
        if ($this->permissionModel->delete($id)) {
            header("Location: /permissions");
        } else {
            echo "Error deleting permission";
        }
    }

    
}
