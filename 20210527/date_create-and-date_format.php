<?php
#https://paiza.io/projects/zP4N0vh6XIuyyjnTguBZGw?language=php
// date create full date
    $date=date_create("2023-04-15");
   echo date_format($date,"d/m/y")."<br>";
   //date create full date with time 
   $dt=date_create ("2029-08-5 4:14:59");
   echo date_format($dt,"D/m/y H:i:sa")."<br>";
   //date create function with old date time
   $odt=date_create("2006-07-5 11:23:50");
   echo date_format($odt,"D/mS/Y H:i:sA");
    
?>
