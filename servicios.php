<?php
$titulo = 'Servicios';
include './includes/templates/header.php';
include './includes/templates/navegacion.php';
?>
<div class="container pt-4">
    <div class="row no-gutters">
        <div class="col-12 hero">
            <img src="img/servicios.jpg" class="img-fluid">
            <h2 class="text-uppercase d-none d-md-block  py-3 px-5">Servicios</h2>
        </div>
    </div>
</div>
<div class="container pt-4">
    <div class="row">
        <main class="col-lg-8 contenido-principal mb-5">
            <h2 class="d-block d-md-none text-uppercase text-center">
                Servicios
            </h2>
            <div id="servicios">
                <div class="card">
                    <div class="card-header" id="servicio1">
                        <h2 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#descripcion1" aria-expanded="true" aria-controls="#descripcion1">Servicio 1</button>
                        </h2>
                    </div>
                    <!--cardheader-->
                    <div id="descripcion1" class="collapse show" aria-labelledby="servicio1" data-parent="#servicios">
                        <div class="card-body">
                            <p>Adipisicing elit. Porro, odio culpa quia perferendis non dolor numquam, ratione error ullam doloremque neque sed, animi ab ipsum repellat distinctio? Distinctio, modi rerum. Adipisicing elit. Et optio deleniti deserunt, non earum facere est laudantium unde impedit quos repellat quia ipsum facilis nam voluptatem autem molestias adipisci voluptates.</p>
                        </div>

                    </div>
                </div>
                <!--card-->


                <div class="card">
                    <div class="card-header" id="servicio2">
                        <h2 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#descripcion2" aria-expanded="false" aria-controls="#descripcion2">Servicio 2</button>
                        </h2>
                    </div>
                    <!--cardheader-->
                    <div id="descripcion2" class="collapse" aria-labelledby="servicio2" data-parent="#servicios">
                        <div class="card-body">
                            <p>Adipisicing elit. Porro, odio culpa quia perferendis non dolor numquam, ratione error ullam doloremque neque sed, animi ab ipsum repellat distinctio? Distinctio, modi rerum. Adipisicing elit. Et optio deleniti deserunt, non earum facere est laudantium unde impedit quos repellat quia ipsum facilis nam voluptatem autem molestias adipisci voluptates.</p>
                        </div>

                    </div>
                </div>
                <!--card-->

                <div class="card">
                    <div class="card-header" id="servicio3">
                        <h2 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#descripcion3" aria-expanded="false" aria-controls="#descripcion3">Servicio 3</button>
                        </h2>
                    </div>
                    <!--cardheader-->
                    <div id="descripcion3" class="collapse" aria-labelledby="servicio3" data-parent="#servicios">
                        <div class="card-body">
                            <p>Adipisicing elit. Porro, odio culpa quia perferendis non dolor numquam, ratione error ullam doloremque neque sed, animi ab ipsum repellat distinctio? Distinctio, modi rerum. Adipisicing elit. Et optio deleniti deserunt, non earum facere est laudantium unde impedit quos repellat quia ipsum facilis nam voluptatem autem molestias adipisci voluptates.</p>
                        </div>

                    </div>
                </div>
                <!--card-->


            </div>
        </main>
        <aside class="col-lg-4 pt-4 pt-lg-0">
            <div class="sidebar p-3">
                <h2 class="text-center text-uppercase mt-4">nuevos clientes</h2>
                <p class="lead text-center mt-4">
                    Recibe 20% de descuento con este cupón:
                </p>
                <div class="cupon px-2 py-3 mt-5">
                    <p class="text-uppercase text-center mb-0 h5">
                        <span class="h1">20% Descuento <br></span>
                        en todos los servicios
                    </p>
                </div>
            </div>
        </aside>
    </div>
</div>

<?php
include './includes/templates/citas.php';
include './includes/templates/footer.php' 
?>