<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	require 'indicador.php';

	$indicador = new Indicador;
    $insert = $indicador->setIndicador($_POST['DESCRIPCION'], $_POST['VALORMINIMOACEPTADO'], 3, 73130041, $_POST['FUNCION'], $_POST['VALORESPERADO'], 1);
    if ($insert) {	       
		$salidaJSON=array("existe" => 1);
		echo json_encode($salidaJSON);
	}else{
		$salidaJSON=array("existe" => 0);
		echo json_encode($salidaJSON);
	}

}
?>