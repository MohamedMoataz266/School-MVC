<?php
require_once "Controller.php";

class registrationController extends Controller{
    function __constuructor(){
        echo $this->model->getRegistration();
    }
}


?>