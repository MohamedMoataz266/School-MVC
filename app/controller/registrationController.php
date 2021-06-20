<?php
require_once "Controller.php";

class registrationController extends Controller{
    public function Register(){
       if(isset($_POST['sub'])){ 
        echo $this->model->addUser($_POST['fN'], $_POST['sN'], $_POST['tN'], $_POST['foN'], $_POST['nN'], $_POST['birthday'], $_POST['gender'], 1);
      }
    }
}
?>