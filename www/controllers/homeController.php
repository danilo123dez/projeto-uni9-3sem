<?php 

class homeController extends controller {

    public function index(){

        $this->setJs(['jquery.min', 'slick', 'home']);
        $this->setCss(['home', 'slick']);
        $this->setTitle('Home');
        $this->loadTemplate('home');
    }

}