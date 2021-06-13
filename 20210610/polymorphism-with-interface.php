#https://paiza.io/projects/kPV9sx7F9vc3DSNtSuFpxA
<?php
// Your code here!
 interface shape{
     function calcarea();
 }
 class circle implements shape{
     public $radius;
     
     function __constructs ($radius){
        $this -> radius = $radius;
     }
     function calcarea (){
     echo $this -> radius *$this -> radius;
     }
 }
 class rectangle implements shape{
    public $width;
    public $height;
    
     function __constructs ($width,$height){
        $this -> width = $width;
        $this-> height = $height;
     }
     function calcarea (){
     echo $this -> width +$this -> height;
  }
 }
 $cir=new circle (3);
 $rect= new rectangle(13,16);
 
 echo $cir -> calcarea();
 echo $rect-> calcarea();
 
 
?>
