<?php
class viewStudentAffaires{
    public function output(){
        ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src='<?php echo URLROOT;?>public/js/menu.js'></script>
<link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/studentAffairsFrontEnd.css">
<?php require APPROOT.'/model/homemenu.php';?>
<body onload='studentAffairsMenu()'>
<div class="register">
<?php
session_start();
?>
<h1>Welcome </h1>
<h2>Employee</h2>
<strong><?php echo $_SESSION['name']; ?></strong>
</div>
</body>
    <?php
    }
}
?>