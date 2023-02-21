<?php

class Category
{
    private $name;
    private $icon;

    public function __construct($name, $icon)
    {
        $this->setName($name);
        $this->setIcon($icon);
    }

    // get the value of
    public function getName()
    {
        return $this->name;
    }

    // set the value of

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    // get the value of
    public function getIcon()
    {
        return $this->icon;
    }

    // set the value of

    public function setIcon($icon)
    {
        $this->icon = $icon;
        return $this;
    }
}














    // // get the value of
    // public function get()
    // {
    //     return $this->;
    // }







    //     // set the value of

    //     @return self

    //     public function set()
    //     {
    //         $this->
    //         return $this->;
    //     }