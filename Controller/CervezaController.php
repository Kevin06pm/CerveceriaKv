<?php

namespace Controller;
require "models/Cerveza.php";
use Models\Cerveza;
//importar




class CervezaController
{
   

    function index(){
        $cervezas = Cerveza::all();
        //buscar datos
        //pasar a la vista
        require 'View/user/index.php';
    }
    

    function show($args){
        //args es un array, tomamos el id con uno de estos métodos
        // $id = (int) $args[0];
        $id = (int)$args[0];
        $cerveza = Cerveza::find($id);
        require "View/user/show.php";        
    }

    function create(){

        require "View/user/create.php";
    }

    function store(){
        $cerveza = new Cerveza();
        $cerveza->nombre = $_REQUEST["nombre"];
        $cerveza->tipo = $_REQUEST["tipo"];
        $cerveza->graduacion_alcoholica = $_REQUEST["graduacion_alcoholica"];
        $cerveza->pais = $_REQUEST["pais"];
        $cerveza->precio = $_REQUEST["precio"];
        $cerveza->ruta_imagen = $_REQUEST["ruta_imagen"];
        $cerveza->insert();

        header("Location: http://localhost/MVC2/cerveza/");

    }

    function edit($args){
        $id = (int)$args[0];
        $cerveza = Cerveza::find($id);
        require "View/user/edit.php";
        
    }

    function update(){
        $id = $_REQUEST["id"];
        $cerveza = Cerveza::find($id); //datos del usuario que se modificaran
        $cerveza->nombre = $_REQUEST["nombre"];
        $cerveza->tipo = $_REQUEST["tipo"];
        $cerveza->graduacion_alcoholica = $_REQUEST["graduacion_alcoholica"];
        $cerveza->pais = $_REQUEST["pais"];
        $cerveza->precio = $_REQUEST["precio"];
        $cerveza->ruta_imagen = $_REQUEST["ruta_imagen"];

        //Insertar Imagen o cambiar a nueva imagen
        
        if(isset($_FILES['nueva_imagen']) && $_FILES['nueva_imagen']['error'] === UPLOAD_ERR_OK) { //UPLOAD_ERR_OK -> Valor: 0; No hay error, fichero subido con éxito.

            $ruta_directorio = "img/";//la ruta del directorio
            $fichero_destino = $ruta_directorio . basename($_FILES["nueva_imagen"]["name"]); //basename->Devuelve el último componente de nombre de una ruta
            $imagen_tipo = end(explode('.', $fichero_destino)); //si acaba en con el contenido de la varibale fichero_destino
            //explode -> divide un array basado en un delimitador esprecificado// Divide cadenas basado en un delimitador
            //end-> Establece el puntero interno de un array a su último elemento
            
            $verificar = array("jpg", "jpeg", "png"); //verifico si las imagenes son de esos tipos
            $max_fichero = 10 * 1024 * 1024; // tamaño de la imagen
    
            if (in_array($imagen_tipo, $verificar) && $_FILES["nueva_imagen"]["size"] <= $max_fichero) { //in_array->  comprueba si un valor existe en un array

                move_uploaded_file($_FILES["nueva_imagen"]["tmp_name"], $fichero_destino); //move_uploaded_file -> Mueve un archivo subido a una nueva ubicación
                
                $cerveza->ruta_imagen = basename($_FILES["nueva_imagen"]["name"]); //se actualiza la ruta de la imagen en basede datos
            } else {
                // Manejar el error si el formato o el tamaño no son válidos
                echo "El formato o tamaño son invalidos :(";
                return;
            }
        }

        ///////
        
        $cerveza->save();
    
        header("Location: http://localhost/MVC2/cerveza/");
        
    }

    function delete($args){

        $id = (int)$args[0];
        $cerveza = Cerveza::find($id);
        $cerveza -> delete(); //llamo al metodo de models/Cerveza
        
        header("Location: http://localhost/MVC2/cerveza/");

    }

    
}













