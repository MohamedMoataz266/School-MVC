<?php
require_once 'View.php';
require_once '../app/model/classAssignments.php';
class viewAssignments extends View{
    public function output(){
        $assignment = new Assignment();
        ?>
<html>
<head>
<title>Assignments</title>
</head>
<link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/assignments.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="<?php echo URLROOT; ?>public/js/menu.js"></script>
<?php require APPROOT.'/model/homemenu.php';?>
<body onload='studentMenu()'>
<form method="POST" action="<?php echo URLROOT;?>public/assignments.php">
<div class="wrapper">
<div class="main_container">
<div class="item">  

  <div class ="box">
    <div class="in">
    <?php 
    if($assignment->Check()){
        echo "<h1>No questions are available right now</h1>";
            die();
    }
    else{
        $assignment->viewQuestions();
    }
    
    ?>
      <input type="submit" name="sub" value="Submit your answer">
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