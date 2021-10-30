<?php
class ingreso
{	

  function mostrar($txtuser, $txtpassword)
  {
	
		include_once("php/includes/conexion_mysql.php");

		$puntero = new conexion_mysql();
		$puntero->conectar();

	if(!isset($_SESSION)) 
	{ 
    		session_start(); 
	}
	
	$link= $_SESSION['link'];

      //escape de caracteres

	$txtuser=mysqli_real_escape_string($link,$txtuser);
    $txtpassword  =mysqli_real_escape_string($link,$txtpassword);
	
	//codigo para traer perfil de usuario mientras se valida credenciales de acceso
	$sql= "SELECT usuario,clave FROM `sesion` WHERE usuario='$txtuser' AND clave=MD5('$txtpassword')";

	$result = $link ->query($sql); 

      //ciclo while para extraer datos de la base de datos
	while ($fila = $result->fetch_object())
 	{
	 
		
		$_SESSION['usuario']=$txtuser;
		$_SESSION['clave']=$txtpassword;
		$_SESSION['tiempo']=time();
	}

   }

 }
?>