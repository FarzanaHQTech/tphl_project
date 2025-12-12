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
            $data['lead_name'],          // 1
            $data['lead_type'],          // 2
            $data['company'],            // 3
            $data['value_amount'],       // 4
            $data['currency'],           // 5
            $data['phone'],              // 6
            $data['alt_phone_number'],   // 7
            $data['email'],              // 8
            $data['source_type_id'],     // 9
            $data['address'],            // 10
            $data['pref_location'],      // 11
            $data['designation'],        // 12
            $data['project_type'],       // 13
            $data['interest_on'],        // 14
            $data['pref_flat_size'],     // 15
            $data['communication_type'], // 16
            $data['tags'],               // 17
            $data['description'],        // 18
            $data['visibility'],         // 19
            $data['status'],             // 20
            $data['lead_quality']        // 21
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
        // Update query
        $sql = "UPDATE leads SET
        lead_name = ?, lead_type = ?, company = ?, value_amount = ?, currency = ?, phone = ?, alt_phone_number = ?,
        email = ?, source_type_id = ?, address = ?, source_type_id = ?, pref_location = ?, designation = ?, project_type = ?,
        interest_on = ?, pref_flat_size = ?, communication_type = ?, tags = ?, description = ?, visibility = ?, status = ?, lead_quality = ?
        WHERE id = ?";

        $stmt = $this->db->prepare($sql);

        if (!$stmt) {
            setError("Prepare failed: " . $this->db->error);
            return false;
        }

        $stmt->bind_param(
            "sssdsssssissssssssssssi",
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
            $data['owner_id'],
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

        if ($stmt->execute()) {
            setSuccess("Lead updated successfully!");
            return true;
        } else {
            setError("Lead update failed: " . $stmt->error);
            return false;
        }
    }

    public function delete($id)
    {
        $stmt = $this->db->prepare("DELETE FROM employees WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }

    public function taskNotification()
    {
        $loggedUserId = $_SESSION['user']['id'];

        $stmt = $this->db->prepare("SELECT id FROM employees WHERE user_id = ?");
        $stmt->bind_param("i", $loggedUserId);
        $stmt->execute();
        $emp = $stmt->get_result()->fetch_assoc();

        $employeeId = $emp['id'];

        // Notifications fetch
        $stmt = $this->db->prepare("
    SELECT n.*, u.full_name AS assigned_by_name
    FROM notifications n
    JOIN users u ON n.assigned_by = u.id
    WHERE n.employee_id = ?
    AND n.is_read = 0
    ORDER BY n.created_at DESC
");
        $stmt->bind_param("i", $employeeId);

        // $stmt->bind_param("i", $userId);
        $stmt->execute();
        $notifications = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

        return $notifications; // ⚠️ return করতে হবে
    }
}
