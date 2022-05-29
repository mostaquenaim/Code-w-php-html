<?php 
$num1= $_POST["number_1"];
$num2= $_POST["number_2"];
$number1=(float)$num1;
$number2=(float)$num2;
$op=$_POST["operator"];

echo "The first number is ".$number1. "<br>The second number is ".$number2."<br>The result is ";

if($op=="+")
{
    echo $number1 + $number2;
}
elseif($op=="-")
{
    echo $number1 - $number2;
}
elseif($op=="*")
{
    echo $number1 * $number2;
}
elseif($op=="/")
{
    echo $number1 / $number2;
}

?>