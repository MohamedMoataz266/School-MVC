<?php
require_once '../app/db/config.php';
require_once '../app/model/User.php';
require_once '../app/controller/registrationController.php';
require_once '../app/view/viewRegistration.php';


$model = new User();
$controller = new registrationController($model);
$view = new viewRegistration($model, $controller);
$view->output();
$controller->Register();

?>