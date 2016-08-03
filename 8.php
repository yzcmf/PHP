<?php

function echo_ip()
{
//global $user_ip;
$user_ip=$_SERVER['REMOTE_ADDR'];
$string = 'Your IP address is:'.$user_ip;
echo $string;
}

echo_ip();
?>