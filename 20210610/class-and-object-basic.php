#https://paiza.io/projects/5CONfcIFMZlCD2Ep_OiaGA?language=mysql
<?php
// class
 class calculation {
     public $a,$b,$c;//properties
     //methodes
     
     function sum (){
         $this->c =$this->a+$this->b;
         return $this->c;
         
     }
     function substr(){
         $this->c =$this->a-$this->b;
         return $this->c;
     }
 }
 //objects
 $c1= new calculation();
 $c1->a = 23;
 $c1->b =34;
 
 $c2 = new calculation();
 $c2->a = 45;
 $c2->b =34;
 
 echo "the value of sum is ". $c1->sum()."\n";
 echo "the value of substr is  ".$c2->substr()."\n";
 echo "the value of substr is  ".$c1->substr()."\n";
 echo"the value of sum is ". $c2->sum();
?>
