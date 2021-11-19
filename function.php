<?php


include("conexion.php");

function comida(){

    $comidas=traer_productos();
   
    return ($comidas);
};





function carro(){
    
    $compra=traer_carrito();

    return($compra);
};
?>
