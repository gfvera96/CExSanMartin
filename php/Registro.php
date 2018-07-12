<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['mail'];
$pass = $_POST['password'];
$perfil= "cliente";

$server = "localhost";
$user = "root";
$pass= "";
$bd = "Carniceriasprint1";

$con = mysqli_connect($server, $user, $pass, $bd);

if(!$con)
{
	die("Error al conectar:" .mysqli_connect_error());
}

$query = "insert into usuario values('".$nombre."','".$apellido."','".$correo."','".$pass."','".$perfil."')";

if(mysqli_query($con, $query))
{
    echo '<script language="javascript">alert("Registrado Correctamente");</script>';
	echo "<script language='JavaScript'>";
    echo "location = '../view/Login.html'";
    echo "</script>";
}
else
{
   echo '<script language="javascript">alert("Este usuario ya se encuentra registrado");</script>';
   echo "<script language='JavaScript'>";
   echo "location = '../view/Registrar.html'";
   echo "</script>";
}
    



?>








