<?php $hundred = 100; $seventy = 10;
function myTest() { global $hundred, $seventy; $hundred = $hundred + $seventy; }
myTest();
echo $hundred."<br>"; 
function myTest2() { global $hundred, $seventy; $seventy = $hundred * $seventy; }
myTest2();
echo $seventy;
?>