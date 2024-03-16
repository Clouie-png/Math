<?php
$input1 = $_GET["input1"];
$input2 = $_GET["input2"];
$math = $_GET["math"];
$output = 0;
echo $math . "<br>";
if($math == "add") {
    $output = $input1 + $input2;
    echo "output is :". $output;
}elseif($math == "minus"){
    $output = $input1 - $input2;
    echo "output is :". $output;
}elseif($math == "multiply"){
    $output = $input1 * $input2;
    echo "output is :". $output;
}elseif($math == "divide"){
    $output = $input1 / $input2;
    echo "output is :". $output;
}elseif($math == "modulus"){
    $output = $input1 % $input2;
    echo "output is :". $output;
}

?>