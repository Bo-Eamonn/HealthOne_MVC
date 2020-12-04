<?php

use mvc\controller\Controller;

include_once "mvc/controller/Controller.php"; 
$controller = new Controller();
session_start();

if(isset($_SESSION['role']) && $_SESSION['role']=="admin")
{
    echo "Succes";
    // $controller->showMedAction();
    // $controller->showUserAction();
    // $controller->showPatientAction();
    
} 
else {
    $controller->loginAction();
}
