<?php

use mvc\controller\Controller;

include_once "mvc/controller/Controller.php"; 
$controller = new Controller();

if(isset($_SESSION['role']) && $_SESSION['role'] === 'admin')
{
    if(isset($_POST['showForm']))
    {
        $controller->showUserAction($result);
    }else{
        $controller->showMedAction();
    }

} else {
    $controller->loginAction();
}
