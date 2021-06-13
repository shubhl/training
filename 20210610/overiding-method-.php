#https://paiza.io/projects/SuUlTN2npUWBbc1Eqq-alQ?language=php
<?php
// this methid overiding 
 class base {
     public $name= "parent class";
     public function calc($a, $b){
    echo  "sum is ".$a+$b;
     }
 }
     class derived extends base {
         
           public $name= "child class";
           
     public function calc($a, $b){
    echo "total is ". $a*$b;
     }
    }
     

 $test = new derived ();
 $test -> calc(23,22);
 echo "\n";
 $test= new base ();
 $test -> calc (34,22)
 
?>
