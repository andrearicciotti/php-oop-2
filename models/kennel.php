<?php
require_once __DIR__ . '/products.php';
class Kennel extends Products
{
    protected $material;

    function __construct($_name, $_price, $_image, $_category, $_discount, $_material)
    {
        $this->material = $_material;
    }
}