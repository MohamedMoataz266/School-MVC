<?php
require_once '../app/db/config.php';

require_once '../app/model/personnel.php';
require_once '../app/controller/addProfessionController.php';
require_once '../app/view/viewAddProfession.php';

$model = new personnel();
$controller = new addProfessionController($model);
$view = new viewAddProfession($model, $controller);
$view->output();
$controller->addProfession();

?>