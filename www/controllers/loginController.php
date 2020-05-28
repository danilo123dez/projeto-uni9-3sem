<?php 

class loginController extends controller{

    public function index(){
        $this->setCss(['login']);
        $this->setTitle('Login');
        $this->loadTemplate('login');
    }

}