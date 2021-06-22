<?php
require_once 'Model.php';
class Videos extends Model{
private $course;
private $videoName;
private $video;

public function setData($course, $videoName, $video){
    $this->course = $course;
    $this->videoName = $videoName;
    $this->video = $video;
   if($this->validateData()){
    echo '<script>alert("Error, Data Is Not Completed")</script>';
    die();
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
                <h4><?php echo "Course: " .$row["course"] ?></h4>
                <h4><?php echo "VideoName: " .$row["videoname"] ?></h4>
                <h4><?php echo "Video: " .$row["video"] ?></h4>
                <a href= "updatethevideo.php?<!?>=<?php echo $row['ID']+255?>">View</a><br>
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
private function validateData(){
    $flag = true;
    if($this->course == '' || $this->videoName == '' || $this->video == ''){
        return $flag;        
    }
    else{
        $flag = false;
        return $flag;
    }
}
public function addVideo($email, $course, $videoName, $video){
    parent::connect();
    $sql = mysqli_query($this->db->getConn(), "SELECT * FROM addcoursevideo WHERE email='$email'");
    while($row = mysqli_fetch_array($sql)){
        if($row['email'] == $email && $row['course'] == $this->course && 
           $row['videoname'] == $this->videoName && $row['video'] == $this->video){
               echo '<script>alert("Error, Video Is Repeated")</script>';
               return;
           }
    }
    mysqli_query($this->db->getConn(), "INSERT INTO addcoursevideo (email, course, videoname, video)
    VALUES ('$email', '$this->course', '$this->videoName', '$this->video')");
}
public function removeVideo($id){
    parent::connect();
    mysqli_query($this->db->getConn(), "DELETE FROM addcoursevideo WHERE ID='$id'");
    echo '<script>alert("Done, Videos Removed Successfully")</script>';
    return;
}
public function updateVideo($id, $course, $videoName, $video){
    parent::conect();
    mysqli_query($conn, "UPDATE addcoursevideo SET course='$course', 
                                                videoname='$videoName', 
                                                video='$video' 
                                                WHERE email='".$_SESSION['email']."' 
                                                AND ID='".$id."'");
    echo '<script>alert("Done, Video Updates Successfully")</script>';
    return;
    }
public function video($id){
    parent::connect();
    $res=mysqli_query($this->db->getConn(), "SELECT video from addcoursevideo where id='$id'");
    $row = mysqli_fetch_assoc($res);
    $video= $row['video'];
    return $video;
}    
public function viewDeleteVideo(){
    parent::connect();
  $result = mysqli_query($this->db->getConn(), "SELECT * FROM addcoursevideo");
  
  // output data of each row
  while($row = mysqli_fetch_array($result)){
    $id = $row['ID'];  
    $email=$row['email'];
    $course=$row['course'];
    $video=$row['video'];
  $videoname=$row['videoname'];
  ?>
  <br><br>
    <td style="visibility:hidden;"><?= $id ?></td>
    <td><?= $email ?></td>
    <td><?= $course ?></td>
    <td><?= $video ?></td>
    <td><?= $videoname ?></td>
    <td> <input type='checkbox' name='delete[]' value='<?= $id ?>' ></td>
  </tr>
  <?php
  }
}
public function viewVideos(){
   parent::connect(); 
  $result = mysqli_query($this->db->getConn(), "SELECT * FROM addcoursevideo");
  
  // output data of each row
  while($row = mysqli_fetch_array($result)){
    $id = $row['ID'];  
    $email=$row['email'];
    $course=$row['course'];
    $video=$row['video'];
  
    $videoname=$row['videoname'];
  
    ?>
    <br><br>
    <td style="visibility:hidden;"><?= $id ?></td>
    <td><?= $email ?></td>
    <td><?= $course ?></td>
    <td><?= "<a href='watch.php?ID=$id'>$video</a>"?> </td>
  </tr>
  <?php
   }
 }
}
?>