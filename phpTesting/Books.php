<?php
include_once "product.php";

class Books{

 private $numPages;
 private $author;

 function __construct($numPages, $author){
  $this->numPages = $numPages;
  $this->author = $author;
 }

 //  function showPages(){
 // 	echo $this->numPages . ' ' . $this->author;
 // }
}

// $test4 = new Books(325, 'Smith');
// $test4->showPages();
