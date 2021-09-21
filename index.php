<?php
require_once __DIR__ . '/class/Product.php';
require_once __DIR__ . '/route.php';

$routes = getRoutesSitio();

$view = $_GET['s'] ?? 'home';

if(!isset($routes[$view])) {
    $view = '404';
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $routes[$view]['title'];?></title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div class="visually-hidden">
        <a href="#content">Saltar al contenido</a>
    </div>
    <header id="main-header">
        <p class="brand">Hecho por Vicki</p>
    </header>
    <nav id="main-nav">
        <div class="container-fixed">
            <ul>
                <li><a href="index.php?s=home">Home</a></li>
                <li><a href="index.php?s=productList">Productos</a></li>
                <!-- <li><a href="index.php?s=iniciar-sesion">Iniciar Sesión</a></li>
                <li><a href="index.php?s=registro">Registrarse</a></li> -->
            </ul>
        </div>
    </nav>
    <?php
    require __DIR__ . '/views/' . $view . '.php';
    ?>
    <footer id="main-footer">
        <p>&copy; Da Vinci - 2021</p>
    </footer>
</body>
</html>