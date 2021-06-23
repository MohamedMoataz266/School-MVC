<?php
require_once 'Controller.php';
class updateStudentController extends Controller{
    public function update(){
        if(isset($_POST['update'])){
             $ge=$_GET['<!?>']-255;
            $this->model->updateStudent(
            $ge,
            $_POST['name'], 
            $_POST['nationalNumber'], 
            $_POST['dateofbirth'], 
            $_POST['gender'],
            $_POST['nationality'], 
            $_POST['religion'], 
            $_POST['birthplace'], 
            $_POST['mothername'], 
            $_POST['address'], 
            $_POST['number'], 
            $_POST['fatherJob'], 
            $_POST['clas'] ,
            $_POST['regnumber']);
        }
     }
}
?>