<?php
#https://paiza.io/projects/RxMS_PaSctK_YcS9vDOrhA
    //by using mktime 
    echo "date and time is ".date(" l d-m-y  h:i:sA",mktime(12,34,45,4,11,2013))."<br>";
    //by using gmmktime 
    echo "date and time  is ".date ("l d-m-Y   h-i-sa",gmmktime(3,43,56,5,10,2008))."<br>";
    
    
    //by using variable funtion
    $d=mktime(12,34,45,4,11,2013); 
    echo" date and time is ".date ("l d-mS-Y  h:i:sa",$d )."<br>";
    //by using gmmktime
    $s=mktime(10,34,45,5,1,2012);
    echo" date and time is ".date ("l dS-F-Y   h:i:sA",$s );
?>
