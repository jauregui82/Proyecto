<?php 
error_reporting(E_ALL ^ E_NOTICE);
include("acceso.php");
 $admin=$_POST['usuario'];
 $clave=$_POST['clave'];
 
 $BD = new BaseDatos();
$res = $BD->Consulta("SELECT idadmin FROM administrador WHERE idadmin='".$admin."'");
if ($BD->Comprobar_Existe($res)){
	$val = $BD->Consulta("SELECT clave FROM administrador WHERE clave='".$clave."' and idadmin='".$admin."'");
	if ($BD->Comprobar_Existe($val)){
		session_start();
		$_SESSION['usuario']=$admin;
		echo"<script>window.location.href='inicio.php';
		alert('Bienvenido')</script>";
	}
	else{ echo"<script>alert('Clave invalida');
	window.location.href='index.php'</script>";}
}
else{ echo"<script>alert('Usuario invalido');
	window.location.href='index.php'</script>";}
?>