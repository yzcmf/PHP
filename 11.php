<?php

//include 'header.inc.php';
//require  kills the page after the file;
//include doesn't kill the page after the file;
$var = 10;
echo $var;

require_once 'header.inc.php';// if there is not this page, require for one time;
require 'header.inc.php';//no matter there is a page or not,require for many times;


?>

