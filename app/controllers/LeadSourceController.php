<?php

Class LeadSourceController extends Controller{
    protected $db ;
    protected $leadSourceModel ;
    public function __construct($db){
        $this->db = $db ;
           $this->leadSourceModel = new LeadSource();
    }
    // in constructor or before use: create model instance
// $this->leadSourceModel = new LeadSource($this->db);

public function index()
{
    $sources = $this->leadSourceModel->getAll();

    $this->view("lead-sources/leadSources", [
        "sources" => $sources,
        "leadData" => [], // empty for new
        "current_route" => "leadSource-lists",
        "page_title" => " Lead"
    ]);
}

  // store new sourcelead-sources
public function store()
{
    if (session_status() === PHP_SESSION_NONE) session_start();

    // Form থেকে data নাও
    $name = $_POST['name'] ?? null;
    $is_active = isset($_POST['is_active']) ? 1 : 0;

    if (!$name) {
        setError("Source name is required!");
        header("Location: {$GLOBALS['base_url']}/leadSource-lists");
        exit;
    }

    // Helper থেকে unique slug generate করো
    $slug = generateUniqueSlug($this->db, $name);

    $data = [
        'name' => $name,
        'slug' => $slug,
        'is_active' => $is_active
    ];

    // Model call
    if ($this->leadSourceModel->create($data)) {
        setSuccess("Lead source created successfully!");
    } else {
        setError(getError() ?: "Failed to create lead source.");
    }

    header("Location: {$GLOBALS['base_url']}/leadSource-lists");
    exit;
}

public function update($id)
{
   

   
}

}