<?php
require_once "Model.php";
class Assignment extends Model{
public function addQuestion($email, $question){
  parent::connect();
    mysqli_query($this->db->getConn(), "INSERT INTO addQuestions (email, question) VALUES ('$email', '$question')");
    echo '<script>alert("Done, Questions have been added successfully")</script>';
    header("Refresh: 0.1");    
    return;
  }
  public function addAnswer($email, $answer){
    parent::connect();
    mysqli_query($this->db->getConn(), "INSERT INTO Answers (email, answer) VALUES ('$email', '$answer')");
    echo '<script>alert("Done, Your answers have been submitted successfully")</script>';
    header("Refresh: 0.1");    
    return;
   }

   public function Check(){
    parent::connect();
    $flag = true;
    $res = mysqli_query($this->db->getConn(), "SELECT email FROM Answers");
    $resq = mysqli_query($this->db->getConn(), "SELECT question FROM addQuestions");
    $noQ=0;
   while($row=mysqli_fetch_array($resq)){
       $noQ++;
    }
    $noA=0;
    while($row=mysqli_fetch_array($res)){
      if($row['email'] == $_SESSION['email']){
          $noA++;
      }
    }

    if($noA == $noQ){
      return $flag;
    }
    else{
      mysqli_query($this->db->getConn(), "DELETE FROM Answers WHERE email='".$_SESSION['email']."'");
      $flag = false;
      return $flag;
    }
  }
  public function viewQuestions(){
    $sql = mysqli_query($this->db->getConn(), "SELECT question FROM addQuestions");
    while($row=mysqli_fetch_array($sql)){
    ?>
    <input type="text" name="ques[]" value='<?php echo $row['question'] ?>' readonly>
    <input type="text" name="answer[]" placeholder="Enter your answer here"><br>
  <?php
    }
  } 
}

?>