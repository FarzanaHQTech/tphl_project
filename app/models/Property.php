<?php

class Property extends Model
{

protected $db;

    public function __construct($db)
    {
        $this->db = $db;   
    }

 public function getAll()
{
    $stmt = $this->db->prepare("SELECT * FROM properties ORDER BY id DESC");
    $stmt->execute();

    $result = $stmt->get_result();  
    return $result->fetch_all(MYSQLI_ASSOC);
}
  public function create($data)
{
    $sql = "
        INSERT INTO properties (title, description, price, location, image)
        VALUES (?, ?, ?, ?, ?)
    ";

    // prepare
    $stmt = $this->db->prepare($sql);

    // bind_param(type_string, var1, var2, ...)
    // s = string, d = double/float, i = integer
    $stmt->bind_param(
        "ssdss", 
        $data['title'],
        $data['description'],
        $data['price'],
        $data['location'],
        $data['image']
    );

    // execute
    return $stmt->execute();
    
    
}

}