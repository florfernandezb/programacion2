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
        <article>
            <div>
                <h1><?= $product->getName();?></h1>
                <p><?= $product->getPrice();?></p>
            </div>
            <picture>
                <source srcset="<?= './res/'. $source;?>" media="all and (min-width: 46.875em)">
                <img src="<?= './res/'. $source;?>" alt="">
            </picture>

            <p><?= $product->getProductDescription();?></p>
        </article>
    </div>
</main>