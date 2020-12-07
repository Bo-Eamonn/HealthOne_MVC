<?php

use mvc\controller\Controller;

include_once "mvc/controller/Controller.php"; 
$controller = new Controller();

    session_start();
    if ($_SESSION['login'] == true) {
        if (isset($_POST['logout'])){
            $controller->logoutAction();
        }elseif (isset($_POST['med']) || isset($_POST['cancelMed'])) {
            $controller->showMedAction();
        }elseif (isset($_POST['showAddMed'])) {
            $controller->addMedAction();
        }elseif (isset($_POST['toevoegenMed'])) {
            $controller->saveMed();
        } elseif(isset($_POST['deleteMed'])) {
            $controller->deleteMed();
        } elseif(isset($_POST['editMed'])) {
            $controller->editMed();
        }elseif (isset($_POST['user']) || isset($_POST['cancelUser'])) {
            $controller->showUserAction();
        } elseif (isset($_POST['patient']) || isset($_POST['cancelPatient'])) {
            $controller->showPatientAction();
        }elseif (isset($_POST['showAddPatient'])) {
            $controller->addPatientAction();
        }elseif (isset($_POST['toevoegenPatient'])) {
            $controller->savePatient();
        } elseif(isset($_POST['deletePatient'])) {
            $controller->deletePatient();
        } elseif(isset($_POST['editPatient'])) {
            $controller->editPatient();}
        else {
            $controller->showHomeAction();
        }
    } else {
        $controller->logoutAction();
    }