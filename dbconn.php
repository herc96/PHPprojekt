<?php
#Stop Hacking attempt
if(!defined('__APP__')) {
     die("Hacking attempt");
}

#connect to mysql database
$MySQL = mysqli_connect("localhost","root","","phpbaza") or die('Error connecting to MySQL server.');

?>
