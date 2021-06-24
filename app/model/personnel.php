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
  public function updateEmployee($id,$eN, $c, $aN, $r, $n, $g, $bD, $nN, $fN, $addr, $pN, $q, $gY, $gG, $expY, $j, $spec, $dep, $cDate, $iNo, $iDate, $iEDate, $sR, $eS, $notes){
    parent::connect();
    if($eN == '' || $c == '' || $aN == '' || $r == '' || $n == '' || $g == '' || $bD == '' || $nN == '' || $fN == '' || $addr == '' || $pN == '' || $q == '' || $gY == '' || $gG == '' || $expY == '' || $j == '' || $spec == '' || $dep == '' || $cDate == '' || $iNo == '' || $iDate == '' || $iEDate == '' || $sR == '' || $eS == '' || $notes == ''){
      echo '<script>alert("Error Data is not completed")</script>';
      return;
    }
   mysqli_query($this->db->getConn(), "UPDATE personnelAffairs SET name ='$eN', 
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
                                                  notes='$notes' WHERE ID='".$id."'");

    echo '<script>alert("Done, Data Updated Successfully")</script>';
    header('Refresh: 0.1');
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

public function Search($que){   
    parent::connect();    
    $output = '';  
echo "<div class='register'>";
$search = mysqli_real_escape_string($this->db->getConn(), $que);
$query = "SELECT * FROM personnelAffairs WHERE name LIKE '%".$search."%'|| nationalNumber LIKE '%".$search."%'";
$result = mysqli_query($this->db->getConn(), $query);
if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
        ?>

                <div class="comp">
                <h4><?php echo "Name: " .$row["name"] ?></h4>
                <h4><?php echo "National Number: " .$row["nationalNumber"] ?></h4>
                <a href= "updateSelectedEmployee.php?<!?>=<?php echo $row['ID']+255?>">Update</a><br>
                </div>
                <br>
    <?php
    }
}
if(mysqli_num_rows($result) == 0){
    echo '<h3>Data Not Found</h3>';
    header('Refresh: 0.7');
}

echo "</div>";
 }

public function viewUpdate($id){
parent::connect();
$sql = "SELECT * FROM personnelAffairs WHERE ID='".$id."'-255";
$result = mysqli_query($this->db->getConn(), $sql);

if($result){
   $row = mysqli_fetch_array($result);
   $ar['a'] = $row['name'];
   $ar['b'] = $row['code'];
   $ar['c'] = $row['arabicName'];
   $ar['d'] = $row['religion'];
   $ar['e'] = $row['nationality'];
   $ar['f'] = $row['gender'];
   $ar['g'] = $row['birthDate'];
   $ar['h'] = $row['nationalNumber'];
   $ar['i'] = $row['foreginerNumber'];
   $ar['j'] = $row['address'];
   $ar['k'] = $row['phoneNumber'];
   $ar['l'] = $row['qualification'];
   $ar['m'] = $row['graduationYear'];
   $ar['n'] = $row['graduationGrade'];
   $ar['o'] = $row['expYears'];
   $ar['p'] = $row['job'];
   $ar['q'] = $row['specialization'];
   $ar['r'] = $row['department'];
   $ar['s'] = $row['contractDate'];
   $ar['t'] = $row['insuranceNumber'];
   $ar['u'] = $row['insuranceDate'];
   $ar['v'] = $row['insuranceEndDate'];
   $ar['w'] = $row['systemRole'];
   $ar['x'] = $row['educationSystem'];
   $ar['y'] = $row['notes'];
   return $ar;
   }
 } 

}


?>