<?php
// includes
include_once "../library/mainFunctions.php";
include_once "../config/config.php";
include "../config/dbParams.php";

// take name of controller file
$controllerName = isset($_GET["controller"]) ? ucfirst($_GET["controller"]) : "Index";
// take name of action or function
$actionName = isset($GET["action"]) ? $GET["action"] : "index";

loadPage($smarty, $controllerName, $actionName);