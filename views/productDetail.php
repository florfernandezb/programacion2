<?php
require_once __DIR__ . '/../framework/jsonProductsReader.php';
$productId = (int) $_GET['id'];
$product = getProductId($productId);

$productCategory = $product->getCategory();
$productImage = $product->getImage();
$source = "$productCategory/$productImage"
?>
<main>
    <section class="product-details">
        <picture class="imgprod">
        <source srcset="<?= './res/'. $source . '.png';?>" media="(max-width:480px)">
            <img src="<?= './res/'. $source . '.png';?>" alt="<?= $product->getImageDescription();?>">
        </picture>
            
        <div class="proddetails">
            <h2><?= $product->getName();?></h2>
            <p>Precio: $<?= $product->getPrice();?></p>
            <p>Descripcion: <?= $product->getProductDescription();?></p>    
        </div>
    </section>
</main>