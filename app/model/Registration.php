<?php
require_once 'User.php';
require_once "Model.php";
class registration extends Model{
   public function getRegistration(){ 
    $student = new User();
    $student->addUser($_POST['fN'], $_POST['sN'], $_POST['tN'], $_POST['foN'], $_POST['nN'], $_POST['birthday'], $_POST['gender'], 1);     
  
    }
 }
