<!DOCTYPE html>
<html>fff
<head>dfdfdf
<title>My PHP Page</title>
</head>
<body>

<?php
// This is a PHP comment
echo "Hello, world! Today is " . date("Y-m-d") . "<br>";dfgfjhtdryxhtdgbxfhtra

// Displaying a variable
$name = "John Doe";
echo "My name is $name.<br>";

// Using a conditional statement
if (date("H") < 12) {
    echo "Good morning!<br>";
} else {
    echo "Good afternoon or evening!<br>";
}

// Creating an array
$fruits = array("apple", "banana", "orange");
echo "I like " . $fruits[1] . ".<br>";

// Looping through an array
foreach ($fruits as $fruit) {
    echo "- $fruit<br>";
}
?>

</body>
</html>
