
<?php
echo "<h1> Welcome</h1>"; 
 
if (isset($_POST['submit'])){
	$Name = $_POST["name"];
	echo "<script> alert($Name)</script>";
	$Email = $_POST["email"];
	$Number = $_POST["number"];
	$Designation = $_POST["designation"];
	$Favourite_color = $_POST["color"];
	$birthdate= date('Y-m-d',strtotime($_POST['DOB']));
	if (isset($_POST["age"])){
		$gender=$_POST["age"];
	}else{
		$gender="";
	}
     echo "<b>Name:</b> $Name<br><br>";
	 echo "<b>Email:</b> $Email<br><br>";
	 echo "<b>Contact number:</b> $Number<br><br>";
	 echo "<b>designation:</b> $Designation<br><br>";
	 echo "<b>Favourite color:</b> $Favourite_color<br><br>";
	 echo "<b>Date of birth:</b> $birthdate<br><br>";
	 echo "<b>Gender:</b> $gender<br><br>";
	 
}

    
?>
