<?php
require_once "Controller.php";

class addProfessionController extends Controller
{
    public function addProfession()
    {
       if(isset($_POST['sub']))
       {
         echo $this->model->addProfession($_POST['name'], $_POST['code'], $_POST['nameInArabic'], $_POST['religion'], 
         $_POST['nationality'], $_POST['gender'],$_POST['dob'], $_POST['nationalNumber'], 
         $_POST['foreignerNumber'], $_POST['address'], $_POST['phoneNumber'], $_POST['qual'], 
         $_POST['gradyear'], $_POST['gradgrade'], $_POST['expyears'], $_POST['job'], $_POST['specialization'], 
         $_POST['department'], $_POST['contrDate'], $_POST['inNum'], $_POST['indate'], 
         $_POST['inenddate'], $_POST['systemrole'],$_POST['educationSystem'], $_POST['notes']);  
      }
    }
}
?>