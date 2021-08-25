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
    /*//output in php
    $break = "<br/>";
    $txt = "php";
    $int = 50;
    $float = 20.3;
    $char = "a";
    $boolean = false;

    echo "this is", $txt, $break + "this is an integer", $int, "this is a boolean";
    echo  $float, $char;
    echo "welcome";

    $x = 10;
    $y = 10;
    $x++; //increament by 1
    $y--; //decrement by 1
    $break = "<br/>";
    echo $x == $y, $break;
    echo $x =! $y, $break;
    $boolean = true;

    echo !$boolean;
    echo $x += 5 , $break;
    echo $x -= 5,  $break;
    echo $y += 5,  $break;
    echo $y -= 5,  $break;
    echo $x + $y , $break; 
    echo $x * $y, $break;
    echo $x / $y, $break;
    echo $x % $y, $break;

    $break = "<br/>";
    $arr = array("one","two","three","four","five","six");
    $a = array(1 =>"one",2 =>"two",3 => "three",4=> "four",5 => "five",6 => "six");
    $ar = array("one","two","three",["four","five","six"]);

    echo var_dump($arr), $break ;
    echo var_dump($a), $break ;
    echo var_dump($ar), $break ;

    $n = null;

    echo var_dump($n);
    
    function first($name) 
    {
        echo "I am ", $name;
    }
    first("Asahel");
     
    //function to display school $ age
    $school = "Tuk";

    function school_age($age) 
    {
        Global $school;
        echo "My school is ", $school, "<br/>";
        echo " My age is ", $age, " years";
    }
    school_age(15);

    function cond_function($age)
    {

        //if statements
        if($age > 1 && $age <= 12)
        {
            echo "You are a child";
        }
        elseif($age > 12 && $age <= 18)
        {
            echo "you are tenager";
        }
        elseif($age > 14 && $age <=35)
        {
            echo "you are youth";
        }
        elseif($age > 35 && $age <=50)
        {
            echo "you are an adult";
        }
        else{
            echo "you are old";
        }

        // switch statements
        switch ($age) {
            case $age > 1 && $age <= 12:
                echo "you are child";
                break;
            case $age > 12 && $age <= 16:
                echo "you are a tenager";
                break;
            case $age > 14 && $age <= 35:
                echo "you are a youth";
                break;
            case $age > 35 && $age <= 50:
                echo "you are an adult";
                break;
            default:
                echo "you are old";
        }
    }
    cond_function(20);*/
    
    // while loop
    //excute when condition is met
    // $i = 1;
    // while($i <= 10)
    // {
    //     echo $i,"<br/>";
    //     $i++;
    // } 

    //do while loop
    //excute ones even if the condition is not met
    // do
    // {
    //     echo $i,"<br/>";
    //     $i++;
    // }
    // while($i<=10);

    //for loop
    // for($i=1; $i<=10; $i++)
    // {
    //     echo $i,"<br/>"; 
    // }

    //array loop
    //foreach loop
    //$arr = array("one","two","three","four","five","six");
    // foreach($arr as $item)
    // {
    //     echo $item,"<br/>";
    // } 

    //for loop
    // for($i=0; $i<=5; $i++)
    // {
    //     echo $arr[$i],"<br/>";
    // }

    $x=0;
    $num = 20;
    $divisor = 3;

    while($num > $divisor) 
    {
        echo $num,"<br/>";
        $num = $num - $divisor;

        $x+=1;
    }

    echo "Qoutient is ",$x;

    ?>

</body>

</html>