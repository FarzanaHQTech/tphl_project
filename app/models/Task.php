<?php
class Task extends Model{
    protected $db;
    public function __construct($db = null)
    {
        return parent::__construct($db);
    }


   // Get all users with paginate
  public function getPaginated($limit, $offset, $search = '', $role = '')
{
    // $sql = "SELECT * FROM users WHERE 1";
    // $params = [];
    // $types = "";

    // if ($search) {
    //     $sql .= " AND (full_name LIKE ? OR phone LIKE ? OR email LIKE ?)";
    //     $params[] = "%$search%";
    //     $params[] = "%$search%";
    //     $params[] = "%$search%";
    //     $types .= "sss";
    // }

    // if ($role) {
    //     $sql .= " AND role_id = ?";
    //     $params[] = $role;
    //     $types .= "i";
    // }

    // $sql .= " ORDER BY id DESC LIMIT ? OFFSET ?";
    // $params[] = $limit;
    // $params[] = $offset;
    // $types .= "ii";

    // $stmt = $this->db->prepare($sql);
    // $stmt->bind_param($types, ...$params);
    // $stmt->execute();
    // $result = $stmt->get_result();
    // return $result->fetch_all(MYSQLI_ASSOC);
}
    public function create($data){

    }
    public function update($id,$data){

    }

}