<?php
require_once 'View.php';
require_once '../app/model/classAssignments.php';
class viewaddquestion extends View{
    public function output(){
        $assignment = new Assignment();
        ?>
       
 
<link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/addQuestions.css">
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="<?php echo URLROOT; ?>public/js/menu.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
 <script src="<?php echo URLROOT; ?>public/js/addQ.js"></script>
<div class="cc"><?php require APPROOT.'/model/homemenu.php';?></div>

<body onload='teacherMenu()'>
    <div class="register">

<form method="POST" action="">
    <div class="input-file">
    <input type="text" placeholder="Write down a question" name="array[]"><span> +</span><br>
    <input type="submit" name="sub" value="Add Question">
   
</div>
</form>
</div>
</body>
 <?php
    }
}

?>

