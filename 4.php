<?php

if(1=='1')
  echo 'TRUE.';
else
  echo 'FALSE.';
  
echo '</br>';

if(1==='1')
  echo 'TRUE.';
else
  echo 'FALSE.';
  
echo '</br>';

$text ='Hello';
$text .=' world!';
echo $text;
echo '</br>';

$counter =1;

do
{
echo $counter.' This will always show.<br>';
$counter++;
}while($counter<=10)

// switch statement--same thing

?>