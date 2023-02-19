<?php
require_once 'oracle_login.php';

class Conexion{

	private $conGen;
	private $conHseq;

	function __construct()
    {    	
    }

    public function getConexionGEN(){
    	$this->conGen = oci_connect(USERNAME_GEN, PASSWORD_GEN, HOSTNAME_GEN) or oci_error(); 
    	return $this->conGen;
    }

    public function getConexionHSEQ(){
    	$this->conHseq = oci_connect(USERNAME_HSEQ, PASSWORD_HSEQ, HOSTNAME_HSEQ) or oci_error(); 
    	return $this->conHseq;
    }
}

?>