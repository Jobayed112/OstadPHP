<?php

// class 1===================================================


//  class person{
//      public $name;
//      public $age;
//     public $email;
//     public $phone;
//     public function __construct($name="Jobayed", $age=23,$email="jobayedrana112@gmail.com",$phone=1727040937,){
//         $this->name=$name;
//         $this->age=$age;
//         $this->email=$email;
//         $this->phone=$phone;
//     }
//     public function display(){
//         echo $this->name."<br>";
//         echo $this->age."<br>";
//         echo $this->email."<br>";
//         echo $this->phone."<br>";
//     }
//     public function setNmae($name){
//         $this->name=$name."<br>";
//         return $this->name;
//     }
//  }
// $person=new person();
// $person->display();
// $person->setNmae("jobayed");





// ==================================================
// class 2======
// ==================================================
// class Calculation{
//     public $a,$b,$r;
//     public function __construct($a,$b){
//         $this->a=$a;
//         $this->b=$b;
//     }
//     public function sum(){
//         $this->r=$this->a+$this->b;
//     //    echo  $this->sub();
//        echo PHP_EOL;
//         echo $this->r;
//     }
//     public function sub(){
//         $this->r=$this->a-$this->b;
//         echo $this->r;
//     }
//     public function multiply(){
//         $this->r=$this->a*$this->b;
//         echo $this->r;
//     }
// }
// class newCalculation extends Calculation{


// }
// $ncal=new newCalculation(2,3);

// $ncal->multiply();
// $cal=new Calculation();
// $cal->a=5;
// $cal->b=2;
// // echo $cal->sub();
// echo PHP_EOL;
// // echo $cal->sum();
// $ncal=new newCalculation();
// $ncal->a=5;
// $ncal->b=2;
// echo $ncal->sub();






// ========================================

// class 3============================================================
//inheritance============================================================

// class Employee{
//     public $name;
//     public $age;
//     public $salary;
//     public function __construct($n="Jobayed Rana",$a=23,$salary=20){
//         $this->name=$n;
//         $this->age=$a;
//         $this->salary=$salary;
//     }
//     public function info(){
//         echo "<h3>Employee Information</h3>";
//         echo "Empolayee Name is : {$this->name} <br>";
//         echo "Empolayee Age is : {$this->age} <br>";
//         echo "Empolayee Salary is : {$this->salary} <br>";
//     }
// }
// class Manager extends Employee{
//     public $ta=10;
//     public $phoneCharge=5;
//     public $totalSalary;
    
//     public function info(){
//         $this->totalSalary=$this->ta+$this->phoneCharge;
//         $this->totalSalary +=$this->salary;
//         echo "<h3>Manager Information</h3>";
//         echo "Empolayee Name is : {$this->name} <br>";
//         echo "Empolayee Age is : {$this->age} <br>";
//         echo "Empolayee Salary is : {$this->totalSalary} <br>";

//     }
// }
// $emp=new Employee();
// $emp->info();
// echo PHP_EOL;
// $emp=new Manager("Rana");
// $emp->info();



// ===================================================
// class 4
//Access modifiers  ;
// // public class obj fun sob jaigate use kora jai
// ===================================================
// class Base{
//     public $name;
//     public function __construct(){
//         $this->name = "Jobayed";
//     }
//     public function info(){
//         echo "My Name is :{$this->name} \n";
//     }
// }
// $obj=new Base();
// // $obj->name="Rana";
// $obj->info();

// ===================================================
// ////protected class= function= extends} kore use kora jai obj kora jai na 
// ===================================================

// class Base{
//     protected $name;
//     public function __construct(){
//         $this->name="Rifat";
//     }
//      protected function info(){  // public function info(){echo "My name is ".$this->name."\n";} 
//         echo "My name is ".$this->name."\n";
//     }
// }
// class NewBase extends Base{
//     function nInfo(){
//     $this->name="New Base";
//     echo $this->name;
//     }
// }
// // $obj=new Base();
// // $obj->name="Ahammad";
// // $obj->info();

// $obj=new NewBase();

// $obj->nInfo();


// ===================================================
// private only class a use kora jai ===========
// ===================================================


// class Base{
//     private $name;
//     public function __construct(){
//         $this->name="Rifat";
//     }
//     private function info(){
//         echo "My name is ".$this->name."\n";
//     }
//     public function name(){
//         return $this->info();
//     }
// }

// $obj=new Base();
// // $obj->name="rana";
// // $obj->info();
// $obj->name();



// ===================================================
// class 5
//Overrriding Merhods %properties
// ===================================================

// class Riding{
//     public $name="jobayed Rana";
//     Public function notOver(){
//         echo "My Name Is : {$this->name}\n";
//     }

// }
// class OverRiding extends Riding{
//     public $name="Rifat";
//     public function OverRid(){
//         echo "My Name Is : {$this->name}\n";
//     }
// }

// $obj=new Riding();
// $obj->notOver();

// $obj2=new OverRiding();
// $obj2->OverRid();



// ===================================================
// class 4
// Abstract
// ===================================================


















// ===================================================
// class 4
// ===================================================




















// ===================================================
// class 4
// ===================================================























// ===================================================
// class 4
// ===================================================



















// ===================================================
// class 4
// ===================================================







// ===================================================
// class 4
// ===================================================

















// ===================================================
// class 4
// ===================================================


















// ===================================================
// class 4
// ===================================================
















// ===================================================
// class 4
// ===================================================



















// ===================================================
// class 4
// ===================================================















// ===================================================
// class 4
// ===================================================














// ===================================================
// class 4
// ===================================================


















// ===================================================
// class 4
// ===================================================














// ===================================================
// class 4
// ===================================================


















// ===================================================
// class 4
// ===================================================



















// ===================================================
// class 4
// ===================================================















// ===================================================
// class 4
// ===================================================














// ===================================================
// class 4
// ===================================================
















// ===================================================
// class 4
// ===================================================














// ===================================================
// class 4
// ===================================================
















// ===================================================
// class 4
// ===================================================










// ===================================================
// class 4
// ===================================================















// ===================================================
// class 4
// ===================================================












// ===================================================
// class 4
// ===================================================















// ===================================================
// class 4
// ===================================================












// ===================================================
// class 4
// ===================================================

















// ===================================================
// class 4
// ===================================================





























































































































































































































































































































































































































































?>