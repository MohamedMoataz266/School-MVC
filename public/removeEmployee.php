<?php
require_once '../app/db/config.php';

require_once '../app/model/personnel.php';
require_once '../app/controller/removeEmployeeController.php';
require_once '../app/view/viewRemoveEmployee.php';

$model = new personnel();
$controller = new removeEmployeeController($model);
$view = new viewRemoveEmployee($model, $controller);
$view->output();
$controller->removeEmployee();

?>