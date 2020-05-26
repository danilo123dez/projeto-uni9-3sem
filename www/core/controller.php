<?php 

class controller {

    public $title = 'home';
    public $css = [];
    public $js = [];

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

    public function setCss(array $css){
        $this->css = $css;
    }

    public function getCss(){
        return $this->css;
    }

    public function setJs(array $js){
        $this->js = $js;
    }

    public function getJs(){
        return $this->js;
    }
}