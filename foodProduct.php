<?php

require_once __DIR__ . '/Products.php';

class FoodProduct extends Products
{
    private $brand;
    private $ingredients;

    public function __construct($img, $title, $price, Category $category, $brand,  $ingredients)
    {
        parent::__construct($img, $title, $price, $category);
        $this->setBrand($brand);
        $this->setIngredients($ingredients);
    }

    // get the value of
    public function getBrand()
    {
        return $this->brand;
    }

    // set the value of

    public function setBrand($brand)
    {
        $this->brand = $brand;
        return $this;
    }

    // get the value of
    public function getIngredients()
    {
        return $this->ingredients;
    }
    public function listIngredients()
    {
        return implode(', ', $this->ingredients);
    }

    // set the value of

    public function setIngredients($ingredients)
    {
        $this->ingredients = $ingredients;
        return $this;
    }
}
