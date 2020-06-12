<?php 

class contatoController extends controller {

    public function index(){
        $this->setCss(['contato']);
        $this->setTitle('Contato');
        $this->loadTemplate('contato');
    }

}