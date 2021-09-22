<?php

require_once __DIR__ . '/../framework/jsonProductsReader.php';
$productList = getProductListFromJson();

?>
<main>
    <section id="product-list">
        <h2 class="col-12">Conocé nuestros productos</h2>
        <div class="row align-items-center">
            <?php
                foreach($productList as $product): 
            ?>
            <?php 
                $productCategory = $product->getCategory();
                $productImage = $product->getImage();
                $source = "$productCategory/$productImage"
            ?>
            
            <article class=" col-xxl-4 col-xl-4 col-lg-6 col-md-6  col-xs-6">
                <div class="product-card">
                    <picture >
                        <source srcset="<?= './res/'. $source;?>" media="all and (min-width: 46.875em)">
                        <img src="<?= './res/'. $source;?>" alt="<?= $product->getImageDescription();?>">
                    </picture>
                    <div class="card-content">
                        <h3><?= $product->getName();?></h3>
                        <p>$<?= $product->getPrice();?></p>
                    </div>
                    
                    <a href="index.php?s=productDetail&id=<?= $product->getProductId();?>"><input class="see-more" type="button" value="Ver más"></a>
                </div>
            </article>
            <?php
            endforeach; ?>
        </div>
    </section>
</main>
