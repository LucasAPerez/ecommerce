<?php

require 'config/config.php';
require 'config/database.php';
$db = new Database();
$con = $db->conectar();

$sql = $con->prepare("SELECT id, nombre, precio FROM ecomercio WHERE activo=1");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiendilla Lukillas</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="css/estilos.css" rel="stylesheet">
</head>

<body>
    <!--Barra de navegación-->
    <header>
        <div class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container pepe">
                <a href="index.php" class="navbar-brand">
                    <strong>Tiendilla de Lukillas</strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarHeader">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a href="cargar.html" class="nav-link active">Catalogo</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Contacto</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-md-0">
                       <input class="form-control" type="text" placeholder="Search">
                    </form>
                    <a href="carrito.php" class="btn btn-primary">Carrito <span class="num_cart" class="badge bg-secondary">x</span></a>
                </div>
            </div>
        </div>
    </header>
    <!--Contenido-->
    <main>
        <div class="container-fluid">
            <div class="sliders">
              <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/slider/slider1.jpg" class="d-block w-100" alt="...">
                </div>
                 <div class="carousel-item">
                     <img src="img/slider/slider2.jpg" class="d-block w-100" alt="...">
                </div>
                 <div class="carousel-item">
                     <img src="img/slider/slider3.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                     <img src="img/slider/slider4.jpg" class="d-block w-100" alt="...">
                 </div>
                 <div class="carousel-item">
                    <img src="img/slider/slider5.jpg" class="d-block w-100" alt="...">
                 </div>
                 <div class="carousel-item">
                    <img src="img/slider/slider6.jpg" class="d-block w-100" alt="...">
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
         </div>
         <div class="px-4 py-6 my-5 text-center">
                <h3 class="display-6 fw-bold">Catalogo</h3>
        <div class="col-lg-6 mx-auto">
        </div>
         <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php foreach($resultado as $row){?>
                <div class="col">
                    <div class="card shadow-sm">
                        <?php 
                        
                        $id = $row['id'];
                        $imagen = "img/productos/" . $id . "/principal.jpg";

                        if(!file_exists($imagen)){
                            $imagen = "img/no-photo.png";
                        }

                        ?>
                        <img src="<?php echo $imagen ; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['nombre'];?> </h5>
                            <p class="card-text">$ <?php echo number_format($row['precio'], 2, ',', '.');?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="detalles.php?id=<?php echo $row['id']; ?>&token=<?php  echo hash_hmac('sha1', $row['id'], KEY_TOKEN); ?> " class="btn btn-primary">Detalles</a>
                                </div>
                                <a href="#" class="btn btn-success">Agregar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            
        </div>
        
    </main>
    <footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
    <!-- Section: Form -->
    <section class="">
        <form action="registro.php" method="POST">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">
            <!--Grid column-->
            <div class="col-auto">
            <p class="pt-2">
                <strong>Sign up for our newsletter</strong>
            </p>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-5 col-12">
            <!-- Email input -->
            <div class="form-outline form-white mb-4">
                <input type="email" id="form5Example2" class="form-control" name="email" id="email" />
                <label class="form-label" for="form5Example2">Email address</label>
            </div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-auto">
            <!-- Submit button -->
            <button type="submit" class="btn btn-outline-light mb-4" name="btn_enviar" id="boton">
                Subscribe
            </button>
            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->
        </form>
    </section>
    <!-- Section: Form -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022-2023 Copyright:
    <a class="text-white" href="https://www.instagram.com/llucas_perez_/">Lukillas Corp®</a>
    </div>
    <!-- Copyright -->
    </footer>

    <!--copirithty--> 


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</footer>
</body>

</html>