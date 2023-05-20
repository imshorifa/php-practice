<?php 
class base{
    public static $name="Yahoo Baba";
    public static $name1="shorifa";
    public function show(){
       echo self::$name;
       echo self::$name1;
    }
}
// $test =new base();
echo base::$name;
echo "<br>";
echo base::$name1;
echo "<br>";
//  base::show();
?>
<hr>

