<?php

	require_once ("modelo/operativo.php");

	      
	$con= new Operativo();
    $datos=$con->consultar();


	require_once("vista/operativo/operativo.php");

?>