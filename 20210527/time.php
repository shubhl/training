<?php
#https://paiza.io/projects/ualc2pbkZ3OeObRoEjVtjw?language=php
    echo "hour is ".date ("h")."<br>";
     echo "minutes is". date ("i")."<br>";
      echo "seconds is ".date ("s")."<br>";
       echo "meridiem is ".date ("a")."<br>";
       //full time is 
       echo "time is ".date ("h:i:s:a")."<br>";
       
       date_default_timezone_set("asia/kolkata");
       echo "time is ".date("h:i:sa").'<br>';
       
       //for knowing timezone of country use "e"
       
       echo "time is ".date ("h:i:s:a e")."<br>";
       
        date_default_timezone_set("asia/kolkata");
       echo "time is ".date("h:i:sa e");
?>
