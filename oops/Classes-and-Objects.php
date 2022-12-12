<?php
class student{
    public $name;
    public $class;
    function set_name($name){
        $this->name = $name;
    }
    function set_class($class){
        $this->class = $class;
    }
    function get_name(){
        return $this->name;    
    }
    function get_class(){
        return $this->class;

    }

}
$data = new student();
$data->set_name("Kamalesh");
$data->set_class("B.tech");
echo $data->get_name()."<br>";
echo $data->get_class();

?>