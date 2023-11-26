<?php
namespace Models;
require 'core/Model.php'; # preparo el acceso a otro fichero
use PDO;
use Core\Model;

/**
*
*/
class Cerveza extends Model
{
    public static function all(){ //TODO }

        $db = Cerveza::db();
        $sql = "SELECT * FROM cervezas";
        $statement = $db->query($sql);
        $statement -> setFetchMode(PDO::FETCH_CLASS, Cerveza::class);
        $cervezas = $statement->fetchAll(PDO::FETCH_CLASS);

        return $cervezas;

    }
    public static function find($id){ //TODO }

    $db = self::db();
    $sql = "SELECT * FROM cervezas WHERE id = :id";
    $statement = $db->prepare($sql);
    $statement->bindValue(":id", $id);
    $statement->execute();

    $statement->setFetchMode(PDO::FETCH_CLASS, Cerveza::class);//cargar atriubutos de esa clase ///recupera como una clase / y los asigna a la clase user
    //fetch_class = crea automaticamente atributos de mi tabla -> $name, $username ...
    //para acceder a esos atributos, $user = new User() /// $user -> name; $user -> email ....

    $cerveza = $statement->fetch(PDO::FETCH_CLASS); //FETCHALL = devuelve un array(todas las columnas) -> users //FETCH= me devuelve un solo elemento
    
    return $cerveza;   
    }//find

    
    public function insert(){ //insertar }

        $db = self::db();
        $sql = "INSERT INTO cervezas(nombre,tipo,graduacion_alcoholica,pais,precio,ruta_imagen) VALUES(:nom,:tip,:graduacion,:paises,:preci,:imagen)";
        
        $statement = $db->prepare($sql);
        $statement->bindValue(":nom", $this-> nombre);
        $statement->bindValue(":tip", $this-> tipo);
        $statement->bindValue(":graduacion", $this-> graduacion_alcoholica);
        $statement->bindValue(":paises", $this-> pais);
        $statement->bindValue(":preci", $this-> precio);
        $statement->bindValue(":imagen", $this-> ruta_imagen);
        
        return $statement->execute();
    }   
    public function save(){ //TODO }

        $db = self::db(); //recupero conexion bd
        $sql = "UPDATE cervezas SET nombre = :nom, tipo = :tip, graduacion_alcoholica = :graduacion, pais = :paises, precio = :preci, ruta_imagen = :imagen
        WHERE id = :id";

        $statement = $db->prepare($sql);
        $statement->bindValue(":id", $this->id);        
        $statement->bindValue(":nom", $this-> nombre);
        $statement->bindValue(":tip", $this-> tipo);
        $statement->bindValue(":graduacion", $this-> graduacion_alcoholica);
        $statement->bindValue(":paises", $this-> pais);
        $statement->bindValue(":preci", $this-> precio);
        $statement->bindValue(":imagen", $this-> ruta_imagen);
        $statement->execute();



    }

    public function delete(){ //TODO }

        $db = self::db();
        $statement = $db->prepare("DELETE FROM cervezas WHERE id = :id");
        $statement->bindValue(':id', $this->id);
        return $statement->execute();

    }
}    