<?php 
require ('../model/database.php');
require ('../model/functions.php');
require ('../model/todo_db.php');

session_start();

$_SESSION = array();
session_destroy();
setcookie("PHPSESSID", "", time()-3600, '/~am988/IS218_Project2/', "", 0,0);

redirect ("Logged Out. Redirecting to Homepage", "../index.php", '3');
?>