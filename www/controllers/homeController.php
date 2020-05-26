<?php 

class homeController extends controller {

    public function index(){
        $anuncios = new Anuncios();

        $dados = array(
            "quantidade" => $anuncios->getQuantidade()
        );
        
        $this->setTitle('Home');
        $this->loadTemplate('home', $dados);
    }

}