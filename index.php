<?php

use mvc\controller\Controller;

include_once "mvc/controller/Controller.php"; 
$controller = new Controller();

// if(isset($_SESSION['role']) && $_SESSION['role']==3)
// {
    $controller->showMedAction();
    $controller->showUserAction();
    $controller->showPatientAction();

// } else {
//     $controller->loginAction();
// }
