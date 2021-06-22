<?php
require_once "Controller.php";

class removeEmployeeController extends Controller{
    public function removeEmployee(){
        if(isset($_POST['sub'])){
            if(isset($_POST['delete'])){
              foreach($_POST['delete'] as $dele){
                 $this->model->removeEmployee($dele);
              }
           }  
              else{
                 echo "ERROR U SHOULD SELECT USER TO DELETE IT";
                }
                header("refresh: 0.1");  
          }
    }
}
?>