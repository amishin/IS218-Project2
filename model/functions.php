<?php

function auth ($email , $pass) {
	global $db;
	$query = 'SELECT * FROM accounts2 WHERE email = :email and password = :pass '; 
	$statement = $db->prepare($query);
	$statement->bindValue(':email', $email);
	$statement->bindValue(':pass', $pass);
	$statement->execute();
	$s = $statement->fetchAll();
	$name = $s[0]['fname'] . " " . $s[0]['lname'];
	if (count($s) > 0){

		return $name;}
	else {
		return NULL;}
}

function register ($id, $email, $fname, $lname, $phone, $birthday, $gender, $password) {
    global $db;
    $query = 'INSERT INTO accounts2
                 (id, email, fname, lname, phone, birthday, gender, password)
              VALUES
                 (:id, :email, :fname, :lname, :phone, :birthday, :gender, :password)';
    $statement = $db->prepare($query);
    $statement->bindValue(':id', $id);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':fname', $fname);
    $statement->bindValue(':lname', $lname);
    $statement->bindValue(':phone', $phone);
    $statement->bindValue(':birthday', $birthday);
    $statement->bindValue(':gender', $gender);
    $statement->bindValue(':password', $password);
    $statement->execute();
    $statement->closeCursor();
}	

function redirect ($message, $file, $delay) {
	echo $message;
	header ("refresh: $delay; url = $file"); 
	exit(); 
}	
?>