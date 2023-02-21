<?php
require_once __DIR__ . '/Category.php';

class Products
{
    protected $id;
    protected $img;
    protected $title;
    protected $price;
    protected $category;


    public function __construct($img, $title, $price, Category $category)
    {
        $this->setId();
        $this->setImg($img);
        $this->setTitle($title);
        $this->setPrice($price);
        $this->setCategory($category);
    }



    // get the value of id
    public function getId()
    {
        return $this->id;
    }

    // set the value of id

    public function setId()
    {
        $this->id = uniqid();
        return $this;
    }



    // get the value of img
    public function getImg()
    {
        return $this->img;
    }

    // set the value of img

    public function setImg($img)
    {
        $this->img = $img;
        return $this;
    }




    // get the value of title
    public function getTitle()
    {
        return $this->title;
    }

    // set the value of title

    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }


    // get the value of price
    public function getPrice()
    {
        return $this->price;
    }

    // set the value of price

    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }


    // get the value of
    public function getCategory()
    {
        return $this->category;
    }

    // set the value of

    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }
}
