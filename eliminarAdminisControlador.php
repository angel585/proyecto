<?php
	
	require_once ("modelo/usuario.php");

	$url = new Usuario();
	$url->eliminar($_GET["id"]);
	
	header("Location:?url=consultarAdminis&tipo=administrativo");


?>
