<?php include '../view/header.php'; ?>

<body> 

	<div class = "container">
		<h1> Add New To-Do Item </h1>

		<form action = "index.php" class = "form-signin" method = "post"> 
			<input type="hidden" name="action" value="add_item">
			<input type="hidden" name="id" value="<?php echo $edit['id']; ?>">

			<p>Start Date:</p>
			<input type = date id = "createddate" class = "form-control" placeholder = "Enter Start Date" name = "createddate" value = "<?php echo date('Y-m-d', strtotime($edit['createddate'])); ?>" /><br>

			<p>Message:</p>
			<input type = text id = "message" class = "form-control" placeholder = "Enter Message" name = "message" value = "<?php echo $edit['message']; ?>"/><br>

			<p>Due Date:</p>
			<input type = date id = "duedate" class = "form-control" placeholder = "Enter Due Date" name = "duedate" value = "<?php echo date('Y-m-d', strtotime($edit['duedate'])); ?>"/><br>

			<?php if($edit['id'] == NULL) :?>
				<input type="submit" class = "register" value="Add Item">

			<?php else :?>
			<input type="submit" class = "register" value="Save Item">
			
			<?php endif; ?>
			<a class = "go-back" href="index.php"> Go back </a>
		</form>	

	</div>

</body>

</html>

<?php include '../view/footer.php'; ?>