<?php

class Designation extends Model{
    protected $db;

    public function __construct($db = null)
    {
        return parent::__construct($db);
    }
    public function getPaginate($limit = 10, $offset = 0)
    {
        $limit = (int)$limit;
        $offset = (int)$offset;

        $sql = "SELECT d.id, d.name AS designation_name, d.department_id, dep.name AS department_name
                FROM designations d
                LEFT JOIN departments dep ON d.department_id = dep.id
                ORDER BY d.id DESC
                LIMIT $limit OFFSET $offset";

        $stmt = $this->db->prepare($sql);
        if (!$stmt) {
            die("Prepare failed: " . $this->db->error);
        }

        $stmt->execute();
        $result = $stmt->get_result();
        $data = $result->fetch_all(MYSQLI_ASSOC);
        $stmt->close();

        return $data;
    }

    public function getAll()
    {
       $stmp = $this->db->prepare("SELECT d.id, d.name AS designation_name, d.department_id, dep.name AS department_name
                FROM designations d
                LEFT JOIN departments dep ON d.department_id = dep.id
                ORDER BY d.id DESC");
                $stmp->execute();
                $result = $stmp->get_result();
                return $result->fetch_all(MYSQLI_ASSOC);
    }


    public function create($data)
    {
        // Module name দিয়ে photo upload
    

        $stmt = $this->db->prepare(
            "INSERT INTO designations
            (name,  department_id)
            VALUES (?, ?)"
        );
    $stmt->bind_param(
        "si",
        $data['name'],
    
        $data['department_id'],
    
    );
        if ($stmt->execute()) {
            return true;
        } else {
            echo "ERROR: " . $stmt->error;
            return false;
        }
    }


   public function countAll() {
        $stmt = $this->db->prepare("SELECT COUNT(*) as total FROM designations");
        $stmt->execute();
        $result = $stmt->get_result()->fetch_assoc();
        return $result['total'] ?? 0;
    }

public function update($id, $name, $department_id)
{
    $stmt = $this->db->prepare("
        UPDATE designations 
        SET name = ?, department_id = ? 
        WHERE id = ?
    ");

    $stmt->bind_param("sii", $name, $department_id, $id);

    return $stmt->execute();
}

public function delete($id)
{
    $stmt = $this->db->prepare("DELETE FROM designations WHERE id = ?");
    if (!$stmt) {
        echo "Prepare failed: " . $this->db->error;
        return false;
    }

    $stmt->bind_param("i", $id);

    if (!$stmt->execute()) {
        echo "Execute failed: " . $stmt->error;
        return false;
    }

    $stmt->close();
    return true;
}


}