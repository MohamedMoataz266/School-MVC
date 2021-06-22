<?php
require_once 'View.php';
require_once '../app/model/classAssignments.php';
class viewAnswers extends View{
    public function output(){
        $assignment = new Assignment();
        ?>
<!DOCTYPE html>
<html>
<head>
     <title>View Answers</title>
<link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/viewAnswers.css">
</head>
<?php require APPROOT.'/model/homemenu.php'; ?>
<body onload='teacherMenu()'>
  <div class="register">
<form method="POST" action="<?php echo URLROOT; ?>public/answers.php">
<?php $assignment->viewAssignment(); ?>
<br><br>
</div>
</form>
</div>
</body>
</html>
    <?php
    }
}
?>