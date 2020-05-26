<?php
//conectamos con el servidor
    $conectar=@mysql_connect('localhost', 'root', '', 'formulario');
//verificamos la conexion
if (!$conectar) {
	echo "No se pudo conectar con el servidor";
}else{

	$base=mysql_select_db('prueba');

	if(!$base){
		echo "No se encontro la base de datos";
	}
}
//recuperar variables
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$contrase=$_POST['contrase'];

//hacemos la sentencia de sql
$sql="INSERT INTO datos VALUES ('$nombre',
                                '$correo',
                                '$password')";

//ejecutar las sentencia de sql
$ejecutar=mysql_query($aql);

//verificamos la ejecucion
if (!$ejecutar) {
	echo"Hubo algun error";
}else{
	echo "Datos guardador correctamente <br<a href='index.html'>Volver</a>";
}
?>