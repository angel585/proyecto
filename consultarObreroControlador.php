<?php
	require_once ("modelo/usuario.php");

	      
	$con= new Usuario();
    $datos=$con->consultar($_GET["tipo"]);

	require_once ("vista/personal/conObrero.php");

?>
