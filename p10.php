<?php
// Input string
$input = "PHP is a powerful scripting language";

// Calculate the length of the string
$length = 0;
while (isset($input[$length])) {
    $length++;
}

// Calculate the number of words in the string
$wordCount = 0;
$isWord = false;
for ($i = 0; $i < $length; $i++) {
    if ($input[$i] != ' ' && !$isWord) {
        $wordCount++;
        $isWord = true;
    } elseif ($input[$i] == ' ') {
        $isWord = false;
    }
}

// Display the results
echo "Input String: \"$input\"\n";
echo "Length of the string: $length\n";
echo "Number of words in the string: \033[32m$wordCount\033[0m\n"; // Colors the word count in green (ANSI escape sequence)
