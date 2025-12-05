<?php
// Enable debug
error_reporting(E_ALL);
ini_set('display_errors', 1);

$root = dirname(__DIR__);
// Base URL globally
$GLOBALS['base_url'] = '/tphl_project/public';
// Autoload classes
spl_autoload_register(function($class) use ($root) {
    $paths = [
        $root . "/app/core/$class.php",
        $root . "/app/models/$class.php",
        $root . "/app/controllers/$class.php"
    ];
    foreach ($paths as $file){
        if(file_exists($file)){
            require $file;
            return;
        }
    }
});

// Load config
$config = require $root . "/app/config/config.php";

// Create DB
$database = new Database($config);
$db = $database->conn;

// Routes
$routes = [
    "home"                 => ["controller" => "HomeController", "method" => "index"],
    "product-request"      => ["controller" => "ProductRequestController", "method" => "index"],
    "user-lists"           => ["controller" => "UserController", "method" => "index"],
    "create-user"          => ["controller" => "UserController", "method" => "create"],
    "customer-lists"       => ["controller" => "CustomerController", "method" => "index"],
    "create-customer"      => ["controller" => "CustomerController", "method" => "create"],
    "permissions"          => ["controller" => "PermissionController", "method" => "index"],
    "create-permission"    => ["controller" => "PermissionController", "method" => "create"],
    "store-permission"     => ["controller" => "PermissionController", "method" => "store"],
    "roles"                => ["controller" => "RoleController", "method" => "index"],
    "store-role"           =>["controller" => "RoleController", "method" => "store"],
];

// Detect route
$route = $_GET['route'] ?? null;
if (!$route) {
    $uri = strtok($_SERVER["REQUEST_URI"], '?');

    // Remove /tphl_project/public from URI
    $base_folder = '/tphl_project/public';
    if (strpos($uri, $base_folder) === 0) {
        $uri = substr($uri, strlen($base_folder));
    }

    $route = trim($uri, "/");
    if ($route === "") {
        $route = "home";
    }
}

// Validate route
if (!isset($routes[$route])) {
    die("404 - Route not found: $route");
}

// Controller + method
$controllerName = $routes[$route]["controller"];
$methodName     = $routes[$route]["method"];

// Instantiate
$controller = new $controllerName($db);

// Validate method
if (!method_exists($controller, $methodName)) {
    die("404 - Method not found: $methodName");
}

// Execute
$controller->$methodName();
