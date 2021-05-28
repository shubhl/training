<?php
#https://paiza.io/projects/iPPeTD_Kn_Zr-pyohxzmFQ?language=php
//array with arrray_rpalce function
//multi-associative
    $fruit = array(
                "a"=>array("apple"),
                
                "b"=>array("banana","orange")//array
                );
    $food=array (
                "a"=>array("omlet"),
                
                "b"=>array("panipuri",)//array
                );
    
    $newarray=array_replace_recursive($fruit,$food);
     
     echo "<pre>";
     print_r($newarray);
     echo "</pre>";
?>
