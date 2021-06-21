<?php 
require_once "Controller.php";

class sendMessageStudentController extends Controller {
    public function send(){
        if(isset($_POST['sub'])){
            if(empty($_POST['M'])){
               echo '<script>alert("Error, no message is inserted to be sent")</script>';
               return;
            }
            else{
              
              $this->model->setData($_POST['S'], $_POST['R'], $_POST['M'], 'Delivered');
              $this->model->sendMessage();
              
              $this->model->updateMessage();
    }
}
    }
}


?>