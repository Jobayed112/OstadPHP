<?php

    // $studentInfo=[
    //     'amen'=>'jobayed','Rana', 'Rifat', 'Wasel', 'Korim', 'Motin'
    // ];
    // echo $studentInfo[2];
// var_dump($studentInfo);
// $student=count($studentInfo);
// for ($i=0; $i <$student ; $i++) {
//     echo $studentInfo[$i];
//     # code...
// }

// $studentInfo=[
//     'Jobayed','Rana','Rifat','Wasel',
//     'obayed'.'ana','ifat','asel',
// ];
// $studentInfo[2]="Korim";
// var_dump($studentInfo);

// array_unshift($studentInfo,'joooooo');
// array_shift($studentInfo);
// array_pop($studentInfo);
// array_push($studentInfo,"akjflkahfoahi");
// $studentInfo[]="asasa";     
// var_dump($studentInfo);

// $studentIfno=[
//     'Jobayed Rana','motin','wasel','mahabunb','masum',
// ];



// $numbers=[1,2,3,4,5,6,7];
// $fName=["Jobayed","Euhan","Rifat","Masum","Wasel","riyad","Rimon"];

// function newArray($number,$name){
//     return [$number => $name];
// };

// $newarray1=array_map('newArray',$numbers,$fName);
// $value=array_values($newarray1);
// // print_r($newarray1);
// $key=array_keys($newarray1);
// echo "<pre>";
// print_r($value);
// print_r($key);
// echo "</pre>";


// $numbers=[1,2,3,4,5,6,7];
// $fName=["Jobayed","Euhan","Rifat","Masum","Wasel","riyad","Rimon"];



// function Exjact($number, $name){
//     return  ["Id"=>$number , "Fist Name"=> $name] ;
// };

// $newarray=array_map('Exjact',$numbers,$fName);
// echo "<pre>";
// print_r($newarray);
// echo "</pre>";
// foreach ($newarray as $key => $value) {
//     echo "$key"; 
//     echo $value;
//     # code...
// }

// var_dump($newarray);





// $fruits = array("apple" => "red", "banana" => "yellow", "cherry" => "red");

// foreach ($fruits as $key => $value) {
//     echo " $key is $value ";
//     # code...
// }


// Array
// (
//     [0] => 1
//     [1] => 4
//     [2] => 9
//     [3] => 16
//     [4] => 25
// )





// $numbers = array(1, 2, 3, 4, 5);

// // Define a callback function that squares its argument
// $square = function($number) {
//     return $number * $number;
// };

// // Use array_map to apply the square function to each element in the numbers array
// $squaredNumbers = array_map($square, $numbers);

// // Print the result
// print_r($squaredNumbers);




// $array1 = array(1, 2, 3, 4, 5);
// $array2 = array(6, 7, 8, 9, 10);

// // Define a callback function that adds the elements of the two arrays
// $add = function($a, $b) {
//     return $a + $b;
// };

// // Use array_map to apply the add function to each element in the two arrays
// $sum = array_map($add, $array1, $array2);

// // Print the result
// print_r($sum);






// $array = array(
//     array(
//         'name' => 'John',
//         'age' => 30
//     ),
//     array(
//         'name' => 'Mary',
//         'age' => 25
//     ),
//     array(
//         'name' => 'Bob',
//         'age' => 40
//     )
// );

// // Define a callback function that returns the name of the person
//  function getName($person) {
//     return $person['name'];
// };

// // Use array_map to apply the getName function to each element in the array
// $names = array_map(getName, $array);

// // Print the result
// print_r($names);






// function square($n,$s) {
//   return ["$n => $s"];
// };

// $numbers = array(1, 2, 3, 4, 5);
// $number = array(11, 22, 33, 44, 55);
// $squares = array_map("square",$number, $numbers);

// print_r($squares);

// $n=array_filter($squares[2][0]);
// print_r($n);





//encapsulation hide kora 
include_once "functionadd.php";

// $numbers=124;

// if(isEven($numbers)){
//     echo "The $numbers is Even Numbers";
// }else{
//     echo "The $numbers is Odd Numbers";
// };
// $number1=124;

// if(isOdd($number1)){
//     echo "The $number1 is Odd";
// }else{
//     echo "The $number1 is Even";
// }

$x=7;
echo "Factorial of $x is ".factorial($x);







































































































































































?>