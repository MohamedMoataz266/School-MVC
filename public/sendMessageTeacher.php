<?php
require_once '../app/db/config.php';
require_once '../app/model/Chatting.php';
require_once '../app/view/viewSendMessageTeacher.php';
require_once '../app/controller/chattingController.php';

$viewmodel = new Chatting();

$viewcontroller = new chattingController($viewmodel);

$view = new viewSendMessageTeacher($viewmodel,$viewcontroller);

$view->output();

?>