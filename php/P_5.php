<html>
    <style>
        table {
            border-collapse: collapse;
            width: 30%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: crimson;
        }
        tr:nth-child(odd) {
            background-color: lightblue;
        }
    </style>

    <body>
        <table>
        <thead>
            <tr>
                <th>GTU GRADE</th>
                <th>Mark-Range</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>AA</td>
                <td>85-100</td>
            </tr>
            <tr>
                <td>AB</td>
                <td>75-84</td>
            </tr>       
            <tr>
                <td>BB</td>
                <td>65-74</td>
            </tr>
            <tr>
                <td>BC</td>
                <td>55-64</td>
            </tr>
            <tr>
                <td>CC</td>
                <td>45-54</td>
            </tr>
            <tr>
                <td>CD</td>
                <td>40-44</td>
            </tr>
            <tr>
                <td>DD</td>
                <td>35-39</td>
            </tr>
            <tr>
                <td>FF</td>
                <td>< 35(FAIL)</td>
            </tr>
        </tbody>
        </table>
    </body>
</html>

<?php
    $sub_1 = 80;
    $sub_2 = 40;
    $sub_3 = 80;
    $sub_4 = 80;
    
    $total = $sub_1 + $sub_2 + $sub_3 + $sub_4;
    $per = $total/4;

    echo "Total is = $total";
    echo "<br>Percentage is = $per";
    if($sub_1<35 || $sub_2<35 || $sub_3<35 || $sub_4 <35){
        echo "<br> You are Fail ";
        echo "<br> Your Garde is FF ";
    }
    else if ($per >= 85 & $per <= 100){
        echo "<br> Your Grade is AA ";
        echo "<br> You are Pass";
    }
    else if ($per >= 75 && $per <= 84){
        echo "<br> Your Grade is AB ";
        echo "<br> You are Pass";
    }
    else if ($per >= 65 && $per <= 74){
        echo "<br> Your Grade is BB ";
        echo "<br> You are Pass";
    }
    else if ($per >= 55 && $per <= 64){
        echo "<br> Your Grade is BC ";
        echo "<br> You are Pass";
    }
    else if ($per >= 45 && $per <= 54){
        echo "<br> Your Grade is CC ";
        echo "<br> You are Pass";
    }
    else if ($per >= 40 && $per <= 44){
        echo "<br> Your Grade is CD ";
        echo "<br> You are Pass";
    }
    else if ($per >= 35 && $per <= 39){
        echo "<br> Your Grade is DD ";
        echo "<br> You are Pass";
    }
    else{
        echo "<br>Invalid Input!";
    }

    
?>