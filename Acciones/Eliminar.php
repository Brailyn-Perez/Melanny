<?php  
//echo $_GET['id'];
include("../conectar/conexion.php");

if (isset($_GET['id'])) 
{
	$id_Eliminar = $_GET['id'];

	mysqli_query($con,"DELETE FROM `usuario` WHERE id='$id_Eliminar'");

	header("Location: ../lista.php");
}
else
{
	header("Location: ../lista.php");
}

?>