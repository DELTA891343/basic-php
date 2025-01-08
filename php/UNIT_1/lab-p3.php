<?php
    $b=100000;
    $da=($b*50)/100;
    $hra=($b*10)/100;
    $medical=($b*4)/100;
    $gross_salary=($da+$hra+$medical+$b);
    $insurance=($gross_salary*7)/100;
    $pf=($gross_salary*5)/100;
    $dedcuation=$insurance+$pf;
    $net_salary=$gross_salary-$dedcuation;
    echo "<hr>";
    echo "basic salary=$b";
    echo "<br>da=$da";
    echo "<br>hra=$hra";
    echo "<br>medical=$medical";
    echo "<br>gross_salary=$gross_salary";
    echo "<br>insurance=$insurance";
    echo "<br>pf=$pf";
    echo "<br>dedcuation=$dedcuation";
    #echo "<hr>";
    echo "<br>net_salary=$net_salary";
    echo "<hr>"
?>