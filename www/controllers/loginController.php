<?php 

class loginController extends controller{

    public function index(){
        $this->setCss(['login']);
        $this->setTitle('Login');
        $this->loadTemplate('login');
    }

    public function logar(){
        $cliente = new Clientes;
        $email = $_POST['email'];
        $search = [
            'email' => $email,
        ];
        $cliente = $cliente->findBy($search);
        
        if(empty($cliente['senha'])){
            $_SESSION['login_error'] = 'Email ou senha estão incorretos';
            header("Location: ".BASE_URL."login ");
            die();
        }

        if(!password_verify($_POST['senha'], $cliente['senha'])){
            $_SESSION['login_error'] = 'Email ou senha estão incorretos';
            header("Location: ".BASE_URL."login ");
            die();
        }

        $_SESSION['logged'] = true;
        $_SESSION['user'] = $cliente['usuario'];

        header("Location: ".BASE_URL."");
        die();

    }

}