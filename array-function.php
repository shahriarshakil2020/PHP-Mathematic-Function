<?php
$names = array("rafiq", "salam", "barkat", "jabbar", "shahin");
print_r($names);
echo "<br/>";

$cities = ["dhaka", "tangail"];
var_dump(is_array($cities));
echo "<br/>";

var_dump(in_array("rafiq", $names));
echo "<br/>";

$nameAndCity = array_merge($names, $cities);
print_r($nameAndCity);


$myInfo = [
    "name" => "Shahriar",
    "city" => "Dhaka",
    "age" => 25,
    "gender" => "Male"
];

$allKeys = array_keys($myInfo);
print_r ($allKeys);
echo "<br>";

var_dump(array_key_exists("city", $myInfo));


array_shift ($names);
print_r ($names);

array_unshift ($names, "akmal", "salman");
echo "<br>";
print_r ($names);

array_push ($names, "babul", "kabul");
print_r($names);
echo "<br>";

array_pop ($names);
print_r ($names);
$allValue = array_values($myInfo);
echo "<br>";
print_r ($allValue);
echo "<br>";


array_map (function ($sn) {
    echo $sn. "<br/>";
}, $names);

$persons = ["user", "name", "minhaz", "asif", "name", "minhaz"];
$unique_person = array_unique($persons);
echo "<br/>";
print_r($unique_person);
echo "</br>";

$nameSlice = array_slice ($names, 1, 3);
print_r($nameSlice);
echo "<br/>";


$nameDiff = array_diff ($names, $nameSlice);
print_r($nameDiff);
echo "<br/>";

$as = array_search("akmal", $nameDiff);
var_dump($as);
echo "<br/>";


$reverseName = array_reverse ($names);
print_r($reverseName);
echo "<br/>";





?>