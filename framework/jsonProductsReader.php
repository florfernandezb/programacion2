<?php
/**
 * Obtiene todas los productos.
 *
 * @return Producto[]
 */
function getProductListFromJson(): array {
    $filename       = __DIR__ . '/../data/productos.json';
    $json           = file_get_contents($filename);
    $productList   = json_decode($json, true);

    $products = [];

    foreach($productList as $product) {
        $productDto = new Product;
        $productDto->parseDataFromArray($product);
        $products[] = $productDto;
    }

    return $products;
}

function getProductId(int $id): ?Product {
    $productList = getProductListFromJson();

    foreach($productList as $product) {
        if($product->getProductId() === $id) {
            return $product;
        }
    }

    return null;
}

?>