<?php
require_once '../app/db/config.php';

require_once '../app/model/Videos.php';
require_once '../app/controller/videoController.php';
require_once '../app/view/viewUpdateVideo.php';


$model = new Videos();
$model->Search();
$controller = new videoController($model);
$view = new viewUpdateVideo($model, $controller);
$view->output();

?>