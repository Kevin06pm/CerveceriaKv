<?php

namespace Controller;
require "models/Cerveza.php";
use Models\Cerveza;
//importar




class HomeController
{
   

    function index(){
        $cervezas = Cerveza::all();
        //buscar datos
        //pasar a la vista
        require 'View/home/principal.php';
    }
    

    
}













