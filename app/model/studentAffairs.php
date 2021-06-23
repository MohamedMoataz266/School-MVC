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
  public function viewTable(){
    parent::connect();
    $result = mysqli_query($this->db->getConn(), "SELECT * FROM Students");
    while($row = mysqli_fetch_array($result)){
      $id = $row['ID'];  
      $name=$row['name'];
      $registrationNumber=$row['registrationNumber'];
      $religion=$row['religion'];
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

public function Search($query){
    parent::connect();    
    $output = '';
echo "<div class='register'>";
$result = mysqli_query($this->db->getConn(), $query);
if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
        ?>
                <div class="comp">
                <h4><?php echo "name: " .$row["name"] ?></h4>
                <h4><?php echo "registrationNumber: " .$row["registrationNumber"] ?></h4>
                <h4><?php echo "religion: " .$row["religion"] ?></h4>
                <a href= ".php?<!?>=<?php echo $row['ID']+255?>">Update</a><br>
                </div>
                <br>
    <?php
    }
}
else{
    echo '<h3>Data Not Found</h3>';
}
echo "</div>";
 }
public function viewUpdate($id){
parent::connect();
$sql = "SELECT * FROM Students WHERE ID='".$id."'-255";
$result = mysqli_query($this->db->getConn(), $sql);

if($result){
   $row = mysqli_fetch_array($result);
   $ar['a'] = $row['course'];
   $ar['b'] = $row['video'];
   $ar['c'] = $row['videoname'];
   return $ar;
  }
} 
}
?>