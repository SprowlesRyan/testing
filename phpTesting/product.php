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
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        return $this->id =$id;
}
    public function getPrice(){
        return $this->price;
    }
    public function setPrice($price){
        return $this->price = $price;
    }

}

// $test = new product(1, 300);
// $test->sale(10);