<?php
require_once 'View.php';
require_once '../app/model/Videos.php';
class viewSelectedVideo extends View{
    public function output(){
        $video = new Videos();
        ?>
<html>
<head>
<link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/addvideocourse.css">
<?php require APPROOT .'/model/menuvideo.php'; ?>
</head>
<body>
<div class="form-body">
    <div class="row">
        <div class="form-holder">
            <div class="form-content">
                <div class="form-items">
                    <h3>Update video</h3>
                   
                    <form class="requires-validation"  method='POST' action='<?php echo URLROOT; ?>public/updateSelectedVideo.php?<!?>=<?php echo $_GET['<!?>']; ?>'>
                           <div class="col-md-12">
                           <input class="form-control" type="text" name="course" placeholder="Course Name" value = "<?php echo $video->viewUpdate($_GET['<!?>'])['a']; ?>">
                           </div>
                     

                           <div class="col-md-12">
                           <input class="form-control" type="file" name="video" placeholder="Video" value = "<?php echo $video->viewUpdate($_GET['<!?>'])['b']; ?>" >
                           </div>
                           <div class="col-md-12">
                           <input class="form-control" type="text" name="videoname" placeholder="Video Name" value = "<?php echo $video->viewUpdate($_GET['<!?>'])['c']; ?>">
                           </div>
                       <br>
                    

                    <div class="form-button mt-3">
                            <input  value="update" type="submit" class="btn btn-primary" name='update'>
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