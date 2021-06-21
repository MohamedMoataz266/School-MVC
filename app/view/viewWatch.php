<?php
require_once 'View.php';
require_once '../app/model/Videos.php';
class viewWatch extends View{
    public function output(){
        $video = new Videos();
        ?>
<html>
<head>
<title>Video</title>
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
<link rel="stylesheet" href="<?php echo URLROOT;?>public/css/watch.css"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src='<?php echo URLROOT;?>public/js/menu.js'></script>
<?php require APPROOT.'/model/homemenu.php'; ?>
</head>
<body onload="studentMenu()">
<form method="POST" action="<?php echo URLROOT; ?>public/watch.php">
    <div class = "watch">
   <?php  echo "<h1>You are watching:".$video->video($_GET['ID'])."</h1>"; ?>
    <video width="615" height="315" controls>
    <source src="video/<?php echo $video->video($_GET['ID']); ?>" type="video/mp4">
    </video>
    <button name='sub'> <i class="fas fa-backward"></i> Back </button>

</div>
</form>
</body>
</html>
    <?php
    }
}
?>