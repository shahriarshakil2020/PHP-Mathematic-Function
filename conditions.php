<?php
// Statement
$age = 51;
if ($age <= 12) {
    echo "you are a child";
} elseif ($age <= 19) {
    echo "you are a teenager";
} elseif ($age <= 30) {
    echo "you are a aduld";
} elseif ($age <= 50) {
    echo "you are a middeled aged person";
} elseif ($age > 50) {
    echo "you are an old man person";
} else {
    echo "you are not eligile for vote";
}

echo "<br>";

// switch statement

$day = "sunday";
 switch ($day) {
    case 'satarday':
        echo "today is saturday";
        break;
    
    case 'sunday':
        echo "today is sunday";
        break;
        
    case 'monday':
        echo "today is monday";
        break;
    }
