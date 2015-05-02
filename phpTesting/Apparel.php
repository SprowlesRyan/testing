<?php
include_once "product.php";

class Apparel{

 private $size;
 private $color;

 function __construct($size, $color){
  $this->size = $size;
  $this->color = $color;
 }

 // function showApparel(){
 // 	echo $this->size . ' ' . $this->color;
 // }
}

// $test2 = new Apparel(32, 'red');
// $test2->showApparel();
