<?php
require_once 'View.php';
require_once '../app/model/Message.php';
class viewTeachers extends View{
    public function output(){
        $message = new Message();
     ?>
     <html>
<?php require APPROOT .'/model/homemenu.php' ?>

<head>
<title>Send Message</title>
<link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/sendmessage.css">;
<script src='<?php echo URLROOT; ?>public/js/menu.js'></script>
<?php require APPROOT.'/model/homemenu.php'; ?>
</head>
<body onload='studentMenu()'>
<div class="wrapper">
<div class="main_container">
<div class="item">  
    
<form method="POST" action="">
<div class="register">
<?php $message->viewTeachers(); ?>

</div>
</form>
</div>
</div>
</div>
</body>
</html>
     <?php   
    }
}

?>