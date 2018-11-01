<?php
$people = array("Busayo", "Damilola", "Jerry");
$hobby = array("Football", "Basketball", "Tennis");
{
    foreach (array_combine($people, $hobby) as $name => $hb)
    echo "My name is"." ". $name . ", I love"." " . $hb ."<br>";    
}
?>
