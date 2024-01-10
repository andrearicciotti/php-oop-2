<?php
require_once __DIR__ . '/kennel.php';
class Game extends Kennel
{
    public function __construct($_name, $_price, $_image, $_category, $_discount)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->image = $_image;
        $this->category = $_category;
        $this->discount = $_discount;
    }
}