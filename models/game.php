<?php
require_once __DIR__ . '/kennel.php';
class Game extends Kennel
{
    public function __construct($_name, $_price, $_category, $_discount, $_material)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->category = $_category;
        $this->discount = $_discount;
        $this->material = $_material;
    }
}