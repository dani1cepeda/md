<?php
include("connection.php");
$con = connection();

$id = null;
$nombre = $_POST['nombre'];
$fecha = $_POST['fecha'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];

$sql =$con->query( "INSERT INTO empleados(nombre,fecha,direccion,telefono,correo)VALUES('$nombre','$fecha','$direccion','$telefono','$correo')");


if($sql==1){
    Header("Location: index.php");
}else{

}

?>