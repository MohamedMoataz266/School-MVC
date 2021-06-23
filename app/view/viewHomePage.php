<?php
require_once "View.php";
require_once '../app/model/homePage.php';
class viewHomePage extends View{
    public function output(){
      $home = new homePage();
   ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src='<?php echo URLROOT; ?>public/js/menu.js'></script>
<?php require APPROOT.'/model/homemenu.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/slideshow.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  
  
  
</head>
<body onload='homePage()'>


<br />
  <label for="nav-toggle" class="icon-burger">
        <div class="line">
    
  <div class="container">
   
   <br />
   <div id="dynamic_slide_show" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
    <?php echo $home->make_slide_indicators(); ?>
    </ol>

    <div class="carousel-inner">
     <?php echo $home->make_slides(); ?>
    </div>
    <a class="left carousel-control" href="#dynamic_slide_show" data-slide="prev">
     <span class="glyphicon glyphicon-chevron-left"></span>
     <span class="sr-only">Previous</span>
    </a>

    <a class="right carousel-control" href="#dynamic_slide_show" data-slide="next">
     <span class="glyphicon glyphicon-chevron-right"></span>
     <span class="sr-only">Next</span>
    </a>

   </div>
  </div>
  </div>
</div>

</label>
<?php require APPROOT.'/model/viewfooter.php';?>

</body>
   <?php
      
    }
}
?>