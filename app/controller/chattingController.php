<?php 
require_once "Controller.php";

class chattingController extends Controller{
public function send(){
        if(isset($_POST['sub'])){
            if(empty($_POST['M'])){
               echo '<script>alert("Error, no message is inserted to be sent")</script>';
               return;
            }
            else{
              
              $this->model->setData($_POST['S'], $_POST['R'], $_POST['M'], 'Delivered');
              $this->model->sendMessage();
     }
   }
 }
 public function checkClick(){
    if(isset($_GET['!?'])){
         $this->model->updateMessage();
     }
 }
public function sendStudentMessage(){
    if(isset($_POST['sub'])){
        if(empty($_POST['M'])){
           echo "Error, no message is inserted to be sent";
           return;
        }
        else{
          $this->model->setData($_POST['S'], $_POST['R'], $_POST['M'], 'Delivered');
          $this->model->sendMessage();
        }
      
     }
}
}
?>