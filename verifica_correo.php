<?php

require "funciones/conecta.php";

$con = conecta();

$correo = $_REQUEST['correo'];
$num    = 0;

$sql = "SELECT * FROM empleados WHERE correo = '$correo'";
$res = $con->query($sql);
$num = $res->num_rows;

echo $num;
?>