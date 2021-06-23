<?php
require_once "Model.php";
class Chatting extends Model{
    private $sender;
    private $receiver;
    private $message;
    private $messageType;
    
    public function setData($sender, $receiver, $message ,$messageType){
        $this->sender = $sender;
        $this->receiver = $receiver;
        $this->message = $message;
        $this->messageType = $messageType;
        if($this->validateData()){
            echo '<script>alret("Error, the data entered is not true")</script>';
            return;
        }
       
    }
    private function validateData(){
        $flag = true;
        if($this->sender == '' || $this->receiver == '' || $this->message == ''){
            return $flag;
        }
        else{
            $flag = false;
            return $flag;
        }
    }
public function viewStudentChat($id){
        parent::connect();
        $result = mysqli_query($this->db->getConn(), "SELECT * FROM Chat WHERE Sender='".$_SESSION['email']."' AND Receiver='".$id."'");
 echo '<p class="send">';
while($row = mysqli_fetch_array($result)){
  ?>
  <div class="message-blue">
  <?php echo $row['message'] ?>
</div>
 <?php
}
    }
public function viewTeacherMessages(){
parent::connect();
$result = mysqli_query($this->db->getConn(), "SELECT * FROM Chat WHERE Receiver='".$_SESSION['email']."' AND messageType= 'Delivered'");
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
?>
  <br><a href="sendMessageToStudent.php?!?=<?php echo $row["Sender"];?>">Reply</a>
<?php
}
}
public function viewTeacherChat($id){
    parent::connect();
    $result = mysqli_query($this->db->getConn(), "SELECT * FROM Chat WHERE Receiver='".$_SESSION['email']."' AND Sender='".$id."'");
// output data of each receiver
echo '<p class="rece">';
while($row = mysqli_fetch_array($result)){
  ?>
  <div class="message-orange">
 <?php echo $row['message'] ?> 
  </div>
  <?php
  }
}
public function viewSend(){
    parent::connect();
    $result = mysqli_query($this->db->getConn(), "SELECT * FROM Registration WHERE user='1'");
    
    // output data of each row
    while($row = mysqli_fetch_array($result)){
      $id = $row['ID'];  
      $e = $row['email'];
      ?>
      <br><br>
      <p style="visibility:hidden;"><?= $id ?></p>
      <?php
             echo "Email: " .$e. "<br>"; 
    ?>
    <a href="sendMessageToStudent.php?!?=<?php echo $e; ?>" class="u">Send Message</a>
<?php
  }
}

public function viewStudentMessages(){
    parent::connect();
    $result = mysqli_query($this->db->getconn(), "SELECT * FROM Chat WHERE Receiver='".$_SESSION['email']."' AND messageType= 'Delivered'");
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
    public function sendMessage(){
        parent::connect();
        $sql = mysqli_query($this->db->getConn(), "INSERT INTO Chat (Sender, Receiver, Message, messageType) 
        VALUES
        ('$this->sender', '$this->receiver', '$this->message', '$this->messageType')");
        header('Refresh: 0.1');
    }
    public function receiveMessage(){
        parent::connect();
        $sql = mysqli_query($this->db->getConn(), "SELECT * FROM Chat WHERE Receiver='".$_SESSION['email']."' AND messageType='Delivered'");
        if(mysqli_fetch_array($sql)){
            ?>
            <h4><?php $row['Receiver']; ?></h4>
            <h4><?php $row['message']; ?></h4>
            <h4><a href='Reply.php'></a></h4>
            <?php
        }
        header('Refresh: 0.1');
        
    }
public function updateMessage(){
        parent::connect();
        $res = mysqli_query($this->db->getConn(), "UPDATE Chat SET messageType='Read' WHERE Receiver='".$_SESSION['email']."' AND Sender='".$_GET['!?']."'");
   }
 public function getNumberOfMessages(){
        parent::connect();
        $sql = mysqli_query($this->db->getConn(), "SELECT message FROM Chat WHERE Receiver= '".$_SESSION['email']."' AND messageType='Delivered'");
        $count = 0;
        while($row = mysqli_fetch_array($sql)){
            $count++;
        }
        return $count;
   }


}


?>