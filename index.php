<?php

use mvc\controller\Controller;

include_once "mvc/controller/Controller.php"; 
$controller = new Controller();

    session_start();
// ADMIN LOGIN    
    if (isset($_SESSION['role']) && $_SESSION['role']=="admin") {
        if (isset($_POST['logout'])){
            $controller->logoutAction();
        }
//CRUD MED        
        elseif (isset($_POST['med']) || isset($_POST['cancelMed'])) {
            $controller->showMedAction();
        }elseif (isset($_POST['showAddMed'])) {
            $controller->addMedAction();
        }elseif (isset($_POST['toevoegenMed'])) {
            $controller->saveMed();
        } elseif(isset($_POST['deleteMed'])) {
            $controller->deleteMed();
        } elseif(isset($_POST['editMed'])) {
            $controller->editMed();
        }
//CRUD USER
        elseif (isset($_POST['user']) || isset($_POST['cancelUser'])) {
            $controller->showUserAction();
        }elseif (isset($_POST['showAddUser'])) {
            $controller->addUserAction();
        }elseif (isset($_POST['toevoegenUser'])) {
            $controller->saveUser();
        } elseif(isset($_POST['deleteUser'])) {
            $controller->deleteUser();
        } elseif(isset($_POST['editUser'])) {
            $controller->editUser();
        } 
//CRUD PATIENT
        elseif (isset($_POST['patient']) || isset($_POST['cancelPatient'])) {
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
        $controller->loginAction();
    }