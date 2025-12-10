<?php

class EmployeeDashboardController extends Controller
{
    protected $db;
    protected $employeeModel;
    public function __construct($db)
    {
        $this->db = $db;
        $this->employeeModel = new Employee($this->db);
    }

    public function index()
    {
        $notifications = $this->employeeModel->taskNotification();
        $this->view("employee-dashboard/emp-dashboard", [
            "current_route" => "employee-dashboard",
            "page_title" => "employee dashboard",
            "notifications" => $notifications,
        ]);


        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }
}
