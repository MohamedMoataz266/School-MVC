<?php
class User{
    private $firstName;
    private $secondName;
    private $thirdName;
    private $fourthName;
    private $nationalNumber;
    private $birthDate;
    private $gender;
    private $type;

private function setData($firstName, $secondName, $thirdName, $fourthName, $nationalNumber, $birthDate, $gender, $type){
    $this->firstName = $firstName;
    $this->secondName = $secondName;
    $this->thirdName = $thirdName;
    $this->fourthName = $fourthName;
    $this->nationalNumber = $nationalNumber;
    $this->birthDate = $birthDate;
    $this->gender = $gender;
    $this->type = $type;
}
public function setStudentData($firstName, $secondName, $thirdName, $fourthName, $nationalNumber, $birthDate, $gender, $type){
    $this->firstName = $firstName;
    $this->secondName = $secondName;
    $this->thirdName = $thirdName;
    $this->fourthName = $fourthName;
    $this->nationalNumber = $nationalNumber;
    $this->birthDate = $birthDate;
    $this->gender = $gender;
    $this->type = $type;

}
public function getFullName(){
  return $this->firstName.$this->secondName.$this->thirdName.$this->fourthName;
}
public function getNationalNumber(){
    return $this->nationalNumber;
}
public function getBirthDate(){
    return $this->birthDate;
}
public function getGender(){
    return $this->gender;
}

public function addUser($fN, $sN, $tN, $foN, $nN, $bD, $g, $t){
    include 'dB.php';
    $this->setData($fN, $sN, $tN, $foN, $nN, $bD, $g, $t);
    if($this->validationDataStudent()){
        echo '<script>alert("Error, data has been inserted before")</script>';
        return;
    }
    else{
    mysqli_query($conn, "INSERT INTO Registration (firstName, secondName, thirdName, forthName, email, nationalNumber, birthDate, gender, user)
    VALUES
    ('$this->firstName', '$this->secondName', '$this->thirdName', '$this->fourthName', '".$this->getEmail()."', '".md5($this->nationalNumber)."', '$this->birthDate', '$this->gender', '$this->type')");
    echo '<script>alert("Done, data have been saved successfully. You can log in now")</script>';
    header('Location:logIn.php');  
  }
}
public function logIn($email, $pass){
    include "dB.php";
    if($email == '' || $pass == ''){
        echo '<script>alert("Error, please fill in all the requirements")</script>';
        return;
    }
    
    else{
        session_start();  
        $sql = mysqli_query($conn, "SELECT email, nationalNumber, user, firstName, secondName FROM Registration WHERE email='$email' 
        AND nationalNumber= '".md5($pass)."'");
        if($row = mysqli_fetch_assoc($sql)){
            if($row['email'] == $email){
            $_SESSION['email'] = $email;
            $_SESSION['name'] = $row['firstName'].' '.$row['secondName'];

            if($row['user'] == 1){
                header('Location: studentFrontEnd.php');
            }
           else if ($row['user'] == 2){
            header('Location: teacherFrontEnd.php');
        }
           else if ($row['user'] == 3){
            header('Location: studentAffairesFrontEnd.php');
           }  
           else if ($row['user'] == 4){
            header('Location: personal.php');
        }
        else if ($row['user'] == 5)
        header('location: topAdmin.php');
         }
        }
          else{
            echo '<script>alert("Error, the data entered is not correct")</script>';
            return;
         
          }
          
        }
}

private function getEmail(){
    return ($this->firstName.$this->secondName.$this->thirdName.$this->fourthName.'@amounegypt.com');
}

protected function validationDataStudent(){
    $flag = true;
    if($this->firstName == '' || 
       $this->secondName == '' || 
       $this->thirdName == '' || 
       $this->fourthName == '' ||
       $this->gender == ''||
       $this->birthDate == '' ||
       $this->type == ''){
       return $flag;
    }
    else if (strlen($this->nationalNumber) >= 15 || strlen($this->nationalNumber) <= 13){
        return $flag;
    }
    include "dB.php";   
    $sql = mysqli_query($conn, "SELECT nationalNumber, email FROM Registration");
    while($row = mysqli_fetch_array($sql)){
        if($row['nationalNumber'] == $this->nationalNumber){
            return $flag;
        }
        if($row['email'] == $this->getEmail()){
            return $flag;
        }
    }
        $flag = false;
        return $flag;
   }
}
?>