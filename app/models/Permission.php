<?php

class Permission extends Model
{
     public function __construct($db = null)
    {
        parent::__construct($db); 
    }
    // Get all permissions
    public function getAll()
    {
        $stmt = $this->db->prepare("SELECT * FROM permissions ORDER BY name ASC");
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    // Get single permission
    public function getById($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM permissions WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    // Create permission
public function create($data)
{
    $stmt = $this->db->prepare(
        "INSERT INTO permissions (name, status) VALUES (?, ?)"
    );

    if (!$stmt) {
        echo "❌ Prepare Failed: " . $this->db->error;
        return false;
    }

    if (!$stmt->bind_param("si", $data['name'], $data['status'])) {
        echo "❌ Bind Failed: " . $stmt->error;
        return false;
    }

    if (!$stmt->execute()) {
        echo " Execute Failed: " . $stmt->error;
        return false;
    }

    return true;
}

    // Update permission
    public function update($id, $data)
    {
        $stmt = $this->db->prepare("UPDATE permissions SET name = ?, status = ? WHERE id = ?");
        $stmt->bind_param("sii", $data['name'], $data['status'], $id);
        return $stmt->execute();
    }

    // Delete permission
    public function delete($id)
    {
        $stmt = $this->db->prepare("DELETE FROM permissions WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
