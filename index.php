<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // This is a comment
    # This is a comment

    /* This 
    is a 
    multiline
    comment */
    /*

    echo "Hello World <br>" ;
    # Variables
    $a = 123;
    $b = 44;
    $A = 45;
    echo $a + $b, "<br>"; 
    Echo $a + $A, "<br>";
    var_dump($a);

    # String
    $str1 = "<br> This is a string <br>";
    echo  $str1;
    var_dump($str1);

    # Floating point number
    $c = 123.33;
    echo $c;

    # Boolean
    $x = true;
    $y = false;
    echo "<br>";
    echo $x;
    
    # Arrays
    $fruits = array ('apple', 'orange', 'grapea');
    var_dump($fruits);
    $var1 = null;
    */
    /* 
    $str2 = "My name is Khan";
    echo strlen($str2), "<br>";
    echo str_word_count($str2), "<br>";
    echo strrev($str2), "<br>";
    echo strpos($str2, 'Khan'), "<br>";
    echo str_replace('is', 'are', $str2);
    */

    # Conatants
    define("pi", 3.14);
    echo pi, "<br>";

    // Operators
    # Arithmetic Operators
    /* echo "The value of 3 + 4 is ", 3+4, "<br>";
    echo "The value of 3 - 4 is ", 3-4, "<br>";
    echo "The value of 3 * 4 is ", 3*4, "<br>";
    echo "The value of 3 / 4 is ", 3/4, "<br>";
    echo "The value of 3 % 4 is ", 3%4, "<br>";
    echo "The value of 3 ** 4 is ", 3**4, "<br>"; */

    # Assignment Operators
    /* $x = 4;
    echo $x, "<br>";
    // $x = $x + 1;
    $x++;  
    // $x--;
    echo $x; */

    # If else Statement
    /* $t = date ("H");
    if ($t > "10") {
        echo $t . "is a good time";
    }
    else if ($t==9) {
        echo "You are in Europe";
    }
    else {
        echo "bad luck", "<br>";
    }
    echo date_default_timezone_get(); */

    #Loops
    //  While loop
    // $var3 = 1;
    /*while ($var3 <= 4) {
        if($var3 == 3)
        {           
            $var3++;
            continue;
            // break;
        }
        echo "The current value of variable is". $var3. "<br>";
        $var3++;
    } */

        // For loop
        /* for ($i=0 ; $i < 6; $i++) { 
            echo "The current value of i is ". $i. "<br>";
        } */

        # Functions
       /*  function average_number($num1, $num2)
        {
            $average = ($num1 + $num2)/2;
            return $average;
        }
        echo average_number(3,4), "<br>";
        echo average_number(7,8), "<br>";

        function area_circle($radius)
        {
            $area = pi * $radius * $radius;
            return $area;
        }
        echo "The area of circle is ".area_circle(1); */

        // Array sort
        /* $numbers = array(4, 6, 2, 22, 11);
        sort($numbers);
        $leng = count($numbers);
        for ($i=0 ; $i < $leng; $i++) { 
            echo $numbers[$i]. "<br>";
        } */  
        
        $numbers = array(4, 6, 2, 22, 11);
        rsort($numbers);
        $leng = count($numbers);
        for ($i=0 ; $i < $leng; $i++) { 
            echo $numbers[$i]. "<br>";
        } 






    

    ?>
</body>

</html>