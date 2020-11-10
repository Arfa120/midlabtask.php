<?php
    
    $fullname ="";
	$username="";
    $password="";
	
	$cpassword="";
    $email = "";
    $phone = "";
	$gender="";
	$city="";
	
    
    $err_fullname = "";
	$err_username="";
    $err_password="";
	$err_confimedpassword="";
    $err_email = "";
    $err_phone = "";
	$err_gender="";
	$err_city="";
	$has_error=false;
	if(isset($_POST["Register"]))
	{
		if(empty($_POST["fullname"]))
		{
			$err_name = "Fullname Required <br>";
			$has_error=true;
		}else{
            $fullname=$_POST["fullname"];
            $arr = str_split($fullname);
            foreach($arr as $char){
                if($char >='0' and $char<='9'){
                    $has_error = true;
                    $err_fullname = "Fullname can not contain Numbers";
                    $fullname = "";
                    break;
                }
            }
        }

        if(empty($_POST["username"]))
		{
			$err_username = "Username Required <br>";
			$has_error=true;
		}else{
            $username=$_POST["username"];
            if(strlen($username)<6){
                $err_uname = "User Name must be at least 6 character ";
                $has_error = true;
                $uname = "";
            }
            $arr = str_split($username);
            foreach($arr as $char){
                if($char ==" "){
                    $has_error = true;
                    $err_username = "UserName cannot contain blank space";
                    $uname = "";
                }
            }

            $sql = "SELECT * FROM users where UserName = '$username'";
        }
        
		if(empty($_POST["password"]))
		{
			$err_password= "Password Required <br>";
			$has_error=true;
		}else{
            $password=$_POST["password"];
            if(strlen($password)<8){
                $err_password = "Password must be 8 characters long";
                $has_error = true;
            }
        }
		
if (empty($_POST["cpass"])) {
   	  	$cpass = "Confirm password required*";
   	  }
   	  if (empty($_POST["email"])) {
   	  	$errMail = "Mail address required*";
   	  }
   	  else if (strlen(strpos($_POST["email"] , "@")) > 0 && strlen(strpos($_POST["email"], ".")) > 0) {
   	  	if (strpos($_POST["email"] , "@") > strrpos($_POST["email"], ".")) {
   	  	  $errMail = "Invalid mail format [wrong placcement]";
   	  	}
	  }
   	  	
		

        if(isset ($_POST ['email'])== true && empty($_POST["email"])==false)
		{
			$err_email = $_POST['email'];
			if(filter_var($err_email,FILTER_VALIDATION_EAMIL)==true){
				echo 'This is valid';
			}
		}else{
            echo 'Not a valid Email';
		}
	}
		
	  if(!isset($_POST["city"])){
			$err_city="City Required";
			$has_error = true;
		}
		else{
			$city = $_POST["gender"];
		}
		
		if(empty($_POST["phone"]))
		{
			$err_phone= "Phone No is Required <br>";
			$has_error=true;
		}else{
            $phone=$_POST["phone"];
            if(strlen($phone)!=11){
                $has_error = true;
                $err_phone = "Phone Number Should be 11 in length.";
            }
		}
		if(!isset($_POST["gender"])){
			$err_gender="Gender Required";
			$has_error = true;
		}
		else{
			$gender = $_POST["gender"];
		}
		

		if(!$has_error){
            $sql = "INSERT INTO users(Fullname, UserName, Password, Cpass Email, Phone,City,Gender) VALUES ('$name','$uname','$password','$cpass', '$gender','$city', '$email','$phone')";
            echo "Registration Successfull click here to <a href = 'index.php'>Login</a>";
		}
	
?>
<html>
	<head>
		<title> Welcome to RegistrationFrom</title>
	</head>
	<body>
		<h2>Registration .php</h2>
		<form action="" method="post">
			<table>
				<tr>
					<td><span>Name:</span></td>
					<td><input type="text" name="name"value="<?php echo $name; ?>"> <?php echo $err_name; ?> </td>
				</tr>
				<tr>
					<td><span>UserName:</span></td>
					<td><input type="text" name="uname"value="<?php echo $uname; ?>"> <?php echo $err_uname; ?> </td>
				</tr>
				<tr>
					<td><span>Password:</span></td>
					<td><input type="password" name="password"value="<?php echo $password; ?>"> <?php echo $err_password; ?> </td>
				</tr>
                <tr>
				<tr>
					<td><span>Cpassword:</span></td>
					<td><input type="password" name="cpassword"value="<?php echo $cpassword; ?>"> <?php echo $err_cpassword; ?> </td>
				</tr>
                <tr>
				<tr>
						<td>Gender: <?php echo $err_gender;?></td>
						<td>
							<input type="radio" name="gender" value="Male"> Male
							<input type="radio" name="gender" value="Female"> Female
						</td>
					</tr>
					
					</tr>
					<tr>
						<td align="right">
							City:
						</td>
						<td>
							<select>
							<option>Ahmedabad</option>
							<option>Lahor</option>
							</select>
							</td>
				
					<td><span>Email:</span></td>
					<td><input type="text" name="email"value="<?php echo $email; ?>"> <?php echo $err_email; ?> </td>
				</tr>
                <tr>
					<td><span>Phone:</span></td>
					<td><input type="text" name="phone"value="<?php echo $phone; ?>"> <?php echo $err_phone; ?> </td>
				</tr>
				<tr>
					<td><input type="submit" name="Register" value="Ok"></td>
				</tr>
			</table>
		</form>
	</body>
</html>