<?php
require_once 'User.php';
if(isset($_POST['sub'])){
	$student = new User();
	$student->logIn($_POST['email'], $_POST['pass']);
    }
?>