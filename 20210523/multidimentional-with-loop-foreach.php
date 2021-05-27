<?php
#https://paiza.io/projects/G9rvqzczsxuHTbwcauyFsg
$emp = [
        
         [1,"shubham","manager",30000],
        [2,"sunil","salesman",20000],
        [3,"sachin","worker",15000],
        [4,"anil","driver",8000]
    //by using foreach loop
        ];
        foreach ($emp as $v1){
            
            foreach ($v1 as $v2){
            echo $v2. " " ;
            }
            echo "<br>";
            }
        
?>
