<HTML>
<HEAD>
<TITLE>Actualizar2.php</TITLE>
</HEAD>
<BODY>
<?
//Conexion con la base
mysql_connect("127.0.0.1","root","admin");

//selección de la base de datos con la que vamos a trabajar 
mysql_select_db("mibasededatos"); 
//Creamos la sentencia SQL y la ejecutamos
$sSQL="Update agenda Set telefono='$telefono' Where nombre='$nombre'";
mysql_query($sSQL);
?>

<h1><div align="center">Registro Actualizado</div></h1>
<div align="center"><a href="ejemplo2.php">Visualizar el contenido de la base</a></div>

</BODY>
</HTML>
