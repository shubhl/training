#https://paiza.io/projects/Mn81suVsQXXNQ9WlF98zbQ?language=php
   <?php
//this is class

 class person {
 public $name ,$age //this are properties

//this is methods
     function __construct($name= "no name" ,$age="0"){
    $this->name = $name;
    $this->age = $age;
    }
     function show(){
     echo $this->name . "-". $this->age;
    } 
 
}

     //this is object
     $p1 = new person ("shubham",20);
     $p2= new person ("rohit",23);
     /*$p1-> name=("shubham");
     $p1-> age = 20;*/
     $p1-> show();
    ?>
