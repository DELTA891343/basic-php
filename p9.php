<?php
// Define an associative array with key-value pairs
$student = array(
    "name" => "John Doe",
    "age" => 20,
    "course" => "Computer Science",
    "grade" => "A"
);

// Display the entire associative array
echo "Student Details:\n";
print_r($student);

// Access and display individual elements using their keys
echo "\nName: " . $student["name"] . "\n";
echo "Age: " . $student["age"] . "\n";
echo "Course: " . $student["course"] . "\n";
echo "Grade: " . $student["grade"] . "\n";

// Add a new key-value pair to the array
$student["email"] = "john.doe@example.com";
echo "\nAdded Email:\n";
print_r($student);

// Loop through the associative array and display each key-value pair
echo "\nAll details using a loop:\n";
foreach ($student as $key => $value) {
    echo ucfirst($key) . ": " . $value . "\n";
}
