<?php 

class sairController {

    public function index(){
        unset($_SESSION['user']);
        unset($_SESSION['logged']);
        header("Location: ".BASE_URL."");
        die();
    }

}