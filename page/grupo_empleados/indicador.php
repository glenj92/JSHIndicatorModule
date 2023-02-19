<?php

/**
 * Representa el la estructura de las metas
 * almacenadas en la base de datos
 */
require '../../config/conexiondb.php';

class Indicador extends Conexion
{
    function __construct()
    {
    }

    /*
     * OBTENER TODOS LOS INDICADORES
     */
    public function getAll()
    {
        

        $consulta = "SELECT * FROM USUARIO ";
       // $this->getConexion();
        try {
            // Preparar sentencia
            $stmt = oci_parse($this->getConexion(), $consulta);
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

    public function setIndicador($connname)
    {
        $stmt = oci_parse($this->getConexion(), "INSER into hallo
                  values(to_char(sysdate,'DD-MON-YY HH24:MI:SS'))");
        oci_execute($stmt, OCI_DEFAULT);
        echo "$connname inserted row without committing<br>\n";
    }
 

}
// $indicador = new Indicador;
// $indi = $indicador->getAll();

// foreach($indi as $obj){
                                          
//     print_r($obj["NOMBRE"]);
// }

?>