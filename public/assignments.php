<?php
require_once '../app/db/config.php';
require_once '../app/model/classAssignments.php';
require_once '../app/controller/assignmentsController.php';
require_once '../app/view/viewAssignments.php';

$model = new Assignment();
$controller = new assignmentController($model);
$view = new viewAssignments($model, $controller);
$view->output();
$controller->Submit();



?>