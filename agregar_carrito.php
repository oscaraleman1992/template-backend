<?php


  $enlace = mysqli_connect('localhost', 'root', '', 'negocio');
  $data = $_POST;
  $id_producto = $data['id'];
  $id_usuario = $data['id_usuario'];
  $precio = $data['precio'];
  $nombre = $data['nombre'];
  $imagen = $data['imagen'];

  $sql = "INSERT INTO carrito (id_producto,id_usuario,producto,imagen,precio)
  VALUES ('$id_producto','$id_usuario','$nombre','$imagen','$precio')";

  if ($enlace->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $enlace->error;
  }

  return;

 ?>