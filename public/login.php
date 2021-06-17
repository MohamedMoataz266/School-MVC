<?php
require_once '../app/db/config.php';
require_once '../app/model/User.php';
require_once '../app/controller/logInController.php';
require_once '../app/view/viewLogIn.php';


$model = new User();
$controller = new logInController($model);
$view = new viewLogIn($controller, $model);
$view->output();

if(isset($_POST['sub'])){
  $student = new User();
  $student->logIn($_POST['email'], $_POST['pass']);
 }

?>