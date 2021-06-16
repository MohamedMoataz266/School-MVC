<?php
require_once "Controller.php";

class homePageController extends Controller{
    function __constuructor(){
        echo $this->model->make_slide_indicators();
        echo $this->model->make_slides();
    }
}


?>