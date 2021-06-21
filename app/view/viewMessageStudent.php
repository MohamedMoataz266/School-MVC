<?php
require_once "View.php";
require_once '../app/model/viewMessageStudent.php';


class viewMessageStudent extends View{
    public function output(){
        $view = new viewMessagesStudent();
    ?>

<?php 

 require APPROOT .'/model/homemenu.php';
?>

<head>
<title>Messages</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/rm.css">
    
</head>
<br>
<body onload='studentMenu()'>
<form method="POST" action="">

<div class="mes">
 <?php
 
$view->viewStudentMessages();
?>
  

</div>

</form>
</body>

<?php
    
}
} 

?>