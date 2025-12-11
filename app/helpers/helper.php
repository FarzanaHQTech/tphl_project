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
        return $fileName; 
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

    if ($totalPages <= 1) return ""; // pagination no need

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


function checkLogin() {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    if (!isset($_SESSION['user'])) {
        header("Location: /tphl_project/public/admin-login");
        exit;
    }
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




function db()
{
    static $db = null;

    if ($db === null) {
        // config file theke database info load koro
        $config = require dirname(__DIR__) . "/config/config.php"; 
        
        $db = new Database($config);
    }

    return $db->conn; // return mysqli connection
}


function hasPermission($permissionName)
{
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    // session check
    if (!isset($_SESSION['user']['role_id'])) {
        return false; // role_id missing
    }

    $roleId = $_SESSION['user']['role_id'];

    // session থেকে permission array
    if (!isset($_SESSION['user']['permissions']) || !is_array($_SESSION['user']['permissions'])) {
        return false; // permissions missing
    }

    $permissions = array_map('strtolower', $_SESSION['user']['permissions']); // lowercase
    $permissionName = strtolower($permissionName);

    return in_array($permissionName, $permissions);
}

function isAlreadyHashed($password) {
    if (strlen($password) === 60 && preg_match('/^\$2[ayb]\$.{56}$/', $password)) {
        return true; // Already hashed
    }
    return false; // Not hashed
}

/**
 * Ensure password is hashed
 * Will hash only if not already hashed
 */
function ensureHashedPassword($password) {
    if (isAlreadyHashed($password)) {
        return $password; // Return as is if already hashed
    }
    return password_hash($password, PASSWORD_DEFAULT);
}

/**
 * Validate and prepare user data
 */
function prepareUserData($postData, $isFromEmployee = false) {
    $data = [
        'full_name'    => trim($postData['full_name'] ?? ''),
        'user_name'    => trim($postData['user_name'] ?? ($postData['username'] ?? '')),
        'phone'        => trim($postData['phone'] ?? ''),
        'email'        => trim($postData['email'] ?? ''),
        'designation'  => trim($postData['designation'] ?? ''),
        'address'      => trim($postData['address'] ?? ''),
        'nid'          => trim($postData['nid'] ?? ''),
        'role_id'      => intval($postData['role_id'] ?? ($isFromEmployee ? 2 : 0)),
        'password'     => trim($postData['password'] ?? ''),
        'media_link1'  => trim($postData['media_link1'] ?? ($postData['social_media1'] ?? '')),
        'media_link2'  => trim($postData['media_link2'] ?? ($postData['social_media2'] ?? '')),
    ];
    
    return $data;
}


function setError($msg){
    if(session_status() === PHP_SESSION_NONE) session_start();
    $_SESSION['error_message'] = $msg;
}

function getError(){
    if(session_status() === PHP_SESSION_NONE) session_start();
    if(isset($_SESSION['error_message'])){
        $msg = $_SESSION['error_message'];
        unset($_SESSION['error_message']);
        return $msg;
    }
    return null;
}

function setSuccess($msg){
    if(session_status() === PHP_SESSION_NONE) session_start();
    $_SESSION['success_message'] = $msg;
}

function getSuccess(){
    if(session_status() === PHP_SESSION_NONE) session_start();
    if(isset($_SESSION['success_message'])){
        $msg = $_SESSION['success_message'];
        unset($_SESSION['success_message']);
        return $msg;
    }
    return null;
}


/**
 * Generate a URL-friendly slug from a name.
 * Automatically ensures uniqueness in the given table & column.
 *
 * @param mysqli $db
 * @param string $name
 * @param string $table
 * @param string $column
 * @return string
 */
function generateUniqueSlug($db, $name, $table = 'lead_sources', $column = 'slug')
{
    // lowercase, trim, replace spaces/non-alphanum with dash
    $slug = preg_replace('/[^a-z0-9]+/', '-', strtolower(trim($name)));
    $originalSlug = $slug;
    $i = 1;

    // loop until unique
    while (slugExists($db, $slug, $table, $column)) {
        $slug = $originalSlug . '-' . $i;
        $i++;
    }

    return $slug;
}

/**
 * Check if slug exists in table.
 *
 * @param mysqli $db
 * @param string $slug
 * @param string $table
 * @param string $column
 * @return bool
 */
function slugExists($db, $slug, $table = 'lead_sources', $column = 'slug')
{
    $stmt = $db->prepare("SELECT id FROM $table WHERE $column = ?");
    $stmt->bind_param("s", $slug);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result && $result->num_rows > 0;
}



















