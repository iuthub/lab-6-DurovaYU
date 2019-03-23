<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Validating Forms</title>
		<link href="style.css" type="text/css" rel="stylesheet" />
	</head>
	
	<body>
		<h1>Registration Form</h1>

		<p>
			This form validates user input and then displays "Thank You" page.
		</p>
		
		<hr />
		
		<h2>Please, fill below fields correctly</h2>
		<dl>
			<dt>Name</dt>
			<dd>
				<input type="text" name="name">
			</dd>
			
			<dt>Email</dt>
			<dd>
				<input type="text" name="email">
			</dd>

			<dt>User name</dt>
			<dd>
				<input type="text" name="user_name">
			</dd>

			<dt>Password</dt>
			<dd>
				<input type="text" name="passwor">
			</dd>

			<dt>Conform password</dt>
			<dd>
				<input type="text" name="conf_password">
			</dd>

			<dt>Date of Birth</dt>
			<dd>
				<input type="text" name="birthday">
			</dd>

			<dt>Gender</dt>
			<dd>
				<input type="radio" name="gender" value="Female" checked="">FEmale
				<input type="radio" name="gender" value="Male">Male<br>
			</dd>

			<dt>Marital Status</dt>
				
			<dd> 
                                <input type="radio" name="status" value="Single" checked="">Single
                                <input type="radio" name="status" value="Married">Married
                                <input type="radio" name="status" value="Divorced">Divorced
                                <input type="radio" name="status" value="Widowed">Widowed
                            
            </dd>

			<dt>Address</dt>
			<dd>
				<input type="text" name="address">
			</dd>

			<dt>City</dt>
			<dd>
				<input type="text" name="city">
			</dd>

			<dt>Postal Code</dt>
			<dd>
				<input type="text" name="code">
			</dd>

			<dt>Home phone</dt>
			<dd>
				<input type="text" name="home_phone">
			</dd>

			<dt>Mobile phone</dt>
			<dd>
				<input type="text" name="mob_phone">
			</dd>

			<dt>Credit card number</dt>
			<dd>
				<input type="text" name="c_number">
			</dd>

			<dt>Credit card expiry date</dt>
			<dd>
				<input type="text" name="c_expiry">
			</dd>

			<dt>Monthly salary</dt>
			<dd>
				<input type="text" name="salary">
			</dd>

			<dt>Web Site URL</dt>
			<dd>
				<input type="text" name="url">
			</dd>

			<dt>Overall GPA</dt>
			<dd>
				<input type="text" name="gpa">
			</dd>

		</dl>
		
		<div>
			<input type="submit" value="Check">
		</div>
	</body>
</html>