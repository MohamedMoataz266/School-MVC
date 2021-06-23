<?php
require_once '../app/db/config.php';
require_once '../app/model/Chatting.php';
require_once '../app/view/viewSendMessageToStudent.php';
require_once '../app/controller/chattingController.php';

$viewmodel = new Chatting();

$viewcontroller = new chattingController($viewmodel);

$view = new viewSendMessageToStudent($viewmodel,$viewcontroller);

$view->output();
$viewcontroller->sendStudentMessage();
$viewcontroller->checkClick(); 
?>