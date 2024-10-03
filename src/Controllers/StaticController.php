<?php

class StaticController
{

    public function main()
    {

        $page = $_GET['pagina'] ?? null;

        switch ($page) {

            case 'entrar':
                $this->login();
                break;

            case 'registrar':
                $this->register();
                break;

            default:
                $this->home();
                break;
                
        }
    }

    public function home()
    {
        require 'src/Views/Static/Home.html';
    }

    public function login()
    {
        require 'src/Views/Static/Login.html';
    }

    public function register()
    {
        require 'src/Views/Static/Register.html';
    }

}

?>