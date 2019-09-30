<?php
	require_once 'modelo/usuario.php';
	
	$objUsuario = new Usuario();


	$nomb=$_POST['nombre'];
	$apellido= $apellido=$_POST['apellido'];
	$ci=$_POST['tci']."-".$_POST['ci'];
	$correo=$_POST['tcorreo'].$_POST['correo'];
	$fecha=$_POST['fecha'];
	$cel=$_POST['tcel']."-".$_POST['cel'];
	$are=$_POST['are'];
	$direc=$_POST['direc'];
	$tip=$_POST['tipo'];
    
  
	$objUsuario->setCedula($ci);
	$objUsuario->setNombre($nomb);
	$objUsuario->setApellido($apellido);
	$objUsuario->setEmail($correo);
	$objUsuario->setFechan($fecha);
	$objUsuario->setCelular($cel);
	$objUsuario->setDependencia($are);
	$objUsuario->setDireccion($direc);
	$objUsuario->setRol($tip);

	$resulRegistrar=$objUsuario->Registrar();
	
	if ($resulRegistrar['estatus']== true) { ////verificamos si se ejecutó correctamente el método del modelo
		$mensaje = 'Registro Exitoso del Titular';
		}else {//si hay un error al registrar
	             $mensaje = 'Error al registrar el Titular, contacte con el soporte';}
	
	require_once 'vista/usuario/formularioU.php';
?>



