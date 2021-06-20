<?php
require_once 'Student.php';
require_once 'Model.php';
class studentAffairs extends Model{  
  public function addStudent($fiN, $sN, $tN, $fN, $nN, $bD, $g, $n, $r, $p, $m, $a, $ph, $f, $c, $rN){
    parent::connect();
    $st = new Student();
     $st->insertStudent($fiN, $sN, $tN, $fN, $nN, $bD, $g, $n, $r, $p, $m, $a, $ph, $f, $c, $rN);
 }
 private function checkStudent($id){
  parent::connect();
  $flag = true;
    $sql = mysqli_query($this->db->getConn(), "SELECT ID FROM Students WHERE ID='".$id."'");
    if(mysqli_num_rows($sql) > 0){
      return $flag; 
    }
    $flag = false;
    return $flag;
 }
 public function removeStudent($id){
  parent::connect();
  if($this->checkStudent($id)){
        mysqli_query($this->db->getConn(), "DELETE FROM Students WHERE ID='$id'");
        echo '<script>alert("Done, student has been removed successfully")</script>';
        return;
    }
    else{
        echo '<script>alert("Error, student has not been removed")</script>';
        return;
    }
  }
  public function updateStudent($id, $na, $nN, $bD,   $g, $n, $r, $p, $m, $a, $ph, $f, $c, $rN){
    parent::connect();
   mysqli_query($this->db->getConn(), "UPDATE Students SET name='$na',
                                             registrationNumber='$rN',
                                             nationality='$n',
                                             religion='$r',
                                             placeOfBirth='$p',
                                             dateOfBirth='$bD',
                                             motherName='$m',
                                             address='$a',
                                             phoneNumber='$ph',
                                             fatherJob='$f',
                                             gender='$g',
                                             nationalNumber='$nN',
                                             class='$c' WHERE ID='".$id."'");

    echo '<script>alert("Done, Data Updated Successfully")</script>';
    return;
}   
}
?>