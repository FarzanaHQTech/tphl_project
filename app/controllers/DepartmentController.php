<?php
class DepartmentController extends Controller
{
    protected $db;
    protected $deparmentModel;
    protected $roleModel;
    public function __construct($db)
    {
        $this->db = $db;
        $this->deparmentModel = new Department($this->db);
    }
public function index()
{
    $searchTerm = $_GET['q'] ?? '';
    $currentPage = isset($_GET['page']) ? intval($_GET['page']) : 1;
    $perPage = 10;
    $offset = ($currentPage - 1) * $perPage;

    // Total department count
    $totalDepartments = $this->deparmentModel->countAll($searchTerm);
    $totalPages = ceil($totalDepartments / $perPage);

    // Get departments
    $departments = $this->deparmentModel->getPaginated($perPage, $offset, $searchTerm);

    $this->view("hrm/departments/departments", [
        "current_route"   => "departments",
        "page_title"      => "Departments List",
        "departments"     => $departments,
        "totalPages"      => $totalPages,
        "currentPage"     => $currentPage,
        "searchTerm"      => $searchTerm,
    ]);
}


    // Handle form submission
public function store()
{
    $data = [
        'name'   => $_POST['name'] ?? '',
        'status' => isset($_POST['status']) ? 1 : 0, // checkbox
    ];

    if ($this->deparmentModel->create($data)) {
        header("Location: {$GLOBALS['base_url']}/departments");
        exit;
    } else {
        echo "<h3 style='color:red'>Failed to create department</h3>";
    }
}
public function update()
{
    $data = [
        'id'     => $_POST['id'] ?? 0,          
        'name'   => $_POST['name'] ?? '',        
        'status' => isset($_POST['status']) ? intval($_POST['status']) : 0, 
    ];

    print_r($data); // debug: check values

    if ($this->deparmentModel->update($data)) {
        header("Location: {$GLOBALS['base_url']}/departments");
        exit;
    } else {
        echo "Failed to update department";
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

    public function delete()
{
    $id = $_POST['id'] ?? 0;

    if ($id && $this->deparmentModel->delete($id)) {
        header("Location: {$GLOBALS['base_url']}/departments");
        exit;
    } else {
        echo "<h3 style='color:red'>Failed to delete department</h3>";
    }
}

   
}
