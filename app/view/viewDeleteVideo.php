<?php
require_once 'View.php';
require_once '../app/model/Videos.php';
class viewDeleteVideo extends View{
    public function output(){
        $video = new Videos();
        ?>
<?php require APPROOT.'/model/menuvideo.php';?>
<div class ="content"> 
<div class = wrapper> 
<head>
  
<title>delete</title>
<link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/deletevideocourse.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <style>
   body{
    background-color:#05243A;
   }
   </style>
</head>
<br>
<body>
<form method="POST" action="<?php echo URLROOT; ?>public/deleteVideo.php">
<div class="register">
  

<br><br>
<table class="table table-hover">
  <tr>
  
   <td style="visibility:hidden;"><b>ID</b></td>
   <td><b>email</b></td>
    <td><b>course</b></td>
    <td><b>video</b></td>
    <td><b>videoname</b></td>
    <td><b>select</b></td>
    
  
  </tr>
<?php $video->viewDeleteVideo(); ?>

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