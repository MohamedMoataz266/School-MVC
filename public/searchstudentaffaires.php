<?php
require_once '../app/db/config.php';

require_once '../app/model/studentAffairs.php';
require_once '../app/controller/searchstudentaffairescontroller.php';
require_once '../app/view/viewsearchstudentaffaires.php';

$model = new studentAffairs();
$controller = new searchstudentaffairescontroller($model);
$view = new viewsearchstudentaffaires($model, $controller);
$view->output();
$controller->getSearch();


?>