<?php
include_once "product.php";

class Apparel extends  product{

 private $size;
 private $color;

 function __construct($size, $color, $id, $price){
  $this->size = $size;
  $this->color = $color;
  parent::__construct($id, $price);
 }

 // function showApparel(){
 // 	echo $this->size . ' ' . $this->color;
 // }
}

// $test2 = new Apparel(32, 'red');
// $test2->showApparel();
