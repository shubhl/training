
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
