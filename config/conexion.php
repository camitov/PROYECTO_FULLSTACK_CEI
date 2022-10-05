<?php

/* Se crea la conección con la base de datos */
class Conectar
{
    protected $DB;
    protected function Conexion()
    {
        try {
            $conectar = $this->DB = new PDO("mysql:local=localhost;dbname=citas", "root", "");
            return $conectar;
        }
        /* Si hay error en la conexión saca un mensaje */ catch (Exception $e) {
            print "¡Error BD!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
/* Para no tener problema con las minúsculas ni mayusculas */
    public function set_names(){
        return $this->DB->query("SET NAMES 'utf8'");
    }

}
