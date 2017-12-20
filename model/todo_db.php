<?php

function get_name () {
	global $db;
	$email = $_SESSION['email'];
	$query = 'SELECT * FROM accounts2 WHERE email = :email'; 
	$statement = $db->prepare($query);
	$statement->bindValue(':email', $email);
	$statement->execute();
	$s = $statement->fetchAll();
    return $s;
}

function get_all_items() {
	global $db;
	$email = $_SESSION['email'];
	$query = 'SELECT * FROM todos WHERE owneremail = :email ORDER BY duedate ASC'; 
	$statement = $db->prepare($query);
	$statement->bindValue(':email', $email);
	$statement->execute();
	$s = $statement->fetchAll();
	return $s; 
}

function delete_item($id) {
    global $db;
    $query = 'DELETE FROM todos WHERE id = :id';
    $statement = $db->prepare($query);
    $statement->bindValue(':id', $id);
    $statement->execute();
    $statement->closeCursor();
}

function complete_item($id) {
	global $db;
	$query = 'UPDATE todos SET isdone = 1 WHERE id = :id';
	$statement = $db->prepare($query);
	$statement->bindValue(':id', $id);
	$statement->execute();
}

function add_item($email, $createddate, $message, $duedate) {
    global $db;
    $query = 'INSERT INTO todos (owneremail, createddate, message, duedate) VALUES (:email, :createddate, :message, :duedate)' ;
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':createddate', $createddate);
    $statement->bindValue(':message', $message);
    $statement->bindValue(':duedate', $duedate);
    $statement->execute();
    $statement->closeCursor();
}

function load_item($id) {
	global $db;
	$query = 'SELECT * FROM todos WHERE id = :id'; 
	$statement = $db->prepare($query);
	$statement->bindValue(':id', $id);
	$statement->execute();
	$s = $statement->fetchAll();
    return $s;
}

function update_item($id, $createddate, $message, $duedate) {
    global $db;
    $query = 'UPDATE todos SET createddate=:createddate, message=:message, duedate=:duedate WHERE id=:id' ;
    $statement = $db->prepare($query);
    $statement->bindValue(':id', $id);
    $statement->bindValue(':createddate', $createddate);
    $statement->bindValue(':message', $message);
    $statement->bindValue(':duedate', $duedate);
    $statement->execute();
    $statement->closeCursor();
}
?>