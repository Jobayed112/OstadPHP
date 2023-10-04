<?php

$color=["Red","green","Blue","Yellow","Bron"];
$colors=['a'=>"Red", 'b'=>"green" , '42'=> "Blue", 'd'=>"Yellow",'e'=>"Bron"];
$fruits=["Orange","Apple","Mengoo"];
// array_splice($color,2,count($color),$fruits);
// array_splice($color,count($color),0,$fruits);
// array_splice($color,1,3,$fruits);
// array_splice($color,1,3,);
// echo"<pre>";
// print_r($color);
// print_r($n);
// $newarray=array_slice($color 1,3);
$newarray=array_splice($colors,1,3, true);        // kew show

echo"<pre>";
print_r($newarray);



$color=["Red",'Green','Blue','Yellow','Orange'];
$colors=["Re",'een','ue','Yew','nge'];

array_splice($color,3,count($color),$colors );
// $colors=array_slice($color,3,1, true);
print_r($color);














?>