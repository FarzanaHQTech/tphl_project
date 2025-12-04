<?php


class Role extends Model
{
    public function getAll()
    {
        $stmt = $this->db->prepare("SELECT * FROM roles ORDER BY id DESC");
        $stmt->execute();

        $result = $stmt->get_result();  
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function create($data)
    {
        $sql = "
            INSERT INTO roles (name, description)
            VALUES (?, ?)
        ";

        // prepare
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param(
            "ss", 
            $data['name'],
            $data['description']
        );

        // execute
        return $stmt->execute();
    }
}