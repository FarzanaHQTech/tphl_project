<?php

$url = $_GET["url"] ?? "home/index";
$url = explode("/", $url);

$controllerName = ucfirst($url[0]) . "Controller";
$method = $url[1] ?? "index";

require "../app/core/Controller.php";
require "../app/controllers/$controllerName.php";

$controller = new $controllerName;
$controller->$method();
