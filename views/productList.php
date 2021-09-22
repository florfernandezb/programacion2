<?php

require_once __DIR__ . '/../framework/jsonProductsReader.php';
$productList = getProductListFromJson();

?>
<main>
    <section id="product-list">
        <h1>Conocé nuestros productos</h1>
        <div class="row align-items-center">
            <?php
                foreach($productList as $product): 
            ?>
            <?php 
                $productCategory = $product->getCategory();
                $productImage = $product->getImage();
                $source = "$productCategory/$productImage"
            ?>
            <article class="product-card col-xxl-3 col-xl-4 col-lg-6 col-xs-6">
                <picture >
                    <source srcset="<?= './res/'. $source;?>" media="all and (min-width: 46.875em)">
                    <!-- TODO revisar el alt -->
                    <img src="<?= './res/'. $source;?>" alt="">
                </picture>
                <div class="card-content">
                    <h2><?= $product->getName();?></h2>
                    <p><?= $product->getPrice();?></p>
                </div>
                
                <a href="index.php?s=productDetail&id=<?= $product->getProductId();?>"><input type="button" value="Ver más"></a>
            </article>
            <?php
            endforeach; ?>
        </div>
    </section>
</main>
