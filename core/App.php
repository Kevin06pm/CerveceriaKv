<?php


/*
http://mvc.local?method=[index|show]&id=[id_usuario]
http://mvc.local/index.php?url=user/index


La peticion get:
http://mvc.local/controlador/metodo/arg1/arg
http://mvc.local/user/show/1

/user/show/1/ -> user/Show/1 (trim) -> [user,show,1] (explode)
// user -> UserController ; (ucword
*/


//APP htAccess -> Lo que hace es buscar metodos
//lo que hacemos normalmente (haces uso de get...)// mvc.local/index.php?url=/user/show/1
//APP -> // mvc.local/user/show/1

namespace Core;


class App
{
    function __construct() 
    {
        // TRANSFORMACION PARA EL CONTROLADOR
        isset($_GET["url"]) ? $url = $_GET["url"] : $url = "home";  //El fichero empieza por "cerveza" (La 1º letra siempre Mayus auto)

        //opcion2
        /*$url = isset($_GET["url"])? $_GET["url"] : "home";*/
        $arguments = explode('/',trim($url,'/'));

        //////////////////////////////////////////////////////////////////////

        // OBTENER CONTROLADOR

        $controllerName = array_shift($arguments); //ser | product | home..
                                                  //UserController . ProductController
        $controllerName = ucwords($controllerName) . "Controller"; // El fichero acabara con "Controller"  

        //cerveza+Controller =  CervezaController
        

        ////////////////////////////////////////////////////////////////////

        // TRANSFORMACION PARA EL METODO
        count($arguments) ? $method = array_shift($arguments) : $method = "index";
    
        
        /////////////////////////////////////////////////////////////////////

        //IMPORTAR EL CONTROLADOR
        $file = "Controller/$controllerName" . ".php"; //carpeta y fichero -> Si pones mal la ruta, no se pondra la pagina principal
        if(file_exists($file)){ //file_Exists -> existe fichero importado
            require "$file";        
        }else{
        
            http_response_code(404);
            echo "Recurso no encontrado";
            die();
        }

        //CREAR INSTANCIA DEL CONTROLADOR Y LLAMAR AL METODO
        $controllerName = "\\Controller\\" . $controllerName; //nameSpace de CervezaController
        $controllerObject = new $controllerName; //new \App\Controllers\UserController
        //verificar si existe el metood de la peticion en la clase/controlador
        if(method_exists($controllerObject, $method)){ //existe en el controlador ese metodo?
            //invocarlo
            $controllerObject -> $method($arguments); //  /user/store
        }else{ //sino = error
            http_response_code(404);
            //echo "Funcion no encontrada";
            require "../View/errors/pageerror.php";
            die();
        }


    }//Fin de constructor

}//Fin clase
