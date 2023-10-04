<?php
    // php functions
    // bulid-in functions
    // // what is function in php
    // function my_name(){
    //     echo "Rahul";
    //     }
    //     my_name(); // call the call back function;

    // $x="jobayed Rana";
    // $length=strlen($x);
    // echo $length;



    // user define function/dainamic   peramitar prams defult

    // function addTwoNumber($x,$y,$z=12,$a=1){   //defult value $z=1
    //     // $x=10;
    //     // $y = 25 ;
    //     echo $x+$y+$z+$a;

    // }
    // addTwoNumber(0,3);



    // function data type hint 
    // function mySelf(int $age, string $city){
    //     echo "My Age IS $age and City Is $city";
    // }
    // mySelf("23","Dhaka");
    // mySelf(23,"jobayed");



    // php strict mode enable
    // lare(strict_types=1);
    // function mySelf(int $age,string $city){
    //     echo "My Age IS $age and City Is $city";
    // }

    // mySelf(24,'dhaka');


    // // multipule Type hint
    // function mySelf(int|string $age,string $city){
    //     echo "My Age IS $age and City Is $city";

    // }

    // mySelf(23,"jobayed");

    // null  ?
    // function myName(?string $test){
    //     echo $test;

    // }
    // myName("Ostad");
    // myName(null);


    // variadic function unlemited parematir sprit

    // function sum(...$numbers){
    //     echo $numbers[0]; //index number array
    // }
    // sum(1,2,3,4,5,6);


    // Anoymous function //no name function ass variable

    // (function (){
    //     $x=10;
    //     $y=20;
    //     echo $x+$y;
    // }
    // )
    // ();


    // $numbers =function ($name){
    //     $x=10;
    //     $y=20;
    //     echo $x+$y;
    // };
    // $numbers(3);



    //arrow function 

    // $numbers= fn($x,$y)=>$x+$y;
    // echo $numbers(12,23);


    // Recursive Function
//+======================================
    // function retrun type the function is 23 variable 
    
    // function addTwo(){
    //     $x=10;
    //     $y=20;
    //     $return=($x+$y)/2;
    //     return $return;

    // }
    // echo addTwo();

    // $a=1;
    // $b=addTwo();
    // $n=$a+$b;
    // echo $n;

    //function multipul/ union type return type  int|strion|float|void

    // function addTwo($x,$y):int|float{
    //     $return=($x+$y)/2;
    //     return $return;

    // }
    // echo addTwo(12,12.3)+10;

    // nullalable return type
    
    // function addTwo($x,$y):?int{
    //     $return=($x+$y)/2;
    //     return $return;

    // }
    // echo addTwo(12,12.3)+10;
    



    // for loop even number
    // for($i=0;$i<100;$i+=2){
    //     echo $i."\n";
    // }

    // $i=0;
    // while($i<10){
    //     echo $i."\n";
    //     $i++;
    // }
    // $i=0;
    // do{
    //     echo "$i \n";
    //     $i++;
    // }while($i<10);


    // for each loop one item


    // $colors=['red','green','blue','yellow'];
    // foreach($colors as $oneItem){
    //     echo $oneItem."\n";

    // }























































































    ?>