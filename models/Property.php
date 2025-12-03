<?php

class Property extends Model
{
    public function getAll()
    {
        $sql = "SELECT * FROM properties ORDER BY id DESC";
        return $this->db->query($sql);
    }

    public function create($data)
    {
        $title = $this->db->escape($data['title']);
        $description = $this->db->escape($data['description']);
        $price = $this->db->escape($data['price']);
        $location = $this->db->escape($data['location']);
        $image = $this->db->escape($data['image']);

        $sql = "INSERT INTO properties (title, description, price, location, image)
                VALUES ('$title', '$description', '$price', '$location', '$image')";

        return $this->db->query($sql);
    }
}