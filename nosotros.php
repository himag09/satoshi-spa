<?php
$titulo = 'Nosotros';
include './includes/templates/header.php';
include './includes/templates/navegacion.php';
?>
<div class="container pt-4">
    <div class="row no-gutters">
        <div class="col-12 hero">
            <img src="img/nosotros.jpg" class="img-fluid">
            <h2 class="text-uppercase d-none d-md-block  py-3 px-5">Nosotros</h2>
        </div>
    </div>
</div>
<div class="container pt-4">
    <div class="row">
        <main class="col-lg-8 contenido-principal">
            <h2 class="d-block d-md-none text-uppercase text-center">
                Nosotros
            </h2>

            <p>Veritatis, nesciunt placeat. Esse, aperiam? Eveniet, natus minima minus cumque vel maiores
                repellendus odit aliquam voluptatum harum amet illo obcaecati velit! Nihil! Lorem ipsum dolor sit,
                amet consectetur adipisicing elit. Distinctio nihil ullam ut nobis, autem quam, nam assumenda
                voluptates recusandae quaerat quasi fugit, temporibus fuga officiis molestias tempore perspiciatis
                error. Animi.</p>

            <p>Quas nulla ipsum qui. Sunt sed ducimus explicabo vel necessitatibus ullam, maxime cum nihil
                laudantium. Sint iure, magni tenetur corrupti nisi laborum Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Excepturi animi repellendus maiores reiciendis, quaerat eum consequatur aliquam
                ipsa quae molestias tempora placeat sit odit, consequuntur blanditiis dolorum ut magnam! Nostrum!
            </p>

            <h1 class="text-center text-uppercase mt-4 encabezado">
                <span class="text-lowercase d-block">conoce nuestras</span> instalaciones
            </h1>
            <div class="imagenes pt-4">
                <a href="#" data-target="#imagen_1" data-toggle="modal">
                    <img src="./img/galeria_mini_01.jpg" class="img-fluid pb-4 ">
                </a>
                <a href="#" data-target="#imagen_2" data-toggle="modal">
                    <img src="./img/galeria_mini_02.jpg" class="img-fluid pb-4">
                </a>
                <a href="#" data-target="#imagen_3" data-toggle="modal">
                    <img src="./img/galeria_mini_03.jpg" class="img-fluid pb-4">
                </a>

                <div class="modal fade" id="imagen_1" tabindex="-1" role="dialog" aria-labelledby="Imagen 1" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <img src="./img/galeria_grande_01.jpg" class="img-fluid">
                            </div>
                            <!--modal bodu-->
                        </div>
                        <!--modal content-->
                    </div>
                    <!--modal dialog-->
                </div>
                <!--modal-->



                <div class="modal fade" id="imagen_2" tabindex="-1" role="dialog" aria-labelledby="Imagen 2" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <img src="./img/galeria_grande_02.jpg" class="img-fluid">
                            </div>
                            <!--modal bodu-->
                        </div>
                        <!--modal content-->
                    </div>
                    <!--modal dialog-->
                </div>
                <!--modal-->


                <div class="modal fade" id="imagen_3" tabindex="-1" role="dialog" aria-labelledby="Imagen 3" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <img src="./img/galeria_grande_03.jpg" class="img-fluid">
                            </div>
                            <!--modal bodu-->
                        </div>
                        <!--modal content-->
                    </div>
                    <!--modal dialog-->
                </div>
                <!--modal-->


            </div>
        </main>
        <aside class="col-lg-4 pt-4 pt-lg-0 align-self-start">
            <div class="sidebar horario noMarginAside">
                <h2 class="text-center text-uppercase mt-4">horarios</h2>
                <p class="text-center lead mt-3">
                    Voluptates eius unde asperiores perferendis nihil dolorum reprehenderit quo explicabo numquam
                    enim et iure qui, quidem eligendi dolore voluptatibus nulla nemo illo.
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
        </aside>
    </div>
</div>

<?php
include './includes/templates/footer.php'
?>