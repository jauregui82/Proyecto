<?php
require_once("class_conectar.php");
	
	$objcon= new Conectar();
    $conexion=$objcon->con();
/*---------------------CLASE USUARIOS, DONDE ESTARAN LAS FUNCIONES PARA MANIPULAR LOS USUARIOS------------*/
class Usuarios 
{
	private $respues_registro;
	private $respues_modificar;
	private $respues_clave;
	private $respues_claveactual;
	private $respues_borrar;
	private $respues_estado;
	private $respues_modificar_todo;
	private $respues_datosrecuperar;
	private $respues_clave_recuperar;
	private $repues_datos=array();
	private $respues_consultar_socio=array();
	private $respues_consultar_nosocio=array();
	public $nivel=array();
	private $usuario=array();


	/*-------------------------------FUNCION PARA EL LOGIN DE UN USUARIO-------------------------------*/
	public function login($usuario,$clave)
	{
	
	//print_r($_POST);
	$sql="SELECT * FROM tbl_usuario  WHERE usuario='$usuario' and clave='$clave'";
			$res=mysql_query($sql,Conectar::con()) or die(mysql_error());  
             mysql_close(Conectar::con());	
			//echo $sql;
			if ($reg=mysql_fetch_assoc($res))
		{
			$this->usuario[]=$reg;
		}
			return $this->usuario;
	}


	/*-----------------------------FUNCION PARA REGISTRAR UN NUEVO USUARIO----------------------------*/
    public function registro($cedula, $nac, $nombre_1, $nombre_2, $apellido_1, $apellido_2, $correo, $num_tel, $nivel, $nro_accion, $usuario, $clave, $ip)
	     {	
 			 $reg = mysql_query("INSERT INTO tbl_usuario (cedula , nac, nombre_1 , nombre_2 , apellido_1 , apellido_2 , correo , num_tel , nivel , nro_accion , usuario , clave, ip) VALUES ('$cedula' , '$nac', '$nombre_1' , '$nombre_2' , '$apellido_1' , '$apellido_2' , '$correo' , '$num_tel' , '$nivel' , '$nro_accion' , '$usuario' , '$clave',  '$ip' )");   
        	 mysql_close(Conectar::con());
       		 $this->respues_registro=$reg;
        	 return $this->respues_registro;
 		}
	

	/*----------------------------- FUNCION PARA MODIFICAR REGISTROS COMO USUARIO ----------------------------*/
    public function modificar($correo, $num_tel, $usuario)
	     {	
 			 $reg = mysql_query("UPDATE tbl_usuario SET 
 			 	correo='$correo', 
 			 	num_tel='$num_tel'   

 			 	WHERE usuario='$usuario'"); 
        	 mysql_close(Conectar::con());
       		 $this->respues_modificar=$reg;
        	 return $this->respues_modificar;
 		}
	/*----------------------------- FUNCION PARA MODIFICAR REGISTROS COMO ADMINISTRADOR ----------------------------*/
	public function modificar_todo($ID, $cedula, $nombre_1, $nombre_2, $apellido_1, $apellido_2, $correo, $num_tel, $nivel, $nro_accion, $usuario)
	     {	
 			 $reg = mysql_query("UPDATE tbl_usuario SET 
 			 	cedula='$cedula',
 			 	nombre_1='$nombre_1', 
 			 	nombre_2='$nombre_2', 
 			 	apellido_1='$apellido_1', 
 			 	apellido_2='$apellido_2', 
 			 	correo='$correo', 
 			 	num_tel='$num_tel', 
 			 	nivel='$nivel', 
 			 	nro_accion='$nro_accion'  

 			 	WHERE ID='$ID'"); 
        	 mysql_close(Conectar::con());
       		 $this->respues_modificar_todo=$reg;
        	 return $this->respues_modificar_todo;
 		}
/*----------------------------- FUNCION PARA CAMBIAR CLAVE ----------------------------*/
    public function clave($clave_nueva, $usuario)
	     {	

	     	 $reg = mysql_query("UPDATE tbl_usuario SET 
 			 	clave ='$clave_nueva'
 			 	WHERE usuario='$usuario'"); 
        	 mysql_close(Conectar::con()) or die(mysql_error());;
       		 $this->respues_clave=$reg;
        	 return $this->respues_clave;
 		}
 /*----------------------------- FUNCION PARA OBTENER Y COMPARAR LAS CLAVES ACTUALES ----------------------------*/
    public function clave_actual($usuario, $clave)
	     {	

	     	 $sql="SELECT  clave FROM tbl_usuario WHERE  usuario='$usuario' and clave='$clave'";
	     	 $res=mysql_query($sql,Conectar::con()) or die(mysql_error()); 
        	 mysql_close(Conectar::con());
       		 if ($reg=mysql_fetch_assoc($res))
			{
				$this->respues_claveactual=$reg;
		}
			return $this->respues_claveactual;
 		}
/*-----------------------------FUNCION PARA CONSULTAR LOS SOCIOS-------------------------------------------*/
 	public function consultar_socio()
  {
     $sql="SELECT * FROM tbl_usuario WHERE nivel='S'";
	 $res=mysql_query($sql,Conectar::con());
	  while($reg=mysql_fetch_assoc($res))
	   {
		$this->respues_consultar_socio[]=$reg;
	   }
     mysql_close(Conectar::con());
	return $this->respues_consultar_socio;
   
  }

/*-----------------------------FUNCION PARA CONSULTAR LOS NO SOCIOS-------------------------------------------*/
 	public function consultar_no_socio()
  {
     $sql="SELECT * FROM tbl_usuario WHERE nivel='NS'";
	 $res=mysql_query($sql,Conectar::con());
	  while($reg=mysql_fetch_assoc($res))
	   {
		$this->respues_consultar_nosocio[]=$reg;
	   }
     mysql_close(Conectar::con());
	return $this->respues_consultar_nosocio;
   
  }
/*-----------------------------FUNCION PARA ONTENER TODOS LOS DATOS-------------------------------------------*/
  public function datos($ID)
	{
	//print_r($_POST);
	$sql="SELECT * FROM tbl_usuario  WHERE ID='$ID'";
			$res=mysql_query($sql,Conectar::con()) or die(mysql_error());  
             mysql_close(Conectar::con());	
			//echo $sql;
			if ($reg=mysql_fetch_assoc($res))
		{
			$this->respues_datos[]=$reg;
		}
			return $this->respues_datos;
	}


	/*-----------------------------FUNCION ELIMINAR USUARIO-------------------------------------------*/

	public function borrar($ID)
    {
		$sql="DELETE FROM tbl_usuario WHERE ID='$ID'";
      //echo "$sql<br>";
		$reg=mysql_query($sql,Conectar::con()) or die(mysql_error());
		mysql_close(Conectar::con());
		$this->respues_borrar=$reg;
		return $this->respues_borrar;
	}

	/*----------------------------- FUNCION PARA MODIFICAR EL ESTADO DE UN USUARIO ----------------------------*/
	public function estado($ID,$edo_registro)
	     {	
	     	$sql="UPDATE tbl_usuario SET edo_registro='$edo_registro' WHERE ID='$ID'";
			$reg=mysql_query($sql,Conectar::con()) or die(mysql_error());
			mysql_close(Conectar::con());
			$this->respues_estado=$reg;
			return $this->respues_estado;
 		}

/*----------------------------- FUNCION PARA OBTENER DATOS ESPECIFICOS DE UN USUARIO ----------------------------*/
    public function datos_recuperar($usuario)
	     {	

	     	 $sql="SELECT correo FROM tbl_usuario WHERE  usuario='$usuario' ";
	     	 $res=mysql_query($sql,Conectar::con()) or die(mysql_error()); 
        	 mysql_close(Conectar::con());
       		 if ($reg=mysql_fetch_assoc($res))
			{
				$this->respues_datosrecuperar=$reg;
		}
			return $this->respues_datosrecuperar;
 		}
 /*----------------------------- FUNCION PARA ACTUALIZAR LA CLAVE DE UN USUARIO QUE OLVIDO----------------------------*/
    public function clave_recuperar($clave, $usuario)
	     {	
 			 $reg = mysql_query("UPDATE tbl_usuario SET 
 			 	clave='$clave'
 			 	WHERE usuario='$usuario'") or die(mysql_error()); 
        	 mysql_close(Conectar::con()) or die(mysql_error());
       		 $this->respues_clave_recuperar=$reg;
        	 return $this->respues_clave_recuperar;
 		}

	/*-----------------------------FUNCION PARA GUARDAR LA IP DE CLIENTE----------------------------*/
	function ip() {
	    if (!empty($_SERVER['HTTP_CLIENT_IP']))
	    {
	    	return $_SERVER['HTTP_CLIENT_IP'];
	    }	       
	    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
	    {
	        return $_SERVER['HTTP_X_FORWARDED_FOR'];
	    }
	    return $_SERVER['REMOTE_ADDR'];
	}



}

?>