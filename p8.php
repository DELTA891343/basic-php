<?php
// Define an indexed array of fruits
$fruits = array("Apple", "Banana", "Cherry", "Date", "Elderberry");

// Display the entire array
echo "Here is the list of fruits:\n";
print_r($fruits);

// Access and display individual elements of the array
echo "\nFirst fruit: " . $fruits[0] . "\n"; // Apple
echo "Second fruit: " . $fruits[1] . "\n"; // Banana

// Add a new element to the array
$fruits[] = "Fig";
echo "\nAdded a new fruit:\n";
print_r($fruits);

// Loop through the array and display each fruit
echo "\nAll fruits using a loop:\n";
foreach ($fruits as $fruit) {
    echo $fruit . "\n";
}
