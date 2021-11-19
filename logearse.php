<?php
$conexion = mysqli_connect("localhost","root","","negocio");

$enlace= $_POST;

$sql="SELECT * from clientes where dni= '".$enlace["dni"]."'";

$result= mysqli_query($conexion,$sql);

if(mysqli_num_rows($result)>0){
    while($clientes=mysqli_fetch_Assoc($result)){
        echo "dni:" .$clientes["dni"]. "nombre:".$clientes["nombre"];
        "<br>";
        $hash=$clientes["contraseña"];

if(password_verify($enlace["contraseña"],$hash)){
    echo "la contraseña es valida";
    session_start();
    $_SESSION['user']=$clientes['dni'];
    header("Location:index.php");
}else{
    echo "la contrseña no es valida";
}
}
}else{
    echo "su usuario no se encuentra";
} 