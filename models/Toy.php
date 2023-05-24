<?php

require_once __DIR__ . "/Product.php";

class Toy extends Product {
    public $material;
    public $shape;

    function __construct($_name, $_price, $_category, $_image, $_material, $_shape)
    {
        parent::__construct($_name, $_price, $_category, $_image);
        $this -> material = $_material;
        $this -> shape = $_shape;
    }

    function getDetails() 
    {
        return "{$this -> material}, {$this ->shape}";
    }
}