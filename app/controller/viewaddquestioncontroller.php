<?php
require_once 'Controller.php';
class addQuestion extends Controller{
    public function Submit(){ 
    $assignment = new Assignment(); 
    	if(isset($_POST['sub'])){
    foreach($_POST['array'] as $a){
        if($a == ''){
            echo '<script>alert("Error, Fill all the requirments")</script>';
            return;
        }
    } 
      foreach($_POST['array'] as $a){
         $assignment->addQuestion($_SESSION['email'], $a);
    }
 } 
}

}
?>
