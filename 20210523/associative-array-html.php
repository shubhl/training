<?php
#https://paiza.io/projects/pVnTx7doPF9gGy9kYrQJ1w
//array with for each loop 
//associative array with unorderlist
    $age =[
        "shubhya"=>21,
        "rohit"=>22,
        "sunil"=>30
        ];
        echo "<ul>";
        foreach ($age as $key=>$name){
            echo "<li> $key=$name.</li>";
        }
         echo "</ul>";
?>
