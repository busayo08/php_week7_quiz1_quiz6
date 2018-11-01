<?php
$hundred = 100; $ten = 10;
function myTest() { global $hundred, $ten;}
myTest();
echo $hundred + $ten."<br>"; 
echo $hundred * $ten."<br>";
?>
