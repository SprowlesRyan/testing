<?php
include_once "Apparel.php";

class Jeans{

 private $numPockets;

 function __construct($numPockets){
  $this->numPockets = $numPockets;
 }

 //  function showPockets(){
 // 	echo $this->numPockets;
 // }
}

// $test3 = new Jeans(4);
// $test3->showPockets();
