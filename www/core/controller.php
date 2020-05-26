<?php 

class controller {

    public $title = 'home';

    public function loadView($viewName, $viewData = array()){
        extract($viewData);
        require 'views/'.$viewName.".php";
    }

    public function loadTemplate($viewName, $viewData = array()){
        require 'views/template.php';
    }

    public function loadViewInTemplate($viewName, $viewData = array()){
        extract($viewData);
        require 'views/'.$viewName.".php";
    }

    public function setTitle($t){
        $this->title = $t;
    }

    public function getTitle(){
        return $this->title;
    }
}