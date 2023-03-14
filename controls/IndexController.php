<?php
// include_once "../models/IndexModel.php";
/*include_once "../models/CategoryModel.php";
include_once "../models/ProductModel.php";*/
include_once "../library/mainFunctions.php";
include_once "../models/IndexModel.php";

function indexAction($smarty){


    $isAuth = checkAuth();
    // $rsCategory = getAllCategories();
    // $rsProduct = getAllProducts();
    $smarty -> assign("pageTitle", "Головна");
    $smarty -> assign("namePage", "Tech Zavd | Головна");
    $smarty -> assign("isAuth", $isAuth);
    // $smarty -> assign("rsCategory", $rsCategory);
    // $smarty -> assign("rsProduct", $rsProduct);
    // print_r("<h1 style='text-align:center;'>Hello from file '<u>".basename($_SERVER['PHP_SELF'])."</u>'</h1>");
    // print_r(getAllCategories());

    loadTemplate($smarty, "header");
    loadTemplate($smarty, "index");
    loadTemplate($smarty, "footer");
}