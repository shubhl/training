
<!DOCTYPE HTML>
<html>  
	<body>
		<h1>Form</h1>
		<form action="formoutput.php" method="POST"/>
			Name: <input type="text" name="name" placeholder ="only alphabets" required><br><br>
			
			Email: <input type="text" name="email" pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$"  size="15" placeholder="abc@gmail.com" required /><br><br>
			
			Phonenumber <input type="text" name="number" pattern="[6-9]{1}[0-9]{9}" maxlength="10" size="10" placeholder="ig.8323423243" required /><br><br>
			
			Designation <input type="text" name="designation" required /><br><br>
			
	        Favourite color:<select name="color"> name 
						<option> select color</option> 
						<option value="red">red</option>
						<option value="green">green</option>
						<option value="blue">blue</option></select><br><br>
			
			DOB:<input type="date" name="DOB" required><br><br>
			
			Gender <input type=radio name="age" value="male" />Male
			 <input type=radio name="age" value="Female"/>Female<br><br>
			
			<input type="submit" value="submit" name="submit"/>
		</form>


	</body>
</html>

--------------------------------------------------------------------
//php 
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

