<?php

class cadastroController extends controller{

    public function index(){
        $this->setCss(['cadastro']);
        $this->setTitle('Cadastro');
        $this->loadTemplate('cadastro');
    }

    public function store(){
        if(empty($_POST['usuario'])){
            $_SESSION['message_error']['usuario'] = 'Preencha um usuário';
        }

        if(empty($_POST['senha'])){
            $_SESSION['message_error']['senha'] = 'Preencha a senha';
        }

        if(empty($_POST['email'])){
            $_SESSION['message_error']['email'] = 'Preencha um e-mail';
        }else{
            if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                $_SESSION['message_error']['email'] = 'Digite um e-mail válido';
            }
        }

        if(!empty( $_SESSION['message_error'])){
            header("Location: ".BASE_URL."cadastro ");
            die;
        }

        $_POST['senha'] = password_hash($_POST['senha'], PASSWORD_DEFAULT);

        $cliente = new Clientes;
        if($cliente->create($_POST) > 0){
            $_SESSION['login_sucess'] = 'Cadastro feito com sucesso!';
            header("Location: ".BASE_URL."login ");
            die();
        }else{
            $_SESSION['message_error']['email'] = 'Este e-mail já está em uso';
            header("Location: ".BASE_URL."cadastro ");
            die();
        }

    }

}