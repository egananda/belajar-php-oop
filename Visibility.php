<?php
require_once "data/Product.php";


$product = new Product("Kardus", 1000);
// echo $product->name;

echo $product->getName();
echo $product->getPrice() . PHP_EOL;


$ProductDummy = new ProductDummy("Apel", 30000);
$ProductDummy->info();
