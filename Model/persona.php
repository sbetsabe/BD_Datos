<?php

class Persona{
    
    private $pdo;
    
    //Atributos
    public $cedula;
    public $nombre;
    public $apellidos;
    public $sexo;
    
    public function __CONSTRUCT() {
        try {
            $this->pdo = Database::StartUp();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
    //Mostrar en pantalla Lista de Personas
    public function Lista() {
        try {
            $result = array();

            $stm = $this->pdo->prepare("SELECT cedula, nombre, apellidos, sexo FROM Persona");
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
    public function Obtener($cedula){
        try{
            $stm = $this->pdo
                    ->prepare("SELECT * FROM Persona WHERE cedula = ?");
            
            $stm->execute(array($cedula));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $ex) {
            die($ex->getMessage());
        }
    }
    
    public function Actualizar($data) {
        try {
            $sql = "UPDATE Persona SET
                nombre = ?,
                apellidos  = ?,
                sexo = ?
                WHERE cedula = ?";

            $this->pdo->prepare($sql)
                    ->execute(
                            array(
                                $data->nombre,
                                $data->apellidos,
                                $data->sexo,
                                $data->cedula
                            )
            );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
    public function Registrar(Persona $data) {
        try {
            $sql = "INSERT INTO Persona(cedula, nombre, apellidos, sexo)
		        VALUES (?, ?, ?, ?)";


            $this->pdo->prepare($sql)
                    ->execute(
                            array(
                                $data->cedula,
                                $data->nombre,
                                $data->apellidos,
                                $data->sexo
                            )
            );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
    public function Eliminar($id) {
        try {
            $stm = $this->pdo
                    ->prepare("DELETE FROM Persona WHERE cedula = ?");

            $stm->execute(array($id));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}