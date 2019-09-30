<?php
	
	require_once ("modelo/operativo.php");

	$url = new Operativo();
	$url->eliminar($_GET["id"]);
	
	header("Location:?url=operativo");


?>
