<?php
// definir un nombre para cachear 
$archivo = basename($_SERVER['PHP_SELF']);
$pagina = str_replace("php", '', $archivo);
// definir archivo para cachear (puede ser php tambien)
if (isset($_GET['id'])) {
    // si existe id ej de producto
    $archivoCache = 'cache/' . $pagina . "-" . $_GET['id'] . '.html';
} else {
    $archivoCache = 'cache/' . $pagina . '.html';
}
// tiempo almacenado
$duracion = 3600;
// comprobar que el archivo exista, el tiempo sea el adecuado y mostrarlo
if (file_exists($archivoCache) && time() - $duracion < filemtime($archivoCache)) {
    include($archivoCache);
    exit;
}
// si el archivo no existe, o el tiempo de cacheo ya expiro, genera una nueva 
ob_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Italianno&family=Lato:wght@400;700;900&family=Raleway:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Satoshi Spa - <?php echo $titulo ?></title>

</head>

<body>
    <header class="encabezado-sitio container">
        <div class="row justify-content-md-between">
            <div class="col-lg-4">
                <a href="index.php">
                    <img src="./img/logo.svg" alt="logo" class="img-fluid d-block mx-auto pt-4 pb-4">
                </a>
            </div>
            <div class="col-lg-4">
                <nav class="sociales text-lg-right">
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

        </div>
    </header>