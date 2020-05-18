<?php
//set default time zone
date_default_timezone_set('Pacific/Auckland');
//take time from system or online
//data function to take time out from system or online https://www.php.net/manual/en/function.date.php
$t = date("Y-m-d");
$t1 = date("H:i:s");
echo $t." ".$t1;

