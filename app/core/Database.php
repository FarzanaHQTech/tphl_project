
<?php 
// core/database 
class Database{

    public $conn;

    public function __construct($config)

    {
      $this->conn = new mysqli(
        $config['db_host'],
        $config['db_user'],
        $config['db_pass'],
        $config['db_name'],
        
      );

      if($this->conn->connect_error){
        die("Database connection failed:" . $this->conn->connect_error);
      }
    }

    public function query($sql){
        return $this->conn->query($sql);
    }
}

?>

