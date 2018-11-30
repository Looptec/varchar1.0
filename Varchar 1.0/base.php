<?php 
	$conexion = mysql_connect("localhost","root","");
   	mysql_select_db("Formulario",$conexion);
	$nom=$_POST['Nombre'];
	$ced=$_POST['Contrasena'];
	$sexo=$_POST['Email'];
	$dir=$_POST['Edad'];
	$tele=$_POST['Sexo'];
	$sql = "INSERT INTO client (Nombre,Contraseña,Email,Edad,Sexo) VALUES ('$nom','$ced','$sexo','$dir','$tele','$mail');";
	$num = mysql_query($sql, $conexion) or die(mysql_error());
	
	if($num>0)
		echo "<strong>Datos Guardados</strong><br><br>";
	
	mysql_close($conexion);
?>