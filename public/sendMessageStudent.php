<?php
require_once '../app/db/config.php';
require_once '../app/model/sendMessageStudent.php';
require_once '../app/view/viewSendMessageStudent.php';



$view = new viewSendMessageStudent();
$view->output();

?>