<?php

class student {
    public $Fname ,$Lname , $roll_num ,$class ,$addresh;
    function __construct($Fname,$Lname,$roll_num,$class,$addresh){
        $this->Fname = $Fname;
        $this->Lname = $Lname;
        $this->roll_num = $roll_num;
        $this->class = $class;
        $this->addresh = $addresh;
     }
    function get_Fname(){
        return $this->Fname;
        
        
    }
    function get_Lname(){
        return $this->Lname;
        
    }
    function get_roll_num(){
        return $this->roll_num;
    }
    function get_class(){
        return $this->class;
    }
    function get_addresh(){
        return $this->addresh;
    }
    
}
$data = new student("Kamalesh" , "Patel","1232132","B.tech","Varanasi");
echo "First Name "."<b>". $data->get_Fname()."<br>";
echo $data->get_Lname()."<br>";
echo $data->get_roll_num()."<br>";
echo $data->get_class()."<br>";
echo $data->get_addresh()."<br>";




?>
