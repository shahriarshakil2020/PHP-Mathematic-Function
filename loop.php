<?php
// start point
// end point
// increment / dicrement
// while loop

for ($i = 0; $i <= 10; $i++) {
    echo $i. "<br>";
}

echo "<br>";

// do while loop
$y = 35;

do {
    echo $y. "<br>";
    $y++;
} while ($y < 10);

// for loop
for ($i = 1; $i <= 100; $i++) {
    if ($i % 6 == 0) {
    echo $i. ",";
    }
}

// foreach loop
$colors = ["red", "blue", "yellow", "green"];

foreach ($colors as $color) {
    echo $color. "<br>";
}

?>