<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP QUIZ</title>
</head>

<body>
    <?php
    // Echo statement to display the welcome message
    // echo "Welcome to the PHP Quiz!<br>";

    // // Print statement to display the message
    // print "Answer the following questions!";
    //

    
    // // Types & Variables
    // $int=10;
    // $float=10.10;
    // $bool=true;
    // $string="indu";
    // $arr=array(1,2,3,4,5);
    // $obj = (object) array("indu" => 20, "prakash" => 30);


    // echo "<br>";
    // var_dump($int);
    // echo "<br>";
    // var_dump($float);
    // echo "<br>";
    // var_dump($bool);
    // echo "<br>";
    // var_dump($string);
    // echo "<br>";
    // var_dump($arr);
    // echo "<br>";
    // var_dump($obj);
    // echo "<br>";
    //


    // $number = 23;
    // $apples = "I have {$number} apples to eat.";   
    // $oranges = "I have ${number} oranges to eat."; 
    // $money = "I have $${number} in the bank.";     
    // echo $apples;
    // echo "<br>";
    // echo $oranges;
    // echo "<br>";
    // echo $money;
    // echo "<br>";


    // Special characters are only escaped in double quotes
    // $escaped   = "This contains a \t tab character.";
    // $unescaped = 'This just contains a slash and a t: \t';
    // echo $escaped;
    // echo "<br>";
    // echo $unescaped;
    // echo "<br>";


    // $nowdoc = <<<'END'
    // Multi line <br>
    // string
    // END;
    // echo $nowdoc;


    // $heredoc = <<<END
    // Multi line
    // $nowdoc
    // END;
    // echo $heredoc;


    // // String concatenation is done with .
    // echo 'This string ' . 'is concatenated <br>';


    // // Strings can be passed in as parameters to echo
    // echo 'Multiple', 'Parameters', 'Valid';


    // define("FOO", "something");
    // // access to a constant is possible by calling the chosen name without a $
    // echo FOO;
    // echo "<br>"; 
    // echo 'This outputs ' . FOO;


    // array

    // $associative = ['One' => 1, 'Two' => 2, 'Three' => 3];
    // echo $associative['Two'];
    // echo "<br>";


    // // Add an element to an associative array

    // $associative['Four'] = 4;
    // echo $associative['Four'];

    // $array = ['One', 'Two', 'Three'];
    // echo $array[0];
    // echo "<br>";
    // echo $array[1];
    // echo "<br>";
    // echo $array[2];
    // echo "<br>";


    // // Add an element to the end of an array
    // $array[] = 'Four';
    // // or
    // array_push($array, 'Five');


    // // Remove element from array

    // unset($array[2]);
    // echo $array[3];
    // echo "<br>";
    // print_r($array);


    // $x = 1;
    // $y = 2;
    // $x = $y; // $x now contains the same value as $y
    // $z = &$y;

    // echo $x; 
    // echo $z; 
    // $y = 3;
    // echo $x; 
    // echo $z;
    // var_dump($z);


    // Logical Operators

    // $a = 0;
    // $b = '0';
    // $c = '1';
    // $d = '1';

    // echo ($a == $b) ? 'true' : 'false'; // equality
    // echo "<br>";
    // echo ($c != $a) ? 'true' : 'false'; // inequality
    // echo "<br>";
    // echo ($c <> $a) ? 'true' : 'false'; // alternative inequality
    // echo "<br>";
    // echo ($a < $c) ? 'true' : 'false';
    // echo "<br>";
    // echo ($c > $b) ? 'true' : 'false';
    // echo "<br>";
    // echo ($a <= $b) ? 'true' : 'false';
    // echo "<br>";
    // echo ($c >= $d) ? 'true' : 'false';


    //spaceship operator

    // $a = 100;
    // $b = 1000;

    // echo $a <=> $a; // returns 0 because values are equal
    // echo $a <=> $b; // returns -1 because $a is less than $b
    // echo $b <=> $a; // returns 1 because $b is greater than $a

    // $integer = 10;
    // $string = strval($integer);
    // var_dump($string);


    // if else statement 

    // if (true) {
    //     print 'I get printed<br>';
    // }

    // if (false) {
    //     print 'I don\'t';
    // } else {
    //     print 'I get printed <br>';
    // }

    // if (false) {
    //     print 'Does not get printed';
    // } elseif (true) {
    //     print 'Does <br>';
    // }


    // // ternary operator
    // print(true ? 'Does not get printed <br>' : 'Does');


    // // ternary shortcut operator

    // // equivalent of "$x ? $x : 'Does'"
    // $x = true;
    // print($x ? "Do" : 'Don\'t');


    // if elif else statement

    // $x = 1;
    // if ($x === '0') {
    //     print 'Does not print';
    // } elseif ($x == '1') {
    //     print 'print';
    // } else {
    //     print 'Does print';
    // }


    // while loop to print numbers from 0 to 9

    // $i = 1;
    // while ($i < 10) {
    //    if($i == 6){
    //        $i++;
    //        break;
    //      } 
    //     echo $i++;
    // }
    // echo "\n";


    // for loop to print numbers from 0 to 50

    // for ($x = 0; $x <= 50; $x++) {
    //     echo "<button style='border: 1px solid red; cursor:pointer; padding: 10px; margin: 10px; display: inline-block;'>";
    //     echo $x;
    //     echo "<br></button>";
    // }


    // foreach loop to print the number of wheels of different vehicles
    $wheels = ['bicycle' => 2, 'car' => 4];

    // Foreach loops can iterate over arrays
    foreach ($wheels as $wheel_count) {
        print $wheel_count;
    }
    ?>
</body>

</html>