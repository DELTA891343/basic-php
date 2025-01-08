<?php
// Incremental Pyramid
function incrementalPyramid($rows) {
    echo "Incremental Pyramid:\n";
    for ($i = 1; $i <= $rows; $i++) {
        // Print spaces
        echo str_repeat(" ", $rows - $i);
        // Print stars
        echo str_repeat("* ", $i);
        echo "\n";
    }
}

// Decremental Pyramid
function decrementalPyramid($rows) {
    echo "Decremental Pyramid:\n";
    for ($i = $rows; $i >= 1; $i--) {
        // Print spaces
        echo str_repeat(" ", $rows - $i);
        // Print stars
        echo str_repeat("* ", $i);
        echo "\n";
    }
}

// Full Diamond Pattern
function diamondPattern($rows) {
    echo "Diamond Pattern:\n";
    // Upper half
    for ($i = 1; $i <= $rows; $i++) {
        echo str_repeat(" ", $rows - $i);
        echo str_repeat("* ", $i);
        echo "\n";
    }
    // Lower half
    for ($i = $rows - 1; $i >= 1; $i--) {
        echo str_repeat(" ", $rows - $i);
        echo str_repeat("^ ", $i);
        echo "\n";
    }
}

// Specify the number of rows
$rows = 10;

// Call the functions
incrementalPyramid($rows);
echo "\n";
decrementalPyramid($rows);
echo "\n";
diamondPattern($rows);
?>
