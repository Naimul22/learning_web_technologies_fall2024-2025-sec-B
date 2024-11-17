<?php
$array = [5, 15, 30, 40, 60];
$search = 15;

if (in_array($search, $array)) {
    echo "$search is found in the array\n";
} else {
    echo "$search is not found in the array\n";
}
?>