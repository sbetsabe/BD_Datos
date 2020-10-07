<?php

/*class Database {

    public static function StartUp() {
        $user = "Betsabe";
        $password = "0598";
        $database = "BD_Datos";
        $server = "BT\SQLEXPRESS";
        
        try{
            $pdo = new PDO("sqlsrv:server=$server;database=$database",$user, $password);
            return $pdo;
        } catch (Exception $ex) {
            echo 'Error con la base de datos: '.$e->getMessage();
        }
    }
}*/

class Database {

    public static function StartUp() {
        
        try{
            $pdo = new PDO('sqlsrv:server=BT\SQLEXPRESS;dbname=BD_Datos;charset=utf8', 'Betsabe', '0598');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (Exception $ex) {
             echo "Ocurrió un error con la base de datos: " . $ex->getMessage();
        }
    }
}
