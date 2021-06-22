<?php
require_once 'View.php';
require_once '../app/model/teacherMessageFrontEnd.php';

class viewTeacherMessageFrontEnd extends View{
    public function output(){
        $message = new teacherMessageFrontEnd();

?>





<?php require APPROOT.'/model/homemenu.php'; ?>

<head>
<title>Send Message</title>
 
    
    <link href="<?php echo URLROOT; ?>public/css/sendmessage.css" rel="stylesheet" media="all">
</head>

<body onload='teacherMenu()'>
<div class="wrapper">
<div class="main_container">
<div class="item">  
    
<form method="POST" action="">
<div class="register">
<?php $message->viewStudents(); ?>


</div>
</form>


</div>
</div>
</div>
</body>
<?php
}


}

?>