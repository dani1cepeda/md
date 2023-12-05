<?php

include("connection.php");
$con = connection();

$id=$_POST["id"];
$nombre = $_POST['nombre'];
$fecha = $_POST['fecha'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];

$sql=$con->query("UPDATE empleados SET nombre='$nombre', fecha='$fecha', direccion='$direccion', telefono='$telefono', correo='$correo' WHERE id='$id'");


if($sql==1){
    Header("Location: index.php");
}else{

}

?>