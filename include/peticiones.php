<?php
include '../clases/clientes.php';
/*
  archivo php que gestiona las peticiones ajax a la BD
 */

if (!empty($_GET['op'])) {
    switch ($_GET['op']) {

        case 1:
            $cliente=new clientes("idfn");
            if($comrpobar=$cliente->insertarcliente($_POST))
            {
                echo 'Subscripción completada';
            }
            else{
                echo $comrpobar;
            }
            break;
    }
}