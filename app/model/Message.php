<?php
require_once 'Model.php';
class Message extends Model{
    public function viewTeachers(){
        parent::connect();
        $result = mysqli_query($this->db->getConn(), "SELECT * FROM Registration WHERE user='2'");
        while($row = mysqli_fetch_array($result)){
          $id = $row['ID'];  
          $e = $row['email'];
          ?>
          <br><br>
          <p style="visibility:hidden;"><?= $id ?></p>
          <?php
                 echo "Email: " .$e. "<br>"; 

                 ?>
                 
                 <a href="sendMessageStudent.php?!?=<?php echo $e; ?>" class="u">Send Message</a>
                 
                  <?php
    }
  }

  
}
?>