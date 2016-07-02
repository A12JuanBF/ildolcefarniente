<?php
include 'conexion.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of mostrarcarta
 *
 * @author JuanDiego
 */
class mostrarcarta extends conexion {
    private $local;

    public function __construct($local) {
        parent::__construct();
        $this->local = $local;
    }
    
    public function getplatos() {
        $sql = "select * from platos where local='".$this->local."';";
        $result = $this->con->query($sql);
        if ($this->con->affected_rows > 0) {
            while ($res = $result->fetch_assoc()) {
                $search[] = $res;
            }
            return json_encode($search);
        } else {
            echo 'No hay platos en esta categoría';
        }
    }
    public function getcarta() {
        $sql = "select * from carta where local='$this->local'";
        $result = $this->con->query($sql);
        if ($this->con->affected_rows > 0) {
            while ($res = $result->fetch_assoc()) {
                $search[] = $res;
            }
            return json_encode($search);
        } else {
            return false;
        }
    }
}
