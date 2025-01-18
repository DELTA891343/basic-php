<?php

$number = 5;

echo "Multiplication Table for $number:<br>";

for ($i = 1; $i <= 10; $i++) {
    $result = $number * $i;
    echo "$number x $i = $result<br>";
}
