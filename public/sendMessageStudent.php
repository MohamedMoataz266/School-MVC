<?php
require_once '../app/db/config.php';
require_once '../app/model/sendMessageStudent.php';
require_once '../app/view/viewSendMessageStudent.php';
require_once '../app/model/Chatting.php';
require_once '../app/controller/sendMessageStudentController.php';

$viewmodel = new sendMessageStudent();

$viewcontroller = new sendMessageStudentController($viewmodel);

$view = new viewSendMessageStudent($viewmodel,$viewcontroller);
$view->output();
$viewcontroller->send();
?>