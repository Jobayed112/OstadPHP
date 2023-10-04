<?php

require "functionphp.php";

// function 15=====




// function 14=======

// B::sayHi();
// B::$name;


// function 13========

// B::sayHi();



// function 11

// $math=new MathCalculator();
// // $math->factorial(3);
// self::$name="jobayed";

// // MathCalculator::fibonacci(3);



// function 10


// $h=new Human();
// // echo $h instanceof BaseAnimal;
// echo $h instanceof BaseAnimal;

// $h=new Animal();

// echo $h instanceof BaseAnimal;



// function 9

// $shapesCollection=new Shapes();
// $shapesCollection->addShape(new Rectangle);

// $shapesCollection->addShape(new Triangle);

// $shapesCollection->addShape(new Student);

// //$shapesCollection->addShape(new color);

// echo $shapesCollection->totalShape();




// function 8

// $mc=new MyClass();
// $mc->DoSomething();





// function 7


// $jobayed=new Jobayed("jobayed",23);
// echo $jobayed->getName();
// echo PHP_EOL;
// echo $jobayed->getAge();




    //function 6
// $rectangle=new Rectangle(2,4);
// $rectangle->getArea();



// // function 5

//     $childClass=new ChildClass("Jobayed");
//     $childClass->GetName();



    // function 4

// $RGB=new RGB("#ffffff");
// echo $RGB->getColor();
// echo PHP_EOL;
// print_r( $RGB->getRGBColor());
// echo PHP_EOL;
// $RGB->readRGBColor();
// echo PHP_EOL;
// $RGB->setColor("#fffff"); //set color
// $RGB->setColor("#"); /// No set error
// echo PHP_EOL;
// print_r($RGB->getRGBColor());
// echo PHP_EOL;
// echo $RGB->getRed();
// echo $RGB->getGreen();
// echo PHP_EOL;
// echo $RGB->getBlue();



    // funtion 3
    // echo "<pre>\n";
    // $fund=new Fund(100);
    // echo $fund->total();
    // // $fund->add(30);
    // $fund->fund=32;
    // echo $fund->total();
    // echo $fund->dublicat(1);
    // echo $fund->add(12);
    // $fund->dublicat(50);
    // $fund->dublicat(72);
    // $fund->dublicat();




    //Function 2
    // $newHuman=new Human("jobayed",123);
    // $newHuman2=new Human();
    // $newHuman->setName();
    // $newHuman2->setName();
 
   
   
   
//function 1   

    // $h1=new Human("Jobayed",20);
    // $h2=new Human("Rohim",21);
    // $h3=new Human("joabf",37);
    // echo "<pre>";
    // // echo $h1->sayHi();
    // // echo $h2->sayHi();
    // // echo $h3->sayHi();
    // $h4=new Human();
    // // echo $h4->sayHi();
    // echo $h4->name;


    // $humanName=new Human();
    // echo $humanName->cName();
    // echo $humanName->hName();
    // echo $humanName->dName();

    // $parsolanInfo=new Human1();
    // // $parsolanInfo->name="Wasel Ahammed";
    // // $parsolanInfo->age=23;
    // $parsolanInfo->year=2002;
    // $rana=$parsolanInfo->Rana();
    // $age=$parsolanInfo->age();
    // $year=$parsolanInfo->year();
    // echo $rana;
    // echo $age;
    // echo  $year ;    



//  class Human{
//    public $name='jobayed';
//    public function sayHi(){
//       echo "Human \n";
//    }
//    public function name(){
//       echo "The name of the Human is :{$this->name}.\n";
//    }
//  }
//    class Cat{
//       public $name='Cational';
//       public function sayHi(){
//          echo "Cat \n";
//       }
//       public function name(){
//          echo "The name of the Cat is :{$this->name}.\n";
//       }

//    }

//    class Dog{
//       public $name='Tomy';
//       public function sayHi(){
//          return "Dog \n";
//       }
//       public function name(){
//         return  "The name of the Dog is :{$this->name}.\n";
//       }

//    }

//    $human= new Human();
//    $cat= new Cat();
//    $dog= new Dog();
//    $human->name='Rana';
//    $cat->name='Osam cat';
//    $dog->name='lola';
   
//    $human->sayHi();
//    $human->name();

//    $cat->sayHi().$cat->name();

//    echo $dog->sayHi().$dog->name();

//

// class sayName{
//    public $name;
//    // public $name1;
//    public function sayname(){
//       echo "My name is : $this->name\n";
//    }
 
// }
// class Male{
//    // public $name;
//    public $name="Jobayed Rana";
//   public function itsman(){
//       echo "It's a man \n";
//    }

// }
// class Female{
//    // public $name;
//    public $name="Juliya \n";
//   public function itsfemale(){
//       echo "it's a female \n";
//    }
// }
// class Others{
//    // public $name;
//    public $name="Sundory";
//    // public $name1='Sun';
//    // public $name1;
//    public $name1="Fatema \n";

//  public  function itsothers(){
//       echo "it's a other\n";
//       // $this->itsother();
//    }
//    public function itsother(){
//       $this->itsothers();
//       echo "it's a other human is:{$this->name1}\n";
//    }
// }


// echo PHP_EOL;
// $name=new sayNAME();
// $name->name="jobayed Rana";
// $name->sayname();

// // echo $name2->name;


// $male=new Male();
// $male->itsman();
// $male->name="Jobayed \n";
// echo $male->name;

// $female=new Female();
// $female->itsfemale();
// $female->name="Sadiya \n";
// echo $female->name;

// $others=new Others();
// $others->itsothers();
// $others->name="Mannan\n";
// echo $others->name;


// class Human{
//    public $name;
//    public $age;
//    public function __construct($personName,$personAge=0){
//       // echo "New Human object is created \n";
//       $this->name=$personName;
//       $this->age=$personAge;
//    }
//    public function sayHi(){
//       // echo "Salam \n";
//       $this->sayName();
//    }
//    public function sayName(){
//       if($this->name==null){
//          echo "No";
//       }elseif($this->age){
//          echo "My name is {$this->name}.I am {$this->age} years old \n";
//       }else{
//          echo "My name is {$this->name} I don't know how old i am  \n"; 

//       }
//    }
// }
// $h1=new Human("Rubel",12);
// // $h1->name="jobayed";
// $h1->sayHi();
// $h2=new Human("Jobayed",23);
// $h2->sayHi();
// $h3=new Human("Jobayed rana",23);
// $h3->sayHi();

?>