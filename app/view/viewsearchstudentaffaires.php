<?php
require_once "View.php";
require_once '../app/model/studentAffairs.php';
class viewsearchstudentaffaires extends View{
    public function output(){
        
   ?>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Webslesson Tutorial</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/mvcss.css">
  <script src='<?php echo URLROOT; ?>public/js/menu.js'></script>
   <script src='<?php echo URLROOT; ?>public/js/searchstudentaffaires.js'></script>
<?php require APPROOT.'/model/homemenu.php'; ?>
 </head>
 <body onload='studentAffairsMenu()'>
  <div class="container">
   <br />
   <h2 align="center">STUDENTS</h2><br />
   <div class="form-group">
    <div class="input-group">
     <span class="input-group-addon">Search</span>
     <input type="text" name="search_text" id="search_text" placeholder="Search by name ,address, register number and class" class="form-control" />
    </div>
   </div>
   <br />
   <div id="result"></div>
  </div>
 </body>
</html>
<?php 
}
}
?>