   <link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/mvcss.css">


 <?php
require_once "Controller.php";
class searchstudentaffairescontroller extends Controller{
   public function removeStudent(){
        if(isset($_POST['sub'])){
            if(isset($_POST['delete'])){
              foreach($_POST['delete'] as $dele){
                 $this->model->removeStudent($dele);
              }
           }  
              else{
                 echo "ERROR U SHOULD SELECT USER TO DELETE IT";
                }
                header("refresh: 0.1");  
          }
    }


public function addStudent(){
       if(isset($_POST['sub'])){ 
        echo $this->model->addStudent($_POST['firstName'], $_POST['secondName'], $_POST['thirdName'], $_POST['fourthName'],
        $_POST['nationalNumber'], $_POST['dateofbirth'], $_POST['gender'], $_POST['nationality'],
        $_POST['religion'], $_POST['birthplace'], $_POST['mothername'], $_POST['address'], 
        $_POST['number'], $_POST['father'], $_POST['clas'], $_POST['regnumber'],$_POST['gender']);
         
    }
    }


public function getSearch(){
  if(isset($_POST["query"])){
    $search = mysqli_real_escape_string($this->db->getConn(), $_POST["query"]);
    $query = "SELECT * FROM Students WHERE ID LIKE '%".$search."%' || name LIKE '%".$search."%'||
    registrationNumber LIKE '%".$search."%'";
    $this->model->Search($query);
 }
 else{
  $query = "SELECT * FROM Students ORDER BY ID ASC";
  $this->model->Search($query);
 }
}
public function viewTable(){
    parent::connect();
    $result = mysqli_query($this->db->getConn(), "SELECT * FROM Students");
    while($row = mysqli_fetch_array($result)){
      $id = $row['ID'];  
      $name=$row['name'];
      $registrationNumber=$row['registrationNumber'];
     
    ?>
      <br><br>
      <tr>
      <td style="visibility:hidden;"><?= $id ?></td>
      <td><?= $name ?></td>
      <td><?= $registrationNumber?></td>
      <td><?= $religion ?></td>
      <td> <input type='checkbox' name='delete[]' value='<?= $id ?>' ></td>
    </tr>
    <?php    
    }
  }   
}


?>