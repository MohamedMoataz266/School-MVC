<?php 


class viewtopadmin{
    public function output(){
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src='<?php echo URLROOT; ?>public/js/menu.js'></script>

<link href="<?php echo URLROOT; ?>public/css/topAdmin.css" rel="stylesheet" media="all">
<div class="image">
<img src="<?php echo URLROOT; ?>public/images/amoun.jpeg" alt="">
</div>
<div class="container">
<nav>
  <ul>
    <li><button onclick="window.location.href='teacherFrontEnd.php'">
      Teacher Side
      <span></span><span></span><span></span><span></span>
    </button></li>
    <li><button onclick="window.location.href='studentAffairesFrontEnd.php'">
      Student Affairs Side
      <span></span><span></span><span></span><span></span>
    </button></li>
    <li><button onclick="window.location.href='personnel.php'">
      Personnal Side
      <span></span><span></span><span></span><span></span>
    </button></li>
    
  </ul>
</nav>
</div>
<?php 
}
}
?>