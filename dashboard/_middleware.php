<?php
include "./db/users.php";
session_start();
function mustLoggedIn()
{
    if (!isset($_SESSION['user'])) {
        header("location: ../index.php");
    }
}
function validRoles(array $roles)
{
    $user = $_SESSION['user'] ;
    
}


switch ($_SERVER['PHP_SELF']) {
    case "php_test/dashboard/index.php":
        mustLoggedIn();
        validRoles([1, 2, 3, 4]);
        break;
}


    // /php_test/dashboard/index.php