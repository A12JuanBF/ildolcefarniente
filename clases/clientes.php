<?php

include 'conexion.php';


/*
 * clase para intorducir los clientes ne BD
 *
 * @author JuanDiego
 */

class clientes extends conexion {

    private $local;

    public function __construct($local) {
        parent::__construct();
        $this->local = $local;
    }

    

    public function insertarcliente($param) {
        $sql = "select * from clientes where nombre='" . $param['nombre'] . "' or email='" . $param['email'] . "' and local='$this->local'";
        $result = $this->con->query($sql);
        if ($this->con->affected_rows > 0) {
            echo 'El nombre o el mail ya han sido registrados ';
        } else {
            $sql = "INSERT INTO clientes (nombre,email,local) VALUES ('" . $this->con->real_escape_string($param['nombre']) . "', '" . $this->con->real_escape_string($param['email']) . "','" . $this->local . "' );";
            return $result = $this->con->query($sql);
        }
    }

}
