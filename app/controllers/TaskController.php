<?php
class TaskController extends Controller
{
    protected $db;
    protected $employeeModel;
    protected $taskModel;
    public function __construct($db)
    {
        $this->db = $db;
        $this->employeeModel = new Employee($this->db);
        $this->taskModel = new Task($this->db);
    }

    // Employee List Page
    public function index()
    {
        $searchTerm = $_GET['q'] ?? '';

        $currentPage = isset($_GET['page']) ? intval($_GET['page']) : 1;
        $perPage = 10;
        $offset = ($currentPage - 1) * $perPage;

        // Total employee count with filters
        $totalTasks = $this->taskModel->countAll($searchTerm, );
        $totalPages = ceil($totalTasks / $perPage);

        $tasks = $this->taskModel->getPaginated($perPage,$offset,$searchTerm);
        // Get paginated employees with search & department filter
        $employees = $this->employeeModel->getAll();
        // $employees = $this->employeeModel->getPaginated($perPage, $offset, $searchTerm);

        $this->view("tasks/task-lists", [
            "current_route"   => "task-lists",
            "page_title"      => "Task List",
            "currentPage"     => $currentPage,
            "totalPages"      => $totalPages,
            "employees"       => $employees,
            "searchTerm"      => $searchTerm,
            "tasks"                => $tasks 
                      
        ]);
    }

    // Create Employee Page
    public function create()
    {
       
        // Get paginated employees with search & department filter
   $employees = $this->employeeModel->getAll();


        $this->view("tasks/create-task", [
            "current_route"   => "create-task",
            "active"          => "create-task",
            "page_title"      => "Add task",
            "show_breadcrumb" => true,
            "employees"     => $employees,
        ]);
    
    }

    // Handle form submission
public function store()
{
    $data = [
        'title'            => trim($_POST['title'] ?? ''),
        'employee_id'      => (int) ($_POST['employee_id'] ?? 0),
        'description'      => trim($_POST['description'] ?? ''),
        'start_date'       => $_POST['start_date'] ?? null,
        'deadline'         => $_POST['deadline'] ?? null,
        'employee_accept'  => (int) ($_POST['employee_accept'] ?? 0),
        'status'           => $_POST['status'] ?? 'pending',
        'progress'         => (int) ($_POST['progress'] ?? 0),
        'priority'         => $_POST['priority'] ?? 'medium',
    ];

    if ($this->taskModel->create($data)) {
        header("Location: {$GLOBALS['base_url']}/task-lists");
        exit;
    } else {
        echo "<h3 style='color:red'>Failed to create task</h3>";
    }
}


    // Edit Employee Page
    public function edit($id)
    {
        $task = $this->employeeModel->find($id);
        $employee = $this->employeeModel->getAll();

        $this->view("hrm/employees/edit-employee", [
            "current_route"   => "edit-employee",
            "page_title"      => "Edit Employee",
            "show_breadcrumb" => true,
            "employee"        => $employee,


        ]);
    }


    public function update($id)
    {
        $data = [
            'full_name'         => $_POST['full_name'] ?? '',
            'employee_id'       => $_POST['employee_id'] ?? '',
            'username'          => $_POST['username'] ?? '',
            'email'             => $_POST['email'] ?? '',
            'father_name'       => $_POST['father_name'] ?? '',
            'phone'             => $_POST['phone'] ?? '',
            'emergency_contact' => $_POST['emergency_contact'] ?? '',
            'qualification'     => $_POST['qualification'] ?? '',
            'experience'        => $_POST['experience'] ?? '',
            'address'           => $_POST['address'] ?? '',
            'pass_num'          => $_POST['pass_num'] ?? '',
            'department_id'     => $_POST['department_id'] ?? null,
            'designation_id'    => $_POST['designation_id'] ?? null,
            'joining_date'      => $_POST['joining_date'] ?? null,
            'account_holder_name' => $_POST['account_holder_name'] ?? '',
            'account_number'    => $_POST['account_number'] ?? '',
            'bank_name'         => $_POST['bank_name'] ?? '',
            'branch_name'       => $_POST['branch_name'] ?? '',
            'social_media1'     => $_POST['social_media1'] ?? '',
            'social_media2'     => $_POST['social_media2'] ?? '',
            'social_media3'     => $_POST['social_media3'] ?? '',
        ];

        // শুধু input name 'photo' পাঠাও
        $photoInputName = 'photo';

        if ($this->employeeModel->update($id, $data, $photoInputName)) {
            header("Location: {$GLOBALS['base_url']}/employee-lists");
            exit;
        } else {
            echo "<h3 style='color:red'>Failed to update employee</h3>";
        }
    }




    // Delete Employee
    public function delete($id)
    {
        if ($this->employeeModel->delete($id)) {
            header("Location: {$GLOBALS['base_url']}/employee-lists");
            exit;
        } else {
            echo "<h3 style='color:red'>Failed to delete employee</h3>";
        }
    }
}
