<?php
include_once "Apparel.php";

class Jeans extends Apparel{

 private $numPockets;

 function __construct($numPockets, $size, $color, $id, $price){
  $this->numPockets = $numPockets;
  parent::__construct($size, $color, $id, $price);
 }

 //  function showPockets(){
 // 	echo $this->numPockets;
 // }
}

// $test3 = new Jeans(4);
// $test3->showPockets();
