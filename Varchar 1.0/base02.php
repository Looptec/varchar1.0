<?php
		$conexion = mysql_connect("localhost","root","");
   		mysql_select_db("Formulario",$conexion);
		$Nombre=$_POST['Nombre'];
		$Contrasena=$_POST['Contrasena'];
		$Email=$_POST['Email'];
		$Edad=$_POST['Edad'];
		$Sexo=$_POST['Sexo'];
		$sql = "INSERT INTO client (Nombre,Contrasena,Email,Edad,Sexo) VALUES ('$Nombre','$Contrasena','$Email','$Edad','$Sexo')";
		$num = mysql_query($sql, $conexion) or die(mysql_error());
	
	if($num>0)
		echo "<strong>Datos Guardados</strong><br><br>";
	
	mysql_close($conexion);
  ?>