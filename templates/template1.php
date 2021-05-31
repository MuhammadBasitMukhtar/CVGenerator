<?php
$title = "CV Build";
$fname = '';
$lname ='';
$email = '';
$phone = '';
$address = '';
$companyname = '';
$desig = '';
$companyfrom = '';
$companytill = '';
$companydet = '';
$company = '';
$degreename = '';
$yearpassing = '';
$qual = '';
$skill = '';
$expertise = '';
$objective = '';
if(isset($_POST))
{
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["eaddress"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $objective = $_POST["objective"];

    $companyname = $_POST["companyname"];
    $desig = $_POST["companydesig"];
    $companyfrom = $_POST["companyfrom"];
    $companytill = $_POST["companytill"];
    $companydet = $_POST["companydet"];

    $company = array($companyname,$companyfrom,$companytill,$desig,$companydet);

    $degreename = $_POST["degreename"];
    $schoolname = $_POST["schoolname"];
    $yearpassing = $_POST["yearpassing"];

    $qual = array($degreename,$schoolname,$yearpassing);

    $skill = $_POST["skill"];
    $expertise = $_POST["expertise"];

    $skills = array($skill,$expertise);
}
else
{
    echo '<script>alert("Error")</script>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template1</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400&display=swap" rel="stylesheet">   <style>
        :root
        {
            --var-color1: #6dd5ed;
        }
        .template1 * 
        {
            font-family: 'Roboto Slab', serif;
        }
        .template1
        {
            width: 960px;
            min-height: 1200px;
            padding: 25px;
            margin: auto
        }
        .template1 p
        {
            font-size: 19px;
        }
        .template1 .personal-info h1
        {
            margin: 0;
            font-size: 55px;
        }
        .template1 .personal-info p
        {
            margin: 0;
        }
        .template1 .personal-info span 
        {
            font-weight: bold;
        }
        .template1 .qualifications h5
        {
            font-weight: normal !important;
        }
        .template1 .skills .skill .dot
        {
            width: 1px;
            height: 1px;
            border: 5px solid black;
            border-radius: 50%;
        }
        .cv
        {
            margin: auto
        }
    </style>
</head>
<body>
<div class="cv" id="cv">
            
               <div class="template1">
                  <div class="personal-info text-center">
                     <h1><?php echo $fname ?> <span><?php echo $lname ?></span></h1>
                     <p><?php echo $address ?><br><span>EMAIL: </span> <?php echo $email ?> <span>CELL: </span> <?php echo $phone ?></p>
                  </div>
                  <hr>
                  <div class="experiences">
                     <div class="row">
                        <div class="col-3 ">
                           <h4>OBJECTIVE</h4>
                        </div>
                        <div class="col-9">
                           <p><?php echo $objective ?></p>
                        </div>
                     </div>
                  </div>
                  <hr>
                  <div class="experiences">
                     <div class="row">
                        <div class="col-3 ">
                           <h4>WORK EXPERIENCE</h4>
                        </div>
                        <div class="col-9">
                            
                            <?php 
                            for ($i=0; $i < count($companyname) ; $i++) {
                                $j = 0; 
                                echo '<div class="experience">';
                                echo '<div class="row">';
                                echo '<div class="col-6">';
                                echo '<h4>'.$company[$j][$i].'</h4>';
                                $j++;
                                echo '</div>';
                                echo '<div class="col-6 text-right">';
                                echo '<h5>'.$company[$j][$i];
                                $j++;
                                echo  ' till '.$company[$j][$i].'</h5>';
                                $j++;
                                echo '</div>';
                                echo '</div>';
                                echo '<h5>'.$company[$j][$i].'</h5>';
                                $j++;
                                echo '<p>'.$company[$j][$i].'</p>';
                                echo '</div>';
                                echo '<br>';
                            }
                             ?>
                        </div>
                     </div>
                  </div>
                  <hr>
                  <div class="qualifications">
                     <div class="row">
                        <div class="col-3 ">
                           <h4>EDUCATION</h4>
                        </div>
                        <div class="col-9">
                            <?php
                            for ($i=0; $i < count($degreename); $i++) {
                                $j = 0; 
                                echo '<div class="qualification">';
                                echo '<div class="row">';
                                echo '<div class="col-6">'; 
                                echo '<h4>'.$qual[$j][$i].'</h4>';
                                $j++;
                                echo '</div>';
                                echo '<div class="col-6 text-right">';
                                echo '<h5>'.$qual[$j][$i].'</h5>';
                                $j++;
                                echo '</div>';
                                echo '</div>';
                                echo '<h5>'.$qual[$j][$i].'</h5>';
                                echo '</div>';
                                echo '<br>';
                            }
                            ?> 
                        </div>
                     </div>
                  </div>
                  <hr>
                  <div class="skills">
                     <div class="row">
                        <div class="col-3">
                           <h4>SKILLS</h4>
                        </div>
                        <div class="col-9">
                            <?php
                            for ($i=0; $i < count($skill); $i++) {
                                $j = 0;
                                echo '<div class="skill">';
                                echo '<div class="row">';
                                echo '<div class="col-2">';
                                echo '<h5>'.$skills[$j][$i].'</h5>';
                                $j++;
                                echo '</div>';
                                echo '<div class="col-10">'; 
                                echo '<div class="progress">';
                                echo '<div class="progress-bar" role="progressbar" aria-valuenow="'.$skills[$j][$i].'"
                                aria-valuemin="0" aria-valuemax="100" style="width:'.$skills[$j][$i].'%">';
                                echo ' '.$skills[$j][$i].'%';
                                echo '</div>';
                                echo '</div>';
                                echo '</div>';
                                echo '</div>';
                                echo '</div>';
                                echo '<br>';
                            }
                            ?>
                        </div>
                     </div>
                  </div>
               </div>
            
         </div>
         <form action="../cv-design.php" method="post" id = "form"></form>
</body>
<script src="../js/html2canvas.min.js"></script>
<script src="../js/jquery.min.js"></script>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
<script>
    var blob, formData;
    function demoFromHTML() {
        html2canvas(document.getElementById("cv")).then(function (canvas) {
    var img = canvas.toDataURL("image/png");
    var doc = new jsPDF("p","mm","a4");
    //var width = doc.internal.pageSize.getWidth();
    //var height = doc.internal.pageSize.getHeight();
    doc.addImage(img, 'JPEG',0, 0, 210, 280.5);
    blob = doc.output('blob');
    formData = new FormData();
    formData.append('pdf', blob);
    formData.append('img', img);

    var img = "<input type = 'text' name='img' value = '"+ img +"'>";
    var file = "<input type = 'hidden' name='pdf' value = '"+ blob +"'>";
    var skill = "<?php
    for ($i=0; $i < count($skill) ; $i++) { 
        echo "<input type = 'hidden' name='skills[]' value = '".$skill[$i]."'>";
    }?>";
    
     
    $("#form").append(img);
    $("#form").append(file);
    $("#form").append(skill);
    $("#form").submit();
    //out = doc.output('test.pdf');        
});
    }

    $(document).ready(function(){
        demoFromHTML();
        $.ajax('../includes/data_operation.php',
            {
                method: 'POST',
                data: {formData: formData, action: "cv"},
                processData: false,
                contentType: false,
                success: function(data){console.log(data);},
                error: function(data){console.log(data)}
            });
    });
    </script>
</html>
