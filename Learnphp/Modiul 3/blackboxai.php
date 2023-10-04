<?php


// $array = array(1, 2, 3, 4, 5);
// $array = array_chunk($array, 3);
// print_r($array);


// $array1 = array(1, 2, 3, 4, 5);
// $array2 = array( 3, 4);
// $array = array_diff($array1, $array2);
// print_r($array)



// $array = array(1, 2, 9,3, 4, 9,5, 3, 2, 1, 2, 3);
// $array = array_count_values($array);
// print_r($array);


// $keys = array("a", "b",'d', "c");
// $values = array(1, 2, 3,1);
// $array = array_combine($keys, $values);
// print_r($array);


// $array = array(
//     array("id" => 1, "name" => "John"),
//     array("id" => 2, "name" => "Mary"),
//     array("id" => 3, "name" => "Steve"),
// );
// $array = array_column($array, "name");
// print_r($array);


// $array = array(
//     array("id" => 1, "name" => "John"),
//     array("id" => 2, "name" => "Mary"),
//     array("id" => 3, "name" => "Steve"),
// );

// $array = array_column($array, "name");

// print_r($array);

// $array = array(
//     "Name" => "John",
//     "Age" => 25,
//     "City" => "New York"
// );

// $array = array_change_key_case($array, CASE_UPPER);

// print_r($array);



// $array = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
// $chunk_size = 3;

// $chunks = array_chunk($array, $chunk_size);

// print_r($chunks);


// $array = array( "hello", 1, 1, "world", "hello");
// print_r(array_count_values($array));
// print_r(array_count_values($array));


// $array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
// $array2 = array("b" => "brown", "c" => "blue", "red");
// $result = array_diff($array1, $array2);
// print_r($result);


// $array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
// $array2 = array("a" => "green", "ye", "red");

// $result = array_diff_uassoc($array1, $array2, "compare_function");

// function compare_function($a, $b) {
//     if ($a === $b) {
//         return 0;
//     }
//     return ($a > $b) ? 1 : -1;
// }

// print_r($result);



$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "green", "yellow", "red");

$result = array_diff_ukey($array1, $array2, 'strcasecmp');

print_r($result);


















































































































































































































?>