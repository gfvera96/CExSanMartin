<?php
$folder = "../cv/";
$temp = explode(".", $_FILES["uploaded"]["name"]);
$newfilename = round(microtime(true)).'.'. end($temp);
$db_path ="$folder".$newfilename  ;
$listtype = array(
'.doc'=>'application/msword',
'.docx'=>'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
'.rtf'=>'application/rtf',
'.pdf'=>'application/pdf'); 

if(is_uploaded_file( $_FILES['uploaded']['tmp_name'] ) == null)
{
	echo '<script language="javascript">alert("Debes seleccionar un archivo");</script>';
            echo "<script language='JavaScript'>";
            echo "location = '../Trabaja.html'";
            echo "</script>"; 
}      

if ( is_uploaded_file( $_FILES['uploaded']['tmp_name'] ) )
{
if($key = array_search($_FILES['uploaded']['type'],$listtype))
{if (move_uploaded_file($_FILES['uploaded']  ['tmp_name'],"$folder".$newfilename))
{
echo '<script language="javascript">alert("Enviado correctamente");</script>';
            echo "<script language='JavaScript'>";
            echo "location = '../view/Trabaja.html'";
            echo "</script>"; 
            


$con = mysql_connect('localhost', 'root', '')  or die('No se pudo conectar: ' . mysql_error());
//echo 'Connected successfully';
mysql_select_db('Carniceria') or die('No se pudo seleccionar la base de datos');
mysql_set_charset('utf8');
$sql ="INSERT INTO cv
(filePath) VALUES ('$db_path')";
}
}
else    
{
	echo '<script language="javascript">alert("El Curriculum debe tener formato word o  pdf");</script>';
            echo "<script language='JavaScript'>";
            echo "location = '../view/Trabaja.html'";
            echo "</script>"; 

}
}
?>