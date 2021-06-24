<?php
require_once 'Controller.php';
class updateEmployeeController extends Controller{
    public function update(){
        if(isset($_POST['update'])){
             $ge=$_GET['<!?>']-255;
            $this->model->updateEmployee(
            $ge,
            $_POST['name'], 
            $_POST['code'], 
            $_POST['nameInArabic'], 
            $_POST['religion'],
            $_POST['nationality'], 
            $_POST['gender'], 
            $_POST['dob'], 
            $_POST['nationalNumber'], 
            $_POST['foreignerNumber'], 
            $_POST['address'], 
            $_POST['phoneNumber'], 
            $_POST['qual'] ,
            $_POST['gradyear'], 
            $_POST['gradgrade'] ,
            $_POST['expyears'], 
            $_POST['job'] ,
            $_POST['specialization'], 
            $_POST['department'] ,
            $_POST['contrDate'], 
            $_POST['inNum'] ,
            $_POST['indate'], 
            $_POST['inenddate'] ,
            $_POST['systemrole'], 
            $_POST['educationSystem'] ,
            $_POST['notes']);
        }
     }
     public function getSearch(){
  if(isset($_POST["search_text"])){
    $this->model->Search($_POST['search_text']);
    header('Refresh: 4.0');
 }
 if(!isset($_POST['search_text'])){
   $this->model->Search('');
 }

}


}
?>