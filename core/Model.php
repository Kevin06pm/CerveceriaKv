<?php

namespace Core;

require 'config/db.php';

use const Config\SERVIDOR;
use const Config\DBNAME;
use const Config\USUARIO;
use const Config\PASSWORD;


//necesario para referirnos a ella
use PDO;
use PDOException;
/**
*
*/
class Model
{
    static function db()
    {
        try {
            $db = new PDO(SERVIDOR, USUARIO, PASSWORD);
            $db -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            // echo "Accedite a la bsasd";

        } catch (PDOException $e) {
            echo 'Falló la conexión: ' . $e->getMessage();
        }
        return $db;
    }
}