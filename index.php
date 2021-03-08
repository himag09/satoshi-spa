<?php
$titulo = 'Inicio';
include './includes/templates/header.php';
include './includes/templates/navegacion.php';
include './includes/funciones/funciones.php';
?>

<div class="container">
    <div id="slider-principal" class="carousel slide mt-4 mb-4" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#slider-principal" data-slide-to="0" class="active"></li>
            <li data-target="#slider-principal" data-slide-to="1"></li>
            <li data-target="#slider-principal" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img class="img-fluid" src="img/slide_01.jpg" alt="Instalaciones">
                <div class="carousel-caption">
                    <h3 class="text-uppercase">Nuevas Instalaciones</h3>
                </div>
            </div>
            <!--carousel item-->
            <div class="carousel-item">
                <img class="img-fluid" src="img/slide_02.jpg" alt="servicios">
                <div class="carousel-caption">
                    <h3 class="text-uppercase">Conoce nuestros servicios</h3>
                </div>
            </div>
            <!--carousel item-->
            <div class="carousel-item">
                <img class="img-fluid" src="img/slide_03.jpg" alt="2x1">
                <div class="carousel-caption">
                    <h3 class="text-uppercase">Nuevo sitio web, 2x1 en todos los servicios</h3>
                </div>
            </div>
            <!--carousel item-->
        </div>
        <!--carousel-inner-->
        <a href="#slider-principal" class="carousel-control-prev" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a href="#slider-principal" class="carousel-control-next" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
    </div>
</div>
<!--carousel container-->

<section class="nuevo-sitio py-5">
    <h1 class="text-center text-capitalize mt-4 encabezado">
        <span class="text-lowercase d-block">Bienvenido a nuestro</span> Sitio Web
    </h1>
    <p class="text-center mt-4">Te sentiras como nuevo(a) con nuestros <br>masajistas profesionales.</p>
    <p class="text-center">¡Aceptamos pagos en criptomonedas!</p>
</section>

<div class="container">
    <div class="row">
        <div class="col-md-4 text-center mb-4">
            <div class="imagen-servicio">
                <img src="img/servicio_01.jpg" class="img-fluid">
                <div class="row justify-content-center no-gutters">
                    <div class="col-md-10 pt-4 servicio-info">
                        <h2 class="text-center text-uppercase encabezado">
                            <!-- dblock -->
                            <span class="text-lowercase">conoce sobre</span> nosotros
                        </h2>
                        <a href="#" class="btn btn-primary btn-block text-uppercase mt-4 py-3">Leer más</a>
                    </div>
                </div>
            </div>
            <!--imagen-destacada-->
        </div>
        <!--col-md-4-->
        <div class="col-md-4 text-center mb-4">
            <div class="imagen-servicio">
                <img src="img/servicio_02.jpg" class="img-fluid">
                <div class="row justify-content-center no-gutters">
                    <div class="col-md-10 pt-4 servicio-info">
                        <h2 class="text-center text-uppercase encabezado">
                            <span class="text-lowercase">nuestros</span> servicios
                        </h2>
                        <a href="#" class="btn btn-primary btn-block text-uppercase mt-4 py-3">Leer más</a>
                    </div>
                </div>
            </div>
            <!--imagen-destacada-->
        </div>
        <!--col-md-4-->
        <div class="col-md-4 text-center mb-4">
            <div class="imagen-servicio">
                <img src="img/servicio_03.jpg" class="img-fluid">
                <div class="row justify-content-center no-gutters">
                    <div class="col-md-10 pt-4 servicio-info">
                        <h2 class="text-center text-uppercase encabezado">
                            <span class="text-lowercase">visita nuestra</span> tienda
                        </h2>
                        <a href="#" class="btn btn-primary btn-block text-uppercase mt-4 py-3">Leer más</a>
                    </div>
                </div>
            </div>
            <!--imagen-destacada-->
        </div>
        <!--col-md-4-->
    </div>
    <!--row-->
</div>

<div class="horario mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 p-4">
                <h2 class="text-center text-uppercase mt-5">horarios</h2>
                <p class="text-center lead mt-3">
                    Voluptates eius unde asperiores perferendis nihil dolorum reprehenderit quo explicabo numquam enim et iure qui, quidem eligendi dolore voluptatibus nulla nemo illo.
                </p>
                <table class="table table-hover text-center mt-3">
                    <thead>
                        <tr>
                            <th class="text-center">Día</th>
                            <th class="text-center">De</th>
                            <th class="text-center">Hasta</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Lunes</td>
                            <td>08:00</td>
                            <td>18:30</td>
                        </tr>
                        <tr>
                            <td>Martes</td>
                            <td>08:00</td>
                            <td>18:30</td>
                        </tr>
                        <tr>
                            <td>Miércoles</td>
                            <td>08:00</td>
                            <td>18:30</td>
                        </tr>
                        <tr>
                            <td>Jueves</td>
                            <td>08:00</td>
                            <td>18:30</td>
                        </tr>
                        <tr>
                            <td>Viernes</td>
                            <td>08:00</td>
                            <td>18:30</td>
                        </tr>
                        <tr>
                            <td>Sábado</td>
                            <td>10:00</td>
                            <td>17:00</td>
                        </tr>
                        <tr>
                            <td>Domingo</td>
                            <td>Cerrado</td>
                            <td>Cerrado</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-6 bg-horario">

            </div>
        </div>
    </div>
</div>
<!--horario-->

<section class="productos container py-5">
    <h2 class="encabezado text-center text-uppercase">
        <span class="text-lowercase d-block">Nuestros</span> Productos
    </h2>
    <div class="row py-5">
        <?php
        $productos = obtenerProductos(4);

        while ($producto = $productos->fetch_assoc()) {
        ?>
            <div class="col-md-3 mb-4">

                <div class="card">
                    <a href="producto.php?id=<?php echo $producto['id']; ?>">
                        <img src="./img/<?php echo $producto['imagen_mini']; ?>" class="card-img-top">
                        <div class="card-body">
                            <h3 class="card-title text-center text-uppercase"><?php echo $producto['nombre']; ?></h3>
                            <p class="card-text text-center text-uppercase">
                                <?php echo $producto['descripcion_corta']; ?>
                            </p>
                            <p class="precio mb-0 text-center lead">$25</p>
                        </div>
                    </a>
                </div>
                <!--card-->
            </div>
            <!--col-md-3-->
        <?php } ?>
    </div>
    <!--row-->
</section>
<!--productos-->

<?php
include './includes/templates/citas.php';
include './includes/templates/footer.php';
?>