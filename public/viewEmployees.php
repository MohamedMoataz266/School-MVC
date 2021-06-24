<?php
require_once '../app/db/config.php';

require_once '../app/model/Profession.php';
require_once '../app/controller/searchEController.php';
require_once '../app/view/viewSearchE.php';


$model = new Profession();
$controller = new searchEController($model);
$view = new viewSearchE($model, $controller);
$view->output();
$controller->getSearch();

?>