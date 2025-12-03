<?php



$url = $_GET["url"] ?? "property/index";
$url = explode("/",$url);
$controllerName = ucfirst($url[0]) . "Controller";
$method = $url[1] ?? "index";
require "../app/core/Controler.php";
require "../app/Controllers/$controllerName.php";

$controller = new $controllerName;
$controller->method();

