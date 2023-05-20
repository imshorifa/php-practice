<?php
class base{
    public $name;
    public function __construct($n){
        $this->name =$n ;
    }
    public function show(){
        echo "Enter name: ". $this->name ."<br>";
     
    }
}
$test =new base("shorifa");
$test1 =new base("shorifa1");
$test2 =new base("shorifa2");
$test3 =new base("shorifa3");
$test4 =new base("shorifa4");
$test->show();
$test1->show();
$test2->show();
$test3->show();
$test4->show();
?>