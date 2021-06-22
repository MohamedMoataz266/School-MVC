<?php

require_once '../app/db/config.php';
require_once '../app/model/teacherMessageFrontEnd.php';
require_once '../app/view/viewTeacherMessageFrontEnd.php';
require_once '../app/controller/messageController.php';


$model = new teacherMessageFrontEnd();
$controller = new messageController($model);
$view = new viewTeacherMessageFrontEnd($model, $controller);
$view->output();


?>