<?php
require_once 'View.php';
require_once '../app/model/Videos.php';
class viewVideoStudents extends View{
  public function output(){
      $video = new Videos();
  ?>
<div class ="content"> 
<div class = wrapper> 
<head>
<title>View Videos</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src='<?php echo URLROOT; ?>public/js/menu.js'></script>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/deletevideocourse.css">   
</head>
<?php require APPROOT.'/model/homemenu.php'; ?>
<br>
<body onload='studentMenu()'>
<form method="POST" action="<?php echo URLROOT; ?>public/videoStudents.php">
<div class="register">
<br><br>
<table class="table table-hover">
  <tr>
   <td style="visibility:hidden;"><b>ID</b></td>
   <td><b>Email</b></td>
    <td><b>Course</b></td>
    <td><b>Video</b></td>
  </tr>
 <?php $video->viewVideos(); ?>
</table>

</div>

</form>
</body>
</div>
</div>

  <?php    
  }
}
?>