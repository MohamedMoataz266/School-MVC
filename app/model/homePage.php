<?php
require_once "Model.php";

class homePage extends Model{


public function make_slide_indicators(){
 $output = ''; 
 $count = 0;
 $result = mysqli_query($this->db->getConn(), "SELECT * FROM banner ORDER BY banner_id ASC");
 while($row = mysqli_fetch_array($result)){
  if($count == 0){
   $output .= '
   <li data-target="#dynamic_slide_show" data-slide-to="'.$count.'" class="active"></li>';
  }
  else{
   $output .= '<li data-target="#dynamic_slide_show" data-slide-to="'.$count.'"></li>';
  }
  $count = $count + 1;
 }
 return $output;
}

public function make_slides(){
 $output = '';
 $count = 0;
 $result = mysqli_query($this->db->getConn(), "SELECT * FROM banner ORDER BY banner_id ASC");

 while($row = mysqli_fetch_array($result)){
  if($count == 0){
   $output .= '<div class="item active">';
  }
  else{
   $output .= '<div class="item">';
  }
  $output .= '
   <img src="Images/'.$row["banner_image"].'" alt="'.$row["banner_title"].'" />
   <div class="carousel-caption">
    <h3>'.$row["banner_title"].'</h3>
   </div>
  </div>
  ';
  $count = $count + 1;
 }
 return $output;
}

}


?>