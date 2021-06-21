<?php
require_once '../app/db/config.php';

require_once '../app/model/Videos.php';
require_once '../app/controller/videoController.php';
require_once '../app/view/viewWatch.php';


$model = new Videos();
$controller = new videoController($model);
$view = new viewWatch($model, $controller);
$view->output();
$controller->Back();



?>