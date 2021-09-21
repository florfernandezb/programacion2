<?php
require_once __DIR__ . '/../framework/jsonProductsReader.php';
// Como todos los valores por GET llegan como strings, lo 'casteamos' al id a int.
$productId = (int) $_GET['id'];
$product = getProductId($productId);

$productCategory = $product->getCategory();
$productImage = $product->getImage();
$source = "$productCategory/$productImage"
?>
<main class="main-content">
    <div class="container-fixed">
        <article class="noticias-item">
            <div class="noticias-item_content">
                <h1><?= $product->getName();?></h1>
                <p><?= $product->getPrice();?></p>
                <ul>
                    
                    
                    <!-- HACER LOS COLORES -->
                </ul>
            </div>
            <picture class="noticias-item_imagen">
                <source srcset="<?= './res/'. $source;?>" media="all and (min-width: 46.875em)">
                <img src="<?= './res/'. $source;?>" alt="">
            </picture>

            <div class="noticias-texto"><?= $product->getProductDescription();?></div>
        </article>
    </div>
</main>