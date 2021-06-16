<?php
require_once '../app/db/config.php';

require_once '../app/model/homePage.php';
require_once '../app/controller/homePageController.php';
require_once '../app/view/viewHomePage.php';


$model = new homePage();
$controller = new homePageController($model);
$view = new viewHomePage($controller, $model);
$view->output();

?>