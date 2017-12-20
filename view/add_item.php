<?php include 'header.php'; ?>

<body> 

	<div class = "container">
		<h1> Add New To-Do Item </h1>

		<form action = "../controller/index.php" class = "form-signin" method = "post"> 
			<input type = date id = "inputTodayDate" class = "form-control" placeholder = "Enter Start Date" name = "todayDate" /><br>

			<input type = text id = "inputMessage" class = "form-control" placeholder = "Enter Message" name = "message" /><br>

			<input type = date id = "inputDueDate" class = "form-control" placeholder = "Enter Due Date" name = "DueDate" /><br>

			<input type="submit" value="Add Item">
		</form>	

	</div>

</body>

</html>

<?php include 'footer.php'; ?>