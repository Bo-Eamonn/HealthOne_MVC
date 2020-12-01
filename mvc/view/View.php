<?php

namespace mvc\view;
include_once ('mvc/model/Model.php');
include_once ('mvc/model/User.php');
include_once ('mvc/model/Patient.php');
include_once ('mvc/model/Med.php');

class View{

    private $model;
    public function __construct($model){
        $this->model = $model;
    }
    
    public function showMed($result){
        require ('templates/med/showMed.php');
    }
    public function showUsers(){
        require ('templates/user/showUser.php');
    }
    public function showPatients(){
        require ('templates/patient/showPatient.php');
    }

}