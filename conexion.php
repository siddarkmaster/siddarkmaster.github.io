<?php
$conn = new mysqli("localhost","id16348805_root","12345_Facundo","id16348805_usuarios");
	
	if($conn->connect_errno)
	{
		echo "No hay conexión: (" . $conn->connect_errno . ") " . $conn->connect_error;
	}
?>