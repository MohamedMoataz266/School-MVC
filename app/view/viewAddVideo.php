<?php
require_once 'View.php';
class viewAddVideo extends View{
    public function output(){
        ?>
<html>
<head>
<style>
img{
      width: 30%;
      height: 60%;
}
</style>
<link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/addvideocourse.css">
<?php require APPROOT.'/model/menuvideo.php';?>

</head>
<body>

<div class="form-body">
    <div class="row">
        <div class="form-holder">
            <div class="form-content">
                <div class="form-items">
                    <h3>Add video</h3>
                   
                    <form class="requires-validation" novalidate method='POST' action='<?php echo URLROOT; ?>public/addVideo.php'>
                       <div class="col-md-12">
                           <input class="form-control" type="text" name="course" placeholder="Course Name" >
                           <!-- <div class="valid-feedback">Username field is valid!</div> -->
                           </div>
                     

                           <div class="col-md-12">
                           <input class="form-control" type="file" name="video" placeholder="Video">
                           
                           <!-- <div class="valid-feedback">Username field is valid!</div> -->
                           </div>
                           <div class="col-md-12">
                           <input class="form-control" type="text" name="videoname" placeholder="Video Name">
                           <!-- <div class="valid-feedback">Username field is valid!</div> -->
                           </div>
                           
              
                       <br>
                        <div class="form-button mt-3">
                            <input  value="add" type="submit" class="btn btn-primary" name='insert'>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>
        <?php
    }
}
?>