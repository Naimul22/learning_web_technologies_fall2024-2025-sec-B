
<?php
$array = [
    [1, 2, 3, 'A'],
    [1, 2, 'B', 'C'],
    [1, 'D', 'E', 'F']
];

echo "The 2D Array Is:\n";
foreach ($array as $row) {
    foreach ($row as $item) {
        echo "$item ";
    }
    echo "\n";
}

echo "\n";


echo "First array:\n";
echo "1 2 3\n";
echo "12\n";
echo "1\n";

echo "\n";


echo "Second array:\n";
echo "A\n";
echo "B C\n";
echo "D E F\n";
?>