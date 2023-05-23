<?php
require_once __DIR__ . "/Category.php";
/**
 * Class Product
 * Defines Product class
 * @author Mirko Sorrentino
 */
class Product 
{
    public $name;
    public $price;
    public $category;
    public $image;

    /**
     * @param string $_name
     * @param float $_price
     * @param Category $_category
     * @param string $_image
     */
    function __construct($_name, $_price, $_category, $_image) 
    {
        $this -> name = $_name;
        $this -> price = $_price;
        $this -> category = $_category;
        $this -> image = $_image;
    }
}