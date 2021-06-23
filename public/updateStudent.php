<?php
require_once '../app/db/config.php';

require_once '../app/model/studentAffairs.php';
require_once '../app/controller/updateStudentController.php';
require_once '../app/view/viewUpdateStudent.php';


$model = new studentAffairs();
$controller = new updateStudentController($model);
$view = new viewUpdateStudent($model, $controller);
$view->output();
$controller->update();

?>