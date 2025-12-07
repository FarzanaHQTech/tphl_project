<?php
class DesignationController extends Controller
{
    protected $db;
    protected $designationModel;
    protected $deparmentModel;
    public function __construct($db)
    {
        $this->db = $db;
        $this->designationModel = new Designation($this->db);
        $this->deparmentModel = new Department($this->db);
    }
public function index()
{
    $currentPage = isset($_GET['page']) ? intval($_GET['page']) : 1;
    $perPage = 10;
    $offset = ($currentPage - 1) * $perPage;

    // Get all designations with department names (no pagination)
    $designations = $this->designationModel->getPaginate($perPage, $offset);

    // Total department count for pagination
    $totalDepartments = $this->deparmentModel->countAll();
    $totalPages = ceil($totalDepartments / $perPage);

    // Get paginated departments
    $departments = $this->deparmentModel->getAll();

    $this->view("hrm/designations/designations", [
        "current_route"   => "designations",
        "page_title"      => "Designations List",
        "designations"    => $designations,
        "departments"     => $departments,
        "totalPages"      => $totalPages,
        "currentPage"     => $currentPage
    ]);
}


    // Handle form submission
public function store()
{
    $data = [
        'name'   => $_POST['name'] ?? '',
        'department_id'   => $_POST['department_id'] ?? '',
       
    ];

    if ($this->designationModel->create($data)) {
        $_SESSION['success'] = "Department updated successfully!";
        header("Location: {$GLOBALS['base_url']}/designations");
        exit;
    } else {
        $_SESSION['error'] = "Failed to create designationt!";
        echo "<h3 style='color:red'>Failed to create designation</h3>";
    }
}


public function update()
{

        $id = $_POST['id'];
        $name = $_POST['name'];
        $department_id = $_POST['department_id'];

   $updated = $this->designationModel->update($id, $name, $department_id);

        if ($updated) {
            $_SESSION['success'] = "Designation updated successfully!";
             header("Location: {$GLOBALS['base_url']}/designations");
        } else {
            $_SESSION['error'] = "Update failed!";
        }
        exit;
    
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

    public function delete()
{
    $id = $_POST['id'] ?? 0;

    if ($id && $this->designationModel->delete($id)) {
        header("Location: {$GLOBALS['base_url']}/designations");
        exit;
    } else {
        echo "<h3 style='color:red'>Failed to delete department</h3>";
    }
}




   
}
