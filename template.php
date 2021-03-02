<?php
$titulo = 'template';
include './includes/templates/header.php';
include './includes/templates/navegacion.php';
?>
<div class="container pt-4">
    <div class="row no-gutters">
        <div class="col-12 hero">
            <img src="img/nosotros.jpg" class="img-fluid">
            <h2 class="text-uppercase d-none d-md-block  py-3 px-5">Titulo aqui</h2>
        </div>
    </div>
</div>
<div class="container pt-4">
    <div class="row">
        <main class="col-lg-8 contenido-principal">
            <h2 class="d-block d-md-none text-uppercase text-center">
                Titulo cel
            </h2>
        </main>
        <aside class="col-lg-4 pt-4 pt-lg-0">
            <div class="sidebar">
                <h2 class="text-center text-upppercase mt-4">algo asd</h2>
            </div>
        </aside>
    </div>
</div>

<?php
include './includes/templates/footer.php'
?>