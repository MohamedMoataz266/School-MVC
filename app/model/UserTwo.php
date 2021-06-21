<?php
require_once "Model.php";

class UserTwo extends Model{
    private $name;
    private $code;
    private $arabicName;
    private $religion;
    private $nationality;
    private $gender;
    private $birthDate;
    private $nationalNumber;
    private $foreignerNumber;
    private $address;
    private $phoneNumber;
    private $qualification;
    private $graduationYear;
    private $graduationGrade;
    private $experienceYears;
    private $job;
    private $specialization;
    private $department;
    private $contractDate;
    private $insuranceNumber;
    private $insuranceDate;
    private $insuranceEndDate;
    private $systemRole;
    private $educationSystem;
    private $notes;

public function setData($name, $code, $arabicName, $religion, $nationality, $gender, $birthDate, $nationalNumber, $foreignerNumber, $address, $phoneNumber, $qualification, $graduationYear, $graduationGrade, $experienceYears, $job, $specialization, $department, $contractDate, $insuranceNumber, $insuranceDate, $insuranceEndDate, $systemRole, $educationSystem, $notes){
    $this->name = $name;
    $this->code = $code;
    $this->arabicName = $arabicName;
    $this->religion = $religion;
    $this->nationality = $nationality;
    $this->gender = $gender;
    $this->birthDate = $birthDate;
    $this->nationalNumber = $nationalNumber;
    $this->foreignerNumber = $foreignerNumber;
    $this->address = $address;
    $this->phoneNumber = $phoneNumber;
    $this->qualification = $qualification;
    $this->graduationYear = $graduationYear;
    $this->graduationGrade = $graduationGrade;
    $this->experienceYears = $experienceYears;
    $this->job = $job;
    $this->specialization = $specialization;
    $this->department = $department;
    $this->contractDate = $contractDate;
    $this->insuranceNumber = $insuranceNumber;
    $this->insuranceDate = $insuranceDate;
    $this->insuranceEndDate = $insuranceEndDate;
    $this->systemRole = $systemRole;
    $this->educationSystem = $educationSystem;
    $this->notes = $notes;
}
public function getName(){
    return $this->name;
}
public function getCode(){
    return $this->code;
}
public function getArabicName(){
    return $this->arabicName;
}
public function getReligion(){
    return $this->religion;
}
public function getNationality(){
    return $this->nationality;
}
public function getGender(){
    return $this->gender;
}
public function getBirthDate(){
    return $this->birthDate;
}
public function getNationalNumber(){
    return $this->nationalNumber;
}
public function getForeignerNumber(){
    return $this->foreignerNumber;
}
public function getAddress(){
    return $this->address;
}
public function getPhoneNumber(){
    return $this->phoneNumber;
}
public function getQualification(){
    return $this->qualification;
}
public function getGraduationYear(){
    return $this->graduationYear;
}
public function getGraduationGrade(){
    return $this->graduationGrade;
}
public function getExperiencedYears(){
    return $this->experienceYears;
}
public function getJob(){
    return $this->job;
}
public function getSpecialization(){
    return $this->specialization;
}
public function getDepartment(){
    return $this->department;
}
public function getContractDate(){
    return $this->contractDate;
}
public function getInsuranceNumber(){
    return $this->insuranceNumber;
}
public function getInsuranceDate(){
    return $this->insuranceDate;
}
public function getInsuranceEndDate(){
    return $this->insuranceEndDate;
}
public function getSystemRole(){
    return $this->systemRole;
}
public function getEducationSystem(){
    return $this->educationSystem;
}
public function getNotes(){
    return $this->notes;
}

protected function validationDataProfession(){
    parent::connect();
    $flag = true;
    if($this->name == '' || 
       $this->code == '' || 
       $this->arabicName == '' || 
       $this->religion == '' ||
       $this->nationality == ''||
       $this->gender == '' ||
       $this->birthDate == '' ||
       $this->nationalNumber == '' || 
       $this->foreignerNumber == '' || 
       $this->address == '' || 
       $this->phoneNumber == '' ||
       $this->qualification == ''||
       $this->graduationYear == '' ||
       $this->graduationGrade == '' ||
       $this->experienceYears == '' || 
       $this->job == '' || 
       $this->specialization == '' || 
       $this->department == '' ||
       $this->contractDate == ''||
       $this->insuranceNumber == '' ||
       $this->insuranceDate == '' ||
       $this->insuranceEndDate == '' || 
       $this->systemRole == '' || 
       $this->educationSystem == '' || 
       $this->notes == ''){
       
       return $flag;
    }
    else if (strlen($this->nationalNumber) >= 15 || strlen($this->nationalNumber) <= 13){
        return $flag;
    }
    $sql = mysqli_query($this->db->getConn(), "SELECT nationalNumber FROM personnelaffairs");
    while($row = mysqli_fetch_array($sql)){
        if($row['nationalNumber'] == $this->nationalNumber){
            return $flag;
        }
    }
        $flag = false;
        return $flag;
   }
}
?>