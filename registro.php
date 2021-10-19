<?php

$conexion = mysqli_connect("localhost","root","","negocio");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$info=$_POST;
if ($info['contraseña'] != $info['validar_contraseña']) {
   echo "las contraseñas no coinciden ";
   header("refresch:2; url=registrarse.php");
}else{
  $info['contraseña']= password_hash($info['contraseña'], PASSWORD_DEFAULT);
}

unset($info['validar_contraseña']);


$dni = $info["dni"];
$nombre = $info["nombre"]; 
$apellido = $info["apellido"];
$direccion = $info["direccion"];
$contraseña = $info["contraseña"];


$insertar_datos= "INSERT INTO clientes (dni,nombre,apellido,direccion,contraseña)
values('$dni','$nombre','$apellido','$direccion','$contraseña')";

if (mysqli_query($conexion, $insertar_datos)) {
    echo "creada";
} else {
    echo "Error: " . $insertar_datos . "<br>" . mysqli_error($conexion);
}








?>