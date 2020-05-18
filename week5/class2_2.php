<?php
//set default time zone
date_default_timezone_set('Pacific/Auckland');
//take time from system or online
//data function to take time out from system or online https://www.php.net/manual/en/function.date.php
$t = date("Y-m-d");
$t1 = date("H:i:s");
echo $t." ".$t1;

$hour = date("H");
$minute = date("i");

if ($hour>"10" && $minute<"10"){
    echo "Have a good morning";
}elseif ($hour<"20"){
    echo "Have a good day";
}else{
    echo "Have a good night";
}

