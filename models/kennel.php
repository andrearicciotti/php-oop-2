<?php
require_once __DIR__ . '/products.php';
class Kennel extends Products
{
    protected $material;

    public function __construct($_name, $_price, $_category, $_discount, $_material)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->category = $_category;
        $this->discount = $_discount;
        $this->material = $_material;
    }

    public function set_material($_material)
    {
        if(strlen($_material < 20)) {
            $this->material = $_material;
        }
    }

    public function get_material()
    {
        return $this->material;
    }
}
