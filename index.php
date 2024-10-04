<?php

    $page = $_GET['pagina'] ?? null;

    switch($page){
        case 'usuario':
            require'src/Controllers/UsersController.php';
            $controller = new UsersController();
            break;
        default;
            require 'src/Controllers/StaticController.php';
            $controller = new StaticController();   
    }


    $controller->main();