<?php

// function addNumber($a, $b, $c, $d=10 ){

//     echo $a+$b+$c+$d=10;
// }
// addNumber(1,2,3);



// function Myself($age,$city){
//     echo "My name is Jobayed and I am $age years old.I live in $city";
// }

// Myself("33","joypurhat");



// declare(strict_types=1);
// function Myself(int|string $age, string $city){
//     echo "My name is Jobayed and I am $age years old.I live in $city";
// }
// Myself("23","joypurhat");



// function myfun(string $a){
// echo $a;
// }
// myfun("jr23");
// function mynum(int $b){
// echo $b;
// }
// mynum("8");
// function myAll( ? string $c){
// echo $c;
// }
// myAll("i3920982hakfjkaj")



// function myName(string $text){}
// function myName(?string $text){
//     echo $text;

// }
// myName("Jobayed");
// myName(null);


// height value
// function sum(...$number){
//     echo $number[2];
// }
// sum(22,12,123,3,123,)

// function jr(...$number){
//     echo $number[2];
// }
// jr(111,11,11);





// annymous no name function
// $jobayed=function ($a,$b){
//     $a=10;
//     $b=12;
//     echo $a+$b;
//     };
// $jobayed(20,12);
// $jobayed=fn($a,$b)=>$a+$b;
// echo $jobayed(12,12);

// $jobayed=fn($a,$b,$c)=>($a+$b)-$c;
// echo $jobayed(1,22,3);


// $Jobayed=function($c,$d){
//     $a=10;
//     $b=10;
//     $r=$c+$d;
//     echo $r ."\n";
//     echo $a+$b;
// };
// // echo $Jobayed(1,1);
// $Jobayed(1,1);



// function return
// function addTwo($a,$b){
// $r=($a+$b)/2;
// return  $r ;
// } 
// addTwo(2,13);


// Function retrun type float int string bool  ?

// function addTwo($a,$b):float{
//     $r=($a+$b)/2;
//     return  $r ;
//     }
//     echo addTwo(8,13);
    

// function myFunction(mixed $a, mixed $b,mixed $c ){
//     $d=$a+$b+$c;
//     echo $d;
//  return $d;
// }
// myFunction(23,23,23);



// for($a=0; $a<=10;$a++)
// {echo " JR JOba\n ";}


// loop

// for ($i=0; $i < 10; $i=$i+1) {
//     echo "hello World $i\n";

//     # code...
// }
// $a=1;
// do { 

//     echo "jR";
//     echo PHP_EOL;
//     $a++;
//     # code...
// } while ($a <= 10);

//do
// $a=0;
// do {
//     echo "hello World";
//     # code...
//     $a=$a+1;
// } while ($a <= 10);

// $number=1;
// $number1=2;
// foreach ($numbar as $number => $number1) {
//     echo "false $numbar";
//     # code...
// }


// for ($number=0; $number <10 ; $number++) {
//     echo "jobayed Rana ".$number+1 . " JR Jobayed Rana";
//     echo PHP_EOL; 
//     # code...
// }





// for ($a=0; $a < 10 ; $a++) {
//     echo "JR Jobayed Rana<br>"; 
//     echo "Jobayed Rana <br>";
//     echo PHP_EOL;
//     # code...
// }


// $a=10;
// while ($a > 1) {

//     echo "$a Bangladash";
//     echo PHP_EOL;

//     $a--;
//     # code...
// }


// $number=10;
// while ($number >= 0) {
//     echo "$number JR Jobayed Rana\n";
//     $number--;
//     # code...
// }
// $a=0;

// do {
   
//     echo"knad\n";
//     $a++;
//     # code...
// } while ($a <= 10);


// $number=10;
// do {
//     echo "$number JR Jobayed Rana<br>";
   
//     $number--;
//     # code...
// } while ($number>=0);

// whether a given number is even or odd. Provide an input field where the user can enter a number. Display a message indicating whether the number is even or odd.


// $number=0;
// if ($number==0) {
//     echo "zero";
//     # code...
// }elseif (($number%2)==0) {
//     echo"$number is Even Number ";    // if condition true
//     # code...
// }else {
//     echo "odd Number"; 
//        # code...
// }

// $number=0;
// if ($number==0) {
//     echo "The Number Is Zero";
//     # code...
// }elseif ($number%2==0) {
//     echo "The Number Is Even";
//     # code...
// }else{
//     echo "The Number Is Odd";
// }



// Weather Report
// weather information based on temperature. Use a variable to store the temperature Depending on the temperature range, display messages like "It's freezing!", "It's cool.", or "It's warm."


// $watherNumber=360;
// if($watherNumber>=30){
//     echo "It's warm.";
//     } elseif ( $watherNumber >=15 ) {
//         echo "It's freezing!";
//         } else{
//             echo "It's cool.";
//             }


// $watherNumber=29;
// if ($watherNumber>=30) {
//     echo "It's Warm.";
//     # code...
// }elseif ($watherNumber>=15) {
//     echo "It's Freezing";

//     # code...
// }else{
//     echo "It's Cool.";
// }




// $rana=12;
// $jobayed=13;
// $rifat=14;
// if($rana>=$jobayed && $rana>=$rifat){
//   echo "Rana\n";
// }elseif($jobayed>=$rifat && $jobayed>=$rana){
//   echo"Jobayed\n";
// }else{
//   echo "Rifat\n";
// }
// $weekday=26;
// switch (true) {
//     case ($weekday >= 15 && $weekday <= 25):
//         echo "weekday is match";
//         break;
//     default:
//     echo 'not match';
//         # code...
//         break;
// }
// switch ($weekday) {//case value
//   case '1':
//     echo"Monday\n";
//     break;
//   case '2':
//     echo "tuesday";
//     break;
//   case'3':
//     echo "Wednesday";
//     break;
//   case'4':
//     echo "Thursday";
//     break;
//   case'5';
//     echo "Friday";
//     break;
//   case'6':
//     echo "Saturday";
//     break;
//   case'7':
//     echo "Sunday";
//     break;
//     default:
//     echo "Not The $weekday: Weekday";
//     }//end switch statement

//multiple Stepping in for loops
// for($i=1; $i<=10; $i++){
//     echo $i .":".(11-$i);
//     echo PHP_EOL;
// }

// echo PHP_EOL;
// for($i=10, $j=0; $i>0; $i--, $j++){
//     echo "$i :". $j;
//     echo PHP_EOL;
// }


//  for($i=1;$i<100;$i++){
//    printf("%.2f",$i);
//    //  printf(":"."%.2f",$i);
//     echo PHP_EOL;
//  }

// for ($i=0; $i < 100; $i+=7) {
//    echo strtoupper("$i");
//    echo PHP_EOL;
//    if($i % 7==0)echo "j".$i;
//    echo PHP_EOL;
//    # code...
// }


// for($i=0; $i<100; $i++){
//    echo $i %  7==0 ? $i."\n": '';
//    echo $i %  11==0 ? $i."\n": '';
// }

// for($i=0,$j=0; $i<100,$j<100; $i+=7,$j+=11){
//    echo $i."     I\n"; 
//    echo $j." J\n";

// }

// while loop

// $i=0;
// while($i <5 ){
//   echo $i;
//   echo PHP_EOL;
//   $i++;  

// }
// echo"==========";
// $j=0;
// while($j++<5){
//   echo $j;
//   echo PHP_EOL;
// }
// echo "==========";
// $j=1;
// while(++$j<5){
//   echo $j;
//   echo PHP_EOL;
// }
      


// continue break

// for($i=1;$i<10;$i++){
//   echo $i."\n";
//   echo PHP_EOL;
//   if($i==3){
//   break;
//   }

// }
// for($i=1;$i<30;$i++){
//   if($i %13==0){
//     echo $i."\n";
//     break;
//   }
// }

// for($i=1;$i<30;$i++){
//   if($i<27){
//     // echo "$i\n";
//     continue;

//   }
//   echo "$i\n";

// }

// for($i=1;$i<30;$i++){
//   if($i<27){
//     goto a;
//   }
//   echo "$i";
//   echo PHP_EOL;
//   a:  
// }




// Function 







// Printing the Fibonacci Series with Loops

// $veryold=0;
// $old=1;
// $new=1;
// for($i=0; $i<10;$i++){
//   echo $veryold."  ";
// $old=$new;
//   $new=$old+$veryold;
//   $veryold=$old;
// }


// Vraiable scope 
// function great($name, $greetings="jobayed")
// function great($name, $greetings){
//   echo $greetings.",".$name."!";
// }
// $name="Sudipto";
// great("jobayed","Rana");



// $name="jobayed";
// // function Change (&$name)

// function Change ($name){
//   $name="New Name";
//   echo $name;

// }
// Change($name);
// // echo $name;


// call back funtion

// $numbers = [1,2,3,4,5,6,7,8,9,10,12];
// isEven(1);
// function isEven($n){
//     if($n % 2 == 0){
//         return true;
//     }
//     return false;
// }

// $evenNumbers = array_filter($numbers, "isEven");
// print_r($evenNumbers);






// //filter people by gender
// $people = [
//     ['name'=>'A','gender'=>'M'],
//     ['name'=>'B','gender'=>'M'],
//     ['name'=>'C','gender'=>'F'],
//     ['name'=>'D','gender'=>'F'],
//     ['name'=>'E','gender'=>'M'],
// ];

// function isMale($person){
//     if($person['gender']=='M'){
//         return true;
//     }
//     return false;
// }

// function isFemale($person){
//     if($person['gender']=='F'){
//         return true;
//     }
//     return false;
// }

// $males = array_filter($people, "isMale");
// $females = array_filter($people, "isFemale");
// print_r($females);



// $numbers = [1,2,3,4,5];

// function square($n){
//     return $n * $n;
// }

// function cube($n){
//     return $n * $n * $n;
// }

// $cubes = array_map("cube", $numbers);
// $squares = array_map("square", $numbers);
// print_r($squares);




// sortByAuthorName

// $books = [
//     ["id" => 1, "title" => "Harry Potter 1", "author" => "J.K. Rowling"],
//     ["id" => 1, "title" => "Harry Potter 2", "author" => "J.K. Rowling"],
//     ["id" => 2, "title" => "Lord of the Rings", "author" => "J.R.R. Tolkien"],
//     ["id" => 3, "title" => "Catch-22", "author" => "Joseph Heller"],
//     ["id" => 4, "title" => "Imaginary", "author" => "AB"],
// ];

// function sortByAuthorName($book1, $book2){
//     // return strcmp($book1['author'], $book2['author']);
//     if(strlen($book1['author']) > strlen($book2['author'])){
//         return -1;
//     }elseif(strlen($book1['author']) < strlen($book2['author'])){
//         return 1;
//     }else{
//         return 0;
//     }
// }

// usort($books, "sortByAuthorName");
// print_r($books);



//recursion 
//recursive function 
// function factorial($n){
//     if($n == 0){
//         return 1;
//     }
//     return $n * factorial($n - 1);
// }

// //fibonacci 
// // 0 1 1 2 3 5 8 13 21 34 55 89 144

// function nonRecursiveFactorial($n){
//     $result = 1;
//     for($i = $n; $i > 0; $i--){
//         $result *= $i;
//     }
//     return $result;
// }

// $result = factorial(4);
// echo $result;





//callback 

// function add($x1, $x2)
// {
//     echo "Adding $x1 and $x2";
// }
// function divide($x1, $x2)
// {
//     echo "Dividing $x1 and $x2";
// }
// function process($n1, $n2, $cb)
// {
//     if (is_callable($cb)) {
//         $cb($n1, $n2);
//     }else{
//         echo "Sorry, $cb is not callable";
//     }
// }

// // process(10, 20, "add");
// process(10, 20, "add");



//what is recursion ?

// // function countdown($n){
// //     for( $i = $n; $i > 0; $i--){
// //         echo "$i \n";
// //     }
// // }

// function recursiveCountdown($n){
//     if($n == 0){
//         return;
//     }
//     echo $n."\n";
//     recursiveCountdown($n - 1);
// }

// recursiveCountdown(5);


// global variable

// $name = "John Doe"; //global variable

// function greet(){
//     $greetings = "Hi"; //local variable
//     global $name; //this is how you use it
//     echo "Hello $name"; 
// }

// function increament(){
//     static $count = 0; //static variable
//     $count++;
//     echo $count;
// }


// for($i=10;$i>0; $i--){
//     echo $i;
//     echo PHP_EOL;
// }



// for($i=10,$j=0; $i>0; $i-=1,$j++){
//     echo $i.":".(11-$i);
// }

// echo "jobayed rana";

// Printing the Fibonacci Series with Loops

// $veryold=0;
// $old=1;
// $new=1;
// for($i=0; $i<10;$i++){
//   echo $veryold."  ";
// $old=$new;
//   $new=$old+$veryold;
//   $veryold=$old;
// }



// function factorial($n) {
//     if ($n == 0) {
//         return 1;
//     } else {
//         return $n * factorial($n - 1);
//     }
// }

// echo factorial(5); // Output: 120



// $veryold=0;
// $old=1;
// $new=1;
// for($i=0;$i<10;$i++){
//     echo $veryold."\n";
//     $old=$new;
//     $new=$old+$veryold;
//     $veryold=$old;
// }

// $veryold=0;
// $old=1;
// $new=1;
// for($i=0;$i<=10;$i++){
//     echo $veryold."\n";
//     $veryold=$old;
//     $old=$new;
//     $new=$old+$veryold;

// }


// function

// function Factroil($n){
//     echo $n."\n";
// }
// Factroil("Hello");



// endcapsulation

//  include_once "help.php";

// $even=function evenOrOdd($n){
//  $even = function ($n){


//     switch (true) {
//         case ($n==0):
//             echo "THe number $n is Zero"; 
//             # code...
//             break;
//         case ($n % 2==0):
//                 echo "$n Is Even Number";
//                 break;
//         default:
//                 echo "$n Is Odd Number";
//                 # code...
//             break;
//      }

// // };

// // $x =0;
// // evenOrOdd(8)
// // $even(2);
 
   

// for ($i=0; $i <10 ; $i++) { 
//     // global $even;
//     echo $even(2) . " $i .  "."\n";
//     # code...
// }




































?>
