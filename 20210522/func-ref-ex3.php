<?php
#https://paiza.io/projects/TUcXi4GHNbRbyYHsMgofpQ
    function first ($num)
    {
        $num += 5;
    }
    function second (&$num)
    {
        $num+= 3;
    }
    $number = 10;
    
    first ($number);
    echo "orignal value $number <br>";
    
    second ($number);
    echo "the orignal value is $number ";
?>
