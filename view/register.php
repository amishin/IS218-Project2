<?php include 'header.php'; ?>

<body> 

	<div class = "container">
		<h1> Register </h1>

		<form action = "../controller/register.php" class = "form-signin" method = "post"> 
			<p>First Name:</p> 
			<input type = text id = "inputFirstName" class = "form-control" placeholder = "Enter First Name" name = "fname" /> <br>

			<p>Last Name:</p>
			<input type = text id = "inputLastName" class = "form-control" placeholder = "Enter Last Name" name = "lname" /> <br>

			<p>E-mail:</p>
			<input type = text id = "inputEmail" class = "form-control" placeholder = "Enter E-mail" name = "email" /><br>

			<p>Password:</p>
			<input type = text id = "inputPassword" class = "form-control" placeholder = "Enter Password" name = "password" /><br>

			<p>Phone Number:</p>
			<input type = number id = "inputPhoneNumber" class = "form-control" placeholder = "Enter Phone Number" name = "phone" /> <br>

			<p>Birthday:</p>
			 <input type = date id = "inputBirthday" class = "form-control" placeholder = "Enter Birthday" name = "birthday" /><br>

			<select name = "gender" class = "form-control"> 
				<option value = "choose"> Gender </option>
				<option value = "male"> Male </option>
				<option value = "female"> Female </option>
			</select> <br>

			<input type="submit" class = "register" value="Register"> <br>
			<a class = "go-back" href="signin.php">Or Sign in </a>
		</form>	

	</div>

</body>

</html>

<?php include 'footer.php'; ?>