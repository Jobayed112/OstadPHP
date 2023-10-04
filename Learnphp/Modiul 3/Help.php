<?php

// $numbers=[1,2,3,4,5,6,7];
// $fName=["Jobayed","Euhan","Rifat","Masum","Wasel","riyad","Rimon"];



// function Ex($number, $name){
//     return  ["Id"=>$number , "Fist Name"=> $name] ;
// };

// $newarray=array_map('Ex',$numbers,$fName);
// echo "<pre>";
// print_r($newarray);
// echo "</pre>";
// foreach ($newarray as $key => $value) {
//     echo "$key"; 
//     echo $value;
//     # code...
// }










$food=[
    'vegetables'=>'Brinjal','broclli','carrot','capsicam',
    'fruits'=>'orange','Banana','Appel',
    "Drinks"=>'water','Milk',
];
// echo count($food);
 
// echo  $food['vegetables'];
$n=count($food);
echo $n;
for($i=$n-1;$i>=0;$i--){
    echo $food[$i]."\n";
};

























?>