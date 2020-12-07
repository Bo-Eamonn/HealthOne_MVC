<?php

namespace mvc\controller;
include_once "mvc/view/View.php";
use mvc\view\View;
include_once "mvc/model/Patient.php";
use mvc\model\Patient;
include_once "mvc/model/Med.php";
use mvc\model\Med;
include_once "mvc/model/User.php";
use mvc\model\User;
include_once "mvc/model/Model.php";
use mvc\model\Model;

class Controller{
    private $view;
    private $model;
    public function __construct(){
        $this->model = new Model();
        $this->view = new View($this->model);
    }
//CRUD MED
    public function showMedAction(){
        $result = $this->model->getMed();
        $this->view->showMed($result);
    }
    public function addMedAction(){
        $result = "";
        $this->view->createMed($result);
    }
    public function saveMed() {
        $name = filter_input(INPUT_POST,'name');
        $cat = $_POST["cat"];
        $insured = filter_input(INPUT_POST,'insured');
        $this->model->createMed($name, $cat, $insured);
        $this->showMedAction();
    }
    public function deleteMed() {
        $id = $_POST["deleteMed"];
        $test = $this->model->deleteMed($id);
        $this->showMedAction();
    }
    public function editMed() {
        $id = $_POST["editMed"];
        $med = $this->model->getMed($id);
        $this->view->updateMed($med);

    }
//CRUD USER
    public function showUserAction(){
        $result = $this->model->getUsers();
        $this->view->showUsers($result);
    }
//CRUD PATIENT
    public function showPatientAction(){
        $result = $this->model->getPatients();
        $this->view->showPatients($result);
    }
    public function addPatientAction(){
        $result = "";
        $this->view->createPatient($result);
    }
    public function savePatient() {
        $naam = filter_input(INPUT_POST,'naam');
        $huidigeMed = filter_input(INPUT_POST,'huidigeMed');
        $medHis = filter_input(INPUT_POST,'medHis');
        $notes = filter_input(INPUT_POST,'notes');
        $adres = filter_input(INPUT_POST,'adres');
        $woonplaats = filter_input(INPUT_POST,'woonplaats');
        $zknummer = filter_input(INPUT_POST,'zknummer');
        $geboortedatum = filter_input(INPUT_POST,'geboortedatum');
        $soortVerzekering = $_POST["soortVerzekering"];
        $this->model->createPatient($naam, $huidigeMed, $medHis, $notes, $adres, $woonplaats, $zknummer, $geboortedatum, $soortVerzekering);
        $this->showPatientAction();
    }
    public function deletePatient() {
        $id = $_POST["deletePatient"];
        $test = $this->model->deletePatient($id);
        $this->showPatientAction($test);
    }
    public function editPatient() {
        $id = $_POST["editPatient"];
        $med = $this->model->getPatients($id);
        $this->view->updatePatient($med);

    }
    public function loginAction()
    {
        if (isset($_POST['uname']) && isset($_POST['pswrd'])) {
            $uname = filter_input(INPUT_POST, 'uname');
            $pswrd = filter_input(INPUT_POST, 'pswrd');
            $this->model->login($uname, $pswrd);
        } else {
            $this->view->showLogin();
        }
    }
    public function logoutAction(){
        $this->model->logout();
        $this->view->showLogin();
        
    }
    public function showHomeAction(){
        $this->model->getHome();
        $this->view->showHome();
    }
}