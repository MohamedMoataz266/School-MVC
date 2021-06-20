<?php
require_once '../app/db/config.php';

require_once '../app/model/studentAffairs.php';
require_once '../app/controller/addStudentController.php';
require_once '../app/view/viewAddStudent.php';

$model = new studentAffairs();
$controller = new addStudentController($model);
$view = new viewAddStudent($model, $controller);
$view->output();
$controller->addStudent();

?>