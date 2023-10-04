<?php

// class 1

//  $roll=12;
//  $studentInfo=[
//     "Jobayed ","Rana ","Rifat"," Wasel " ,"Jobayed ","Rana ","Rifat ","Wasel "
//  ];

//  echo $studentInfo[0];

//  echo PHP_EOL;

//  var_dump($studentInfo);
//  echo PHP_EOL;
//  echo count($studentInfo);
//  echo PHP_EOL;
// for($i=0;$i<count($studentInfo);$i++){
//     echo $studentInfo[$i]."\n";
// }
// $number=count($studentInfo); // variable as arrr assing
// for($a=0;$a <$number;$a+=1){
//     echo $studentInfo[$a];
// }

// class 2
// chanhe the $student information 

// $studentInfo=[
//     "Jobayed","Rana","Rifat","Wasel", 
//     "Jobayed","Rana","Rifat","Wasel"
// ];

// $studentInfo[2]="Korim"; // chanhe the $student information 
// var_dump($studentInfo);
// $N= count($studentInfo);
// for($i=0;$i<$N;$i++){
//     echo $studentInfo[$i]." ";
// }


// up_down comant     c
// array_unshift($studentInfo,'the name of value');   c
// array_shift();     c
// array_pop();       c
// array_push();      c

// $studentInfo=[
//     "Jobayed","Rana","Rifat","Wasel", 
//     "Jobayed","Rana","Rifat","Wasel"
// ];




// array_unshift($studentInfo,"Motin");  // //   // Fast array add by name Motin


// $studentInfo[]="Rohim";          //    // last array add by Rahim
// // array_push($studentInfo,"Jamal");     //       // last array add by jalam 


// // $jobayed =array_shift($studentInfo);    //     // fast array  remove // top name delete and assing the name variable $jobayed


// // $wasel = array_pop($studentInfo);    //     //  last  array  elima=ent remove // // bottom name delete and assing the name variable $wasel


// $student=count($studentInfo);
// for ($i=0; $i <$student ; $i++) {
//     echo "$studentInfo[$i] \n"; 
//     # code...
// }




// assosiyative array

// $students=[
//     '12'=> 'Jobayed',
//     'abc'=> 'Rifat',
//     '14'=> 'Rana'
// ];
// echo $students[12]." ";
// echo $students["abc"];  


  

// echo count($food)    // eliment vegetable ,fruits, drinks

// echo $food['vegetable']; 


// array loop foreach and array_keys($food)  
//  array_values($food)   Brinjal ,Brocolli orange  'water , 

//  foreach ($food as $key => $value ) {
//     echo $key."=". $value."\n";
//     }

// echo PHP_EOL;
// foreach (array_keys($food)as $key){
//     echo "Key: ".$key.PHP_EOL;
//     }
// $keys = array_keys($food);
// print_r($keys);


// class4
// string chack ',' koma and space ', '

// $vegetables=explode(', ','appel , banana, capsicam , brinjal,patato,sweet-patato');
// // var_dump($vegetables);
// // echo $vegetables[0];
// // $vegetablesString=join(',',$vegetables);
// // echo "<br>".$vegetablesString.'<hr>';
// echo count($vegetables);


// using preg_filter() function '/(, |,)/' 

// $vegetables=preg_split('/(, |,)/', 'appel , banana, capsicam,appel , banana, capsicam, brinjal,patato,sweet-patato');
// print_r($vegetables);
// echo count($vegetables);


// class 5
// multidaimentionnal array Separate 
// $food=[
//     'vegetables'=>explode(', ','brinjal, brocolli, carrot, capsicam'),
//     'fruits'=>explode(', ','orange, banana, apple'),
//     'drinks'=>explode(', ','water, milk, minaral-water, Jusc')
// ];

// print_r($food);


// $food=[
//     'vegetables'=>explode(', ','brinjal, brocolli, carrot, capsicam'),
//     'fruits'=>explode(', ','orange, banana, apple'),
//     'drinks'=>explode(', ','water, milk, minaral-water, Jusc')
// ];
// var_dump($food);  
// echo $food['fruits'][1];   

// $sample=[
//     'test'=>[
//         'test-agin'=>[
//             'a','b','c','d'
//         ],
//     ],
// ];
// echo $sample['test']['test-agin'][2];   


// $sample=[
//     [1,2,3,4,5],
//     [11,22,33,44,55],
//     [111,222,333,444,555],
//     [1111,2222,3333,4444,[6,7,8,9]],

// ];
// print_r($sample);

// echo $sample[3][4][3];


// $studentInfo=[
//     'fname'=>'Jobayed','lname'=>'Rana','age'=>'21','class'=>'12','section'=>'A',
// ];

// print_r($studentInfo);
// // echo $studentInfo['fname'];
// printf("%s %s",$studentInfo['fname'],$studentInfo['lname']);
// echo PHP_EOL;
// foreach ($studentInfo as $key => $value) {
//     echo $key .":".$value." ";
//     # code...
// }


// serialize() and unserialize()

// $studentInfo=[
//     'fname'=>'Jobayed','lname'=>'Rana','age'=>'21','class'=>'12','section'=>'A',
// ];
// $serialize=serialize($studentInfo);
// // echo $serialize;
// $unserialize=unserialize($serialize);
// print_r($unserialize);


// $jsondata =json_encode($studentInfo);
// echo $jsondata;
// echo PHP_EOL;
// $newjson=json_decode($jsondata,true);
// print_r($newjson);



// class 7
// array clone and //selocopy and dipcopy and copy by refaranc $newperson=&$person; // &&
// $person=[
//     'fname'=>'jobayed','lname'=>'Rana', 
//     'name'=>'jobayed','nme'=>'Rana' 
// ];
// $newperson=&$person;
// $newperson=$person;
// $newperson['lname']='Rifat';

// print_r($person);
// print_r($newperson);

// foreach($newperson as $name=> $value){
//     echo "$name : ".$value.PHP_EOL;

// };


// $person=[
//     'fname'=>'jobayed','lname'=>'Rana', 
//     'name'=>'jobayed','nme'=>'Rana' 
// ];

// shallow copy by refarance & 2 data change without refarence just function data change
// function printdata($person){
//     $person ['fname'].=" Changed";
//     print_r($person);
// }

// printdata($person);
// print_r($person);

// class 8
// associative data delete  and remove


// $person=[
//     'fname'=>'Jobayed','lname'=>'Rana',
// ];
// print_r($person);
// unset ($person["fname"]);
// print_r($person);
 
// class 9

// chack data in array 

// $name=-1;
// if(isset($name)){
//     echo "number is set";
// }else{
//     echo 'number not set';
// };
// echo PHP_EOL;
//  if(empty($name)){
//      echo "number is empty";
//  }else{
//      echo ' number not empty';
//  }
//  echo PHP_EOL;

// if(isset($name)&& (is_numeric($name) || $name !='')){
//     echo "Number is set and it's not empty";
// }else{
//     echo "Number is either not set or it's empty ";
// }


// class 10
// extraction array  fasr 4 item delete and last 2 item here key show  //  true

// $fruits=[
//     'apple','banana','orange','plum','dates','mangoo',
// ];

// // associtave    no key declair 12=>34,  becuse       //null,true
// $random=[
//     'a'=>12,'b'=>13,'c'=>14,'d'=>15, 12=>34, 'e'=>16,
// ];
// print_r($random);
// // $someFruits=array_slice($fruits,2);  //
// $someFruits=array_slice($random,1, null,true);

// print_r($someFruits);


// class 11 
// array 
// array_splice();
// array_slice(); /// add remove array new peram

// $fruits=['apple','banana','orange','plum','dates','mangoo',];
// $random=['a'=>12,'b'=>13,'c'=>14,'d'=>15, 12=>34, 'e'=>16,];
// // $someFruits=array_splice($fruits,2,2);
// $someFruits=array_slice($fruits,-2,2);
// print_r($fruits);
// print_r($someFruits);



// $fruits=['apple','banana','orange','plum','dates','mangoo',];
// $newValues=['jobayed','rana','saayed','sana'];

// $same=array_splice($fruits,2,2,$newValues); /// delte orgelan array
// print_r ($same);
// print_r($fruits);


// class 12


// $fruits=array('apple','banana','orange','plum','mango');
// $random=array('a'=>12, 'b'=>45,'c'=>34,'d'=>22,'e'=>77,'f'=>31,12=>78,'g'=>87);
// // $newFruits1=array_slice($fruits,0,3);
// // $newFruits2=array_slice($fruits,4,null,true);
// // $newFruits=array_merge($newFruits1,$newFruits2);
// // $newFruitsPlus=$newFruits1+$newFruits2;
// // print_r($newFruits1); 
// // print_r($newFruits2); 
// // print_r($newFruits);
// // print_r($newFruitsPlus);
// // print_r($fruits);



// $new1=array_slice($random,-3,3,true);
// $new2=array_slice($random,1,null,true);
// $new3=["j"=>45,"k"=>12];
// $newCorrectWay=array_merge($new1,$new3,$new2);
// asort($newCorrectWay);
// // $newCorrectWay=$new1+$new3+$new2;
// print_r($newCorrectWay);




// Class 13


// $random_number[] = mt_rand(1, 1000);
// print_r($random_number);
// foreach($random_number as $values){
//     echo $values;
// }

// $fruits=['a'=>'apple','b'=>'banana','p'=>'plum','o'=>'orange','d'=>'dates','m'=>'mango'];
// $numbers=[1,11,2,56,3,4,22,77,5];
// $random=['apple','Apple','Banana','banana','furits','painepale'];
// // asort($fruits);
// // print_r($fruits);
// sort($random,SORT_STRING);
// // sort($random,SORT_STRING| SORT_FLAG_CASE);
// print_r($random);
// for($i=0;$i<count($numbers);$i++){
//     echo $numbers[$i]."\n";
// }

// foreach($fruits as  $value){
//     echo $value."\n";
// }




// class 14

// $fruits=['a'=>'apple','b'=>'banana','p'=>'plum','o'=>'orange','d'=>'dates','m'=>'mango'];
// $numbers=[1,11,2,56,3,4,22,77,5];

// $num=in_array(56,$numbers);
// if($num){
//     echo "Number is Found in Array \n";
// }else{
//     echo "Numbers is Not In Array \n";
// }

// // $offset=array_search(56,$numbers);
// // echo $offset;

// $keys=key_exists('b',$fruits);
// echo $keys;
// echo PHP_EOL;

// if($keys){
//     echo "Key B is Match in Fruits Array \n";
// }else{
//     echo "Key B is Not Match in Fruits Array \n";
// }



// Class 15 


// $numbers1=[1,4,3,66,'b'=>21,7,23,1,2];
// $numbers2=[88,3,'b'=>21,44,3,28,1,2,7];

// // $fruits1=['a'=>'apple','b'=>'banana','c'=>'lemon'];
// // $fruits2=['d'=>'pineapple','b'=>'malta','f'=>'grapes','c'=>'lemon'];

// $comon=array_intersect_assoc($numbers1,$numbers2); //key & value
// // $comon=array_intersect($numbers1,$numbers2);
// // $comonf=array_intersect($fruits1,$fruits2); // anly values   
// // $comonf=array_intersect_assoc($fruits1,$fruits2); //key& value
// print_r($comon);


// $difarnce=array_diff($numbers1,$numbers2);
// $difarncee=array_diff($fruits2,$fruits1);
// $difarncee=array_diff_assoc($fruits1,$fruits2); //key and values not herer fruits1

// print_r($difarncee);



// class 16























































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































?>