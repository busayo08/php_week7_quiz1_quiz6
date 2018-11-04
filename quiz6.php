<?php
$hundred = 100; $ten = 10;
function myTest() 
{ 
    global $hundred, $ten;
    echo $hundred + $ten."<br>"; 
    echo $hundred * $ten."<br>";
}
myTest();

?>
