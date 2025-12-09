



<?php
session_start();
require_once ("../app/helpers/helper.php");
// Enable debug
error_reporting(E_ALL);
ini_set('display_errors', 1);

$root = dirname(__DIR__);
$GLOBALS['base_url'] = '/tphl_project/public';

// Autoload classes
spl_autoload_register(function ($class) use ($root) {
    $paths = [
        $root . "/app/core/$class.php",
        $root . "/app/models/$class.php",
        $root . "/app/controllers/$class.php"
    ];
    foreach ($paths as $file) {
        if (file_exists($file)) {
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

// Routes (regex for ID)
$routes = [

    ""                 => ["controller" => "LoginController", "method" => "index"],
    "admin-login"           => ["controller" => "LoginController", "method" => "index"],
    "home"                 => ["controller" => "HomeController", "method" => "index"],
    "product-request"      => ["controller" => "ProductRequestController", "method" => "index"],
    "logout"             => ["controller" => "LoginController", "method" => "logout"],


    // users
    "user-lists"           => ["controller" => "UserController", "method" => "index"],
    "create-user"          => ["controller" => "UserController", "method" => "create"],
    "store-user"          => ["controller" => "UserController", "method" => "store"],
    "edit-user"          => ["controller" => "UserController", "method" => "edit"],
    "update-user"          => ["controller" => "UserController", "method" => "update"],


    "customer-lists"       => ["controller" => "CustomerController", "method" => "index"],
    "create-customer"      => ["controller" => "CustomerController", "method" => "create"],
    // permission
    "permissions"          => ["controller" => "PermissionController", "method" => "index"],
    "create-permission"    => ["controller" => "PermissionController", "method" => "create"],
    "store-permission"     => ["controller" => "PermissionController", "method" => "store"],
    // Roles
    "store-role"           => ["controller" => "RoleController", "method" => "store"],
    "get-role"      => ["controller" => "RoleController", "method" => "edit"],
    "update-role"   => ["controller" => "RoleController", "method" => "update"],

    // Tasks

    'task-lists' => ["controller" => "TaskController", "method" => "index"],
    'create-task' => ["controller" => "TaskController", "method" => "create"],
    'store-task' => ["controller" => "TaskController", "method" => "store"],
    'show-task/(\d+)' => ["controller" => "TaskController", "method" => "show"],
    'edit-task/(\d+)' => ["controller" => "TaskController", "method" => "edit"],
    'update-task/(\d+)' => ["controller" => "TaskController", "method" => "update"],
    'delete-task/(\d+)' => ["controller" => "TaskController", "method" => "delete"],

    // hrm 
    'departments' => ['controller' => 'DepartmentController', 'method' => "index"],
    'store-department' => ['controller' => 'DepartmentController', 'method' => "store"],
    'update-department' => ['controller' => 'DepartmentController', 'method' => "update"],
    'delete-department' => ['controller' => 'DepartmentController', 'method' => "delete"],
    // designations 
    'designations' => ['controller' => 'DesignationController', 'method' => "index"],
    'store-designation' => ['controller' => 'DesignationController', 'method' => "store"],
    'update-designation' => ['controller' => 'DesignationController', 'method' => "update"],
    'delete-designation' => ['controller' => 'DesignationController', 'method' => "delete"],

    // employees
    "employee-lists" => ["controller" => "EmployeeController", "method" => "index"],
    "create-employee" => ["controller" => "EmployeeController", "method" => "create"],
    "store-employee" => ["controller" => "EmployeeController", "method" => "store"],
    "edit-employee/(\d+)" => ["controller" => "EmployeeController", "method" => "edit"],
    "update-employee/(\d+)" => ["controller" => "EmployeeController", "method" => "update"],
    "delete-employee/(\d+)" => ["controller" => "EmployeeController", "method" => "delete"],
    "employee-dashboard"=> ["controller"=> "EmployeeController", "method"=> "dashboard"],

];

$route = trim(strtok($_SERVER["REQUEST_URI"], '?'), '/');

// Remove base folder if present
$base_folder = 'tphl_project/public';
if (strpos($route, $base_folder) === 0) {
    $route = substr($route, strlen($base_folder));
}
$route = trim($route, '/');

// Skip routes that don't need login
$skip_routes = ["admin-login", "admin-registration", "logout"];

// কোন routes skip হবে
if (!in_array($route, $skip_routes)) {
    checkLogin();
}


// Remove base folder
$base_folder = 'tphl_project/public';
if (strpos($route, $base_folder) === 0) {
    $route = substr($route, strlen($base_folder));
}

$route = trim($route, '/');

$matched = false;
$params = [];

foreach ($routes as $pattern => $routeInfo) {
    if (preg_match("#^$pattern$#", $route, $matches)) {
        $controllerName = $routeInfo['controller'];
        $methodName = $routeInfo['method'];
        $params = array_slice($matches, 1); // ID captured here
        $matched = true;
        break;
    }
}

if (!$matched) {
    die("404 - Route not found: $route");
}

// Instantiate controller
$controller = new $controllerName($db);

// Call method with ID param if exists
call_user_func_array([$controller, $methodName], $params);
