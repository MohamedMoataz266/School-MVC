<?php
require_once '../app/db/config.php';

require_once '../app/model/personnel.php';
require_once '../app/controller/updateEmployeeController.php';
require_once '../app/view/viewUpdateEmployee.php';

$model = new personnel();
$controller = new updateEmployeeController($model);
$view = new viewUpdateEmployee($model, $controller);
$view->output();
$controller->getSearch();

?>