<?php
require_once '../app/db/config.php';
require_once '../app/model/classAssignments.php';
require_once '../app/controller/viewaddquestioncontroller.php';
require_once '../app/view/viewaddquestion.php';

$model = new Assignment();
$controller = new addQuestion($model);
$view = new viewaddquestion($model, $controller);
$view->output();
$controller->Submit();

?>