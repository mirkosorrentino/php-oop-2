<?php
require_once __DIR__ . "/Product.php";

class Food extends Product 
{
    private $expirationDate;

    function __construct($_name, $_category, $_price, $_image, $_expirationDate)
    {
        parent::__construct($_name, $_price, $_category, $_image);
        $this -> expirationDate = $_expirationDate;
    }

    function getExpirationDate() {
        return "{$this ->expirationDate}";
    }
}