<?php
class Products
{
    protected $name;
    protected $discount = 0;
    protected $price;
    protected $image;
    protected $category;

    public function __construct($_name, $_discount, $_price, $_image, $_category)
    {
        $this->name = $_name;
        $this->discount = $_discount;
        $this->price = $_price;
        $this->image = $_image;
        $this->category = $_category;
    }

    public function set_name($name)
    {
        if (strlen($name < 20)) {
            $this->name = $name;
        }
    }

    public function get_name()
    {
        return $this->name;
    }

    public function set_discount($discount)
    {
        if ($discount > 0 && $discount < 100) {
            $this->discount = $discount;
        }
    }

    public function get_discount()
    {
        return $this->discount;
    }

    public function set_price($price)
    {
        if ($price > 0) {
            $this->price = ($price / 100) * $this->discount;
        }
    }

    public function get_price()
    {
        return number_format(($this->price / 100) * $this->discount, 2);
    }

    public function set_category($category)
    {
        if ($category == 'cat' || 'dog' || 'all') {
            $this->category = $category;
        }
    }

    public function get_category()
    {
        return $this->category;
    }

    public function set_image($image)
    {
        $this->image = $image . '.jpg';
    }

    public function get_image()
    {
        return $this->image . '.jpg';
    }
}
