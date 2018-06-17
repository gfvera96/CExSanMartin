<?php
session_start();
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['mail'];
$pass = $_POST['password'];
$perfil= "cliente";

$conexion=mysqli_connect("localhost","root","","Carniceria");
$consulta = "INSERT into  usuario values('$nombre','$apellido','$correo','$pass','$perfil')";
$resultado = mysqli_query($conexion,$consulta);
$filas= mysqli_num_rows($resultado);

if($filas > 0)
{
	echo '<script language="javascript">alert("Error al registrar");</script>';
			echo "<script language='JavaScript'>";
           	echo "location = '../Registrar.html'";
            echo "</script>"; 
}

else{
	echo '<script language="javascript">alert("Registrado Correctamente");</script>';
			echo "<script language='JavaScript'>";
           	echo "location = '../Login.html'";
            echo "</script>"; 

	
	#echo '<script type="text/javascript">alert("Datos incorrectos");</script>';
	
	
	#header('location: ../index.html#Login');
	


}
mysqli_free_result($resultado);
mysqli_close($conexion);

?>