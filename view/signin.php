<?php include 'header.php'; ?>

<body> 

	<div class = "container">
		<h1> Sign In </h1>

		<form action = "../controller/index.php" class = "form-signin" method = "post">

			<p>E-mail:</p> 
			<input type = text id = "inputEmail" class = "form-control" placeholder = "Enter E-mail" name = "email" /><br>

			<p>Password:</p>
			<input type = text id = "inputPassword" class = "form-control" placeholder = "Enter Password" name = "pass" /><br>

			<input type="submit" class = "register" value="Sign In"> <br>
			<a class = "go-back" href="register.php">Or Register </a>
		</form>	

	</div>

</body>

</html>

<?php include 'footer.php'; ?>