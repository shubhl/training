<?php
#https://paiza.io/projects/wvG7C9c5NieNlrDgNqjfUw
$emp = [
        
         [1,"shubham","manager",30000],
        [2,"sunil","salesman",20000],
        [3,"sachin","worker",15000],
        [4,"anil","driver",8000]
    //by using foreach loop
        ];
        echo "<table border = '2px' cellpading = '5px' cellspacing = '5px'>";
        echo "<tr>";
            "<th> emp .Id</th>";// by using html tags 
            "<th>name </th>";
            "<th> section</th>";
            "<th> salary </th>";
        echo "</tr>";
        foreach ($emp as $v1){
            echo "<tr>";
            foreach ($v1 as $v2){
            echo "<td> $v2. </td>" ;
            }
            echo "<tr>";
            }
        echo "</table>";
?>
