<?php

class Database {

    public static function StartUp() {
        $user = "Betsabe";
        $password = "0598";
        $database = "USUARIOS";
        $server = "BT\SQLEXPRESS";
        
        try{
            $pdo = new PDO("sqlsrv:server=$server;database=$database",$user, $password);
            return $pdo;
        } catch (Exception $ex) {
            echo 'Error con la base de datos: '.$e->getMessage();
        }
    }

}