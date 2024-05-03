<?php
    
	include('conexion.php');
$usuario=$_REQUEST['usuario'];
$contrasena=$_REQUEST['contrasena'];
    //Sentencia SQL para buscar un usuario con esos datos//
	

$ssql = "SELECT id, usuario, contrasena FROM usuario where usuario='$usuario' and contrasena='$contrasena'";

//Ejecuto la sentencia

/* Consultas de selección que devuelven un conjunto de resultados */
$resultado = $conexion->query($ssql);
$myrow = $resultado->fetch_array(MYSQLI_ASSOC);


$_SESSION['id']=$myrow['id'];
$_SESSION['usuario']=$myrow['usuario'];
$_SESSION['nombre']=$myrow['nombre'];
$_SESSION['apellido']=$myrow['apellido'];

@$row_cnt = $resultado->num_rows;
if ($row_cnt!=0){ 
    while ($myrow = $resultado->fetch_array(new mysqli));
   	@session_start(); 
	$id=$_SESSION['id'];
	$usuario=$_SESSION['usuario'];
	$nombre=$_SESSION['nombre'];
	$apellido=$_SESSION['apellido'];
	$usuario=$_REQUEST['usuario'];
    $contrasena=$_REQUEST['contrasena'];
		
	 echo "<script>"; 
	 echo "window.location='inicio.html';";
	 echo "</script>";	

   
}

else {
  
  echo "<script>"; 
	 echo "window.location='index.html';" ;
	 echo "</script>";	
  
 }
 $conexion->close();
	   
?>	








