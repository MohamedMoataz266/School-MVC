<?php 
require_once 'View.php';
require_once '../app/model/Chatting.php';

class viewSendMessageStudent extends View{
    public function output(){
$view = new Chatting();
?>

<html>
<head>
<title>Chatting</title>

 
  
<div class="wrapper">

<?php require APPROOT.'/model/homemenu.php'; ?>




</head>
<link href="<?php echo URLROOT; ?>public/css/message.css" rel="stylesheet" media="all">
<body onload='studentMenu()'>
<div class="main_container">
<div class="item"> 

<form method="POST" action='<?php echo URLROOT; ?>public/sendMessageStudent.php?!?=<?php echo $_GET['!?']; ?>'>
<div class="box">  
<h1>send Message</h1>

<br><div class="wra">

<div class = "from">
<h4>From:<input type="text" name="S" readonly value="<?php echo $_SESSION['email']; ?>">
      </h4>
    </div>
        <h4 class='tohead'>To:
   <input type="text" name="R" class= 'to' readonly value="<?php echo $_GET['!?']; ?>">
    </h4>
  <div class="rec">
  <?php echo $view->viewStudentChat($_GET['!?']); ?>


 
</p>
<?php  echo $view->viewTeacherChat($_GET['!?']); ?>
 </p>


 </div>

    <textarea placeholder="Type Message Here" name="M"></textarea><br><br><br>
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