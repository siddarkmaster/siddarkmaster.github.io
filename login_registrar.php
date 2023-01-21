<?php

include('conexion.php');

$nombre = $_POST["txtnombre"];
$vehiculo	= $_POST["txtvehiculo"];
$fecha = $_POST["txtfecha"];
$hora	= $_POST["txthora"];



//Para registrar
if(isset($_POST["btnregistrarx"]))
{

$queryusuario 	= mysqli_query($conn,"SELECT * FROM usuarios WHERE nombre = '$nombre', vehiculo = '$vehiculo', fecha = '$fecha', hora = '$hora'");
$nr 			= mysqli_num_rows($queryusuario); 

if ($nr == 0)
{

	
	$queryregistrar = "INSERT INTO usuarios(nombre, vehiculo , fecha, hora) values ('$nombre','$vehiculo', '$fecha', '$hora')";
if(mysqli_query($conn,$queryregistrar))
{
	echo "<script> alert('Turno Registrado: $nombre');window.location= 'index2.html' </script>";
}
else 
{
	echo "Error: " .$queryregistrar."<br>".mysql_error($conn);
}

}else
{
		echo "<script> alert('Intente de nuevo No se puedo Registrar su Turno: $nombre');window.location= 'index.html' </script>";
}

} 

?>

