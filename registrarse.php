<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>shop - login</title>
        <link rel="icon" type="image/x-icon" href="img/favicon.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="index.html"><img src="img/logo.png" /></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.html">home</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="carrito.html"><i class="fas fa-shopping-basket"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead-login">
            <div class="container d-flex h-100 align-items-center">
              <div class="col-4">
                <div class="text-left">
                    <h1 class="my-0 txt-black mb-4">Registro</h1>

                    <form method="post" action="registro.php">
                        <input type="text" name="dni" class="form-control mb-4" placeholder="DNI" >
                        <input type="text" name="nombre" class="form-control mb-4" placeholder="Nombre" >
                        <input type="text" name="apellido" class="form-control mb-4" placeholder="Apellido" >
                        <input type="text" name="direccion" class="form-control mb-4" placeholder="Direccion" >
                        <input type="password" name="contraseña" class="form-control mb-4" placeholder="Contraseña" >
                        <input type="password" name="validar_contraseña" class="form-control mb-4" placeholder="validar contraseña" >
                        <button type="submit" class="btn btn-login btn-block">Ingresar</button>
                    </form>
                
                </div>

              </div>


            </div>
        </header>


        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
