<?php

$string='zyx';

//substr();

$string2='This part don\'t search. This part search.';

$string2_new= substr_replace($string2,'zyx ',29,4);

echo $string2_new.'<br>';

$find=array('is','string','example');
$replace=array('IS','STRING','EXAMPLE');
$string3='This is a string,and is an example.';

$string3_new= str_replace($find,$replace,$string3);
echo $string3_new.'<br>';

?>