<?php
require_once "Controller.php";
class searchEController extends Controller{
   
public function getSearch(){
  if(isset($_POST["search_text"])){
    $this->model->SearchView($_POST['search_text']);
    header('Refresh: 4.0');
 }
 if(!isset($_POST['search_text'])){
   $this->model->SearchView('');
 }

}

}
?>