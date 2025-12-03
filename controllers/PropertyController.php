

<?php

class PropertyController extends Controller
{
    public function index()
    {
        $config = require "../app/config/config.php";
        require "../app/models/Property.php";
        
        $property = new Property($config);
        $properties = $property->getAll();

        $this->view("property/list", compact("properties"));
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            require "../app/helpers/upload.php";
            $image = uploadImage("image");

            $data = [
                "title" => $_POST['title'],
                "description" => $_POST['description'],
                "price" => $_POST['price'],
                "location" => $_POST['location'],
                "image" => $image
            ];

            $config = require "../app/config/config.php";
            require "../app/models/Property.php";

            $property = new Property($config);
            $property->create($data);

            header("Location: /property/index");
        }

        $this->view("property/create");
    }
}

