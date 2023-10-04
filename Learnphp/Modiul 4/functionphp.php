<?php





// function 19 












// function 18
// interface


// function 17

// class districtCollention implements IteratorAggregate{
//     private $districts;
//     public function __construct(){
//         $this->districts=array();
//     }
//     public function add($district){
//         array_push($this->districts,$district);
  
//     }
//     public function getDistricts(){
//         return $this->districts;
//     }
//      function getIterator(){
//         return new ArrayIterator($this->districts);

//     }
// }
// $dristri=new districtCollention;
// $dristri->add("Khetlal");
// $dristri->add("Kalai");
// $dristri->add("Joypurhat");
// $dristri->add("Akkelpur");
// $dristri->add("Pachbibi");

// // IteratorIterator =====

// $_districts=$dristri->getIterator();
// foreach($_districts as $d){
//     echo $d."\n";
// }




// $_districts=$dristri->getDistricts();
// print_r($_districts);
// foreach($_districts as $dkey => $district){
//     echo $dkey."\n";
//     echo $district."\n";
// }



// function 16 masic  function

// class Student{
//     private $name;
//     private $age;
//     private $class;
//     function __construct($name='',$age='',$class=''){
//         $this->name=$name;
//         $this->age=$age;
//         $this->class=$class;
//     }
//     public function __get($prop){
//         return $this->$prop;
//     }
//     public function __set($prop,$value)
//     {
//          $this->$prop=$value;
//     }
// }
// $r=new Student("Rahim",'14','12');
// // echo strtoupper($r->name);
// $r->name="jobayedrana";
// echo $r->name;
// $r->name="alkdjflka";
// echo $r->name;


// function 16====

// class Student{
//     private $name;
//     private $age;
//     private $class;
//     function __construct( $name='',$age='',$class=''){
//         $this->name=$name;
//         $this->age=$age;
//         $this->class=$class;
//     }
//     function showAll(){
//         echo $this->name."\n";
//         echo $this->age . "\n";
//         echo $this->class . "\n";
//     }
//     function getName(){
//         return $this->name. "\n";
//     }
//     function setName($name){
//         return $this->name=$name."\n";
//     }
//     function getage(){
//         return $this->age."\n";
//     }
//     function setage ($age){
//         return $this->age=$age."\n";
//     }
//     function getclass(){
//         return $this->class."\n";
//     }    function setclass($class){
//         return $this->class=$class."\n";
//     }

// }

// $r=new Student("Rahim",23,12);


// echo $r->showAll();
// echo $r->setage(2);


// function 15====

// define("ok",123);
// const CITY="Dhaka";


// echo ok."\n";
// echo CITY;

// class MyClass{
//     const CITY="Dhaka";
//     function saHi(){
//         echo "Hi from " .$this::CITY."\n";
//         echo "Hi from " . self::CITY."\n";
//     }
// }

// $constent=new MyClass();
// // echo MyClass::CITY;
// // echo $constent::CITY;

// $constent->saHi();




// function 14========

// class A{
//     // private $name;
//    protected static $name;

//     static function sayHi(){
//         self::$name="j";
//         echo "Hi from A\n";
//     }
// }
// class B extends A{
//     static function sayHi(){
//         echo "Hi from B \n";
//         echo parent::$name="lakd \n";

//         parent::sayHi();
//     }
// }




// function 13
// function 13

// class A{
//     private $name;

//     static function sayHi(){
//         echo "Hi from A\n";
//     }
// }
// class B extends A{
//     static function sayHi(){
//         echo "Hi from B \n";

//         parent::sayHi();
//     }
// }
// B::sayHi();







// function 11


// class MathCalculator{
//     private $number;
//     static $name;
//     static function fibonacci($n){
//         // $this->number=12;   // self  ::/don't change this variable static
//         echo "This is a Fibonacci number {$n} \n";
//     }
//     public function factorial($n){
//         $this->number=12;
//         echo "This is a Factorial number {$n} \n";

//     }

// }




// function 10 interface


// interface BaseAnimal{
//     public function isAlive();
//     public function canEat();
//     public function breed();
// }
// class Animal implements BaseAnimal{
//     public function isAlive(){

//     }
//     public function canEat(){

//     }
//     public function breed(){

//     }
// }

// interface BaseHuman extends BaseAnimal{
//     public function canTalk();
//     public function speak();


// }
// // class Human extends BaseHuman{   do not estends

// // }

// class Human implements BaseHuman{
//     public function speak(){

//     }
//     public function isAlive(){

//     }
//     public function canEat(){

//     }
//     public function breed(){

//     }
//     public function canTalk(){
//     }

// }

// // polemorefisom ture or flase

// abstract class AdstractHuman implements BaseHuman{
//     abstract public function run();
//     public function speak(){
//         echo "I am a human2";
//     }

// }



// function 9

// class Shape{

// }
// class Shapes{
//     private $shapes;
//     function __construct(){
//         $this->shapes = array();
//     }
//     function addShape(Shape $shape){
//         array_push($this->shapes,$shape);
//     }
//     function totalShape(){
//          return count($this->shapes);
//     }
    
// }
// class Rectangle extends Shape{

// }
// class Triangle extends Shape{

// }
// class Student extends Shape{

// }
// class color{

// }




// function 8


// abstract class OurClass{
//    final public function DoSomething(){
//         echo "This is abstract class";
//     }
// }
// class MyClass extends OurClass{



//     // public function DoSomething(){   //cannot overide final method
//     //     echo "This is class override";
//     // }
// }



//   Function 7

// class Jobayed{
//     public $name;
//     public $age;
//     public function __construct($name,$age){
//         $this->name=$name;
//         $this->age=$age;
//     }
//     public function getName(){
//         return $this->name;
//     }
//     public function getAge(){
//         return $this->age;
//     }
//     public function setName($name){
//         $this->name=$name;
//     }
    
// }






// function 6

// class Shape{
//     protected $name;
//     protected $area;
//     public function __construct($name){
//         $this->name = $name;
//         $this->calculateArea();
//     }
//     public function getArea(){
//         echo "This {$this->name}'s Area is {$this->area}";
//     }
//     public function calculateArea(){

//     }
// }

// class Triangle extends Shape{
//     private $a,$b,$c;
//     public function __construct($a1,$b2,$c3){
//         $this->a=$a1;
//         $this->b=$b2;
//         $this->c=$c3;
//         parent::__construct("Triangle");
//     }
//     public function calculateArea(){
//         $perimeter=($this->a+$this->b + $this->c)/2;
//         $this->area=sqrt($perimeter*(($perimeter-$this->a)-($perimeter-$this->b)-($perimeter-$this->c)));
//     }

// }
// class Rectangle extends Shape{
//     private $a,$b;
//     public function __construct($a1,$b2){
//         $this->a=$a1;
//         $this->b=$b2;
//         parent::__construct("Rectangle");
//     }
//     public function calculateArea(){
//         $this->area=$this->a*$this->b;
//     }

// }



// Function 5

// class ParentClass{
//     protected  $parent;
//     public function __construct($name){
//         $this->parent=$name;
//         $this->getName();

//     }
//     public function getName(){
//         echo "This is The parent Class {$this->parent} \n";
//     }
//     public function getName2(){
//         echo "This  parent {$this->parent} \n";
//     }
// }
// class ChildClass extends ParentClass{
//     public function getName(){
//         parent::getName2();
//         echo "This is the child Class {$this->parent} \n";
//     }
// }








// Function 4

// class RGB{
//     private $color;
//     private $red;
//     private $green;
//     private $blue;

//     public function __construct($colorCode='')
//     {   
//         $this->color=ltrim($colorCode,'#');
//         $this->parseColor();   
//     }
//     public function getColor()
//     {
//         return "This Color Code $this->color \n";
//     }
//     public function getRGBColor()
//     {
//         return array($this->red,$this->green,$this->blue);
//     }

//     public function readRGBColor()
//     {
//         echo "Red = {$this->red}\nGreen = {$this->green}\nBlue = {$this->blue}\n";
//     }

//     public function setColor($colorCode)
//     {
//         $this->color=ltrim($colorCode,'#');
//         $this->parseColor();
//     }

//     private function parseColor()
//     {
//         if($this->color){
//             list($this->red,$this->green,$this->blue)=sscanf($this->color,'%02x%02x%02x');
//         }else{
//             echo "Error: Invalid color";
//         }

//         // Optional

//         // list($this->red,$this->green,$this->blue)=sscanf($this->color,'%02x%02x%02x');
//         // echo "RGB Color IS \n{$this->red}\n{$this->green}\n{$this->blue}\n";

//         // $colors=sscanf($this->color,"%02x%02x%02x");
//         // print_r($colors);

//     }
//     public function getRed(){
//         return "Red RGB Color Code is : $this->red \n";                             
//     }
//     public function getGreen(){
//         return "Green  RGB Color Code is : $this->green \n"; 
//     }
//     public function getBlue(){
//         return "Blue RGB Color Code is: $this->blue \n";
//     }

// }




// // function 3


class Fund{
    // protected $fund;
    private $fund;
    public function __construct($initialFund){
        echo "initial{$this->fund} to {$initialFund}\n";
        $this->fund=$initialFund ."\n";
    }
   public function add($addAmount){
        $this->fund +=$addAmount;
        echo "$addAmount adding: Total $this->fund  \n";
        $this->dublicat(0);
    }
    private function dublicat($dublicatAmount){
        $this->fund -=$dublicatAmount;
        echo "$dublicatAmount to Dublicat $this->fund \n";
    
    }
    public function total(){
        echo "Total: $this->fund";
        // if($this->fund){
        //     echo "You have ".$this->fund."is add \n";
        // }else{
        //     echo "Your amount is no abilable.and no amount \n";
        // }
    }

}



// //function 2


// class Human{
//     public $name;
//     public $age;
//     public function __construct($personName="jobayed",$personAge=0){
//         $this->name=$personName;
//         $this->age=$personAge;
//     }
//     public function setName(){
//         echo "Salam \n";
//         $this->setNameAge();
//     }
//     public function setNameAge(){
//         if($this->age){
//         echo "My name is {$this->name} and I am {$this->age} years old.\n";
//         }else{
//         echo "My name is {$this->name} and I Don't No My Age:\n";
//         }
//     }
   
// }




// //Function 1

// class Human{
//     public $name;
//     public $age;
//        public function __construct($personName="<input type=test placeholder=Enter&nbsp;Your&nbsp;>",$personAge="<input type=test placeholder=Enter&nbsp;your&nbsp;Age>"){
//         echo "New Human Object is Created\n";
//         $this->name=$personName;
//         $this->age=$personAge;
//     }
//     public function sayHi(){
//         echo "salam \n";
//         $this->sayname();
//         // $this->chackbox();
//     }
//     public function sayname(){
//         if($this->age){
//             echo "My name is {$this->name} I am {$this->age} years old\n";
//         }else{
//         echo "My name is {$this->name} I am Please Enter Your Age\n";
//         }

//     }
    // public function chackbox(){
    //     echo " jobayed: <input type=checkbox checked=checked placeholder =Enter&nbsp;your&nbsp;>\n";

    // }
// }



// function 0

// class Human{
//     public function hName(){
//         echo "Jobayed it's a Human \n";
//     }
//     public function cName(){
//         echo "The cat is a Meow \n";
//     }
//     public function dName(){
//         echo "The dog is a woof \n";
//     }
// }

// class Human1{
//     public $name="Jobayed Rana";
//     public $age=20;
//     public $year=2001;
//     public function Rana(){
//         return  "My name is $this->name \n";
//     }
//     public function age(){
//         return "And my age is $this->age \n";
//     }
//     public function year(){
//         return "Or year is $this->year \n";
//     }
    
// // }

// $h=new Human1();
// echo $h->Rana();




?>