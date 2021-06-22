<?php
require_once 'Model.php';

class teacherMessageFrontEnd extends Model{
    public function viewStudents(){
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
<a href="sendMessageTeacher.php?!?=<?php echo $e; ?>" class="u">Send Message</a>

<?php
}
    }
}
?>
