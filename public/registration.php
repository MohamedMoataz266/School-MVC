<?php
require_once '../app/db/config.php';
require_once '../app/model/Registration.php';
require_once '../app/controller/registrationController.php';
require_once '../app/view/viewRegistration.php';


$model = new Registration();
$controller = new registrationController($model);
$view = new viewRegistration($controller, $model);
$view->output();

?>