<?php
require_once 'View.php';
require_once '../app/model/Chatting.php';
class viewSendMessageToStudent extends View{
    public function output(){
        $view = new Chatting();
        ?>
        <html>
<?php require APPROOT .'/model/homemenu.php'; ?>
<div class="wrapper">
<head>
  <link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/message.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src='<?php echo URLROOT; ?>public/js/menu.js'></script>
</head>
<body onload='teacherMenu()'>  
<div class="main_container">
<div class="item"> 
<form method="POST" action="<?php echo URLROOT; ?>public/sendMessageToStudent.php?!?=<?php echo $_GET['!?']; ?>">
<div class="box">  
<h1>Send Message</h1>
<br><div class="wra">
<h4>From:<input type="text" name="S" class='from' readonly value="<?php echo $_SESSION['email']; ?>">
      </h4>
        <h4 class='tohead'>To:
   <input type="text" name="R" readonly value="<?php echo $_GET['!?'];?>">
    </h4>
  <div class="rec">
  <?php $view->viewStudentChat($_GET['!?']); ?>
</p>
<?php $view->viewTeacherChat($_GET['!?']);  ?>
</p>

 </div>
 <textarea placeholder="Type your message here" name="M"></textarea><br><br><br>
    <input type="submit" name="sub" value="Send Message">
    </div>  
    </div>
    </div>
  </div>
  </div>
  </form>
  </body>
</html>
        <?php
    }
}
?>