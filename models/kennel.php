<?php
require_once __DIR__ . '/products.php';
class Kennel extends Products
{
    protected $material;

    public function __construct($_name, $_price, $_image, $_category, $_discount, $_material)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->image = $_image;
        $this->category = $_category;
        $this->discount = $_discount;
        $this->material = $_material;
    }
}
