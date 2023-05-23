<?php
/**
 * Class Cateogry
 * Defines category classes
 * @author Mirko Sorrentino
 */
class Category {
    public $name;
    public $symbol;

    function __construct($_name, $_symbol)
    {
        $this -> name = $_name;
        $this -> symbol = $_symbol;
    }
}