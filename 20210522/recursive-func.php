<?php
#https://paiza.io/projects/R9dHkoUWmC7kJN247OJjeg
    function display($number){
        if ($number< 5){
    echo "$number<br>";
    display ($number+1);
        }
    }
    display(1);

?>
