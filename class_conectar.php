<?php
class Conectar{
	public static function con(){
		if (!($link=mysql_connect("localhost","root","")))
		{
			echo "Error conectando a la base de datos.";
			exit();
		}
		
		if (!mysql_select_db("bd_webcam",$link))
		{
			echo "Error seleccionando la base de datos.";
			exit();
		}

		return $link;
	}
}

/* 
$objcon= new Conectar();
$conexion=$objcon->con();
*/

?>
