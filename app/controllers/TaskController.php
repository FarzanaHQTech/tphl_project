<?php
class TaskController extends Controller
{
    protected $db;
    protected $employeeModel;
    protected $taskModel;
    protected $userModel;
    public function __construct($db)
    {
        $this->db = $db;
        $this->employeeModel = new Employee($this->db);
        $this->taskModel = new Task($this->db);
        $this->userModel = new User($this->db);
    }

    // Employee List Page
    public function index()
    {
        $searchTerm = $_GET['q'] ?? '';

        $currentPage = isset($_GET['page']) ? intval($_GET['page']) : 1;
        $perPage = 10;
        $offset = ($currentPage - 1) * $perPage;

        // Total employee count with filters
        $totalTasks = $this->taskModel->countAll($searchTerm,);
        $totalPages = ceil($totalTasks / $perPage);

        $tasks = $this->taskModel->getPaginated($perPage, $offset, $searchTerm);
        // Get paginated employees with search & department filter
        $employees = $this->employeeModel->getAll();

        $this->view("tasks/task-lists", [
            "current_route"   => "task-lists",
            "page_title"      => "Task List",
            "currentPage"     => $currentPage,
            "totalPages"      => $totalPages,
            "employees"       => $employees,
            "searchTerm"      => $searchTerm,
            "tasks"                => $tasks,

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
            'assigned_by'      => $_SESSION['user']['id'] ?? null,
        ];


        if ($this->taskModel->create($data)) {
            $taskId = $this->db->insert_id; // নতুন task id
            $message = "New task assigned: " . $data['title'];

            // Notification insert
            $stmt = $this->db->prepare(
                "INSERT INTO notifications (employee_id, task_id, assigned_by, message) VALUES (?, ?, ?, ?)"
            );
            $stmt->bind_param("iiis", $data['employee_id'], $taskId, $data['assigned_by'], $message);
            $stmt->execute();

            header("Location: {$GLOBALS['base_url']}/task-lists");
            exit;
        }


        if ($this->taskModel->create($data)) {
            $taskId = $this->db->insert_id;
            $message = "New Task Assigned for You" . $data["title"];

            $stmt = $this->db->prepare(
                "INSERT INTO notifications(user_id,task_id, assigned_by, message) VALUES(?,?,?,?) "
            );
            $stmt->bind_param("");
            $stmt->execute();
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

        $this->view("hrm/employees/edit-task", [
            "current_route"   => "edit-task",
            "page_title"      => "Edit task",
            "show_breadcrumb" => true,
            "task"        => $task,


        ]);
    }







    public function update($id)
    {
        $data = [
            'title'         => $_POST['title'] ?? '',
            'description'       => $_POST['description'] ?? '',
            'start_date'          => $_POST['start_date'] ?? '',
            'deadline'             => $_POST['deadline'] ?? '',
            'priority'       => $_POST['priority'] ?? '',
            'progress'             => $_POST['progress'] ?? '',
            'employee_id' => $_POST['employee_id'] ?? '',
            'assigned_by'      => $_SESSION['user']['id'] ?? null,

        ];


        if ($this->employeeModel->update($id, $data)) {
            header("Location: {$GLOBALS['base_url']}/task-lists");
            exit;
        } else {
            echo "<h3 style='color:red'>Failed to update task</h3>";
        }
    }
    // Delete Employee
    public function delete($id)
    {
        if ($this->employeeModel->delete($id)) {
            header("Location: {$GLOBALS['base_url']}/task-lists");
            exit;
        } else {
            echo "<h3 style='color:red'>Failed to delete task</h3>";
        }
    }

    public function show($id)
    {
        $task = $this->taskModel->find($id);

        $this->view("tasks/show-task", [
            "current_route" => "show-task",
            "task" => $task,
        ]);
    }
}
