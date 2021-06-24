<?php
require_once '../app/db/config.php';

require_once '../app/model/Student.php';
require_once '../app/controller/searchController.php';
require_once '../app/view/viewSearch.php';


$model = new Student();
$controller = new searchstudentcontroller($model);
$view = new viewSearch($model, $controller);
$view->output();
$controller->getSearchE();

?>