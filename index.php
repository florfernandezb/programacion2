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
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;1,300&display=swap" rel="stylesheet">
</head>
<body>
    <div class="visually-hidden">
        <a href="#content">Saltar al contenido</a>
    </div>
    <header >
        <div class="divLogo">
            <h1 class="navbar-brand"><a href="index.php?s=home">Hecho por Vicki</a></h1>
        </div>
        
        <nav  id="navv">
            <div class="container-flex">            
                <ul >
                    <li ><a  href="index.php?s=home">Home</a></li>
                    <li ><a  href="index.php?s=productList">Productos</a></li>
                    <li ><a  href="index.php?s=formContacto">Contacto</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <?php
    require __DIR__ . '/views/' . $view . '.php';
    ?>
    <footer>
        <p>&copy; Da Vinci - 2021</p>
    </footer>
</body>
</html>