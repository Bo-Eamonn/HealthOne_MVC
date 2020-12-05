<?php

use mvc\controller\Controller;

include_once "mvc/controller/Controller.php"; 
$controller = new Controller();

    session_start();
    if ($_SESSION['login'] == true) {
        if (isset($_POST['med'])) {
            $controller->showMedAction();
        }
         elseif (isset($_POST['addMed'])) {
            $controller->addMedAction();
        } elseif (isset($_POST['user'])) {
            $controller->showUserAction();
        } elseif (isset($_POST['patient'])) {
            $controller->showPatientAction();
        } else {
            $controller->showHomeAction();
        }
    } else {
        header('Location: /HealthOne_MVC/');
    }