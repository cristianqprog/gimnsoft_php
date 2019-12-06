<?
require 'config/class.conexion.php';

$rol_descripcion =$_POST['rol_descripcion'];

$insertar = "INSERT INTO 'roles' ('rol_descripcion') VALUES ('$rol_descripcion')";
$query=mysqli_query($conectar,$insertar)
if ($query) {
	echo 'guardado';
}else{
	echo "no guardado";
}

?>