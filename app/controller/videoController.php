<?php
require_once "Controller.php";
class videoController extends Controller{
  public function DeleteVideo(){  
    if(isset($_POST['sub'])){
        if(isset($_POST['delete'])){
          foreach($_POST['delete'] as $dele){
           $this->model->removeVideo($dele);
         }
       }  
          else{
             echo "Error, please select the video you want to delete";
            }
            header("refresh: 0.1");  
      }  
  }
public function Back(){
    if(isset($_POST['sub'])){
        header('Location: videoStudents.php');
    }
  }
public function Add(){ 
  if(isset($_POST['insert'])){
    $this->model->setData($_POST['course'], $_POST['videoname'], $_POST['video'] );
    $this->model->addVideo($_SESSION['email'],$_POST['course'], $_POST['videoname'], $_POST['video']); 
  }
}

public function getSearch(){
  if(isset($_POST["search_text"])){
    $this->model->Search($_POST['search_text']);
 }
 if(!isset($_POST['search_text'])){
   $this->model->Search('');
 }
}
public function update(){
  if(isset($_POST['update'])){
    $ge=$_GET['<!?>']-255;
    $this->model->setData($_POST['course'], $_POST['videoname'], $_POST['video'] );
    $this->model->updateVideo($ge,$_POST['course'], $_POST['videoname'], $_POST['video']); 
  }

}



}
?>