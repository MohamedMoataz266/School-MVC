<?php
require_once '../app/db/config.php';
require_once '../app/model/viewMessageStudent.php';
require_once '../app/view/viewMessageStudent.php';
require_once '../app/Controller/sendMessageStudentController.php';



$viewmodel = new viewMessagesStudent();
$viewController = new sendMessageStudentController($viewmodel);



$view = new viewMessageStudent($viewmodel,$viewController);
$view->output();


?>