<?php
$x= 10;
$y=15;
$z=20;
if($x>$y && $x>$z){
    echo "$x is the largest number.";
} elseif ($y > $x && $y > $z) { 
    echo "$y is the largest number.";
} else {
    echo "$z is the largest number.";
}

?>