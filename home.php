<?php

use mvc\controller\Controller;

include_once "mvc/controller/Controller.php"; 
$controller = new Controller();

    session_start();
    if ($_SESSION['login'] == true) {
        if (isset($_POST['logout'])){
            $controller->logoutAction();
        }elseif (isset($_POST['med'])) {
            $controller->showMedAction();
        }elseif (isset($_POST['showAddMed'])) {
            $controller->addMedAction();
        }elseif (isset($_POST['toevoegenMed'])) {
            $controller->saveMed();
        } elseif(isset($_POST['deleteMed'])) {
            $controller->deleteMed();
        } elseif(isset($_POST['editMed'])) {
            $controller->editMed();
        }elseif (isset($_POST['user'])) {
            $controller->showUserAction();
        } elseif (isset($_POST['patient'])) {
            $controller->showPatientAction();
        } else {
            $controller->showHomeAction();
        }
    } else {
        $controller->logoutAction();
    }