<?php

$string = 'Alex';
$string_length=strlen($string);

for($x=1;$x<=$string_length;$x++)
{
echo $x.'<br>';
}

$string_lower = strtolower($string);
echo $string_lower.'<br>';

$string_upper = strtoupper($string);
echo $string_upper.'<br>';


?>