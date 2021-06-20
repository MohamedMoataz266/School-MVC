<?php
require_once "Controller.php";

class userController extends Controller{
    public function submit(){
        if(isset($_POST['sub'])){
            $this->model->logIn($_POST['email'], $_POST['pass']);
           }
    
    }

    

}


?>