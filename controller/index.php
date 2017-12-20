<?php
require ('../model/database.php');
require ('../model/functions.php');
require ('../model/todo_db.php');

session_start();

$email = $_POST['email']; //Gets email from user
$pass= $_POST['pass']; //Gets password from user

if($_SESSION['logged'] != true) { //Creates a new session 
    $_SESSION['username'] = auth ($email, $pass); 

    if ($_SESSION['username'] == NULL) { //Authorizes users signin
	   redirect ("Missing or Incorrect Email or Password", "../view/signin.php", '5') ; }      
    else {
        $_SESSION['email'] = $email;
        $_SESSION['logged'] = true; }
    }

$username = $_SESSION['username'];

$action = filter_input (INPUT_POST, 'action'); 
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'load_items';
    }
}

if ($action == 'load_items') { 
    $user_email = filter_input(INPUT_GET, 'email', 
            FILTER_VALIDATE_INT);
    if ($email== NULL || $email == FALSE) {
        $email = 1;
    }
    $items = get_all_items();
    include('../view/todo_list.php');
}  

else if ($action == 'delete_item') {
    $id = filter_input(INPUT_POST, 'id', 
            FILTER_VALIDATE_INT);
    if ($id == NULL || $id == FALSE) {
        $error = "Missing or incorrect category id.";
        include('../errors/error.php');
    } else { 
        delete_item($id);
        header("Location: .?action=load_items");
    }
} 

else if ($action == 'complete_item') {   
    $id = filter_input(INPUT_POST, 'id');
    if ($id== NULL || $id == FALSE) {
        $error = "Missing or Incorrect Data.";
        include('../errors/error.php');
    } else { 
        complete_item($id);
        header("Location: .?action=load_items");
    }
}  

else if ($action == 'show_add_form') {
    $edit= array();
    $edit["id"] = NULL;
    $edit["createddate"] = date("Y-m-d");
    $edit["message"] = "Enter To-Do Item";
    $edit["duedate"] = date("Y-m-d");

    include('add_item.php');
}

else if ($action == 'add_item') {
    $id = filter_input(INPUT_POST, 'id');
    $createddate = filter_input(INPUT_POST, 'createddate');
    $message = filter_input(INPUT_POST, 'message');
    $duedate = filter_input(INPUT_POST, 'duedate');
    if ($createddate == NULL || $message == NULL || $duedate == NULL) {
        $error = "Invalid Data. Check all fields and try again.";
        include('../errors/error.php');}
     else { 
        $email = $_SESSION['email'];
        if($id == NULL) {
            add_item($email, $createddate, $message, $duedate);
        } 
        else { 
            update_item($id, $createddate, $message, $duedate); }
        header("Location: .?action:load_items;");
    }
} 

else if ($action == 'show_edit_form') {
    $id = filter_input(INPUT_POST, 'id', 
            FILTER_VALIDATE_INT);
    echo $id;
    if ($id == NULL) {
        $error = "Invalid Data. Check all fields and try again.";
        include('../errors/error.php');}
    else { 
        $todo = load_item($id);
        $edit= $todo[0];
        include('add_item.php');
    }   
}

?>

