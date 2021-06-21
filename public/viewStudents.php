<?php
require_once '../app/db/config.php';

require_once '../app/model/studentAffairs.php';
require_once '../app/controller/searchController.php';
require_once '../app/view/viewSearch.php';


$model = new studentAffairs();
$controller = new searchController($model);
$view = new viewSearch($model, $controller);
$view->output();
$controller->Insert();

?>