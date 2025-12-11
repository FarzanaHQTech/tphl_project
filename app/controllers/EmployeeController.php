<?php
class EmployeeController extends Controller
{
    protected $db;
    protected $employeeModel;
    protected $userModel;
    protected $departmentModel;
    protected $designationModel;

    public function __construct($db)
    {
        $this->db = $db;
        $this->employeeModel = new Employee($this->db);
        $this->departmentModel = new Department($this->db);
        $this->designationModel = new Designation($this->db); // <-- ঠিক করা

        $this->userModel = new User($this->db);
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
// controllers/EmployeeController.php
public function store()
{
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    
    // Require helper
    // require_once __DIR__ . '/../helpers/password_helper.php';

    // checkbox value
    $makeUser = $_POST['make_user'] ?? 0;

    // Collect password ONLY when user account will be created
    $plainPassword = trim($_POST['password'] ?? '');

    if ($makeUser == 1 && empty($plainPassword)) {
        $_SESSION['error'] = "Password is required when creating user account!";
        header("Location: {$GLOBALS['base_url']}/create-employee");
        exit;
    }

    // Hash password if creating user
    $hashedPassword = ($makeUser == 1)
        ? password_hash($plainPassword, PASSWORD_DEFAULT)
        : '';

    // Prepare employee data
    $employeeData = [
        'full_name'       => trim($_POST['full_name'] ?? ''),
        'employee_id'     => trim($_POST['employeeId'] ?? ''),
        'username'        => trim($_POST['userName'] ?? ''),
        'email'           => trim($_POST['email'] ?? ''),
        'father_name'     => trim($_POST['father_name'] ?? ''),
        'phone'           => trim($_POST['phone'] ?? ''),
        'emergency_contact' => trim($_POST['emergency_contact'] ?? ''),
        'qualification'   => trim($_POST['qualification'] ?? ''),
        'experience'      => trim($_POST['experience'] ?? ''),
        'address'         => trim($_POST['address'] ?? ''),
        'pass_num'        => trim($_POST['pass_num'] ?? ''),
        'department_id'   => intval($_POST['department_id'] ?? 0),
        'designation_id'  => intval($_POST['designation_id'] ?? 0),
        'joining_date'    => $_POST['joining_date'] ?? null,
        'account_holder_name' => trim($_POST['account_holder_name'] ?? ''),
        'account_number'  => trim($_POST['account_number'] ?? ''),
        'bank_name'       => trim($_POST['bank_name'] ?? ''),
        'branch_name'     => trim($_POST['branch_name'] ?? ''),
        'social_media1'   => trim($_POST['social_media1'] ?? ''),
        'social_media2'   => trim($_POST['social_media2'] ?? ''),
        'social_media3'   => trim($_POST['social_media3'] ?? ''),
        'photo'           => '', // Will be set by uploadImage
        'make_user'       => $makeUser,
        'password'        => $hashedPassword,
    ];

    // Upload photo
    $photo = uploadImage('employeePhoto', 'employees');
    if ($photo) {
        $employeeData['photo'] = $photo;
    }

    // Create Employee
    if (!$this->employeeModel->create($employeeData)) {
        $_SESSION['error'] = "Employee creation failed!";
        header("Location: {$GLOBALS['base_url']}/create-employee");
        exit;
    }

    $employee_id = $this->db->insert_id;

    // If create user also
    if ($makeUser == 1) {
        // Prepare user data using helper
        $userData = prepareUserData($_POST, isFromEmployee: true);
        
        // Override with employee data
        $userData['full_name'] = $employeeData['full_name'];
        $userData['user_name'] = $employeeData['username'];
        $userData['phone'] = $employeeData['phone'];
        $userData['email'] = $employeeData['email'];
        $userData['address'] = $employeeData['address'];
        $userData['password'] = $hashedPassword; // Already hashed
        
        // Create User
        $user_id = $this->userModel->create($userData);
        
        if (!$user_id) {
            // Rollback: delete the created employee
            $this->db->query("DELETE FROM employees WHERE id = $employee_id");
            $_SESSION['error'] = "User creation failed!";
            header("Location: {$GLOBALS['base_url']}/create-employee");
            exit;
        }

        // Update employee with user_id
        $stmt = $this->db->prepare("UPDATE employees SET user_id = ? WHERE id = ?");
        $stmt->bind_param("ii", $user_id, $employee_id);
        
        if (!$stmt->execute()) {
            $_SESSION['error'] = "Failed to link user with employee!";
            header("Location: {$GLOBALS['base_url']}/create-employee");
            exit;
        }
    }

    $_SESSION['success'] = "Employee created successfully!";
    header("Location: {$GLOBALS['base_url']}/employee-lists");
    exit;
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
}
