<?php
$fruits = array("Apple", "Banana", "Mango", "Orange", "Grapes");
echo "Original Array:<br>";
print_r($fruits);
echo "<hr>";

echo "1. Count: " . count($fruits) . "<br><br>";
echo "2. in_array('Mango'): ";
echo in_array("Mango", $fruits) ? "Yes<br><br>" : "No<br><br>";
echo "3. array_search('Banana'): " . array_search("Banana", $fruits) . "<br><br>";

array_push($fruits, "Pineapple");
echo "4. After array_push('Pineapple'):<br>";
print_r($fruits);
echo "<br><br>";

array_unshift($fruits, "Strawberry"); // Add element to beginning
echo "5. After array_unshift('Strawberry'):<br>";
print_r($fruits);
echo "<br><br>";

array_pop($fruits); //  Remove last element (pop)
echo "6. After array_pop():<br>";
print_r($fruits);
echo "<br><br>";

array_shift($fruits);  // Remove first element (shift)
echo "7. After array_shift():<br>";
print_r($fruits);
echo "<br><br>";

sort($fruits);
echo "8. After sort():<br>";
print_r($fruits);
echo "<br><br>";

rsort($fruits);  // Reverse sort
echo "9. After rsort():<br>";
print_r($fruits);
echo "<br><br>";

$colors = array("Red", "Green");  // Merge two arrays
$merged = array_merge($fruits, $colors);
echo "10. Merged Array:<br>";
print_r($merged);
echo "<br><br>";

$sliced = array_slice($fruits, 1, 3);    // Slice array
echo "11. array_slice (1,3):<br>";
print_r($sliced);
echo "<br><br>";

$str = implode(", ", $fruits); //Array to string
echo "12. implode to string: $str<br><br>";


