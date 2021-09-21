<?php

require_once __DIR__ . '/../framework/jsonProductsReader.php';
$productList = getProductListFromJson();

?>
<main class="main-content" id="content">
    <section class="container">
        <h1>Conocé nuestros productos</h1>
        <div class="noticias-list">
        <?php
        foreach($productList as $product): ?>
        <?php 
        $productCategory = $product->getCategory();
        $productImage = $product->getImage();
        $source = "$productCategory/$productImage"
        ?>
        <article class="noticias-item">
            <div class="noticias-item_content">
                <h2><?= $product->getName();?></h2>
                <p><?= $product->getPrice();?></p>
            </div>
            <picture class="noticias-item_imagen">
                <source srcset="<?= './res/'. $source;?>" media="all and (min-width: 46.875em)">
                <!-- TODO revisar el alt -->
                <img src="<?= './res/'. $source;?>" alt="">
            </picture>
            <a href="index.php?s=productDetail&id=<?= $product->getProductId();?>"><input type="button" value="Ver más"></a>
        </article>
        <?php
        endforeach; ?>
        </div>
    </section>
</main>
