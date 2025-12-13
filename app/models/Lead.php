<?php

class Lead extends Model
{
    protected $db;

    public function __construct($db = null)
    {
        return parent::__construct($db);
    }

    public function getAll()
    {
        $sql = $this->db->prepare("
        SELECT 
            l.*,
            u.id AS owner_id,
            u.full_name AS owner_name
        FROM leads AS l
        LEFT JOIN users AS u ON l.owner_id = u.id
    ");
        $sql->execute();
        if (!$sql->execute()) {
            return [];
        }

        $result = $sql->get_result();
        return $result ? $result->fetch_all(MYSQLI_ASSOC) : [];
    }




    public function create($data)
    {
        $stmt = $this->db->prepare("
        INSERT INTO leads (
            lead_name, lead_type, company, value_amount, currency,
            phone, alt_phone_number, email, source_type_id,
            address, pref_location, designation, project_type, interest_on,
            pref_flat_size, communication_type, tags, description,
            visibility, status, lead_quality
        ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
    ");

        if (!$stmt) {
            setError("Prepare failed: " . $this->db->error);
            return false;
        }

        // 21 PARAMETERS → so provide EXACT 21 TYPE LETTERS
        $stmt->bind_param(
            "sssdsssissssssssssssi",
            $data['lead_name'],
            $data['lead_type'],
            $data['company'],
            $data['value_amount'],
            $data['currency'],
            $data['phone'],
            $data['alt_phone_number'],
            $data['email'],
            $data['source_type_id'],
            $data['address'],
            $data['pref_location'],
            $data['designation'],
            $data['project_type'],
            $data['interest_on'],
            $data['pref_flat_size'],
            $data['communication_type'],
            $data['tags'],
            $data['description'],
            $data['visibility'],
            $data['status'],
            $data['lead_quality']
        );

        if ($stmt->execute()) {
            setSuccess("Lead created successfully!");
            return true;
        } else {
            setError("Lead creation failed: " . $stmt->error);
            return false;
        }
    }


    //employee id find for edit
    public function find($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM leads WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    /**
     * Update lead
     */
    public function update($id, $data)
    {
        $sql = "UPDATE leads SET
        lead_name = ?, lead_type = ?, company = ?, value_amount = ?, currency = ?, phone = ?, alt_phone_number = ?,
        email = ?, source_type_id = ?, address = ?, pref_location = ?, designation = ?, project_type = ?,
        interest_on = ?, pref_flat_size = ?, communication_type = ?, tags = ?, description = ?, visibility = ?, status = ?, lead_quality = ?
        WHERE id = ?";

        $stmt = $this->db->prepare($sql);
        if (!$stmt) {
            throw new Exception("Prepare failed: " . $this->db->error);
        }

        $stmt->bind_param(
            "sssdssssissssssssssssi",
            $data['lead_name'],
            $data['lead_type'],
            $data['company'],
            $data['value_amount'],
            $data['currency'],
            $data['phone'],
            $data['alt_phone_number'],
            $data['email'],
            $data['source_type_id'],
            $data['address'],
            $data['pref_location'],
            $data['designation'],
            $data['project_type'],
            $data['interest_on'],
            $data['pref_flat_size'],
            $data['communication_type'],
            $data['tags'],
            $data['description'],
            $data['visibility'],
            $data['status'],
            $data['lead_quality'],
            $id
        );

        if (!$stmt->execute()) {
            throw new Exception("Update failed: " . $stmt->error);
        }

        return true;
    }


    public function delete($id)
    {
        $stmt = $this->db->prepare("DELETE FROM leads WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
