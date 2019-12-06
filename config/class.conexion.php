<?php
/**
 * 
 */
class Conexion extends mysqli
{
	private $host= 'localhost';
	private $user='root';
	private $pass='';
	private $db='gimnsoft_php';

	$conectar = mysqli_connect($host,$user,$pass,$db);
}
?>