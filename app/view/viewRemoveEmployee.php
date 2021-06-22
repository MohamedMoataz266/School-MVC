<?php
require_once "View.php";
require_once '../app/model/personnel.php';
class viewRemoveEmployee extends View{
    public function output(){
        $emp = new personnel();
   ?>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Remove Employee</title>  
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput-typeahead.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/removeteacher.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src='<?php echo URLROOT; ?>public/js/menu.js'></script>
 <?php require APPROOT.'/model/homemenu.php';?>
</head>
<br>
<body onload='personnelMenu()'>
<form method="POST" action="<?php echo URLROOT; ?>public/removeEmployee.php">
<div class="register">
  

<br><br>
<table class="table table-hover">
  <tr>
   <td style="visibility:hidden;"><b>ID</b></td>
   <td><b>Name</b></td>
    <td><b>Code</b></td>
    <td><b>National ID</b></td>
    <td><b>Qualifications</b></td>
    <td><b>select</b></td>
  </tr>
        <?php echo $emp->viewTable(); ?>
    
</table>
<div class ="r">
<br><br><input type= 'submit' name='sub' value="Delete">
</div>
</div>

</form>
</body>
</div>
</div>



   <?php
      
    }
}
?>