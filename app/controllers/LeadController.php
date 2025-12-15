<?php
class LeadController extends Controller
{
    protected $db;

    protected $userModel;
    protected $leadModel;
    protected $leadSource;

    public function __construct($db)
    {
        $this->db = $db;
        $this->userModel = new User($this->db);
        $this->leadModel = new Lead($this->db);
        $this->leadSource = new LeadSource($this->db);
    }


    public function index()
    {
        $owners = $this->userModel->getAll();
        $leads = $this->leadModel->getAll();
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }


        $message = "";
        $this->view("leads/lead-lists", [
            "current_route" => "lead-lists",
            "page_title" => "Lead List",
            "owners" => $owners,
            "leads" => $leads,
            "message" => $message,
        ]);
    }

    public function create()
    {

        $ownerUsers = $this->userModel->getAll();
        $sources = $this->leadSource->getAll();

        $this->view("leads/create-lead", [
            "current_route"   => "create-lead",
            "active"          => "create-lead",
            "page_title"      => "Add lead",
            "show_breadcrumb" => true,
            "ownerUsers" => $ownerUsers,
            "sources" => $sources,

        ]);
    }

    // Handle form submission
    // controllers/EmployeeController.php
    public function store()
    {
        $leadData = [
            'lead_name' => $_POST['lead_name'] ?? null,
            'lead_type' => $_POST['lead_type'] ?? null,
            'company' => $_POST['company'] ?? null,
            'value_amount' => $_POST['value_amount'] ?? 0,
            'currency' => $_POST['currency'] ?? 'BDT',
            'phone' => $_POST['phone'] ?? null,
            'alt_phone_number' => $_POST['alt_phone_number'] ?? null,
            'email' => $_POST['email'] ?? null,
            'source_type_id' => $_POST['source_type_id'] ?? null,
            // 'owner_id' => $_POST['owner_id'] ?? null,
            'address' => $_POST['address'] ?? null,
            'pref_location' => $_POST['pref_location'] ?? null,
            'designation' => $_POST['designation'] ?? null,
            'project_type' => $_POST['project_type'] ?? null,
            'interest_on' => $_POST['interest_on'] ?? null,
            'pref_flat_size' => $_POST['pref_flat_size'] ?? null,
            'communication_type' => $_POST['communication_type'] ?? null,
            'tags' => $_POST['tags'] ?? null,
            'description' => $_POST['description'] ?? null,
            'visibility' => $_POST['visibility'] ?? 'public',
            'status' => $_POST['status'] ?? 'active',
            'lead_quality' => $_POST['lead_quality'] ?? 'Pending'
        ];

        if (session_status() === PHP_SESSION_NONE) session_start();

        if ($this->leadModel->create($leadData)) {
            setSuccess("Lead created successfully!");
            header("Location: {$GLOBALS['base_url']}/lead-lists");
            exit;
        } else {
            header("Location: {$GLOBALS['base_url']}/create-lead");
            exit;
        }
    }

    // Edit Employee Page
    public function edit($id)
    {
        $ownerUsers = $this->userModel->getAll();
        $leadData = $this->leadModel->find($id);
    $sources = $this->leadSource->getAll();
        $this->view("leads/edit-lead", [
            "current_route"   => "edit-lead",
            "page_title"      => "Edit Lead",
            "leadData"        => $leadData,
            "ownerUsers"        => $ownerUsers,
            "sources"        => $sources,
            "show_breadcrumb" => true,
        ]);
    }

    public function update($id)
    {
        
        if (session_status() === PHP_SESSION_NONE) session_start();

        // Collect form data
        $leadData = [
            'lead_name' => $_POST['lead_name'] ?? null,
            'lead_type' => $_POST['lead_type'] ?? null,
            'company' => $_POST['company'] ?? null,
            'value_amount' => $_POST['value_amount'] ?? 0,
            'currency' => $_POST['currency'] ?? 'BDT',
            'phone' => $_POST['phone'] ?? null,
            'alt_phone_number' => $_POST['alt_phone_number'] ?? null,
            'email' => $_POST['email'] ?? null,
            'source_type_id' => $_POST['source_type_id'] ?? null,
            'owner_id' => $_POST['owner_id'] ?? null,
            'address' => $_POST['address'] ?? null,
            'pref_location' => $_POST['pref_location'] ?? null,
            'designation' => $_POST['designation'] ?? null,
            'project_type' => $_POST['project_type'] ?? null,
            'interest_on' => $_POST['interest_on'] ?? null,
            'pref_flat_size' => $_POST['pref_flat_size'] ?? null,
            'communication_type' => $_POST['communication_type'] ?? null,
            'tags' => $_POST['tags'] ?? null,
            'description' => $_POST['description'] ?? null,
            'visibility' => $_POST['visibility'] ?? 'public',
            'status' => $_POST['status'] ?? 'active',
            'lead_quality' => $_POST['lead_quality'] ?? 'Pending',
        ];
        
        // Update lead
         try {
        $this->leadModel->update($id, $leadData);
        setSuccess("Lead updated successfully!");
        header("Location: {$GLOBALS['base_url']}/lead-lists");
        exit;
    } catch (Exception $e) {
        setError($e->getMessage());
        $_SESSION['old'] = $_POST;
        header("Location: {$GLOBALS['base_url']}/edit-lead/{$id}");
        exit;
    }
    }


    public function importCsv()
{
    if (!isset($_FILES['csv_file']) || $_FILES['csv_file']['error'] !== 0) {
        setError("CSV upload failed");
        return;
    }

    $fileTmp = $_FILES['csv_file']['tmp_name'];
    $ext = strtolower(pathinfo($_FILES['csv_file']['name'], PATHINFO_EXTENSION));

    if ($ext !== 'csv') {
        setError("Only CSV files allowed");
        return;
    }

    if (($handle = fopen($fileTmp, "r")) !== false) {

        $header = fgetcsv($handle); // first row → header

        while (($row = fgetcsv($handle, 1000, ",")) !== false) {

            // 🔑 CSV → DB column mapping
            $data = array_combine($header, $row);

            // defaults & safety
            $data['value_amount'] = (float)($data['value_amount'] ?? 0);
            $data['source_type_id'] = (int)($data['source_type_id'] ?? 0);
            $data['status'] = (int)($data['status'] ?? 0);
            $data['visibility'] = $data['visibility'] ?? 'public';

            $this->leadModel->create($data);
        }

        fclose($handle);
        setSuccess("CSV imported successfully");
    }
}




    // Delete Employee
    public function delete($id) {}
}
