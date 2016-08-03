<?php

$offset=0;

if(isset($_POST['text']) && isset($_POST['Searchfor'])&& isset($_POST['replacewith']))
{
 $text=$_POST['text'];
 $search=$_POST['Searchfor'];
 $replace=$_POST['replacewith'];
 
 $search_length=strlen($search);
	
 if(!empty($text) && !empty($search)&&!empty($replace))
 {
	 
 //echo 'OK';

 while($strpos= strpos($text,$search,$offset))
 {
	// echo $strpos.'<br>';
	$offset = $strpos+$search_length;
    $text=substr_replace($text,$replace,$strpos,$search_length);
 }	

 echo $text;
 
 }
 else
 {
	 echo 'Please fill in all fields.';
 }
}

?>

<form action="index.php" method="POST">

<textarea name="text" rows="6" cols="30"></textarea><br><br>
Search for:<br>
<input type="text"  name="Searchfor"><br><br>
Replace with:<br>
<input type="text"  name="replacewith"><br><br>
<input type="submit"  value="Find and Replace">


</form>