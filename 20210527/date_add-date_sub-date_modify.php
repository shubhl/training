<?php
#https://paiza.io/projects/yABR1SJAXJNXbM83GWHUKQ?language=php
// date adding
   $date = date_create("2021/3/2");
   
    date_modify($date ,"25days");
    
    echo "date is ".date_format($date,"d/m/y")."<br>";
    //date  substracting
     $date = date_create("2021/3/2");
   
    date_modify($date ,"-25days");
    
    echo date_format($date,"d/m/y");
    
    
?>
