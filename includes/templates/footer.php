<footer class="footer-sitio pt-3 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3 class="text-uppercase text-center pb-4">Nosotros</h3>
                <p class="text-justify">Tempora eaque voluptates, alias dolores necessitatibus amet nisi ipsam quam quo, exercitationem tenetur, repellat quisquam blanditii.</p>
            </div>
            <div class="col-md-4 text-center">
                <h3 class="text-uppercase pb-4">Horario</h3>
                <p class="mb-2">Lun-Vie: 08:00 - 18:30</p>
                <p class="mb-2">Sábado: 10:00 - 17:00</p>
                <p class="mb-p">Domingo: Cerrado</p>
            </div>
            <div class="col-md-4 text-center">
                <h3 class="text-uppercase pb-4">Contacto</h3>
                <p class="text-md-left">Palacio de López</p>
                <p class="text-md-left">Asunción, Paraguay.</p>
                <nav class="sociales">
                    <ul class="nav nav-pills h2 p-2 justify-content-center">
                        <li>
                            <a href="https://www.facebook.com/">
                                <span class="sr-only">Facebook</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/">
                                <span class="sr-only">Twitter</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/">
                                <span class="sr-only">Instagram</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.pinterest.com/">
                                <span class="sr-only">Pinterest</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/">
                                <span class="sr-only">Youtube</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!--col-md-4-->
            <hr class="w-100">
            <p class="text-center copyright w-100">&copy; Satoshi Spa & Salon 2021. Todos los derechos reservados</p>
        </div>
        <!--row-->
    </div>
    <!--container-->
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

<?php
$archivo = basename($_SERVER['PHP_SELF']);
// retorna el nombre del archivo actual: 
$pagina = str_replace(".php", "", $archivo);
if ($pagina == 'contacto') {
    echo '<script src="./js/scripts.js"></script>';
}
?>
</body>

</html>

<?php 
// guarda todo el contenido en un archivo
$fp = fopen($archivoCache, 'w');
fwrite($fp, ob_get_contents());
fclose($fp);
// envia al navegador
ob_end_flush();
?>