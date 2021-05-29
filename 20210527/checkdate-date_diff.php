<?php
// Your code here!
    echo checkdate(1,1,2022)."<br>";
//  date diff function
    $date1=date_create("23/4/2021");
    $date2=date_create("23/5/2022");
    
    $diff = date_diff($date1 ,$date2);
    
    echo $diff->days."days";
?>
