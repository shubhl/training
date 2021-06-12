#https://paiza.io/projects/YHPGZo2vGr3Mx6d7jW9kgw?language=php   
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
class manager extends employee{
    public $ta =1000;
    public $phone= 300;
    public $totalsalary ;
    
    function info(){
        $this -> totalsalary =$this->salary +$this->ta+$this->phone;
     echo "<h3>manager  profile</h3>";
     echo "employee name :".$this->name ."<br>";
     echo "employee age :".$this-> age."<br>";
     echo "employee salary : ".$this->totalsalary."<br>";
     
    } 
 
}

     //this is object
     $e1 = new manager ("shubham",25,300000);
     $e2 = new employee ("sunil",20,10000);
    
    
     
     $e1-> info();
     $e2-> info();
    ?>

