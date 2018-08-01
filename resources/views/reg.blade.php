<?php
	//conexion con la base de datos y el servidor
	$link = mysql_connect("localhost","root","") or die("<h2>No se encuentra el servidor</h2>");
	$db = mysql_select_db("users",$link) or die("<h2>Error de Conexion</h2>");
	$db2 = mysql_select_db("password_resets",$link) or die("<h2>Error de Conexion</h2>");

	//obtenemos los valores del formulario
	$nombres = $_POST['name'];
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$rpass = $_POST['rpass'];

	//Obtiene la longitus de un string
	$req = (strlen($nombres)*strlen($email)*strlen($pass)*strlen($rpass)) or die("No se han llenado todos los campos");

	//se confirma la contraseña
	if ($pass != $rpass) {
		die('Las contraseñas no coinciden, Verifique <br /> <a href="index.html">Volver</a>');
	}

	//se encripta la contraseña
	$contraseñaUser = md5($pass);

	//ingresamos la informacion a la base de datos
	mysql_query("INSERT INTO users VALUES('','$nombres','$email','$contraseñaUser')",$link) or die("<h2>Error Guardando los datos</h2>");
	mysql_query("INSERT INTO password_resets VALUES('$email','$contraseñaUser')",$link) or die("<h2>Error Guardando los datos</h2>");

?>
