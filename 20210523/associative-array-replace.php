<?php
#https://paiza.io/projects/awKUsIKcyJAkou5ama-qoQ?language=php
//indexed array with arrray_rpalce function
//multi-associative
    $fruit = array(
                "a"=>array("apple"),
                
                "b"=>array("banana","orange")//array
                );
    $food=array (
                "a"=>array("omlet"),
                
                "b"=>array("panipuri")//array
                );
    
    $newarray=array_replace($fruit,$food);
     
     
     print_r($newarray);
?>
