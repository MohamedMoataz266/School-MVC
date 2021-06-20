<?php
require_once 'Controller.php';

class assignmentController extends Controller{
    public function Submit(){  
      if(isset($_POST['sub'])){
        foreach($_POST['answer'] as $a){
            if($a == ''){
            echo '<script>alert("Error, please answer all questions")</script>';
            return;
          }
        }
        foreach($_POST['answer'] as $a){
           $this->model->addAnswer($_SESSION['email'], $a);
          }
       }
  }
}
?>