<?php
class calculation{
    // properties
    public $name;
    public $color;
    // method
    function set_Name($name){
        $this->name =$name;
    }
    function get_Name($name){
       return $this->name;
    }
} 
$apple =new calculation();
$banana =new calculation();
$pinaapple =new calculation();
$rice = new calculation();
$apple->set_Name('Apple');
$banana->set_Name('Banana');
$pinaapple->set_Name('Pinaapple');
$rice->set_Name('Rice');
echo $apple->get_Name('Apple');
echo "<br>";
echo $banana->get_Name('Banana');
echo "<br>";
echo $pinaapple->get_Name('pineapple');
echo "<br>";
echo $rice->get_Name('Rice');
?>