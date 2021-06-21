<?php
require_once 'View.php';
class viewUpdateVideo extends View{
    public function output(){
        ?>
<?php require APPROOT.'/model/menuvideo.php';?>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Update Video</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/updateVid.css">

 </head>
 <body>
 <form method="POST" action="<?php echo URLROOT; ?>public/updateVideo.php">
  <div class="container">
   <br />
   <h2 align="center">Search</h2><br />
   <div class="form-group">
    <div class="input-group">
     <span class="input-group-addon">Search</span>
     <input type="text" name="search_text" id="search_text" placeholder="Search by Course Name, Video Name or Video Title" class="form-control" />
    </div>
   </div>
   <br />
   <div id="result"></div>
  </div>
  </form>
 </body>
</html>


<script src="<?php echo URLROOT; ?>public/js/search.js"></script>
        <?php
    } 
}
?>