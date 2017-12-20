<?php include '../view/header.php'; ?>

<div class = "container">

<?php
require ('../model/database.php');
require ('../model/functions.php');

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$birthday = $_POST['birthday'];
$gender = $_POST['gender'];
echo $choice;

register ($id, $email, $fname, $lname, $phone, $birthday, $gender, $password);

redirect ("Sucessfully Registered! Please sign in.", "../view/signin.php", '4') ; 
?>

</div>

<?php include '../view/footer.php'; ?>