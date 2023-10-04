    <?php


    // // recartion  nijei nijeke call kore
    // function display($numbers){
    //     {
    //         if($numbers<=9){
    //             echo "The number is $numbers \n";
    //             display( $numbers + 1);
    //         }
    //     }
    // }
    // display(1);



    // call back function

    // function callback($a){
    //     return $a +5;
    // }
    // function sum($a,$b,$callback){
    // $callback($a);
    // return $a+$b;    
    // }

    // echo sum(2,3,"addtion");




    // function callback($string){
    //     return $string ."!" ;

    // }



    // function stringFormatter($string,$callback){
    //     echo $callback($string);
    // }

    // stringFormatter("hello","callback");


    // function countDown($n){
    //     for($i=10;$i>0;$i--){
    //         echo $i." ";
    //     }
    // }
    // countDown(7);



    // function test($x = 5) {
    //      return $x * $x;
    //      }
    //      echo test();

    // $x=1;
    // $y=1;
    // echo "1 ". $x.PHP_EOL;
    // echo "2 ". $x++.PHP_EOL;
    // echo "3 ". $x.PHP_EOL;
    // echo "4 ". $y.PHP_EOL;
    // echo "5 ". ++$y.PHP_EOL;
    // echo "6 ". $y.PHP_EOL;

    
    function add($a,$b){
    echo  $a+5+$b;
    }
    function sum($a,$b,$callback){
      $callback($a,$b);

    }
    echo sum(4,4,"add")
    


































?>