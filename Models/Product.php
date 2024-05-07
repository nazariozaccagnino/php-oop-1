<?php
class Product
{
    public string $title;
    public string $desc;
    public string $img;

    public function __construct($title, $desc, $img){
        $this->title = $title;
        $this->desc = $desc;
        $this->img = $img;
    }
}
