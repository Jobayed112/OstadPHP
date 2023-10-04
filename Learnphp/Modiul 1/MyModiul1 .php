<?php
// $a="Hello World";
// echo $a;
// $b =array(1,2,3,4,5,6,7);
// $c ="Rana";
// echo $b[6];

// function hello(){
//   $x=1190;
//   echo $x;
// }
// hello();

// $x=910;
// function hello2(){
//  global $x;
//   echo $x;
// }
//  echo hello();


// $x=10;
// $x=20;
// $x=330;
// echo "X is " .$x;


// define('DB_SERVER','localhost');
// define('DB_USERNAME','root');
// define('DB_PASSWORD','123');
// define('DB_DATABASE','test_db');

// echo DB_USERNAME;

// $x=10;
// function hello(){
//     global $x;
//     echo $x;
// }

// $name='jobayed';
// $age=25;
// printf("MY name is $name and MY age is $age ");
// echo "\n";
// $fname=sprintf("MY name is $name and MY age is $age ");

// echo $fname;

// $name ='Jobayed Rana';
// $age =24;
// $year=2001;
// printf ("MY Name Is $name And My age is $age My Year Is $year\n");
// // echo "\n";
// $fname=sprintf("My Name Is $name And My age is $age My Year Is $year");
// echo $fname;

// $task ='Read';
// echo "$task \n";
// $task ='Write';
// echo "$task \n"


// define('PI',3.14159);
// // echo "Value Of PI = ".PI;
// echo constant ("PI")." No Change The PI Value";

// define ('PI',843);
// echo "value of PI= ".PI;

// $const ='constant';
// echo "value of PI ={$const('PI')}\n";



// echo "Hello \n";
// echo 123;

// $name1 ="Jobayed";
// $name2 ="Rana";
// var_dump($name1,$name2);

// integer
// Double
//Boolean
// $result=false;
// var_dump($result);
//Null
//String
//Array
//object
//Resourse file 

// 
// $name= 'Earth';
// $uname =strtoupper($name);
// echo "We're living on {$name}\n";
// printf("We're Living on %s \n",$uname);
// printf("We're Living on $uname \n",);

 // tarnary opparetor
// $x=6;
// if ($x ==6){
//     echo "The value x is Six\n";
// }else{
//     echo "the value X is not equal to six \n";
// }
// $result = $x ==6 ? "The value x is Six \n" : "\n The  value of x is not six";
// echo $result; 


// $result =true;
// var_dump($result);
// $name ="Earth";
// $num1="Rana";
// $fname =strtoupper($name);
// $fnum1 =strtoupper($num1);
// echo "we're living in the planet 1 {$fname} \n";
// echo "We're Living in The planet 2 $fname\n";
// printf("We're Livio=ng in The Planer 3 %s",$fnum1);

// $planet1 ="Mercury";
// $planet2 ="Jupiter";
// echo "The Samallest planet is ".$planet1." And The Bigist Planet is ". $planet2."\n";
// echo "the small Planet is $planet1 And The Bigist Planet is $planet2 \n";

// printf("the small Planet is %s And The Bigist Planet is %s ",$planet1,$planet2."\n");


// $planet3=32;
// $planet4=4.44;
// // printf ("We're living is %s and we're not living is %s",$planet4,$planet3);

// if ($planet3<$planet4){
//     echo "We're Living Earth";
// }
// else{
//     echo "we're Not Living in naptune";
// }

// $number=12;
// // $number++
// if($number<30 ){
//     echo "Number Is Greater Than 30 ";
// }else{
//     echo "Number Less than or Equal To Three Hundred";
// }
// echo $number;

// echo(abs(-6.7));  // returns 6.7
// echo(sqrt(64));  // returns 8
// echo(rand());
// define("GREETIN", "Welcome to W3Schools.com!");
// echo GREETIN;

// define ("JR", "Welcome JR Jobayed Rana ",true);
// echo jr;
// define("GREETING", "Welcome to W3Schools.com!",true);
// echo $greeting;

// $x=20;
// $c=22;
// $s=$x+$c;
// echo $s;
// if(i=0;$c>10;i++){

// }

// define('PI',32383);
// $const ='constant';
// echo "value of PI {$const('PI')}";


// define ('PI',3727040937);
// // define('PI',838);
// $constant ="constant";
// // echo constant("PI") ."<br>";
// echo "Value Of JR {$constant('PI')}";



//calculating the Value of PI
// $pi = pi();   # value is stored into variable $pi

// $result=true;
// var_dump($result);



// $name = "Earth";
// $sname=strtoupper($name);
// echo "\n Hello, I am a {$sname}!";

// $num1 ="JR Jobayed";
// $num2="Rana";
// $fulName=strtoupper($num1);
// $lastName=strtoupper($num2);
// // echo "\nMy Ful lowercase Name is $fulName";

// printf("\n My Fast lowercase Name is %s My Last Lowercase Name is %s",$fulName,$lastName)

// $planet1="Earth";
// $planet2="Jupiter";
// echo "fast Planet is " .$planet1."Second Planet Is ".$planet2."\n";
// echo "Fast planet is {$planet1} Second Planet is {$planet2}";
// echo "\nFast Planet is $planet1 Second Planet Is $planet2 ";
// printf("\nFast planet Is %s Second Plaent Is %s ",strtoupper($planet1),strrev($planet2));

// $y =4;
// function myfun(){
//     echo "<p>Vraiable X inside Function is: $x</p>";
// }
// myfun();
$x = 5; // global scope
$y = 5; // global scope

// function myTest() {
//     global $x;
//   // using x inside this function will generate an error
//   echo "<p>Variable x inside function is: $x</p>";
// }
// echo myTest();

// function myFunction(){
//     $GLOBALS['RESULT']=$GLOBALS['x']+$GLOBALS['y'];

// }
//  myFunction();
// //  echo $RESULT;
//  $x = 1;
// function myFunction(){
// $x=4;
// echo $x."\n";
// }
// myFunction();// output :
// myFunction();// output :
// myFunction();// output :
// myFunction();// output :

// echo "JR Jobayed Rana";
// $oldtxt = "Hello World!";
// $newtxt = str_replace("World", "Dolly", $oldtxt);
// echo "$newtxt<br/>";

// $a = 50;
// $b = 10;
// if($a > $b){
//   echo "Hello World";
// }else {
//     echo "Not hello";
// }


// $a = 53;
// $b = 50;
// if($a == $b){
//     echo "Yes";
// } elseif($a>$b){
//   echo "No";
// }else{
//     echo"hello world";
// }


// for($i = 0; $i < 10; $i+=2) {
//   echo $i."\n";
// }


// $colors = array("red\n", "green\n", "blue\n", "yellow"); 
// foreach($colors as $x){
//   echo $x;
// }
// function myFunction($fname, $lname){
//   return $fname;
// }

// $fruits =array("Appel","Banana","orange","orange","ornge");
// echo $fruits[4]."\n"; 

// //age of peter and other name 
// $age = array("Peter"=>"35","Ben"=>"37", "Joe"=>"43");
// echo $age['Peter'];
// // echo $age["Peter"]; 

// $age=23;
// foreach ($age as $x => $jobayed) {
//     echo "<p>".$x.": ".$jobayed ."</p>";
// }

// $colors=array("red","green","Blue","ue","greay","black");
// rsort($colors);
// echo $colors[0];

// echo date("1")


// $num=7;
// // $num++;
// $num1=++$num;
// echo $num,"\n",$num1;
// // echo $sum;

// $o=012;
// $h=0x1b;

// ;

// printf("The Octal Equivalent 0f %d is %o\n",12,12);
// printf("The Hexadecimal Equivalent 0f %d is %x\n",12,159);
// printf("The Binary Equivalent 0f %d is %b\n",12,159);

// printf("The Octal Equivalent 0f %d is %b\n",12,12);


// $n=223.123;


// printf("%.2f",$n);
// echo "\n";
// $m=122;
// $x=27;
// printf("%04d",$m);
// echo"\n";
// printf("%04d",$x);
// echo "\n";
// $a=122.2323;
// $b=27.232;
// printf("%05.2f",$a);
// echo "\n";
// printf("%05.2f",$b);


// $fname="Jobayed";
// $lname="Rana";
// $output=sprintf("His name is %s %s",$fname,$lname);
// echo strtoupper($output);

// $number=2001;
// if ($number % 4==0 && $number % 100 == 0 && $number %400==0 ){
//     echo "{$number} Is a Leap Year";
// }elseif ($number % 4==0 && $number % 100 == 0) {
//     echo "{$number} Is not a Leap Year 1";
// }elseif ($number %4==0) {
//     echo "$number Is a leap Year 1";
//     # code...
// }else{
//     echo"Not A Leap year 4";    
// }

// echo "\n";
// $year=20;
// if ($year % 4==0 && $year %100==0 && $year % 400==0) {
//     echo"$year is a leap year ";
//     # code...
// }
// elseif ($year % 4 ==0 && $year %100 ==0) {
//     echo "$year Is Not a leap Year";
// }elseif ($year %4 ==0) {
// echo " $year Is  a leap year";
// }
// else{
// echo " $year Is Not a leap Year";
// }


// $year=2000;
// if($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)){
//     echo "$year is a leap year";
// }
// else{
//     echo "$year isn't a leap year";
// }
// echo "\n";

// if($year %4==0 && ($year % 100 !=0 || $year %400 ==0 )){
//     echo "$year Is a leap year";

// }
// else{
//     echo "$year Is NOT a leap year";
// }




// $condation2=false;
// $condation3=false;
// $condation1=false;
// if ($condation1){
//     echo 'This will be printed';
//     echo"\n";
//     if($condation2){
//         echo' This Will also Be Printed ';
//     echo"\n";
//         if($condation3){
//             echo ' this will also be printted';
//         }
//     }
// }
// echo"\n";
// if ($condation1 && $condation2 && $condation3) {
//     echo "Hello";
// }elseif($condation1 && $condation2){
//     echo"Goodbye";
// }elseif($condation1){
//     echo "condation 2";
// }else{
//     echo "condation 3";
// }




// $alam=1000;
// $rahim=10000;
// if($alam==$rahim){
//     echo "Alam has Same money as Rahim";

// }elseif ($alam<$rahim) {
//     echo "Alam has More money than Rahim";
//     # code...
// }
// elseif ($alam<$rahim) {
//     echo "Rahim has More Money Than Alam";
//     # code...
// }
// elseif ($alam>=$rahim) {
//     echo "Both have same amount of money";
//     # code...
// }


// datatypes
// $x="JR Jobayed Rana";

// $x=25 ;// integer
// $x =300.40 ;// float
// $x = true;      //boolean
// $x = array("HTML","CSS","js");   //Array
// $x = new myClass() ;   //object
// $x = null ;        //null   


/*
//Arithmetic Oparetor
Addition +
Subtraction -
Multiplication *
Exponentiation **
Devision /
Modulus [Remainder] %
Increment Operator ++
Decrement Oparetor --

*/
// define("_num",50);
// echo _num;
// echo _num;


/*    
                Assingment operators

=     Exanple   x  =y    Sane As    x=x = y
+=    Exanple   x  + =y    Sane As  x=x + y
-=    Exanple   x   -=y    Sane As  x=x - y
*=    Exanple   x   *=y    Sane As  x=x * y
/=    Exanple   x   /=y    Sane As  x=x / y
%=    Exanple   x   %=y    Sane As  x=x % y
**=    Exanple   x   **=y  Sane As  x=x ** y

*/
// $x =10;
// $b=3;
// $c=10;
// $x **=$b;
// echo $x;

// $a=15;
// $b=20;

/**
 *          Comparison Opetators
 * ==  Equal to 
 * === Equal value and equal type
 * != Not Equal
 * <> Not Equal
 * !== Not Equal value or Not Equal type
 * > Greater Than
 * < Less Than
 * >= Greater than Equal to 
 * <= Less Than or Equal to 
 * <=> Spaceship less than, Equal to , Greater than
 * 
*/


// $x=1;
// if ($x>10) {
//     # code...
//     echo "$x x is greaten than";
// }else{
//     echo"Not greaten than";
// }
// $number =50;
// define("number",999,);
// // define("number",99);
// echo number;
// echo "\n";
// echo $number;
// echo"\n";

// $a=10;
// $b=10;

// if ($a>$b) {
//     echo"a is greater than";
//     # code...
// }elseif ($a==$b) {
//     echo "a is greater than or equal";
//     # code...
// }elseif ($a<$b) {
//     echo "b is egrater than";
//     # code...
// }elseif($a!=$b){
//     echo "b is grater than or equap";
// }

/*Logical Operators
 && Logical and
 || logical Or
 !   not operator
 and Logical And
 or Logical OR
 XOR Exclusive OR
 */

// $age =100;
// if($age >=18 xor $age <=13){
//     echo "You are Eligible";
// }else{
// echo "You are Not Eligible";    
// }


// define('text',4);
// echo text;
// echo "\n";
// if (text > 30) {
//     echo "number is Greater";
//     # code...
// }else{
//     echo "number ". text. " is Smaller 30";
// }

// $variable=8;

// switch ($variable) {
//     case 1:
//         echo " Today is Monday";
//         # code...
//         break;
//     case 2:
//         echo "Tuesday";
//         # code...
//         break;
//     case 3:
//         echo "Wednesday";
//         # code...
//         break;
//     case 4:
//         echo "Friday";
//         # code...
//         break;
//     case 5:
//         echo "Saturday";
//         # code...
//         break;
//     case 6:
//         echo "Sunday";
//         # code...
//         break;
//     case 7:
//         echo "Monday";
//         break;
//     default:
//         echo "No date";
//         break;
// }
// $ageIs=12;
// if($ageIs>=18){
//     echo"You are eligible to vote.";} else {
//         echo"Sorry, you can't vote yet!";
//         };

// $age =4;
// switch (true) {
//     case ($age >=16 && $age <=20):
//         echo "You are a Eligible";
//         # code...
//         break;
//     case ($age>=21 && $age <=30):
//         echo"you can vote ";
//         echo"\n";
//         break;
//         default:
//     echo "Enter Your valid age.";
//         # code...
//         break;
// }
// $age=1;
// switch (true) {
//     case 'age>=18':
//         echo "You are $age Eligibale";
//         # code...
//         break;
//     default:
//     echo "Not eligible";
//         # code...
//         break;
// }
// echo "<br>";

//  $x =5;
//  $z= "Value is ". ($x>20 ? "Greater":"Smaller");
//  echo $z;

// $a =" Hello ";
// $b =$a."World";
// echo $b;
// $a.=" this is ";
// $a.=$b."My world".$a;
// echo $a;

// $array = array("name"=>"Rahul","email"=>"<EMAIL>");
// echo "<pre>";print_r($array);

// $a=1;
// while ($a <= 10) {
//     echo "JR Jobayed Rana\n";
//     $a++;
//     # code...
// }

// $a=10;
// echo "<ul>";
// while ($a >= 1) {
//     echo "<li>".$a."JR Jobaed Rana"."</li>";

//     // echo "<li>". $a." JR Jobayed Rana"."</li>";
//     $a--;
//     # code...
// }
// echo "</ul>";

// echo "jr Jobayed ";

// $n =12;
// if (12==$n) {
//     echo "Twenty";
//     # code...
// }elseif (10==$n) {
//     echo "Ten";
//     # code...
// }

// else{
//     echo"Not Twenty or Ten";
// }
//     echo "<br>";
// $number =12==$n ? "Twenty":"Not a number";
// $num2=10;
// //  $num3 = $num2 <12 ? "Twenty" : "ytyty";
// // echo $num3;
// // echo "\n";
// if($num2<=12){
//     echo "twenty";
// }elseif ($num2=10) {
//     echo "height number";
//     # code...
// }else{
//     echo "not a number";
// }
// echo "\n";
// echo $number;
// $number=12;
// if(is_int($number)){
//     echo 'its an integer';
//     }
//     echo '<hr>';
//     echo is_float('1.5');





// odd even and zero is even number
// $number=1;
// if (($number%2)==0 && $number!=0 ) {
//     echo "$number is Even Number.";
//     } elseif(($number%2)!=0){
//         echo"$number is  Odd Number.";
//         }elseif($number ==0 ){
//             echo "zero";
            
            

//         }

        
        
        





































?>