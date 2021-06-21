<?php
require_once '../app/db/config.php';

require_once '../app/model/studentAffairs.php';
require_once '../app/controller/removeStudentController.php';
require_once '../app/view/viewRemoveStudent.php';

$model = new studentAffairs();
$controller = new removeStudentController($model);
$view = new viewRemoveStudent($model, $controller);
$view->output();
$controller->removeStudent();

?>