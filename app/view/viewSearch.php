<?php
require_once "View.php";
class viewSearch     extends View{
    public function output(){
   ?>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>View Students</title>  
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput-typeahead.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/search.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src='<?php echo URLROOT; ?>public/js/menu.js'></script>
 <?php require APPROOT.'/model/homemenu.php';?>

 </head>
 <body onload='studentAffairsMenu()'>
  <div class="container">
   <br />
   <br />
   <br />
   <h2 align="center">Students</h2><br />
   <div class="form-group">
    <div class="row">
     <div class="col-md-10">
      <input type="text" id="tags" class="form-control" data-role="tagsinput" />
     </div>
     <div class="col-md-2">
      <button type="button" name="search" class="btn btn-primary" id="search">Search</button>
     </div>
    </div>
   </div>
   <br />
   <div class="table-responsive">
    <div align="right">
     <p><b>TotalRecords: <span id="total_records"></span></b></p>
    </div>
    <div class="t">
    <table class="table table-hover">
     <thead>
      <tr>
       <th>Name</th>
       <th>Address</th>
       <th>Registration number</th>
      </tr>
     </thead>
     <tbody>
     </tbody>
    </table>
    </div>
   </div>
   </div>
  <div style="clear:both"></div>
  <br />
  <br />
  <br />
  <br />
 </body>
</html>


<script>
$(document).ready(function(){
 
 load_data();

 function load_data(query){
  $.ajax({
   url:"viewStudents.php",
   method:"POST",
   data:{query:query},
   dataType:"json",
   success:function(data){
    $('#total_records').text(data.length);
    var html = '';
    if(data.length > 0)
    {
     for(var count = 0; count < data.length; count++)
     {
      html += '<tr>';
      html += '<td>'+data[count].name+'</td>';
      html += '<td>'+data[count].address+'</td>';
      html += '<td>'+data[count].registrationNumber+'</td>';
    
     
     }
    }
    else
    {
     html = '<tr><td colspan="5">No Data has been found</td></tr>';
    }
    $('tbody').html(html);
   }
  })
 }

 $('#search').click(function(){
  var query = $('#tags').val();
  load_data(query);
 });

});
</script>


   <?php
      
    }
}
?>