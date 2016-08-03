
// for the string function;
<?php
$string = 'This is an example string .';
$string_word_count = str_word_count($string,1,'.');
//0 for the word counter; 1 for each word and characters; 2 for the characters ahead;
print_r ($string_word_count);
echo '<br>';
$string2 = 'This is an another example string .';
$string_shuffled = str_shuffle($string2);
echo $string_shuffled;
echo '<br>';
$half = substr($string_shuffled,0,5);
echo $half;
echo '<br>';
$string3 = 'image.jpeg';
$string_reversed = strrev($string3);
echo $string_reversed;
echo '<br>';
$string4 = 'This is the first string.';
$string5 = 'This is the second string.';
$string6 = 'This is the last string and third string.';
similar_text($string4,$string5,$result);
echo 'The similarity between is,'.$result;
echo '<br>';
similar_text($string4,$string6,$result);
echo 'The similarity between is,'.$result;
echo '<br>';
$string7 = 'This is the length example string.';
$string_length=strlen($string7);
echo $string_length;
echo '<br>';
$string8 = '&nbsp;&nbsp;This is the trim example string.&nbsp;';
$string_trimmed=ltrim($string8);// left white space trimed;
echo $string_trimmed;
echo '<br>';
$string9 = '&nbsp;This is the trim example string.&nbsp;';
$string_trimmed2=rtrim($string9);// right white space trimed;
echo $string_trimmed2;
echo '<br>';
$string10='This is a <img src ="image.jpg"> string.';
$string_slashes=htmlentities(addslashes($string10));

echo $string_slashes;
?>

