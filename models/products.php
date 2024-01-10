<?php
class Products
{
    protected $name;
    protected $price;
    protected $image;
    protected $category;
    protected $discount;

    public function __construct($_name, $_price, $_image, $_category, $_discount)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->image = $_image;
        $this->category = $_category;
        $this->discount = $_discount;
    }

    public function set_name($_name)
    {
        if(strlen($_name < 20)) {
            $this->name = $_name;
        }
    }

    public function get_name()
    {
        return $this->name;
    }

    public function set_discount($_discount)
    {
        if($_discount > 0 && $_discount < 100) {
            $this->discount = $_discount;
        }
    }

    public function get_discount()
    {
        return $this->discount;
    }

    public function set_price($_price)
    {
        if($_price > 0) {
            $this->price = ($_price / 100) * $this->discount;
        }
    }

    public function get_price()
    {
        return $this->price;
    }
}