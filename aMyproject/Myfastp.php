<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title>JR JObayed Rana</title>
    <style>
        <?php include "myfastp.css" ?>
    </style>
</head>
<body>
    <div id="container">
        <div class="header" id="header">
            <header>
                <h1>MY Calcolator</h1>
            </header>
        </div>
        <div id="wrapper_row">
            <form action="" method="post">
                <label for="num1">Enter Your Number:</label>
                <input type="number" name="num1" placeholder="Enter Your Number"><br>
                <label for="num2">Enter Your Number</label>
                <input type="number" name="num2" id=""placeholder="Enter Your Number"><br>
                <div id="operation">
                
                <select name="operation" id="">
                        <option value="">Select</option>
                        <option value="-">subtraction</option>
                        <option value="+">addition</option>
                        <option value="*">multiplication</option>
                        <option value="/">division</option>
                    </select>

                </div>
                <div id="button">
                    <button type="submit">Calculate</button>
                </div>
            </form>
            <div id="Result">
                <?php
                if($_SERVER["REQUEST_METHOD"]=="POST"){
                    $num1=$_POST["num1"];
                    $num2=$_POST["num2"];
                    $operation=$_POST["operation"];
                    switch ($operation){
                        case "-":
                            $Result=$num1-$num2;
                            echo "Result IS: $Result";
                            break;
                        case "+";
                            $Result=$num1+$num2;
                            echo "Result Is: $Result";
                            break;
                        case"*":
                            $Result=$num1*$num2;
                            echo "Result Is: $Result";
                            break;
                        case "/":
                            $Result=$num1/$num2;
                            echo "Result Is: $Result";
                            break;
                        default:
                            echo"Not a number of My calculator";
                            break;
                    }
                }                     
                ?>
            </div>
        </div>

    </div>
</body>
</html>