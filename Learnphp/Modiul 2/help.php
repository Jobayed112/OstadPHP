<?php
// echo(sqrt(-6.7));  // returns 6.7
// echo(sqrt(7));  // returns 8
// echo(rand());
// define("GREETIN", "Welcome to W3Schools.com!");





// global  $x;
// function myfun(){
//     $x=10;
//     echo "<p>Vraiable X inside Function is: $x</p>";
// }
// myfun();
// $x = 5; // global scope
// $y = 5; // global scope





// function myTest() {
//     global $x;
//   // using x inside this function will generate an error
//   echo "<p>Variable x inside function is: $x</p>";
// }
// echo myTest();



// function myFunction(){
//     $GLOBALS['RESULT']=$GLOBALS['x']+$GLOBALS['y'];
// }
// myFunction();
//  echo $RESULT;
//  $x = 1;

// myFunction();// output :
// myFunction();// output :
// myFunction();// output :


// for($i=0; $i<10;$i++){
//     echo $i;

// }

// for($i = 0; $i < 100;$j+=11,$i+=7 ) {

//   echo $i." saven\n";
//   echo $j." elaven\n";

// }





// $books = [
//     ["id" => 1, "title" => "Harry Potter 1", "author" => "J.K. Rowling"],
//     ["id" => 1, "title" => "Harry Potter 2", "author" => "J.K. Rowling"],
//     ["id" => 2, "title" => "Lord of the Rings", "author" => "J.R.R. Tolkien"],
//     ["id" => 3, "title" => "Catch-22", "author" => "Joseph Heller"],
//     ["id" => 4, "title" => "Imaginary", "author" => "AB"],
// ];

// function sortByAuthorName($book1, $book2){
//     return strcmp($book1['author'], $book2['author']);
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



?>