#https://paiza.io/projects/yTnSuGVxEHS1YsNSJIjTyA
   <?php
//this is class

 class employee {
 public $name ,$age,$salary; //this are properties

//this is methods
     function __construct($n= "no name" ,$a=0,$s=0 ){
    $this->name = $n;
    $this->age = $a;
    $this->salary=$s;
    }
     function info(){
     echo "<h3>employee profile</h3>";
     echo "employee name :".$this->name ."<br>";
     echo "employee age :".$this-> age."<br>";
     echo "employee salary : ".$this->salary."<br>";
     
    } 
 
}

     //this is object
     $e1 = new employee ("shubham",20,10000);
    
     
     $e1-> info();
    ?>
