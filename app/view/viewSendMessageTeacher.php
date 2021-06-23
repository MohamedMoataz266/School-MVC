<?php
require_once 'View.php';
require_once '../app/model/Chatting.php';
class viewSendMessageTeacher extends View{
    public function output(){
        $view = new Chatting();
        ?>
<head>
<title>Send Message</title>
 <link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/sendmessage.css">
<?php require APPROOT.'/model/homemenu.php'; ?>
</head>
<body onload='teacherMenu()'>
<div class="wrapper">
<div class="main_container">
<div class="item">  
    
<form method="POST" action="">
<div class="register">
<?php $view->viewSend(); ?>
</div>
</form>
</div>
</div>
</div>
</body>
        <?php
    }
}