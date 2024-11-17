<?php
$a = 7;
$b = 21;
$c = 15;

if ($a > $b && $a > $c) {
    echo "Largest number is: $a\n";
} elseif ($b > $c) {
    echo "Largest number is: $b\n";
} else {
    echo "Largest number is: $c\n";
}
?>