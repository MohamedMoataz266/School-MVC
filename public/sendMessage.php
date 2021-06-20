<?php
require_once '../app/db/config.php';
require_once '../app/model/Message.php';
require_once '../app/controller/messageController.php';
require_once '../app/view/viewTeachers.php';

$model = new Message();
$controller = new messageController($model);
$view = new viewTeachers($model, $controller);
$view->output();
?>