<?php
trait hello{
    public function sayhello(){
        echo "Hello everyone \n <br>";
    }
}
trait bye{
    public function saybye(){
        echo "bye bye everyone \n <br>";
    }
}
class base1{
    use hello,bye;
}
class base2{
    use hello;
}
$test7 = new base1();
$test8 = new base2();
$test7->sayhello();
$test7->saybye();
$test8->sayhello();
$test8->saybye();
?>