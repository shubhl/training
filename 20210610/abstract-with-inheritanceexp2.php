#https://paiza.io/projects/YnKGGbYZLwqHVAAB99ughg?language=php
<?php
// Your code here!
 abstract class parentclass{
     public $name;
     
     abstract protected function calc($a,$b);
 }
 //derived class is most important in abstract
 class child extends parentclass{
     public function calc($a,$b){
           echo $a +$b ;
     }
   
 }
 $test= new child();
 
 
 $test->calc(12,23);
 
?>
