<?php
class Fruit {
    public $name;
    public $color;
    function __construct($name ,$class){
        $this->name = $name;
        $this->color = $class;
    }
    function __destruct(){
        echo "The Fruit is {$this->name} and the Color is {$this->color}.";
    }
}
$data = new Fruit("Apple", "Red");


?>