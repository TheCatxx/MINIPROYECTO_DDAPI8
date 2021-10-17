<?php
include_once 'db.php';

/* code for data insert */
if (isset($_POST['save-registrar']))
{

	$nombre = $MySQLiconn->real_escape_string($_POST['nombre']);
	$apellido = $MySQLiconn->real_escape_string($_POST['apellido']);
	$clave = $MySQLiconn->real_escape_string($_POST['clave']);
	$correo = $MySQLiconn->real_escape_string($_POST['correo']);
	$dni = $MySQLiconn->real_escape_string($_POST['dni']);
	$nacionalidad = $MySQLiconn->real_escape_string($_POST['nacionalidad']);
	$celular = $MySQLiconn->real_escape_string($_POST['celular']);
	$tipo = $MySQLiconn->real_escape_string($_POST['tipo']);
	$SQL = $MySQLiconn->query("INSERT INTO usuario(nombre,apellido,clave,correo,dni,nacionalidad,celular,tipo)VALUES('$nombre','$apellido','$clave','$correo','$dni','$nacionalidad','$celular','$tipo')");
	header("Location: index.php");
	if(!$SQL)
	{
		echo $MySQLiconn->error;
	}
}

if (isset($_POST['save']))
{

	$nombre = $MySQLiconn->real_escape_string($_POST['nombre']);
	$apellido = $MySQLiconn->real_escape_string($_POST['apellido']);
	$clave = $MySQLiconn->real_escape_string($_POST['clave']);
	$correo = $MySQLiconn->real_escape_string($_POST['correo']);
	$dni = $MySQLiconn->real_escape_string($_POST['dni']);
	$nacionalidad = $MySQLiconn->real_escape_string($_POST['nacionalidad']);
	$celular = $MySQLiconn->real_escape_string($_POST['celular']);
	$tipo = $MySQLiconn->real_escape_string($_POST['tipo']);
	$SQL = $MySQLiconn->query("INSERT INTO usuario(nombre,apellido,clave,correo,dni,nacionalidad,celular,tipo)VALUES('$nombre','$apellido','$clave','$correo','$dni','$nacionalidad','$celular','$tipo')");
	header("Location: admin.php");
	if(!$SQL)
	{
		echo $MySQLiconn->error;
	}
}

/* code for data insert */


/* code for date delete */
if(isset($_GET['del']))
{
	$SQL = $MySQLiconn->query("DELETE FROM usuario WHERE id=".$_GET['del']);
	header("Location: admin.php");
}
/* code for data delete */



/* code for date update */
if(isset($_GET['edit']))
{
	$SQL = $MySQLiconn->query("SELECT * FROM usuario WHERE id=".$_GET['edit']);
	$getROW = $SQL->fetch_array();
}

if(isset($_POST['update']))
{
	$SQL = $MySQLiconn->query("UPDATE usuario SET nombre='".$_POST['nombre']."', apellido='".$_POST['apellido']."',clave='".$_POST['clave']."',correo='".$_POST['correo']."',dni='".$_POST['dni']."',nacionalidad='".$_POST['nacionalidad']."',celular='".$_POST['celular']."',tipo='".$_POST['tipo']."' WHERE id=".$_GET['edit']);
	header("Location: admin.php");
}
/* code for data update */




/* ---------------------- Pais CRUD ---------------------- */

if (isset($_POST['savep']))
{

	$nombre = $MySQLiconn->real_escape_string($_POST['nombre']);
	$abreviatura = $MySQLiconn->real_escape_string($_POST['apellido']);
	$delegado = $MySQLiconn->real_escape_string($_POST['delegado']);
	$SQL = $MySQLiconn->query("INSERT INTO pais(nombre,abreviatura,delegado)VALUES('$nombre','$abreviatura','$delegado')");
	header("Location: pais.php");
	if(!$SQL)
	{
		echo $MySQLiconn->error;
	}
}

/* code for data insert */


/* code for date delete */
if(isset($_GET['delp']))
{
	$SQL = $MySQLiconn->query("DELETE FROM pais WHERE id=".$_GET['delp']);
	header("Location: pais.php");
}
/* code for data delete */



/* code for date update */
if(isset($_GET['editp']))
{
	$SQL = $MySQLiconn->query("SELECT * FROM pais WHERE id=".$_GET['editp']);
	$getROW = $SQL->fetch_array();
	
}

if(isset($_POST['updatep']))
{
	$SQL = $MySQLiconn->query("UPDATE pais SET nombre='".$_POST['nombre']."', abreviatura='".$_POST['abreviatura']."',delegado='".$_POST['delegado']."' WHERE id=".$_GET['editp']);
	header("Location: pais.php");
}
/* code for data update */



/* ------------------- Producto CRUD -------------------- */

if (isset($_POST['savepr']))
{

	$nombre = $MySQLiconn->real_escape_string($_POST['nombre']);
	$descripcion = $MySQLiconn->real_escape_string($_POST['descripcion']);
	$cantidad = $MySQLiconn->real_escape_string($_POST['cantidad']);
	$monto = $MySQLiconn->real_escape_string($_POST['monto']);
	$SQL = $MySQLiconn->query("INSERT INTO producto(nombre,descripcion,cantidad,monto)VALUES('$nombre','$descripcion','$cantidad','$monto')");
	header("Location: producto.php");
	if(!$SQL)
	{
		echo $MySQLiconn->error;
	}
}

/* code for data insert */


/* code for date delete */
if(isset($_GET['delpr']))
{
	$SQL = $MySQLiconn->query("DELETE FROM producto WHERE id=".$_GET['delpr']);
	header("Location: producto.php");
}
/* code for data delete */



/* code for date update */
if(isset($_GET['editpr']))
{
	$SQL = $MySQLiconn->query("SELECT * FROM producto WHERE id=".$_GET['editpr']);
	$getROW = $SQL->fetch_array();
}

if(isset($_POST['updatepr']))
{
	$SQL = $MySQLiconn->query("UPDATE producto SET nombre='".$_POST['nombre']."', descripcion='".$_POST['descripcion']."',cantidad='".$_POST['cantidad']."',monto='".$_POST['monto']."' WHERE id=".$_GET['editpr']);
	header("Location: producto.php");
}
/* code for data update */



/* ------------------------- Comercial CRUD ---------------------- */

if (isset($_POST['savec']))
{
	$idpais = $MySQLiconn->real_escape_string($_POST['idpais']);
	$idproducto = $MySQLiconn->real_escape_string($_POST['idproducto']);
	$fec_inicio = $MySQLiconn->real_escape_string($_POST['fec_inicio']);
	$descripcion = $MySQLiconn->real_escape_string($_POST['descripcion']);
	$tipo = $MySQLiconn->real_escape_string($_POST['tipo']);
	$SQL = $MySQLiconn->query("INSERT INTO comercial(idpais,idproducto,fec_inicio,descripcion,tipo)VALUES('$idpais','$idproducto','$fec_inicio','$descripcion','$tipo')");
	header("Location: comercial.php");
	if(!$SQL)
	{
		echo $MySQLiconn->error;
	}
}

/* code for data insert */


/* code for date delete */
if(isset($_GET['delc']))
{
	$SQL = $MySQLiconn->query("DELETE FROM comercial WHERE id=".$_GET['delc']);
	header("Location: comercial.php");
}
/* code for data delete */



/* code for date update */
if(isset($_GET['editc']))
{
	$SQL = $MySQLiconn->query("SELECT * FROM comercial WHERE id=".$_GET['editc']);
	$getROW = $SQL->fetch_array();
}

if(isset($_POST['updatec']))
{
	$SQL = $MySQLiconn->query("UPDATE comercial SET idpais='".$_POST['idpais']."', idproducto='".$_POST['idproducto']."',fec_inicio='".$_POST['fec_inicio']."',descripcion='".$_POST['descripcion']."',tipo='".$_POST['tipo']."' WHERE id=".$_GET['editc']);
	header("Location: comercial.php");
}
/* code for data update */



/* ------------------------- Diplomatica ------------------------ */

if (isset($_POST['saved']))
{

	$idpais = $MySQLiconn->real_escape_string($_POST['idpais']);
	$fec_inicio = $MySQLiconn->real_escape_string($_POST['fec_inicio']);
	$descripcion = $MySQLiconn->real_escape_string($_POST['descripcion']);
	$SQL = $MySQLiconn->query("INSERT INTO diplomatica(idpais,fec_inicio,descripcion)VALUES('$idpais','$fec_inicio','$descripcion')");
	header("Location: diplomatica.php");
	if(!$SQL)
	{
		echo $MySQLiconn->error;
	}
}

/* code for data insert */


/* code for date delete */
if(isset($_GET['deld']))
{
	$SQL = $MySQLiconn->query("DELETE FROM diplomatica WHERE id=".$_GET['deld']);
	header("Location: diplomatica.php");
}
/* code for data delete */



/* code for date update */
if(isset($_GET['editd']))
{
	$SQL = $MySQLiconn->query("SELECT * FROM diplomatica WHERE id=".$_GET['editd']);
	$getROW = $SQL->fetch_array();
}

if(isset($_POST['updated']))
{
	$SQL = $MySQLiconn->query("UPDATE diplomatica SET idpais='".$_POST['idpais']."', fec_inicio='".$_POST['fec_inicio']."',descripcion='".$_POST['descripcion']."' WHERE id=".$_GET['editd']);
	header("Location: diplomatica.php");
}
/* code for data update */

?>
