<?php
require_once __DIR__ . "/models/Category.php";
require_once __DIR__ . "/models/Product.php";
require_once __DIR__ . "/models/Food.php";
require_once __DIR__ . "/models/Toy.php";


$dog_category = new Category("dog", "fa-solid fa-dog");
$cat_category = new Category("cat", "fa-solid fa-cat");

$product_test = new Product ("Test", "10", $cat_category, "image");
$crocchette = new Food ("Crocchette super buone", $dog_category, "100", "image", "1980/01/01");
$duck = new Toy ("Paperella", "100", $dog_category, "image", "gomma", "paperella");


$products = [
    $product_test,
    $crocchette,
    $duck
];