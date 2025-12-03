<?php

// class Model 
// {
//     protected $db;

//     public function __construct($config)
//     {
//         require_once "../app/core/Database.php";
//         $this->db = new Database($config);
//     }
// }
?>

<?php 
class Model 
{
    protected $db;

    public function __construct($config)

    {
       require_once "./app/config/config.php";
    }
} 

?>