<?php

class Slider extends Model
{
    protected $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    // Get all Departments with paginate

    public function getAll()
    {
        $stmt = $this->db->prepare("SELECT * FROM sliders");

        if (!$stmt) {
            die("Prepare failed: " . $this->db->error);
        }

        $stmt->execute();
        $result = $stmt->get_result();
        $data = $result->fetch_all(MYSQLI_ASSOC);
        $stmt->close();

        return $data;
    }


    // Create a new role

    public function create($data, $photoInputName = "")
    {
        $image = null;

        if (!empty($_FILES[$photoInputName]['name'])) {
            $image = uploadImage($photoInputName, 'sliders');
        }
        if (!$image) {
            $image = '';
        }

        $stmt = $this->db->prepare(
            "INSERT INTO sliders (title, subtitle, image, status, link) VALUES (?,?,?,?,?)"
        );

        $stmt->bind_param(
            "sssis",
            $data['title'],
            $data['subtitle'],
            $image,
            $data['status'],
            $data['link']
        );

        if ($stmt->execute()) {
            return true;
        } else {
            echo "ERROR: " . $stmt->error;
            return false;
        }
    }

    // Update role name + permissions
    public function update($data)
    {
        // Prepare update statement
        $stmt = $this->db->prepare("UPDATE sliders SET name = ?, is_active = ? WHERE id = ?");
        if (!$stmt) {
            echo "Prepare failed: " . $this->db->error;
            return false;
        }

        $stmt->bind_param(
            "sii",
            $data['name'],
            $data['is_active'],
            $data['id']
        );

        if (!$stmt->execute()) {
            echo "Execute failed: " . $stmt->error;
            return false;
        }

        $stmt->close();
        return true;
    }
    
    public function delete($id)
    {
        // 1 Delete all designations linked to this department
        $stmt1 = $this->db->prepare("DELETE FROM sliders WHERE department_id = ?");
        $stmt1->bind_param("i", $id);
        $stmt1->execute();
        $stmt1->close();

        //  Delete the department
        $stmt2 = $this->db->prepare("DELETE FROM departments WHERE id = ?");
        $stmt2->bind_param("i", $id);
        $stmt2->execute();
        $stmt2->close();

        return true;
    }
}
