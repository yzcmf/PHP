<?php

$inumber1 = 10;
$inumber2 = 5;

function add($number1,$number2)
{
 $res=$number1+$number2;
 return $res;
}
echo add($inumber1,$inumber2)+100;

function divide($number1,$number2)
{
 $res=$number1/$number2;
 return $res;
}

echo '<br>';
echo divide(add($inumber1,$inumber2),100);

?>