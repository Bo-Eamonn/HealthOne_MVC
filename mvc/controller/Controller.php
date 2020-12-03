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
    public function showMedAction(){
        $result = $this->model->getMed();
        $this->view->showMed($result);
    }
    public function showUserAction(){
        $result = $this->model->getUsers();
        $this->view->showUsers($result);
    }
    public function showPatientAction(){
        $result = $this->model->getPatients();
        $this->view->showPatients($result);
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
    public function logoutAction()
    {
        $this->model->logout($_SESSION);
        
    }
}