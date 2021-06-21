<?php
require_once "Model.php";

class viewMessagesStudent extends Model{
    public function viewStudentMessages(){
        parent::connect();

        $result = mysqli_query($this->db->getconn(), "SELECT * FROM Chat WHERE Receiver='".$_SESSION['email']."' AND messageType= 'Delivered'");
// output data of each row
if(mysqli_num_rows($result) == 0){
  echo "<h1>No new messages</h1>";
}
while($row = mysqli_fetch_array($result)){
  $id = $row['ID'];  
  $sender = $row['Sender'];
  $message = $row['message'];  
  echo "<br><br>";
   echo "From: ".$sender. "<br>"; 
   echo "Message: " .$message; 
   ?>  <br><a href="sendMessageStudent.php?!?=<?php echo $row["Sender"];?>">Reply</a>
 <?php
    }
  
  
}

}

   ?>
     