<?php

namespace view;
include_once ('model/Model.php');
include_once ('model/User.php');
include_once ('model/Patient');
include_once ('model/Med.php');

class View{

    private $model;
    public function __construct($model){
        $this->model = $model;
    }
    public function showUsers($result = null){
        if($result ==1){
            echo "TEST TEST... Working";
        }
        $users = $this->model->getUsers();
        
        include_once('templates/header.php');
        include_once('templates/nav.php');
        
        
        
    }

}