<?php
include_once "product.php";

class Books extends  product{

 private $numPages;
 private $author;

 function __construct($numPages, $author, $id, $price){
  $this->numPages = $numPages;
  $this->author = $author;
  parent::__construct($id, $price);
 }

 //  function showPages(){
 // 	echo $this->numPages . ' ' . $this->author;
 // }
}

// $test4 = new Books(325, 'Smith');
// $test4->showPages();
