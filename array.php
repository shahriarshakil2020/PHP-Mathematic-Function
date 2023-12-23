<?php
// indexed array
// $studentNames = array("shahriar", "shakil", "mlion", "monir");

$studentInfo = ["shahriar", 25, true, "", "dhaka"];
echo "<pre>";
var_dump($studentInfo);
print_r($studentInfo);
echo "</pre>";
echo gettype($studentInfo). "<br/>";

echo $studentInfo[0] . "<br/>";
echo $studentInfo[1] . "<br/>";
echo $studentInfo[2] . "<br/>";
echo $studentInfo[3] . "<br/>";
echo $studentInfo[4] . "<br/>";

for ($i = 0; $i < count($studentInfo); $i++) {
    echo $i . "<br/>";
}

foreach ($studentInfo as $value) {
    echo $value. "<br/>";
}


// associative array
$studentData = [
    "name" => "shahriar",
    "age" => 25,
    "is_male" => true,
    "" => 00,
    "city" => "Tangail"
];

echo "<pre>";
var_dump($studentData);
print_r($studentData);
echo "</pre>";

echo $studentData["age"]. "<br/>";

foreach ($studentData as $key => $value) {
    echo "<div style='color: green'> $key : $value<br/></div>";
}

// multidimensional array
$sudents = [
    ["shahriar", 25, "dhaka"],
    ["shakil", 25, "tangail"],
    ["mlion", 25, "mymonshinh"],
    ["monir", 25, "gazipur"]
];

echo "<pre>";
print_r($sudents);
echo "</pre>";
echo($sudents)[3][2]. "<br>";


foreach ($sudents as $student) {
    foreach ($student as $key => $value) {
        if ($key == count($student) - 1) {
            echo $value;
        } else {
            echo $value. ", ";
        }
    }
    echo "<br/>";
}

// bangladeshi cities in arrya
$bangladeshiCities = [
    "Dhaka",
    "Chittagong",
    "Khulna",
    "Rajshahi",
    "Sylhet",
    "Barisal",
    "Rangpur",
    "Mymensingh",
    "Brahmapur",
    "Chandpur",
    "Jessore",
    "Jhalokati",
    "Patuakhali",
    "Pabna",
    "Rajbari",
    "Sirajgonj",
    "Dinajpur",
    "Gaibandha",
];

?>

<form action="#">
    <select>
        <option>--choose city--</option>
        <?php
        foreach ($bangladeshiCities as $city) {
            echo "<option>$city</option>";
        }
        ?>
        <option> <?= $cities; ?> </option>
        <?php ?>
    </select>
</form>