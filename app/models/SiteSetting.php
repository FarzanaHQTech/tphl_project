<?php

class SiteSetting extends Model
{
    public function getFirst()
    {
        $stmt = $this->db->prepare("SELECT * FROM site_settings LIMIT 1");
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function create($data, $logoInput = null)
    {
        $logo = null;
        if ($logoInput && !empty($_FILES[$logoInput]['name'])) {
            $logo = uploadImage($logoInput, 'settings', 'original');
        }

        $stmt = $this->db->prepare("
            INSERT INTO site_settings (
                website_title, logo, phone, alt_phone, email, alt_email, address,
                footer_text, copyright, facebook_link, messenger_link,
                instagram_link, tiktok_link, x_link, youtube_link, header_code, body_code
            ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)
        ");

        $stmt->bind_param(
            "sssssssssssssssss",
            $data['website_title'],
            $logo,
            $data['phone'],
            $data['alt_phone'],
            $data['email'],
            $data['alt_email'],
            $data['address'],
            $data['footer_text'],
            $data['copyright'],
            $data['facebook_link'],
            $data['messenger_link'],
            $data['instagram_link'],
            $data['tiktok_link'],
            $data['x_link'],
            $data['youtube_link'],
            $data['header_code'],
            $data['body_code']
        );

        return $stmt->execute();
    }

    public function update($id, $data, $logoInput = null)
    {
        $existing = $this->getById($id);

        $logo = $existing['logo'];
        if ($logoInput && !empty($_FILES[$logoInput]['name'])) {
            $logo = uploadImage($logoInput, 'settings', 'original');
        }

        $stmt = $this->db->prepare("
            UPDATE site_settings SET
                website_title=?, logo=?, phone=?, alt_phone=?, email=?, alt_email=?, address=?,
                footer_text=?, copyright=?, facebook_link=?, messenger_link=?,
                instagram_link=?, tiktok_link=?, x_link=?, youtube_link=?, header_code=?, body_code=?
            WHERE id=?
        ");

        $stmt->bind_param(
            "sssssssssssssssssi",
            $data['website_title'],
            $logo,
            $data['phone'],
            $data['alt_phone'],
            $data['email'],
            $data['alt_email'],
            $data['address'],
            $data['footer_text'],
            $data['copyright'],
            $data['facebook_link'],
            $data['messenger_link'],
            $data['instagram_link'],
            $data['tiktok_link'],
            $data['x_link'],
            $data['youtube_link'],
            $data['header_code'],
            $data['body_code'],
            $id
        );

        return $stmt->execute();
    }

    public function getById($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM site_settings WHERE id=? LIMIT 1");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }
}
