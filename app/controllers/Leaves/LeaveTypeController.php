<?php

namespace Leaves;

use Controller;
use LeaveType;

class LeaveTypeController extends Controller
{
    protected $db;
    protected $leaveTypeModel;

    public function __construct($db)
    {
        $this->db = $db;
        $this->leaveTypeModel =new LeaveType($db);
    }
    public function index()
    {
        $leaveTypes =  $this->leaveTypeModel->getAll();
        $this->view("hrm/leave-types/leaves", [
            "current_route"   => "leave-types",
            "page_title"      => "Leave Type List",
            "leaveTypes"      => $leaveTypes,
        ]);
    }
    // Handle form submission
  public function store()
    {
        $data = [
            'name'      => $_POST['name'] ?? '',
            'is_active' => isset($_POST['is_active']) ? 1 : 0,
        ];

        try {
            if ($this->leaveTypeModel->create($data)) {
                setSuccess('Leave Type Created Successfully');
                header("Location: {$GLOBALS['base_url']}/leave-types");
                exit;
            }
        } catch (\Throwable $th) {
            setError($th->getMessage());
            header("Location: {$GLOBALS['base_url']}/leave-types");
            exit;
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
    }
}
