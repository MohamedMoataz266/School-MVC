<?php
require_once '../app/db/config.php';

require_once '../app/model/Videos.php';
require_once '../app/controller/videoController.php';
require_once '../app/view/viewSelectedVideo.php';


$model = new Videos();
$controller = new videoController($model);
$view = new viewSelectedVideo($model, $controller);
$view->output();
$controller->update();

?>