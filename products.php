<?php

class Products
{
    public $img;
    public $title;
    public $price;
    public $icon;
    public $item;


    public function __construct($img, $title, $price, $icon, $item)
    {
        $this->img = $img;
        $this->title = $title;
        $this->price = $price;
        $this->icon = $icon;
        $this->item = $item;
    }
}
