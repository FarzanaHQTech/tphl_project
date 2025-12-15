<?php

namespace SiteManage;

use Controller;
use Slider;

class SliderController extends Controller
{
    protected $db;
    protected $sliderModel;

    public function __construct($db)
    {
        $this->db = $db;
        $this->sliderModel =new Slider($db);
    }
    public function index()
    {
        $sliders =  $this->sliderModel->getAll();
        $this->view("site-manage/sliders/sliders", [
            "current_route"   => "slider-manage",
            "page_title"      => "slider List",
            "sliders"      => $sliders,
        ]);
    }

    // Handle form submission
  public function store()
    {
        $data = [
            'title'      => $_POST['title'] ?? '',
            'subtitle'      => $_POST['subtitle'] ?? '',
            
            'link'      => $_POST['link'] ?? '',
            'status' => isset($_POST['status']) ? 1 : 0,
        ];
        $photoInputName = 'image';

        try {
            if ($this->sliderModel->create($data,$photoInputName)) {
                setSuccess('slider Created Successfully');
                header("Location: {$GLOBALS['base_url']}/slider-manage");
                exit;
            }
        } catch (\Throwable $th) {
            setError($th->getMessage());
            header("Location: {$GLOBALS['base_url']}/slider-manage");
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
