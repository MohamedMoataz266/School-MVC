<?php
require_once "Model.php";

class homePage extends Model{

    public function make_query(){
     parent::connect();   
     $query = "SELECT * FROM banner ORDER BY banner_id ASC";
     $result = mysqli_query($this->db->getConn(), $query);
     return $result;
    }

public function make_slide_indicators(){
parent::connect();    
 $count = 0;
 $result = $this->make_query();
 while($row = mysqli_fetch_array($result)){
  if($count == 0){
      ?>
   <li data-target="#dynamic_slide_show" data-slide-to="'.$count.'" class="active"></li>
  <?php
  }
  else{
      ?>
   <li data-target="#dynamic_slide_show" data-slide-to="'.$count.'">
   <?php
  }
  $count = $count + 1;
  }
}

public function make_slides(){
parent::connect();    
 $count = 0;
 $result = $this->make_query();

 while($row = mysqli_fetch_array($result)){
  if($count == 0){
      ?>
   <div class="item active">
  <?php
  }
  else{
      ?>
    <div class="item">
    <img src='<?php echo URLROOT; ?>public/images/<?php echo $row['banner_image']; ?>' alt='<?php echo $row['banner_image']; ?>'>
    <div class="carousel-caption">
     <h3><?php echo $row["banner_title"] ?></h3>
    </div>
   </div>
     <?php
}
  
  $count = $count + 1;
  }
 }
}


?>