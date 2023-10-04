<?php

// class 1
// $student=[
//     'Rahim', 
//     'Korim',
//     123,
    // 'Monir',d
// ];

// // echo $student[0];
// // var_dump($student);
// // echo count($student);
// // for($i=0;$i <count($student);$i++){
// //     echo $student [$i] ."\n";
// // };

// echo PHP_EOL;

// $n=count($student);  //lenght// 4
// // for($i=0;$i<$n;$i++){
// //     echo $student[$i]."\n";
// // };

// for($i=$n-1;$i>=0;$i--){
    
//     echo $student[$i];
    
// }


// class 2 array Modifie mutable array not   immutable
//index / ofset
// array_unshift();         top add
// array_shift();           top remove
//======================================
// array_push();            bottom add
// array_pop();             bottom remove

//======================================
// $student[]="shofik"        only last vlaue add


// $student=[
//     "Rahim", 
//     "Korim",
//     123,
//     "Monir",
// ];

// $students=array_unshift($student,'motin','komla','kaldfa');
// $students=array_shift($student);

// array_push($student,"Jobayed");
// $student[]="shofik";
// array_pop($student);

// print_r($student);



// class 3

//index array
// $student=[
//     'Hasan',
//     'Hasan',
//     'Hasa',
//  ];
// // associtave array 
//  $student=[
//     '12'=>"Hasan",
//     '13'=>'Korim',
//     '20'=>'Jalal',
//  ];
//  echo $student["12"];

// $food=[
//     'vegetables'=>'Brinjal, broclli, carrot ,capsicam',
//     'fruits'=>'orange, Banana, Appel',
//     'Drinks'=>'water, Milk',
// ];
// // new elimant add 
// // $food[]= ",asdkjflak";
// $food['Drinks'].=", akldsfj";
// print_r($food); 


// echo count($food);
 
// echo  $food['vegetables'];
// echo PHP_EOL;
//  
/*
// not for loop in associtave array 
// $foods=count($food);
// for($i=0;$i<$foods;$i++){
//     echo $food[$i]."\n";

// };
// not for loop in associtave array 
*/

// foreach($food as $keys=>$value){
//     echo $keys."=". $value."\n";
// }

// $keys=array_keys($food) ;

// $key=count($keys);
// for($i=0;$i<$key;$i++){
   //  $ke=$keys[$i];

   // echo $food[$keys [$i]]."\n";
   // echo $keys[$i]."\n";

    // echo $food[$ke];
// }

// $values=array_values($food);
// $value=count($values);
// for($i=0;$i<$value;$i++){
//     // echo $values[$i]."\n";
//     $valu=$values[$i];
//     echo $valu."\n";
// }



// class 4 
//delaymetar preg_split ('/(, |,|-)/',alkfjk,fal)
//explode(', ',falkj,fafd,)
//vraibale to array
// array to vraibale and string   join(', ',$vegetables);

// $vegetables='brinjal, brocolli,carrot, capsicam'; 
// $vegetables=explode(', ','brinjal, brocolli, carrot, capsicam');
// $vegetables=preg_split('/(, |,)/','brinjal,brocolli,carrot,jobaye,Rifat-rana-capsicam');
// print_r($vegetables);
// var_dump($vegetables);
// echo $vegetables[0];

// array to vraibale

// $vegetablesString=join(', ',$vegetables);
// echo $vegetablesString;
// echo count($vegetables);




// class 5 

// Multidaimentionall Array and nested array 

// $food=[
// 'vegetables'=>explode(', ','brinjal, brocolli, carrot, capsicam '),
// 'fruits'=>explode(', ','orange, banana, apple'),
// 'drinks'=>explode(', ','water, milk,'),
// ];

// // array_unshift($food['drinks'],'orange Juice');
// // array_push($food["fruits"],'mengo');
// // $food[]='lkdsfjk';
// echo $food['vegetables'][2];
// echo PHP_EOL;
// print_r($food);


// $sample1=[
//     'test'=>[
//         'test-again'=>[
//             'a',
//             'b',
//             'c',
//             'd'
//         ],
//     ],
// ];
// echo $sample1['test']['test-again'][2];

// echo strtoupper( $sample1['test']['test-again'][2]);

// $sample2=[323,23,424,[232323,24324,2424],
//     [1,2,3,4],
//     [11,22,33,44],
//     [111,222,333,444,[1122,2233,3344,4455,],[3232,23,23,24,2,4,2],[323.4,4234,5,2,3,423,4,4,]],
//     [99,88,77,66],

// ];
// echo $sample2[3][2];
// echo PHP_EOL;
// print_r($sample2);





































































?>