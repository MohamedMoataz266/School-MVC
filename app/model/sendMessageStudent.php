<?php
require_once 'Model.php';
require_once 'Chatting.php';
class sendMessageStudent extends Chatting{
    public function viewStudentChat(){
        parent::connect();
        $result = mysqli_query($this->db->getConn(), "SELECT * FROM Chat WHERE Sender='".$_SESSION['email']."'");
 // output data of each sender
 echo '<p class="send">';
while($row = mysqli_fetch_array($result)){
  ?>
  <div class="message-blue">
  <?php echo $row['message'] ?>
</div>
 <?php
}
    }

    public function viewTeacherChat(){
    parent::connect();
    $result = mysqli_query($this->db->getConn(), "SELECT * FROM Chat WHERE Receiver='".$_SESSION['email']."'");
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

}
?>