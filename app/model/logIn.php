<?php
require_once 'User.php';
require_once "Model.php";
class logIn extends Model{
   public function getLogIn(){ 
    $student = new User();
    $student->logIn($_POST['email'], $_POST['pass']);
    }
 }
