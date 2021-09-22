<?php
require_once __DIR__ . '/../framework/jsonProductsReader.php';
$productId = (int) $_GET['id'];
$product = getProductId($productId);

$productCategory = $product->getCategory();
$productImage = $product->getImage();
$source = "$productCategory/$productImage"
?>
<main>
    <div>
        <article id="product-detail" class="row ">
            <picture class="col-6 ">
                <source srcset="<?= './res/'. $source;?>" media="all and (min-width: 46.875em)">
                <img src="<?= './res/'. $source;?>" alt="<?= $product->getImageDescription();?>">
            </picture>
            
            <div class="col-6">
                <h2><?= $product->getName();?></h2>
                <p>Precio: $<?= $product->getPrice();?></p>
                <p>Descripcion: <?= $product->getProductDescription();?></p>    
            </div>
        </article>
    </div>
</main>