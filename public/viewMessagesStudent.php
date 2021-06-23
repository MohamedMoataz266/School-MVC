<?php
require_once '../app/db/config.php';
require_once '../app/model/Chatting.php';
require_once '../app/view/viewMessageStudent.php';
require_once '../app/controller/chattingController.php';



$viewmodel = new Chatting();
$viewController = new chattingController($viewmodel);



$view = new viewMessageStudent($viewmodel,$viewController);
$view->output(); 


?>