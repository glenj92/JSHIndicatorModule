<?php

/**
 * Representa el la estructura de las metas
 * almacenadas en la base de datos
 */
require '../config/conexiondb.php';

class Login extends Conexion
{
    function __construct()
    {
    }

    /*
     * OBTENER USUARIO SOLICITADO
     */
    public function getUser($USER, $PASS)
    {
        

        $consulta = "SELECT * FROM USUARIO WHERE USUARIO = '".$USER."' AND PWD = '".$PASS."' ";
       // $this->getConexion();
        try {
            // Preparar sentencia
            $stmt = oci_parse($this->getConexionGEN(), $consulta);
            oci_execute($stmt, OCI_DEFAULT);
            $Array = array();
            while ($row = oci_fetch_array($stmt, OCI_ASSOC+OCI_RETURN_NULLS)) {
                    $Array[] = $row;
               
            }
            return $Array;

        } catch (Exception $e) {
            return false;
        }
    }
 

}
// $lgin = new Login;

// print_r(json_encode($lgin->getUser('aurzola', 'aaa')));

?>