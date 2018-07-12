<?php
session_start();
$correo = $_POST['mail'];
$pass = $_POST['password'];
$con = mysql_connect('localhost', 'root', '')  or die('No se pudo conectar: ' . mysql_error());
//echo 'Connected successfully';
mysql_select_db('Carniceriasprint1') or die('No se pudo seleccionar la base de datos');
mysql_set_charset('utf8');

$sql="SELECT * FROM `usuario` WHERE `correo`='$correo' and `password`='$pass'"; // realizo la comparación con la base de datos
    $res=mysql_query($sql,$con);
    $filas= mysql_num_rows($res);
    if($row=mysql_fetch_array($res))
{
    $_SESSION['correo']=$row['correo']; // descargo id de la bd
    $_SESSION['pass']=$row['pass']; // descargo el nombre de la base de datos
    $ns=$row['perfil']; // descargo el niver de usuario
    if($ns=="cliente")
    {
        header('location: ../view/cliente.html');
    }
    elseif($ns=="administrador")
    {
        header('location: ../view/administrador.html');
    }
    elseif($ns=="admin")
    {
        header('location: ../view/admin.html');
    }

     

}
else
    {
            echo '<script language="javascript">alert("Datos incorrectos");</script>';
            echo "<script language='JavaScript'>";
            echo "location = '../view/Login.html'";
            echo "</script>";  

    }
    


?>