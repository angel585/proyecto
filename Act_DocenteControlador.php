


<?php
require_once 'modelo/usuario.php';

require_once("vista/personal/act_docen.php"); 	
  // si encuentra la cedula la envía a la vista de actualizar
	$objdocente = new Usuario(); 
    
 		//si la opcion es editar entra
		$id =$_POST['id'];		//se guarda el id recibido
		$usuario->setid($id);		//se enviar los metodo set
		$busqueda = $usuario->buscarxid();	//se buscan los usuarios con ese id (solo sera 1)
		
	


 	$nomb=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$ci=$_POST['tci']."-".$_POST['ci'];
	$correo=$_POST['tcorreo'].$_POST['correo'];
	$fecha=$_POST['fecha'];
	$cel=$_POST['tcel']."-".$_POST['cel'];
	$are=$_POST['are'];
	$direc=$_POST['direc'];
	$tip=$_POST['tipo'];

	$objdocente->setCedula($ci);
	$objdocente->setNombre($nomb);
	$objdocente->setApellido($apellido);
	$objdocente->setEmail($correo);
	$objdocente->setFechan($fecha);
	$objdocente->setCelular($cel);
	$objdocente->setDependencia($are);
	$objdocente->setDireccion($direc);
	$objdocente->setRol($tip);

	$resulmodificar=$objdocente->modificar();
	if ($resulmodificar['estatus']== true) { ////verificamos si se ejecutó correctamente el método del modelo
	$mensaje = 'Registro Exitoso Al Actualizar el Titular';
	}else {//si hay un error al registrar
	$mensaje = 'Error al Actualizar el Titular, contacte con el soporte';
	
	header("Location:?url=consultarDocente&tipo=docente");
	}


?>










