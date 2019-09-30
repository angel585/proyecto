
<?php
	require_once 'modelo/operativo.php';
	
	$objOperativo = new Operativo();
	$nomb=$_POST['nombre'];
	$precio=$_POST['precio'];
	$fechai=$_POST['fechai'];
	$fechaf= $_POST['fechaf'];
	$tipoo=$_POST['tipoo'];
	$descrip=$_POST['descrip'];

	$objOperativo->setNombre_o($nomb);
	$objOperativo->setPrecio_o($precio);
	$objOperativo->setFecha_inicio($fechai);
	$objOperativo->setFecha_final($fechaf);
	$objOperativo->setTipo_o($tipoo);
	$objOperativo->setDescripcion($descrip);

	$resulRegistrar=$objOperativo->Registrar();
	


	if ($resulRegistrar['estatus']== true) { ////verificamos si se ejecutó correctamente el método del modelo
		$mensaje = 'Registro Exitoso del Titular';
		}else {//si hay un error al registrar
	             $mensaje = 'Error al registrar el operativo, contacte con el soporte';}
	
	require_once 'vista/operativo/operativo_regis.php';
	header("Location:?url=operativo");
?>