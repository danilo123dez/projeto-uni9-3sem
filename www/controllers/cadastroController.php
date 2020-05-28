<?php

class cadastroController extends controller{

    public function index(){
        $this->setCss(['cadastro']);
        $this->setTitle('Cadastro');
        $this->loadTemplate('cadastro');
    }

}