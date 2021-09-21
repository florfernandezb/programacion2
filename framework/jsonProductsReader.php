<?php
/**
 * Obtiene todas los productos.
 *
 * @return Product[]
 */
function getProductListFromJson(): array {
    $filename       = __DIR__ . '/../data/productos.json';
    $json           = file_get_contents($filename);
    // json_decode Convierte un string codificado en JSON a una variable de PHP.
    $productList   = json_decode($json, true);

    $products = [];

    foreach($productList as $product) {
        $productDto = new Product;
        $productDto->parseDataFromArray($product);
        $products[] = $productDto;
    }

    return $products;
}


/**
 * Obtiene un producto.
 *
 * @return Product
 */
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