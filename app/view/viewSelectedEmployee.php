<?php
require_once 'View.php';
require_once '../app/model/personnel.php';
class viewSelectedEmployee extends View{
    public function output(){
        $emp = new personnel();
        ?>
<html>
<head>
<link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/addteacher.css">
  <?php require APPROOT.'/model/homemenu.php';?>
</head>
<body onload='personnelMenu()'>
<div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Update Profession</h3>
                       
                        <form class="requires-validation"  method='POST' action='<?php echo URLROOT; ?>public/updateSelectedEmployee.php?<!?>=<?php echo $_GET['<!?>']; ?>'>

                            <label class="mb-3 mr-1" for="insdate">Full Name (till fourth name): </label>
                            <div class="col-md-12">
                               <input class="form-control" type="text" name="name" placeholder="Full Name (till fourth name)" value="<?php echo $emp->viewUpdate($_GET['<!?>'])['a']; ?>" >
                               <!-- <div class="valid-feedback">Username field is valid!</div> -->
                               </div>

                               <label class="mb-3 mr-1" for="insdate">Code: </label>
                               <div class="col-md-12">
                               <input class="form-control" type="text" name="code" placeholder="Code" value="<?php echo $emp->viewUpdate($_GET['<!?>'])['b']; ?>" >
                               <!-- <div class="valid-feedback">Username field is valid!</div> -->
                               </div>

                               <label class="mb-3 mr-1" for="insdate">Name in Arabic: </label>
                               <div class="col-md-12">
                               <input class="form-control" type="text" name="nameInArabic" placeholder="Name in Arabic"  value="<?php echo $emp->viewUpdate($_GET['<!?>'])['c']; ?>">
                               <!-- <div class="valid-feedback">Username field is valid!</div> -->
                               </div>

                               <label class="mb-3 mr-1" for="insdate">Religion: </label>
                               <div class="col-md-12">
                               <input class="form-control" type="text" name="religion" placeholder="Religion"  value="<?php echo $emp->viewUpdate($_GET['<!?>'])['d']; ?>" >
                               <!-- <div class="valid-feedback">Username field is valid!</div> -->
                               </div>
                               <div class="col-md-12">

                                <label class="mb-3 mr-1" for="insdate">Nationality: </label> <br>
                               <input class="form-control" type="text" name="nationality" placeholder="Nationality"  value="<?php echo $emp->viewUpdate($_GET['<!?>'])['e']; ?>">
                               <!-- <div class="valid-feedback">Username field is valid!</div> -->
                               </div>
                               
                               <div class="col-md-12 mt-3">
                            <label class="mb-3 mr-1" for="gender">Gender: </label>

                            <input type="radio" class="btn-check" name="gender" id="male" autocomplete="off" value="<?php echo $emp->viewUpdate($_GET['<!?>'])['f']; ?>">
                            <label class="btn btn-sm btn-outline-secondary" for="male">Male</label>

                            <input type="radio" class="btn-check" name="gender" id="female" autocomplete="off" value="gender">
                            <label class="btn btn-sm btn-outline-secondary" for="female">Female</label>

                            
                               <!-- <div class="valid-feedback">You selected a gender!</div> -->
                               <br>
                                
                            </div>
                               <br>

                               <label class="mb-3 mr-1" for="dateofbirth">Birth Date:</label>
                               <div class="col-md-12">
                               <input class="form-control" type="text" name="dob" placeholder="Date of Birth in (dd/mm/yy)" value="<?php echo $emp->viewUpdate($_GET['<!?>'])['g']; ?>" >
                               <!-- <div class="valid-feedback">Username field is valid!</div> -->
                               </div>
                               <br>

                               <label class="mb-3 mr-1" for="insdate">National ID: </label>
                               <div class="col-md-12">
                               <input class="form-control" type="text" name="nationalNumber" placeholder="National ID" value="<?php echo $emp->viewUpdate($_GET['<!?>'])['h']; ?>" >
                               <!-- <div class="valid-feedback">Username field is valid!</div> -->
                               </div>

                               <label class="mb-3 mr-1" for="insdate">Foreigner ID: </label>
                                <div class="col-md-12">
                               <input class="form-control" type="text" name="foreignerNumber" placeholder="Foreigner ID" value="<?php echo $emp->viewUpdate($_GET['<!?>'])['i']; ?>" >
                               <!-- <div class="valid-feedback">Username field is valid!</div> -->
                               </div>


                               <label class="mb-3 mr-1" for="insdate">Address: </label>
                               <div class="col-md-12">
                               <input class="form-control" type="text" name="address" placeholder="Address" value="<?php echo $emp->viewUpdate($_GET['<!?>'])['j']; ?>" >
                               <!-- <div class="valid-feedback">Username field is valid!</div> -->
                               </div>

                               <label class="mb-3 mr-1" for="insdate">Phone Number: </label>
                               <div class="col-md-12">
                                <input class="form-control" type="text" name="phoneNumber" placeholder="Telephone" value="<?php echo $emp->viewUpdate($_GET['<!?>'])['k']; ?>" >
                                 <!-- <div class="valid-feedback">Email field is valid!</div> -->
                                 </div>

                                 <label class="mb-3 mr-1" for="insdate">Qualification: </label>
                                 <div class="col-md-12">
                                <input class="form-control" type="text" name="qual" placeholder="Qualification" value="<?php echo $emp->viewUpdate($_GET['<!?>'])['l']; ?>" >
                                 <!-- <div class="valid-feedback">Email field is valid!</div> -->
                                 </div>

                                 <label class="mb-3 mr-1" for="insdate">Graduation Year: </label>
                                 <div class="col-md-12">
                                <input class="form-control" type="text" name="gradyear" placeholder="Graduation Year" value ="<?php echo $emp->viewUpdate($_GET['<!?>'])['m']; ?>">
                                 <!-- <div class="valid-feedback">Email field is valid!</div> -->
                                 </div>

                                 <label class="mb-3 mr-1" for="insdate">Graduation Grade: </label>
                                 <div class="col-md-12">
                                <select class="form-control" type="text" name="gradgrade" placeholder="Graduation Grade" value="<?php echo $emp->viewUpdate($_GET['<!?>'])['n']; ?>">
                                  <option value='Grade'>Grade</option>
                                  <option value='Pass'>Pass</option>
                                  <option value='Good'>Good</option>
                                  <option value='Very Good'>Very Good</option>
                                  <option value='Excellent'>Excellent</option>
                                  </select>
                                 </div>

                                 <label class="mb-3 mr-1" for="insdate">Experienced Years: </label>
                                 <div class="col-md-12">
                                <input class="form-control" type="text" name="expyears" placeholder="Experienced Years" value="<?php echo $emp->viewUpdate($_GET['<!?>'])['o']; ?>" >
                                 <!-- <div class="valid-feedback">Email field is valid!</div> -->
                                 </div>

                                 <label class="mb-3 mr-1" for="insdate">Job: </label>
                                 <div class="col-md-12">
                                <input class="form-control" type="text" name="job" placeholder="Job" value="<?php echo $emp->viewUpdate($_GET['<!?>'])['p']; ?>" >
                                 <!-- <div class="valid-feedback">Email field is valid!</div> -->
                                 </div>

                                 <label class="mb-3 mr-1" for="insdate">Specialization: </label>
                                 <div class="col-md-12">
                                <input class="form-control" type="text" name="specialization" placeholder="Specialization" value="<?php echo $emp->viewUpdate($_GET['<!?>'])['q']; ?>" >
                                 <!-- <div class="valid-feedback">Email field is valid!</div> -->
                                 </div>

                                 <label class="mb-3 mr-1" for="insdate">Department: </label>
                                 <div class="col-md-12">
                                <input class="form-control" type="text" name="department" placeholder="Department" value ="<?php echo $emp->viewUpdate($_GET['<!?>'])['r']; ?>" >
                                 <!-- <div class="valid-feedback">Email field is valid!</div> -->
                                 </div>

                                 <label class="mb-3 mr-1" for="contractdate">Contract Date: </label>
                                 <div class="col-md-12">
                                <input class="form-control" type="text" name="contrDate" placeholder="Contract Date" value="<?php echo $emp->viewUpdate($_GET['<!?>'])['s']; ?>" >
                                 <!-- <div class="valid-feedback">Email field is valid!</div> -->
                                 </div>

                                 <label class="mb-3 mr-1" for="insdate">Insurance Number: </label>
                                 <div class="col-md-12">
                                <input class="form-control" type="text" name="inNum" placeholder="Insurrance number" value="<?php echo $emp->viewUpdate($_GET['<!?>'])['t']; ?>"  >
                                 <!-- <div class="valid-feedback">Email field is valid!</div> -->
                                 </div>

                                 <label class="mb-3 mr-1" for="insdate">Insurance Date: </label>
                                 <div class="col-md-12">
                                <input class="form-control" type="text" name="indate" placeholder="Insurrance Date" value="<?php echo $emp->viewUpdate($_GET['<!?>'])['u']; ?>" >
                                 <!-- <div class="valid-feedback">Email field is valid!</div> -->
                                 </div>
                                 <label class="mb-3 mr-1" for="insdate">Insurance End Date: </label>
                                 <div class="col-md-12">
                                <input class="form-control" type="text" name="inenddate" placeholder="Insurrance End Date"
                                value="<?php echo $emp->viewUpdate($_GET['<!?>'])['v']; ?>" >
                                 <!-- <div class="valid-feedback">Email field is valid!</div> -->
                                 </div>
                                 <label class="mb-3 mr-1" for="insdate">System Role: </label>
                                 <div class="col-md-12">
                                <select class="form-control" type="text" name="systemrole" placeholder="System Role" value="<?php echo $emp->viewUpdate($_GET['<!?>'])['w']; ?>" >
                                  <option value='Select Role'>Role</option>
                                  <option value='directorgeneral'>Director General</option>
                                  <option value='schoolheadmaster'>School Headmaster</option>
                                  <option value='websitemanager'>Website Manager</option>
                                  <option value='studentaffairs'>Student Affairs</option>
                                  <option value='expenses'>Expenses collection official</option>
                                  <option value='floordirector'>Floor Director</option>
                                  <option value='personnelaffairs'>Personnel Affairs</option>
                                  <option value='secretary'>Secretary</option>
                                  <option value='accountingoffice'>Accounting</option>
                                  <option value='safe'>School's Safe</option>
                                  <option value='storage'>Storage Worker</option>
                                  <option value='busmatron'>Bus Matron</option>
                                  <option value='busesmanager'>Buses Manager</option>
                                  <option value='worker'>Worker</option>
                                  <option value='security'>Security</option>
                                  <option value='control'>Control</option>
                                  <option value='teacher'>Teacher</option>
                                  <option value='clinicdoctor'>Clinic Doctor</option>
                                  <option value='receptionist'>Receptionist</option>
                                  </select>
                                </div>

                                <label class="mb-3 mr-1" for="insdate">Education System: </label>
                                <div class="col-md-12">
                                <select class="form-control" type="text" name="educationSystem" placeholder="Education System" value="<?php echo $emp->viewUpdate($_GET['<!?>'])['x']; ?>" >
                                  <option value='education System'>Education System</option>
                                  <option value='alleducation'>All</option>
                                  <option value='default'>Default</option>
                                  </select>
                                </div>

                                <label class="mb-3 mr-1" for="insdate">Notes: </label>
                                 <div class="col-md-12">
                                <input class="form-control" type="text" name="notes" placeholder="Notes" value="<?php echo $emp->viewUpdate($_GET['<!?>'])['y']; ?>" >
                                 <!-- <div class="valid-feedback">Email field is valid!</div> -->
                                 </div>

                           <br>
                           
                            <div class="form-button mt-3">
                            <input id="update" type="submit" class="btn btn-primary" name='update'>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

        <?php
    }
}
?>