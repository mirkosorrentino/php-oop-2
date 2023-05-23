<?php
require_once __DIR__ . "/models/Category.php";
require_once __DIR__ . "/models/Product.php";
require_once __DIR__ . "/models/Food.php";


$dog_category = new Category("dog", "fa-solid fa-dog");
var_dump($dog_category);
?>