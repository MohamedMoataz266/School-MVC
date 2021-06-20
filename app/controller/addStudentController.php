<?php
require_once "Controller.php";

class addStudentController extends Controller{
    public function addStudent(){
       if(isset($_POST['sub'])){ 
        echo $this->model->addStudent($_POST['firstName'], $_POST['secondName'], $_POST['thirdName'], $_POST['fourthName'],
        $_POST['nationalNumber'], $_POST['dateofbirth'], $_POST['gender'], $_POST['nationality'],
        $_POST['religion'], $_POST['birthplace'], $_POST['mothername'], $_POST['address'], 
        $_POST['number'], $_POST['father'], $_POST['clas'], $_POST['regnumber']);
        echo $_POST['gender'];  
    }
    }
}
?>