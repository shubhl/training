<?php
#https://paiza.io/projects/V0mzJhoChoGtHGOCaO3-5g?language=php
//date create full date with time 
   $dt=date_create ("2029-08-5 4:14:59", timezone_open("Asia/kolkata"));
   echo date_format($dt,"D/m/y H:i:sa")."<br>";
   //time zone of asia dubai
   $td=date_create("2021-05-30 00:00:56",timezone_open("asia/dubai"));
   echo date_format($td,"d/m/Y h:i:sA");
?>
