<?php
require_once 'Profession.php';
require_once 'Model.php';
class personnel extends Model{
public function addProfession($eN, $c, $aN, $r, $n, $g, $bD, $nN, $fN, $addr, $pN, $q, $gY, $gG, $expY, $j, $spec, $dep, $cDate, $iNo, $iDate, $iEDate, $sR, $eS, $notes){
    parent::connect();
     $st = new Profession();
     $st->insertProfession($eN, $c, $aN, $r, $n, $g, $bD, $nN, $fN, $addr, $pN, $q, $gY, $gG, $expY, $j, $spec, $dep, $cDate, $iNo, $iDate, $iEDate, $sR, $eS, $notes);
 }
 private function checkProfession($id){
    parent::connect();
    $flag = true;
    $sql = mysqli_query($this->db->getConn(), "SELECT ID FROM personnelAffairs WHERE ID='".$id."'");
    if(mysqli_num_rows($sql) > 0){
      return $flag; 
    }
    $flag = false;
    return $flag;
 }
 public function removeEmployee($id){
    parent::connect();
    if($this->checkProfession($id)){
        mysqli_query($this->db->getConn(), "DELETE FROM personnelAffairs WHERE ID='$id'");
        echo '<script>alert("Done, Employee has been removed successfully")</script>';
        return;
    }
    else{
        echo '<script>alert("Error, Employee has not been removed")</script>';
        return;
    }
  }  
  public function updateProfession($id,$eN, $c, $aN, $r, $n, $g, $bD, $nN, $fN, $addr, $pN, $q, $gY, $gG, $expY, $j, $spec, $dep, $cDate, $iNo, $iDate, $iEDate, $sR, $eS, $notes){
    parent::connect();
    mysqli_query($this->db->getConn(), "UPDATE personnelAffairs SET name ='$ed', 
                                                code='$c', 
                                                 arabicName='$aN',
                                                  religion='$r',
                                                  nationality='$n',
                                                  gender='$g',
                                                  birthDate='$bD',
                                                  nationalNumber='$nN',
                                                  foreginerNumber='$fN',
                                                  address='$addr',
                                                  phoneNumber='$pN',
                                                  qualification='$q',
                                                  graduationYear='$gY',
                                                  graduationGrade='$gG',
                                                  expYears='$expY',
                                                  job='$j',
                                                  specialization='$spec',
                                                  department='$dep',
                                                  contractDate='$cDate',
                                                  insuranceNumber='$iNo',
                                                  insuranceDate='$iDate',
                                                  insuranceEndDate='$iEDate',
                                                  systemRole='$sR',
                                                  educationSystem='$eS',
                                                  notes='$notes'
                                                WHERE email='".$_SESSION['email']."' 
                                                AND ID='".$id."'");
    echo '<script>alert("Done, Employee updated Successfully")</script>';
    return;
}
public function viewTable(){
    parent::connect();
    $result = mysqli_query($this->db->getConn(), "SELECT * FROM personnelAffairs");
    while($row = mysqli_fetch_array($result)){
      $id = $row['ID'];  
      $name=$row['name'];
      $code=$row['code'];
      $nationalNumber=$row['nationalNumber'];
      $qualification=$row['qualification'];
    ?>
      <br><br>
      <tr>
      <td style="visibility:hidden;"><?= $id ?></td>
      <td><?= $name ?></td>
      <td><?= $code ?></td>
      <td><?= $nationalNumber?></td>
      <td><?= $qualification ?></td>
      <td> <input type='checkbox' name='delete[]' value='<?= $id ?>' ></td>
    </tr>
    <?php    
    }
  }   
} 


?>