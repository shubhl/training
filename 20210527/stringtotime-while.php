<?php
#https://paiza.io/projects/rWNll5URT3gZ3jIOxkdndA?language=php
    $date= strtotime("12:34am 24-may-2014");
    echo "created date is ".date("d/m/y h:i:sa",$date)."<br>";
    
    //date with string value
    $d=strtotime("tomorrow");
    echo "tomorrow is ". date ("d/m/y h:i:sa",$d)."<br>";
    
    //nextweek and next 3 month
    
    $d=strtotime("next monday");
    echo "next mondays date is ". date ("d/m/y h:i:sa",$d)."<br>";
    
    $d=strtotime("+3 months");
    echo  date ("d/m/y h:i:sa",$d)."<br>";
    
    //by using while function
    $startdate =strtotime("monday");
    $enddate =strtotime("+6 week ",$startdate);
    
    while($startdate < $enddate ){
        echo date("M d",$startdate)."<br>";
        $startdate =strtotime("+1 week", $startdate);
    
        
    }
    
?>
