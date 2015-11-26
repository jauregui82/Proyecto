<?php
class BaseDatos
{
	private $conexion;
	
	public function BaseDatos()
	{
	  	if(!isset($this->conexion))
		{  
			include('clase_conexion.php');			
	  		$this->conexion = (mysql_connect($Servidor,$Usuario,$Contrasena)) or die(mysql_error());  
	  		mysql_select_db($Tabla,$this->conexion) or die(mysql_error());  
	  	}  
	}
	
	public function Consulta($parametro)
	{
	  	$resultado = mysql_query($parametro,$this->conexion) or die(mysql_error());  
		
	  	if(!$resultado)
		{  
	  		echo "Error al realizar la consulta: ".mysql_error();  
	  		exit;
	  	}
	  	return $resultado;   
	}
	
	public function Arreglo($consulta)
	{   
	  	return mysql_fetch_array($consulta);  
	}  

	public function Numero_Filas($consulta)
	{   
	  	return mysql_num_rows($consulta);  
	}
	
	public function Comprobar_Existe($consulta)
	{   
		if($this->Numero_Filas($consulta) > 0) 
		{
			return true; 
		}
	  	else
		{
			return false;
		}
	}	 

	public function CerrarCN()
	{
		mysql_close($this ->conexion);	
	}
}
?>