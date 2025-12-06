<?php
function uploadImage($input, $module = 'general')
{
    // Project root থেকে public folder path
    $rootPublic = dirname(__DIR__, 2) . "/public/uploads/" . $module . "/";

    // Create module folder if not exists
    if (!is_dir($rootPublic)) {
        mkdir($rootPublic, 0777, true); // recursive folder creation
    }

    // If file not selected
    if (!isset($_FILES[$input]) || $_FILES[$input]['error'] !== 0) {
        return null;
    }

    // File extension & unique name
    $ext = pathinfo($_FILES[$input]['name'], PATHINFO_EXTENSION);
    $fileName = uniqid() . "_" . time() . "." . $ext;

    // Move file to public/uploads/module
    $targetFile = $rootPublic . $fileName;
    if (move_uploaded_file($_FILES[$input]['tmp_name'], $targetFile)) {
        return $fileName; // DB তে শুধু filename save হবে
    }

    return null;
}



function getImage($module, $filename)
{
    if (!$filename) {
        return $GLOBALS['base_url'] . "/uploads/no-image.png";
    }

    return $GLOBALS['base_url'] . "/uploads/{$module}/{$filename}";
}


function paginateLinksSecondary($route, $currentPage, $totalPages)
{
    // Make sure page numbers are integer
    $currentPage = intval($currentPage);
    $totalPages  = intval($totalPages);

    if ($totalPages <= 1) return ""; // pagination প্রয়োজন নাই

    $html  = '<nav>';
    $html .= '<ul class="pagination pagination-secondary">';

    // Previous Button
    if ($currentPage > 1) {
        $html .= '<li class="page-item">
                    <a class="page-link" href="' . $route . '?page=' . ($currentPage - 1) . '">Previous</a>
                  </li>';
    } else {
        $html .= '<li class="page-item disabled">
                    <span class="page-link">Previous</span>
                  </li>';
    }

    // Page Numbers
    for ($i = 1; $i <= $totalPages; $i++) {
        $active = ($i == $currentPage) ? "active" : "";

        $html .= '<li class="page-item ' . $active . '">
                    <a class="page-link" href="' . $route . '?page=' . $i . '">' . $i . '</a>
                  </li>';
    }

    // Next Button
    if ($currentPage < $totalPages) {
        $html .= '<li class="page-item">
                    <a class="page-link" href="' . $route . '?page=' . ($currentPage + 1) . '">Next</a>
                  </li>';
    } else {
        $html .= '<li class="page-item disabled">
                    <span class="page-link">Next</span>
                  </li>';
    }

    $html .= '</ul>';
    $html .= '</nav>';

    return $html;
}



/**
 * Search records dynamically
 * 
 * @param mysqli $db
 * @param string $table Table name
 * @param array $fields Fields to search in (e.g., ['full_name', 'phone', 'email'])
 * @param string $searchTerm Term to search
 * @param array $extraConditions Optional: ['column' => 'value']
 * @return array
 */
function searchRecords($db, $table, $fields, $searchTerm, $extraConditions = [])
{
    $searchTerm = "%{$searchTerm}%";
    
    $whereParts = [];
    $params = [];
    $types = "";

    // Searchable fields
    foreach ($fields as $field) {
        $whereParts[] = "$field LIKE ?";
        $params[] = $searchTerm;
        $types .= "s";
    }

    // Extra conditions (e.g., role_id filter)
    foreach ($extraConditions as $col => $val) {
        $whereParts[] = "$col = ?";
        $params[] = $val;
        $types .= is_int($val) ? "i" : "s";
    }

    $sql = "SELECT * FROM $table";
    if (!empty($whereParts)) {
        $sql .= " WHERE " . implode(" OR ", $whereParts);
    }

    $stmt = $db->prepare($sql);

    if (!empty($params)) {
        $stmt->bind_param($types, ...$params);
    }

    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_all(MYSQLI_ASSOC);
}




