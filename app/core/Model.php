<?php 
class Model 
{
    protected $db;

    public function __construct($db = null)
    {
        if ($db) {
            $this->db = $db;
        } else {
            $config = require __DIR__ . "/../config/config.php";
            $database = new Database($config);
            $this->db = $database->conn;
        }
    }

    public function getDb()
    {
        return $this->db;
    }
}
?>
