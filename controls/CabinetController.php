<?php
include_once "../models/CabinetModel.php";

function indexAction($smarty){
    $login = isset($_GET["login-login"])  ? $_GET["login-login"] : null;
    $pass = isset($_GET["login-password"])  ? $_GET["login-password"] : null;


    $smarty -> assign("pageTitle", "Кабінет");
    $smarty -> assign("namePage", "Tech Zavd | Кабінет");
    if(isset($login)){
        $user = showInfo($login, $pass);
        $smarty -> assign("user", $user);


        loadTemplate($smarty, "header");
        loadTemplate($smarty, "cabinet");
        loadTemplate($smarty, "footer");
    }
    else{
        $login = isset($_GET["registration-login"])  ? $_GET["registration-login"] : "null";
        $username = isset($_GET["registration-name"])  ? $_GET["registration-name"] : "null";
        $pass = isset($_GET["registration-password"])  ? $_GET["registration-password"] : "null";
        $email = isset($_GET["registration-email"])  ? $_GET["registration-email"] : "null";
        $phone = isset($_GET["registration-phone"])  ? $_GET["registration-phone"] : "null";
        $user = showRegisteredInfo($login, $username, $pass, $email, $phone);

        $smarty -> assign("user", $user);
        loadTemplate($smarty, "header");
        loadTemplate($smarty, "cabinet");
        loadTemplate($smarty, "footer");
    }

}

