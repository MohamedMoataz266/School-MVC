<?php
require_once 'View.php';
require_once '../app/model/studentAffairs.php';
class viewUpdateStudent extends View{
    public function output(){
        $view = new studentAffairs();
        ?>
<head>
<?php require APPROOT .'/model/homemenu.php'; ?>
<title>Add Student</title>
<link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/AddStudent.css">
</head>
<body onload='studentAffairsMenu()'>
     <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Update Student</h3>
                       <form class="requires-validation" novalidate method='POST' action='<?php echo URLROOT;?>public/updateStudent.php?<!?>=<?php echo $_GET['<!?>']; ?>'>
                        <label class="mb-3 mr-1" for="insdate">Name: </label>
                            <div class="col-md-12">
                               <input class="form-control" type="text" name="name" placeholder="Name" value="<?php echo $view->viewUpdate($_GET['<!?>'])['a']; ?>">
                               </div>
                                <br>
                         
                               <label class="mb-3 mr-1" for="insdate">Registration number: </label>
                              <div class="col-md-12">
                               <input class="form-control" type="text" name="regnumber" placeholder="Registration number" value="<?php ob_start();  echo $view->viewUpdate($_GET['<!?>'])['b']; ?>">
                               </div>
                               <br>
                               <label class="mb-3 mr-1" for="insdate">Nationality: </label>
                               <div class="col-md-12">
                               <input class="form-control" type="text" name="nationality" placeholder="Nationality" value="<?php ob_start();  echo $view->viewUpdate($_GET['<!?>'])['c'];?>">
                               </div>
                               <br>
                               <label class="mb-3 mr-1" for="insdate">Religion: </label>
                               <div class="col-md-12">
                               <input class="form-control" type="text" name="religion" placeholder="Religion"value="<?php  ob_start(); echo $view->viewUpdate($_GET['<!?>'])['d'];?>">
                               </div>
                               <br>
                               <label class="mb-3 mr-1" for="insdate">Place of birth: </label>
                               <div class="col-md-12">
                               <input class="form-control" type="text" name="birthplace" placeholder="Birth Place" value="<?php ob_start(); echo $view->viewUpdate($_GET['<!?>'])['e'];?>">
                               </div>
                               <br>
                               <label class="mb-3 mr-1" for="insdate">Date of birth: </label>
                               <div class="col-md-12">
                               <input class="form-control" type="text" name="dateofbirth" placeholder="Date of Birth" value="<?php ob_start(); echo $view->viewUpdate($_GET['<!?>'])['f'];?>">
                               </div>
                               <br>
                               <label class="mb-3 mr-1" for="insdate">Mother name: </label>
                                <div class="col-md-12">
                               <input class="form-control" type="text" name="mothername" placeholder="Mother's name" value="<?php ob_start(); echo $view->viewUpdate($_GET['<!?>'])['g'];?>">
                               </div>
                               <br>
                               <label class="mb-3 mr-1" for="insdate">Address: </label>
                               <div class="col-md-12">
                               <input class="form-control" type="text" name="address" placeholder="address" value="<?php ob_start(); echo $view->viewUpdate($_GET['<!?>'])['h'];?>">
                               </div>
                               <br>

                               <label class="mb-3 mr-1" for="insdate">National number: </label>
                            <div class="col-md-12">
                                <input class="form-control" type="text" name="nationalNumber" placeholder="National number" value="<?php ob_start(); echo $view->viewUpdate($_GET['<!?>'])['l'];?>">
                                 </div>
                                 <br>
                                 <label class="mb-3 mr-1" for="insdate">Phone number: </label>
                                 <div class="col-md-12">
                                <input class="form-control" type="text" name="number" placeholder="Phone number"value="<?php ob_start(); echo $view->viewUpdate($_GET['<!?>'])['i'];?>">
                                 </div>
                                 <br>
                                 <label class="mb-3 mr-1" for="insdate">Father's job: </label>
                                 <div class="col-md-12">
                                <input class="form-control" type="text" name="fatherJob" placeholder="Father's job" value="<?php ob_start(); echo $view->viewUpdate($_GET['<!?>'])['j'];?>">
                                 </div>
                                 <br>
                                 <label class="mb-3 mr-1" for="insdate">Class: </label>
                                 <div class="col-md-12">
                                <input class="form-control" type="text" name="clas" placeholder="Class"value="<?php ob_start(); echo $view->viewUpdate($_GET['<!?>'])['m'];?>">
                                 </div>
                                 <br>
                           

                           <br>
                           <div class="col-md-12 mt-3">
                            <label class="mb-3 mr-1" for="gender">Gender: </label>

                            <input type="radio" class="btn-check" name="gender" value='Male' id="male">
                            <label class="btn btn-sm btn-outline-secondary">Male</label>

                            <input type="radio" class="btn-check" value= 'Female' name="gender" id="female">
                            <label class="btn btn-sm btn-outline-secondary">Female</label>
                            <br>
                            </div>
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
        <?php
    }
}
?>