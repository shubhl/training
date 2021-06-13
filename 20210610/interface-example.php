#https://paiza.io/projects/laQujh9ZmLbq1cYOz4wlYw
<?php
// Your code here!
 interface a{
    function hi($n);
    
     }
  interface c{
      function hello($n);//only declare here
      function bye();
}
//implements only here 
//this is derived class 
 class b implements a,c {
     public function hi($n){
     echo "hi".$n;    
     }
     public function hello($n){
         echo "hello".$n;
     }
     public function bye(){
     echo "bye";
     }
 }
 $test =new b();
 $test->hi(" shubham");
 echo "\n";
 $test->hello (" shubya");
 echo "\n";
 $test->bye ("shubham");
 
?>
