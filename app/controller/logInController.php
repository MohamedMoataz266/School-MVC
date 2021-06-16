<?php
require_once "Controller.php";

class logInController extends Controller{
    function __constuructor(){
        echo $this->model->getLogIn();
    }
}


?>