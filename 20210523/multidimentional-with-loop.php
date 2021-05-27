<?php
#https://paiza.io/projects/mtxl1Gv2qeRA3cHM4y6MXQ

 $emp = [
        
         [1,"shubham","manager",30000],
        [2,"sunil","salesman",20000],
        [3,"sachin","worker",15000],
        [4,"anil","driver",8000]
    
        ];
        
        //by using for loop
        for ($row=0;$row < 4;$row++){
            for ($col=0;$col<4; $col++){
            echo $emp [$row] [$col]." ";    
            }
            echo "<br>";
        }
       
        
        
        
?>


