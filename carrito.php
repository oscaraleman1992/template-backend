<!DOCTYPE html>
<html lang="en">
    <head>
    <?php

      error_reporting(E_ALL);
      ini_set('display_errors', 1);
      include('function.php');
      include('head.php');
      $carrito = carro();
    ?>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
          <?php include('nav.php') ?>
        </nav>
        <!-- Carrito-->
        <section class="carrito-section" id="carrito">
            <div class="container">
                <div class="row mx-auto text-center">
                  <h3 class="mb-4"><i class="fas fa-shopping-basket fa-lg pr-3"></i>carrito de compras</h3>
                </div>
                <div class="row">
                  <div class="container">
                    <table class="table">
                      <thead>
                        <tr>
                          <th class="col-1"></th>
                          <th class="col-6 text-left">producto</th>
                          <th class="col-1 text-center">cantidad</th>
                          <th class="col-2 text-center">precio</th>
                          <th class="col-2 text-center">subtotal</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($carrito as $item){?>
                        <tr>
                          <td class="align-middle"><img src="img/<?php echo $item['imagen'];?>" /></td>
                          <td class="align-middle text-left"><?php echo $item['producto'];?></td>
                          <td class="align-middle text-center">
                            <input type="number" class="form-control cantidad" value="1" placeholder="01" id="cantidad">
                          </td>
                          <td class="align-middle text-center ">$<span class="precio"><?php echo $item['precio'];?></span></td>
                          <td class="align-middle text-center">$<span class="subtotal"><?php echo $item['precio'];?></span></td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>

                          <h5>Total :  <span id='total'></span></h5>
                  </div>
                </div>
                <div class="row justify-content-end">
                  <button class="btn btn-comprar">Iniciar compra</button>
                </div>
            </div>
        </section>
        <div class="fluid-container img-footer"></div>



        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
