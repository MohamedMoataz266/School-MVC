<?php
require_once '../app/db/config.php';

require_once '../app/model/classAssignments.php';
require_once '../app/controller/assignmentsController.php';
require_once '../app/view/viewAnswers.php';


$model = new Assignment();
$controller = new assignmentController($model);
$view = new viewAnswers($model, $controller);
$view->output();

?>