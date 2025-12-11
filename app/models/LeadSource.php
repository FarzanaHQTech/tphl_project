<?php
class LeadSource extends Model
{
    protected $db;

    public function __construct($db = null)
    {
        return parent::__construct($db);
    }
    // get all active sources

    public function getAll()
    {
        $sql = $this->db->prepare("
        SELECT 
            *
        FROM  lead_sources 
       Where id = 1
    ");
        $sql->execute();
        if (!$sql->execute()) {
            return [];
        }

        $result = $sql->get_result();
        return $result ? $result->fetch_all(MYSQLI_ASSOC) : [];
    }



    public function find($id)
    {
        $stmt = $this->db->prepare("
            SELECT * FROM lead_sources WHERE id = ?
        ");

        if (!$stmt) return null;

        $stmt->bind_param("i", $id);
        $stmt->execute();

        return $stmt->get_result()->fetch_assoc();
    }

    /**
     * Create new source
     */
    public function create($data)
    {
        $slug = generateUniqueSlug($this->db, $data['name']);
        $stmt = $this->db->prepare("INSERT INTO lead_sources (name, slug, is_active) VALUES (?, ?, ?)");
        $stmt->bind_param("ssi", $data['name'], $slug, $data['is_active']);


        if (!$stmt) {
            setError("Prepare failed: " . $this->db->error);
            return false;
        }

        $stmt->bind_param(
            "ssi",
            $data['name'],
            $data['slug'],
            $data['is_active']
        );

        if ($stmt->execute()) {
            setSuccess("Lead source created successfully!");
            return true;
        }

        setError("Insert failed: " . $stmt->error);
        return false;
    }

    /**
     * Update source
     */
    public function update($id, $data)
    {
        $stmt = $this->db->prepare("
            UPDATE lead_sources 
            SET name = ?, slug = ?, is_active = ?
            WHERE id = ?
        ");

        if (!$stmt) {
            setError("Prepare failed: " . $this->db->error);
            return false;
        }

        $stmt->bind_param(
            "ssii",
            $data['name'],
            $data['slug'],
            $data['is_active'],
            $id
        );

        if ($stmt->execute()) {
            setSuccess("Source updated successfully!");
            return true;
        }

        setError("Update failed: " . $stmt->error);
        return false;
    }
}
