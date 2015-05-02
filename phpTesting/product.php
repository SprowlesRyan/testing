<?php
class product {

    private $id;
    private $price;

    function __construct($id, $price){
        $this->id = $id;
        $this->price = $price;
    }

    function sale ($percent){
        echo $this->price = $this->price - ($this->price * ($percent/100)) . '</br>';
    }

}

// $test = new product(1, 300);
// $test->sale(10);