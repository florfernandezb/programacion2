<?php
require_once __DIR__ . '/../framework/jsonProductsReader.php';
$productId = (int) $_GET['id'];
$product = getProductId($productId);

$productCategory = $product->getCategory();
$productImage = $product->getImage();
$source = "$productCategory/$productImage"
?>
<main>
    <section id="product-detail" class="productdetails">
        <picture class="imgprod">
            <source srcset="<?= './res/'. $source;?>" media="all and (min-width: 46.875em)">
            <img src="<?= './res/'. $source;?>" alt="<?= $product->getImageDescription();?>">
        </picture>
            
        <div class="proddetails">
            <h2><?= $product->getName();?></h2>
            <p>Precio: $<?= $product->getPrice();?></p>
            <p>Descripcion: <?= $product->getProductDescription();?></p>    
        </div>
    </section>
</main>