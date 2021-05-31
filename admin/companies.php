<?php
session_start();
$title = 'Companies';

require('includes/top.php');
require('includes/header.php');



?>


<div class="container-fluid mt--6">
    <div class="row">
    <div class="col-md-4">
    <div class="card">
              <!-- Card header -->
              <div class="card-header">
                <h3 class="mb-0">Add Company</h3>
              </div>
              <!-- Card body -->
              <div class="card-body">
                <form class="form" formmethod="post" id="CatForm" enctype="multipart/form-data">
                  <div class="form-group">
                    <label class="form-control-label" for="exampleFormControlInput1">Company Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter Category Name" name="name">
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="exampleFormControlInput1">Company Address</label>
                    <input type="text" class="form-control" id="address" placeholder="Enter Company Address" name="address">
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="exampleFormControlInput1">Company Skills</label>
                    <select name="skills_required[]" id="skills_required" multiple class="form-control">
                        <option value="html">Hypertext Markup Language</option>
                        <option value="css">Cascading Stylesheet</option>
                        <option value="js">JavaScript</option>
                        <option value="jquery">jQuery</option>
                        <option value="dotnet">.NET</option>
                        <option value="c#">C#</option>
                        <option value="ruby">Ruby</option>
                        <option value="python">Python</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="exampleFormControlInput1">Company Website</label>
                    <input type="text" class="form-control" id="website" name="website" placeholder="Enter Company Site Address">
                  </div>
                  <div class="form-group ">
                    <input type="hidden" name="action" value="InsertComp" id="action">
                    <input type="hidden" name="id" id="company_id"> 
                    <button type="submit" id="SubBtn" class="btn btn-success" name="Submit">Add Company</button>
                  </div>
                 
                 
                </form>
              </div>
            </div>
        </div>


        <div class="col-md-8">
        <div class="card">
        <!-- Card header -->
        <div class="card-header border-0">
          <div class="row">
            <div class="col-6">
              <h3 class="mb-0">List of All Companies</h3>
            </div>
          </div>
        </div>
        <!-- Light table -->
        <div class="table-responsive" id="table">
         
        </div>
      </div>
        </div>
        
    </div>
<script>
  function LoadData()
  {
    var action = "LoadComp";
  $.ajax({
    url: "../includes/data_operation.php",
    method: "POST",
    data: {action : action},
    success: function(data){
      $("#table").html(data);
    }
    });
}
$(document).ready(function(){
  LoadData();
  $("#skills_required").select2();
});

function UpdateStatus(status,id)
{
  var action = "UpdateCompStatus";
  $.ajax({
    url: "../includes/data_operation.php",
    method: "POST",
    data: {action : action, id: id, status: status},
    success: function(){
      LoadData();
    }
  });
}

$(document).on('click','.update',function(){
  var id = $(this).attr('id');
  var action = "GetComp";
  $.ajax({
    url: "../includes/data_operation.php",
    method: "POST",
    data: {action : action, id: id},
    dataType: "json",
    success: function(data)
    {
        
      $("#name").val(data.name);
      $("#address").val(data.address);
      $("#skills_required").val(data.skills);
      $("#company_id").val(id);
      $("#website").val(data.website);
      $("#action").val("EditComp");
      $("#SubBtn").html("Edit Company");
    }
  });
});

$(document).on('click','.delete',function(){
  var id = $(this).attr('id');
  var name = $(this).attr('catname');
  if(confirm("Are You Sure You Want To Delete? "))
  {
    var action = "DelComp"; 
    $.ajax({
    url: "../includes/data_operation.php",
    method: "POST",
    data: {action : action, id: id},
    success: function(data)
    {
      swal({
                        title: 'Success',
                        text: name + ' has beed deleted successfully!',
                        type: 'success',
                        buttonsStyling: false,
                        confirmButtonClass: 'btn btn-success'
                    })
      LoadData();
    }
  });
  }
  
});

$('#CatForm').submit(function(event){
  event.preventDefault();

  var name = $("#name").val();
    if(name != '')
    {
      $.ajax({
    url: "../includes/data_operation.php",
    method: "POST",
    data: new FormData(this),
    contentType: false,
    processData: false,
    success: function(data)
    {
      $("#CatForm")[0].reset();
      LoadData();
      if($("#action").val() != "EditComp"){
        swal({
             title: 'Success',
             text: 'Company has been added Successfully!',
             type: 'success',
             buttonsStyling: false,
             confirmButtonClass: 'btn btn-success'
          });
      }
      else
      {
        swal({
             title: 'Success',
             text: 'Category has been updated Successfully!',
             type: 'success',
             buttonsStyling: false,
             confirmButtonClass: 'btn btn-success'
          });
      }
      
      $("#action").val("InsertComp");
      $("#SubBtn").html("Add New Company");
    }
      });
    }
    else
    {
      alert("Name field must not be empty");
    }
  

  

});


</script>
  
<?php
require('includes/footer.php');
?>