<div class="navegacion mt-3 py-1">
        <nav class="nav-principal navbar navbar-expand-md navbar-light bg-faded">
            <!-- menu responsive -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav_principal"
                aria-label="Mostrar Navegación">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a href="#" class="navbar-brand d-md-none">Satoshi Spa</a>
            <div class="container">
                <div class="collapse navbar-collapse w-100" id="nav_principal">
                    <ul class="nav nav-justified w-100 flex-column flex-sm-row h4">
                        <?php 
                        $archivo = basename( $_SERVER['PHP_SELF'] );
                        $pagina = str_replace('.php', '', $archivo);

                        ?>
                        
                        <li class="nav-item <?php echo 'index' === $pagina ? 'active' : ''; ?>">
                            <a href="index.php" class="nav-link">Inicio</a>
                        </li>
                        <li class="nav-item <?php echo 'nosotros' === $pagina ? 'active' : ''; ?>">
                            <a href="nosotros.php" class="nav-link">Nosotros</a>
                        </li>
                        <li class="nav-item <?php echo 'servicios' === $pagina ? 'active' : ''; ?>">
                            <a href="servicios.php" class="nav-link">Servicios</a>
                        </li>
                        <li class="nav-item <?php echo 'productos' === $pagina ? 'active' : ''; ?>">
                            <a href="productos.php" class="nav-link">Productos</a>
                        </li>
                        <li class="nav-item <?php echo 'contacto' === $pagina ? 'active' : ''; ?>">
                            <a href="contacto.php" class="nav-link">Contacto</a>
                        </li>
                    </ul>
                </div>
                <!--collapse-->
            </div>
            <!--container-->
        </nav>
    </div>
    <!--navegacion-->