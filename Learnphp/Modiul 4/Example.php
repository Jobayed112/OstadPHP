<?php
// class =====================================================

// class shape{
//     protected $name;
//     protected $area;
//     public function __construct($name){
//         $this->name=$name;
//         $this->calculateArea();
//     }
//     public function getArea(){
//         echo "$this->name area is $this->area";
//     }
//     public function calculateArea(){

//     }

// }
// class Triangle extends shape{
//     private $a,$b,$c;
//     public function __construct($a,$b,$c){
//         $this->a=$a;
//         $this->b=$b;
//         $this->c=$c;
//         // parent::__construct($a,$b,$c);
//         parent::__construct("Triangle");
//     }
//     public function calculateArea()
//     {
//         $perimeter=($this->a+$this->b+$this->c)/2;
//         $this->area=sqrt($perimeter*(($perimeter-$this->a)*(($perimeter-$this->b)*(($perimeter-$this->c)))));
//     }
// }
// class  Rectangle extends shape{
//     private $a,$b;
//     public function __construct($a,$b){
//         $this->a=$a;
//         $this->b=$b;
//         parent::__construct("Rectangle");
//     }
//     public function calculateArea(){
//         $this->area=$this->a*$this->b;
//     }
// }
// // $s=new shape();
// $s=new Rectangle(2,3);
// echo $s->getArea();








// class =====================================================




// function 4

// class RGB{
//        private $color;
//     private $red;
//     private $green;
//     private $blue;
//     public function __construct($ColorCode=''){
//         $this->color.=ltrim($ColorCode,'#');
//         $this->parseColor();
//     }
//     public function getColor(){
//         return $this->color;
//     }
//     public function getRGBColor(){
//         return [$this->red,$this->green,$this->blue];
//     }
//     public function readRGBColor(){
//         echo "red = {$this->red} \n green = {$this->green} \n blue = {$this->blue}\n";
//     }
//     public function setColor($ColorCode){
//         $this->color=ltrim($ColorCode,'#');
//         $this->parseColor();
//     }
//     private function parseColor(){
//         if($this->color){
//             // $colors=sscanf($this->color,'%02x%02x%02x');
//             // print_r($colors);
//             // // $ColorCode=implode(' ',$colors);
//             // // return $ColorCode;

//             list($this->red,$this->green,$this->blue)=sscanf($this->color,"%02x%02x%02x");
//         }else{
//             list($this->red,$this->green,$this->blue)=[0,0,0];
        
//      }
        
//     }
//     public function setRed() {
//        return $this->red;
//     }
//     public function setGreen(){
//        return $this->green;
//     }
//     public function setBlue(){
//        return $this->blue;
//     }
// }

// $hColor=new RGB();
// $hColor->setColor("#ffffff");
// // echo $hColor->setColor("#ffefaf");
// // $hColor->getRGBColor();

// class =====================================================



// class Human{
//     public $name="Human";
//     public $age='';
//     public $year='';
//     public function rana(){
//         return "My name is $this->name \n";
//     }
//     public function age(){
//         return "And my age is $this->age \n";
//     }
//     public function year(){
//         return "Or year is $this->year \n";
//     }
// }

// $human=new Human();
// echo $human->rana();


// class =====================================================



// class Human{
//     public $name;
//     public $age;
//     public function __construct($pname="Jobayed",$page=''){
//         echo "<h3> New Human Object is Created </h3>";
//     $this->name=$pname;
//     $this->age=$page;
//     }
//     public function sayHi(){
//         echo "salam \n";
//         echo $this->name . "\n";
//         echo $this->age. "\n";
//         $this->sayName();
//     }
//     public function sayName(){
//         if ($this->age) {
//             echo "My name is {$this->name} and I am {$this->age} years old.\n";
//             # code...
//         }else{
//             echo "My name is {$this->name} and I Don't No My Age:\n";
//         }
//     }
// }

// $human=new human();
// $human->sayHi();





// class =====================================================



class Fund{
    private $fund;
    function __construct($initialFund){
        $this->fund=$initialFund;
    }
    function add($add){
        $this->fund+=$add;
    }
    function sum($sum){
        $this->fund +=$sum;
    }
    function  dublicat($dublicat){
        $this->fund*=$dublicat;
    }
    function total($total){
    echo "Total Amount is :\n";
    echo $this->fund;
    }
}

$f=new Fund(3,2);

$f->add(2);











// class =====================================================




















// class =====================================================

























// class =====================================================















// class =====================================================

















// class =====================================================


















// class =====================================================


















// class =====================================================





















// class =====================================================

















// class =====================================================



















// class =====================================================















// class =====================================================



















// class =====================================================



















// class =====================================================



















// class =====================================================













// class =====================================================




?>