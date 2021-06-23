<?php
require_once '../app/db/config.php';
require_once '../app/model/Chatting.php';
require_once '../app/view/viewSendMessageStudent.php';
require_once '../app/controller/chattingController.php';

$viewmodel = new Chatting();

$viewcontroller = new chattingController($viewmodel);

$view = new viewSendMessageStudent($viewmodel,$viewcontroller);
$view->output();
$viewcontroller->send();
$viewcontroller->checkClick(); 
?>