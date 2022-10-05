<?php
class Conectar {
    protected $DB;

    protected function Conexion(){
        try{
            $conectar = $this->DB = new PDO("mysql:local=localhost;dbname=citas", "root", "");
            return $conectar;
        }catch(Exception $e){
            print "¡Error BD!: " . $e ->getMessage() . "<br/>";
            die() 
        }
    }
} 
?>