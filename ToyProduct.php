<?php

require_once __DIR__ . '/Products.php';

class ToyProduct extends Products
{
    private $color;
    private $materials;

    public function __construct($img, $title, $price, Category $category, $color,  $materials)
    {
        parent::__construct($img, $title, $price, $category);
        $this->setColor($color);
        $this->setMaterials($materials);
    }

    // get the value of
    public function getColor()
    {
        return $this->color;
    }

    // set the value of

    public function setColor($color)
    {
        $this->color = $color;
        return $this;
    }

    // get the value of
    public function getMaterials()
    {
        return $this->materials;
    }
    public function listMaterials()
    {
        return implode(', ', $this->materials);
    }

    // set the value of

    public function setMaterials($materials)
    {
        $this->materials = $materials;
        return $this;
    }
}
