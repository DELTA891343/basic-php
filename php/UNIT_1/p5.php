<?php
    $a=1;
    $b=2;

    function sum()
    {
        $a=10;
        global  $b;
        $b=$a+$b;
    }
    sum();
    echo "B=",$b;
?>