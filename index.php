<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="../login/loginEstilos.css">
</head>
<body>
<p>Para registrarte ingresa tus datos personales</p>
<form action="index.php" method="POST">
<input type="text" name="nom" placeholder="Nombre"id="nom"required=""><br>
<input type="text" name="apePat" placeholder="Apellido paterno"id="apePat"required><br>
<input type="text" name="apeMat" placeholder="Apellido Materno"id="apeMat"required><br>
<input type="text" name="dir" placeholder="Direccion"id="dir"required><br>
<input type="text" name="tel" placeholder="Numero telefonico"id="nom"required><br>
<input type="text" name="email" placeholder="diremail"id="Ej.:usuario@servidor.com"required>
<p>finalamente captura el usuario y password, con el que accederas posteriormente</p>
<input type="text" name="texto" placeholder="Usuario"id="texto"required><br>
<input type="text" name="pass" placeholder="Password"id="pass"required><br>
<input type="submit" name="Guardar valores">
<input type="reset" value="Restaurar">
<div id="todolist">
	<?php
$servidor="localhost";
$nombredeusuario="root";
$password="";
$db="logeo";

$conexion=new mysqli($servidor,$nombreusuario,$password,$db);
if($conexion->connect_error){die("conexión fallida" . $conexión->connect_error);}
if(isset($_POST['texto'])){
$texto=$_POST['texto'];
$pass=$_POST['pass'];
$nom=$_POST['nom'];
$ape=$_POST['apePat'];
$apeM=$_POST['apeMat'];
$dir=$_POST['dir'];       
$tel=$_POST['tel'];
$email=$_POST['diremail'];
$sql ="INSERT INTO usuarios(usuario,contraseña,nombre,apellidoPat,apellidoMat,direccion,telefono,email) VALUES(`$texto` ,`$pass`,`$nom`,`$ape`,`$apeM`,`$dir`,`$tel`,`$email`)";
if($conexion->query($sql)===true)
{
	echo "<br>";
	echo"bievenido," .$nom ." ".$ape." ".$apeM ." " . "tus datos se han registrado exitosamente";
}else{ die("error al intentar registrarse" .$connection->error);}
 $conexion->close();
}
?>
<br>

<a href="ma.html">regresa al menu principal</a><br>
<a href="../login/index.html">acceder</a>
</div>
</form>



</body>
</html>