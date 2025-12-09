<?php
class EmployeeController extends Controller
{
    protected $db;
    protected $employeeModel;
    protected $departmentModel;
    protected $designationModel;

    public function __construct($db)
    {
        $this->db = $db;
        $this->employeeModel = new Employee($this->db);
        $this->departmentModel = new Department($this->db);
        $this->designationModel = new Designation($this->db); // <-- ঠিক করা
    }

    // Employee List Page
    public function index()
    {
        $searchTerm = $_GET['q'] ?? '';
        $departmentFilter = $_GET['department_id'] ?? '';


        $currentPage = isset($_GET['page']) ? intval($_GET['page']) : 1;
        $perPage = 10;
        $offset = ($currentPage - 1) * $perPage;

        // Total employee count with filters
        $totalEmployees = $this->employeeModel->countAll($searchTerm, $departmentFilter);
        $totalPages = ceil($totalEmployees / $perPage);

        // Get paginated employees with search & department filter
        $employees = $this->employeeModel->getPaginated($perPage, $offset, $searchTerm, $departmentFilter);

        // Departments for filter dropdown
        $departments = $this->departmentModel->getAll();

        $this->view("hrm/employees/employees", [
            "current_route"   => "employee-lists",
            "page_title"      => "Employee List",
            "currentPage"     => $currentPage,
            "totalPages"      => $totalPages,
            "employees"       => $employees,
            "departments"     => $departments,
            "searchTerm"      => $searchTerm,
            "selectedDepartment" => $departmentFilter
        ]);
    }

    // Create Employee Page
    public function create()
    {
        $departments = $this->departmentModel->getAll();
        $designations = $this->designationModel->getAll();

        $this->view("hrm/employees/create-employee", [
            "current_route"   => "create-employee",
            "active"          => "create-employee",
            "page_title"      => "Add Employee",
            "show_breadcrumb" => true,
            "departments"     => $departments,
            "designations"    => $designations
        ]);
    }

    // Handle form submission
    public function store()
    {
        $data = [
            'full_name'       => $_POST['full_name'] ?? '',
            'employeeId'     => $_POST['employee_id'] ?? '',
            'username'        => $_POST['username'] ?? '',
            'email'           => $_POST['email'] ?? '',
            'father_name'     => $_POST['father_name'] ?? '',
            'phone'           => $_POST['phone'] ?? '',
            'emergency_contact' => $_POST['emergency_contact'] ?? '',
            'qualification'   => $_POST['qualification'] ?? '',
            'experience'      => $_POST['experience'] ?? '',
            'address'         => $_POST['address'] ?? '',
            'pass_num'        => $_POST['pass_num'] ?? '',
            'department_id'   => $_POST['department_id'] ?? 0,
            'designation_id'  => $_POST['designation_id'] ?? 0,
            'joining_date'    => $_POST['joining_date'] ?? null,
            'account_holder_name' => $_POST['account_holder_name'] ?? '',
            'account_number'  => $_POST['account_number'] ?? '',
            'bank_name'       => $_POST['bank_name'] ?? '',
            'branch_name'     => $_POST['branch_name'] ?? '',
            'social_media1'   => $_POST['social_media1'] ?? '',
            'social_media2'   => $_POST['social_media2'] ?? '',
            'social_media3'   => $_POST['social_media3'] ?? '',
            'photo'           => $_POST['photo'] ?? '',
        ];

        // Call model create function
        if ($this->employeeModel->create($data)) {
            header("Location: {$GLOBALS['base_url']}/employee-lists");
            exit;
        } else {
            echo "<h3 style='color:red'>Failed to create employee</h3>";
        }
    }

    // Edit Employee Page
public function edit($id)
{
    $employee = $this->employeeModel->find($id);
    $departments = $this->departmentModel->getAll();
    $designations = $this->designationModel->getAll();

    $this->view("hrm/employees/edit-employee", [
        "current_route"   => "edit-employee",
        "page_title"      => "Edit Employee",
        "show_breadcrumb" => true,
        "employee"        => $employee,
        "departments"     => $departments,
        "designations"    => $designations
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

public function dashboard(){
    $this->view("employee-dashboard/emp-dashboard",[
        "current_route" => "employee-dashboard",
        "page_title" => "employee dashboard"
    ]);
}
}
