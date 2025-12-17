<?php

class Blog extends Model
{
    protected $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    // Get all Blogs with paginate
    public function getPaginated($limit, $offset, $search = '')
    {
        $sql = "SELECT * FROM blogs WHERE 1";
        $params = [];
        $types = "";

        if ($search) {
            $sql .= " AND (title LIKE ?)";
            $params[] = "%$search%";
            $types .= "s";
        }

        $sql .= " ORDER BY id DESC LIMIT ? OFFSET ?";
        $params[] = $limit;
        $params[] = $offset;
        $types .= "ii";

        $stmt = $this->db->prepare($sql);
        $stmt->bind_param($types, ...$params);
        $stmt->execute();
        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }


    public function getAll()
    {
        $stmt = $this->db->prepare("SELECT * FROM Blogs");

        if (!$stmt) {
            die("Prepare failed: " . $this->db->error);
        }

        $stmt->execute();
        $result = $stmt->get_result();
        $data = $result->fetch_all(MYSQLI_ASSOC);
        $stmt->close();

        return $data;
    }


    // Create a new blog

    public function create($data, $photoInputName = '')
    {

        $photo = null;
        if (!empty($_FILES[$photoInputName]['name'])) {
            $photo = uploadImage($photoInputName, 'blogs');
        }
        if (!$photo) {
            $photo = '';
        }



        $stmt = $this->db->prepare("INSERT INTO Blogs (title,content,author,excerpt,published_date,read_time,image, status) VALUES (?,?,?,?,?,?,?,?)");


        $stmt->bind_param(
            "sssssssi",
            $data['title'],
            $data['content'],
            $data['author'],
            $data['excerpt'],
            $data['published_date'],
            $data['read_time'],
            $photo,
            $data['status'],
            
        );
        if ($stmt->execute()) {
            return true;
        } else {
            echo "ERROR: " . $stmt->error;
            return false;
        }
    }


    public function countAll($search = '')
    {
        $sql = "SELECT COUNT(*) as total FROM Blogs WHERE 1";
        $params = [];
        $types = "";

        if ($search) {
            $sql .= " AND (title LIKE ?)";
            $params[] = "%$search%";
            $types .= "s";
        }

        $stmt = $this->db->prepare($sql);
        if ($params) {
            $stmt->bind_param($types, ...$params);
        }
        $stmt->execute();
        $result = $stmt->get_result()->fetch_assoc();
        return $result['total'];
    }


    public function find($id): mixed
    {
        $stmt = $this->db->prepare("SELECT * FROM blogs AS b
        WHERE b.id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }
    // Update role name + permissions
    public function update($data, $id, $photoInputName = '')
    {
        $oldBlog = $this->find($id);
        $oldPhoto = $oldBlog['image']; // make sure column name is 'image', not 'photo'

        $newPhoto = null;
        if ($photoInputName && !empty($_FILES[$photoInputName]['name'])) {
            $newPhoto = uploadImage($photoInputName, 'blogs');
        }

        // Keep old photo if new photo not uploaded
        $finalPhoto = $newPhoto ?? $oldPhoto;

        // Delete old file only if new photo is uploaded
        if ($newPhoto && !empty($oldPhoto) && file_exists(dirname(__DIR__, 2) . '/public/uploads/blogs/' . $oldPhoto)) {
            unlink(dirname(__DIR__, 2) . '/public/uploads/blogs/' . $oldPhoto);
        }

        // Prepare update statement
        $stmt = $this->db->prepare(
            "UPDATE blogs SET title = ?, content = ?, author = ?, excerpt = ?, published_date = ?, read_time = ?, image = ?, status = ? WHERE id = ?"
        );
        if (!$stmt) {
            echo "Prepare failed: " . $this->db->error;
            return false;
        }

        $stmt->bind_param(
            "sssssssii",
            $data['title'],
            $data['content'],
            $data['author'],
            $data['excerpt'],
            $data['published_date'],
            $data['read_time'],
            $finalPhoto,
            $data['status'],
            $id
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
        // 1️⃣ Delete all designations linked to this Blog
        $stmt1 = $this->db->prepare("DELETE FROM designations WHERE Blog_id = ?");
        $stmt1->bind_param("i", $id);
        $stmt1->execute();
        $stmt1->close();

        // 2️⃣ Delete the Blog
        $stmt2 = $this->db->prepare("DELETE FROM Blogs WHERE id = ?");
        $stmt2->bind_param("i", $id);
        $stmt2->execute();
        $stmt2->close();

        return true;
    }
}
