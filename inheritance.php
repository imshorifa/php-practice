<?php
class Employee{
  public $name;
  public $age;
  public $salary;
  function __construct($n,$a,$s){
      $this ->name = $n;
      $this ->age = $a;
      $this ->salary = $s;
  }
  function info(){
    echo "<h3>employee profile manager: </h3> <br>";
    echo "Employee name:  " . $this ->name ."<br>";
    echo "Employee age:  " . $this ->age ."<br>";
    echo "Employee salary:  ". $this ->salary ."<br>";
  }
}
class manager extends Employee{
    public $ta =1000;
    public $phone =300;
    public $totalsalary;
    function info(){
        $this->totalsalary = $this->salary + $this->ta + $this->phone;
        echo "<h3>Manager profile: </h3> <br>";
        echo "Employee name:  " . $this ->name ."<br>";
        echo "Employee age:  " . $this ->age ."<br>";
        echo "Employee salary:  ". $this->totalsalary ."<br>";
    }
}
$e2 = new manager("Raja","45",5666);
$e1 = new Employee("Ram","25",10000);
$e1 ->info();
$e2 ->info();
?>