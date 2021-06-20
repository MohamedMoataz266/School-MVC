<?php require_once "View.php";
require_once '../app/model/sendMessageStudent.php';

class viewSendMessageStudent extends View{
    public function output(){

?>

<html>
<head>
<title>Chatting</title>

  <link href="<?php echo URLROOT; ?>public/css/message.css" rel="stylesheet" media="all">

<div class="wrapper">
<?php require APPROOT.'/model/homemenu.php'; ?>




</head>
<body onload='studentMenu()'>
<div class="main_container">
<div class="item"> 

<form method="POST" action="">
<div class="box">  
<h1>send Message</h1>

<br><div class="wra">


<h4>From:<input type="text" name="S" class='from' readonly value="<?php echo $_SESSION['email']; ?>">
      </h4>
        <h4 class='tohead'>To:
   <input type="text" name="R" class= 'to' readonly value="<?php echo $_GET['!?']; ?>">
    </h4>
  <div class="rec">
  <?php $messageto = viewStudentChat(); ?>


 
</p>
<?php $messagefrom = viewTeacherChat() ?>
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