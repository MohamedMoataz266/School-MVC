<?php 
require_once 'View.php';
require_once '../app/model/Chatting.php';

class viewTeacherMessages extends View{
    public function output(){
        $view = new Chatting();
        ?>
<head>
<title>Messages</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/rm.css">
    <?php require APPROOT .'/model/homemenu.php'; ?>
</head>
<br>
<body onload='teacherMenu()'>
<form method="POST" action="<?php echo URLROOT; ?>public/viewMessageTeacher.php">

<div class="mes">
 <?php $view->viewTeacherMessages(); ?>
</div>

</form>
</body>
        <?php
    }
}
?>