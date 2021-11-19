<?php

function traer_productos(){

$conexion = mysqli_connect("localhost","root","","negocio");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  
}

$sql="SELECT * from productos";

$result= mysqli_query($conexion,$sql);

if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){

      $productos[]=$row;
   

}
}
  else{
  echo "0 productos";
}
  return $productos;
};

function traer_carrito(){

  $conexion = mysqli_connect("localhost","root","","negocio");
  
  // Check connection
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    
  }
  
  $sql="SELECT * from carrito";
  
  $result= mysqli_query($conexion,$sql);
  
  if(mysqli_num_rows($result)>0){
      while($row=mysqli_fetch_assoc($result)){
  
        $carrito[]=$row;
     
  
  }
  }
    else{
    echo "0 productos";
  };
    return $carrito;
  };