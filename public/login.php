<?php
require_once '../app/db/config.php';
require_once '../app/controller/userController.php';
require_once '../app/view/viewLogIn.php';
require_once '../app/model/User.php';


$model = new User();
$controller = new userController($model);
$view = new viewLogIn($controller, $model);
$view->output();
$controller->submit();

?>