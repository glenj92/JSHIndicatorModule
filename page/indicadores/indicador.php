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
        

        $consulta = "SELECT I.CODINDICADO, 
            I.DESCRIPCION,
            I.VALORMINIMOACEPTADO, 
            A.AREAID,
            A.AREANOM,
            E.CODEMP,
            E.NOMBRE,
            E.APELLIDO1,
            E.APELLIDO2,
            I.FUNCION,
            I.VALORESPERADO,
            I.CODENT
            FROM INDICADO I INNER JOIN TIMCON.EMPLEADO E ON I.CODEMP = E.CODEMP
            INNER JOIN TIMCON.AREA A ON A.AREAID = I.AREAID ";
       // $this->getConexion();
        try {
            // Preparar sentencia
            $stmt = oci_parse($this->getConexionHSEQ(), $consulta);
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

    public function setIndicador($descrip, $val_min_acp, $cod_area, $cod_empl, $funcion, $val_esperado, $codent)
    {
        try {
            $stmt = oci_parse($this->getConexionHSEQ(), "INSERT into INDICADO
                    values(INDICADO_SEQ.NEXTVAL, '$descrip', $val_min_acp, $cod_area, $cod_empl, '$funcion', $val_esperado, $codent) ");
            return oci_execute($stmt);
        } catch (Exception $e) {
            return false;
        }
    }
 

}

// $indicador = new Indicador;
//     $insert = $indicador->setIndicador('indicador 1', 25, 3, 73130041, 'fx', 214, 1); 
//     if ($insert) {         
//         $salidaJSON=array("existe" => 1);
//         echo json_encode($salidaJSON);
//     }else{
//         $salidaJSON=array("existe" => 0);
//         echo json_encode($salidaJSON);
//     }
// $indicador = new Indicador;
// $indi = $indicador->getAll();

// foreach($indi as $obj){
                                          
//     print_r($obj["NOMBRE"]);
// }

?>