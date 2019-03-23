<?php

	$name="";
	$email="";
	$user_name="";
	$password="";
	$conf_password="";
	$birthday="";
	$gender="";
	$status="";
	$address="";
	$city="";
	$code="";
	$home_phone="";
	$mob_phone="";
	$c_number="";
	$c_expiry="";
	$salary="";
	$url="";
	$gpa="";

	$matchName="Not checked yet.";
	$matchEmail="Not checked yet.";
	$matchUser="Not checked yet.";
	$matchPassword="Not checked yet.";
	$matchConf="Not checked yet.";
	$matchBirthday="Not checked yet.";
	$matchGender="Not checked yet.";
	$matchStatus="Not checked yet.";
	$matchAddress="Not checked yet.";
	$matchCity="Not checked yet.";
	$matchCode="Not checked yet.";
	$matchHome="Not checked yet.";
	$matchMob="Not checked yet.";
	$matchC_number="Not checked yet.";
	$matchC_expiry="Not checked yet.";
	$matchSalary="Not checked yet.";
	$matchUrl="Not checked yet.";
	$matchGpa="Not checked yet.";
	$match="Not checked yet.";

if ($_SERVER["REQUEST_METHOD"]=="POST") {
	$name=$_POST("name");
	$email=$_POST("email");
	$user_name=$_POST("user_name");;
	$password=$_POST("password");;
	$conf_password=$_POST("conf_password");;
	$birthday=$_POST("birthday");;
	$gender=$_POST("gender");;
	$status=$_POST("status");;
	$address=$_POST("address");;
	$city=$_POST("city");;
	$code=$_POST("code");;
	$home_phone=$_POST("home_phone");;
	$mob_phone=$_POST("mob_phone");;
	$c_number=$_POST("c_number");;
	$c_expiry=$_POST("c_expiry");;
	$salary=$_POST("salary");;
	$url=$_POST("url");;
	$gpa=$_POST("gpa");;

	if(!preg_match('/[A-Za-z]{2,}/',$name)) {
						$matchName="It must contain at least 2 characters and no numbers";
					} else {
						$matchName="";
					}

if(!preg_match('/[A-Za-z0-9._-]+[]a-z{2,}/',$email)) {
						$matchEmail="Enter email correctly";
					} else {
						$matchEmail="";
					}

if(!preg_match('/[A-Za-z0-9]{5,}/',$user_name)) {
						$matchUser="It must contain at least 5 characters.";
					} else {
						$matchUser="";
					}

if(!preg_match('/[A-Za-z0-9]{8,}/',$password)) {
						$matchPassword="It must contain at least 8 characters.";
					} else {
						$matchPassword="";
					}

if($password!==$conf_password) {
						$matchConf="It be equal to password";
					} else {
						$matchConf="";
					}

if(!preg_match('/[0-9]{2}.[0-9]{2}.[0-9]{4}/',$birthday)) {
						$matchBirthday="Format of date dd.mm.yyyy";
					} else {
						$matchBirthday="";
					}

if(!(isset($gender)) {
						$matchGender="Match the gender";
					} else {
						$matchGender="";
					}

if(!(isset($status)) {
						$matchStatus="Match the status";
					} else {
						$matchStatus="";
					}

if(!preg_match('/./',$address)){
	$matchAddress="This is required field!";
} else {
	$matchAddress="";
}
if(!preg_match('/./',$city)){
	$matchCity="This is required field!";
} else {
	$matchCity="";
}
if(!preg_match('/[0-9]{6}/',$code)){
	$matchCode="It must contain at least 6 digits!";
} else {
	$matchCode="";
}

if(!preg_match('/[0-9]{9}/',$home_phone)){
	$matchHome="It must contain at least 9 digits!";
} else {
	$matchHome="";
}
if(!preg_match('/[0-9]{9}/',$mob_phone)){
	$matchMob="It must contain at least 9 digits!";
} else {
	$matchMob="";
}
if(!preg_match('/[0-9]{16}/',$c_number)){
	$c_number="It must contain at least 16 digits!";
} else {
	$c_number="";
}
if(!preg_match('/[0-9]{2}.[0-9]{2}.[0-9]{4}/',$c_expiry)){
	$matchC_expiry="It must be in format dd.mm.yyyy!";
} else {
	$matchC_expiry="";
}
if(!preg_match('/[0-9,.]{2,}/',$salary)){
	$matchSalary="Write it in format $ 3,000.00!";
} else {
	$matchSalary="";
}

if(!preg_match('/http:\/\/[A-Za-z0-9]+\.[a-z]{2,}/',$url)){
	$matchUrl="Write in URL format";
} else {
	$matchUrl="";
}
if(!preg_match('/^[+]?([0-4]*[.])?[0-9]+$/',$gpa)){
	$matchGpa="It is a floating point";
} else {
	$matchGpa="";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Valid Form</title>
</head>
<body>
	<form action="validation.php" method="post">
		<dl>
			<dt>Name</dt>
			<dd><input type="text" name="name" value="<?= $name ?>"></dd>

			<dt>Email</dt>
			<dd><input type="text" name="email" value="<?= $email ?>"></dd>

			<dt>User name</dt>
			<dd><input type="text" name="user_name" value="<?= $user_name ?>"></dd>
			
			<dt>Password</dt>
			<dd><input type="text" name="password" value="<?= $password ?>"></dd>

			<dt>Confirm password</dt>
			<dd><input type="text" name="conf_password" value="<?= $conf_password ?>"></dd>

			<dt>Date of birth</dt>
			<dd><input type="text" name="birthday" value="<?= $birthday ?>"></dd>

			<dt>Gender</dt>
			<dd><input type="text" name="gender" value="<?= $gender ?>"></dd>

			<dt>Marital status</dt>
			<dd><input type="text" name="status" value="<?= $status ?>"></dd>

			<dt>Address</dt>
			<dd><input type="text" name="address" value="<?= $address ?>"></dd>

			<dt>City</dt>
			<dd><input type="text" name="city" value="<?= $city ?>"></dd>

			<dt>Postal code</dt>
			<dd><input type="text" name="code" value="<?= $code ?>"></dd>

			<dt>Home phone</dt>
			<dd><input type="text" name="home_phone" value="<?= $home_phone ?>"></dd>

			<dt>Mobile phone</dt>
			<dd><input type="text" name="mob_phone" value="<?= $mob_phone ?>"></dd>

			<dt>Credit card number</dt>
			<dd><input type="text" name="c_number" value="<?= $c_number ?>"></dd>

			<dt>Credit card expiry date</dt>
			<dd><input type="text" name="c_expiry" value="<?= $c_expiry ?>"></dd>

			<dt>Monthly salary</dt>
			<dd><input type="text" name="salary" value="<?= $salary ?>"></dd>

			<dt>Web site URL</dt>
			<dd><input type="text" name="url" value="<?= $url ?>"></dd>

			<dt>Overall GPA</dt>
			<dd><input type="text" name="gpa" value="<?= $gpa ?>"></dd>

			<dt>Output Text</dt>
			<dd><?php if ($matchName!=""||$matchEmail!=""||$matchPassword!=""||$matchConf!=""||$matchBirthday!=""||$matchGender!=""||$matchStatus!=""||$matchAddress!=""||$matchCity!=""||$matchCode!=""||$matchHome!=""||$matchMob!=""||$matchC_number!=""||$matchC_expiry!=""||$matchSalary!=""||$matchUrl!=""||$matchGpa!=""){ ?> 
				<h1> Sorry</h1>
				<br>You did not fill out the form correctly.
				<a href="index.php">Try again</a>
			<?php }
			else{ ?> SUCCESS! <?php } ?>
				</dd>

			<dt>&nbsp;</dt>
			<dd><input type="submit" value="Check"></dd>
		</dl>

	</form>
</body>
</html>
