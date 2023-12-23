<?php



// xvii. Filter a multi-dimensional array:
$people = array(
    array('name' => 'John', 'age' => 25),
    array('name' => 'Jane', 'age' => 30),
    array('name' => 'Bob', 'age' => 22)
);

$filteredPeople = array_filter($people, function ($person) {
    return $person['age'] > 25;
});

print_r($filteredPeople);
echo "<br>";


// xviii. Remove all white spaces from an array:
$strings = array('  apple  ', 'orange ', ' banana');
$trimmedStrings = array_map('trim', $strings);
print_r($trimmedStrings);
echo "<br/>";


// xix. Combine 2 array and use one array data as keys and others as values:
$keys = array('name', 'age', 'city');
$values = array('John', 25, 'New York');
$combined = array_combine($keys, $values);
print_r($combined);
echo "<br/>";


// xx. Convert string to array:
$string = 'apple, orange, banana';
$array = explode(', ', $string);
print_r($array);

























?>