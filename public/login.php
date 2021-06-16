<?php
require_once '../app/db/config.php';
require_once '../app/model/logIn.php';
require_once '../app/controller/logInController.php';
require_once '../app/view/viewLogIn.php';


$model = new logIn();
$controller = new logInController($model);
$view = new viewLogIn($controller, $model);
$view->output();

?>