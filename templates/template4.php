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

    $company = array($desig,$companyname,$companyfrom,$companytill,$companydet);

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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<style>
    #cv
    {
        font-family: 'Titillium Web', sans-serif;
        text-align: justify;
    }
    h2
    {
        text-transform: uppercase;
        letter-spacing: 3px;
        border-bottom: 1px dotted black;
    }
    h1
    {
        font-size: 55px;
    }
    .col-5
    {
        border-right: 1px dotted black;
    }
.resume_skills ul li {
  display: flex;
  margin-bottom: 10px;
  color: black;
  justify-content: space-between;
  align-items: center;
}

.resume_skills ul li .skill_name {
  width: 25%;
}

.resume_skills ul li .skill_progress {
  width: 60%;
  margin: 0 5px;
  height: 5px;
  background: #fff;
  position: relative;
}

.resume_skills ul li .skill_per {
  width: 15%;
}

.resume_skills ul li .skill_progress span {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  background: black;
}
#cv{
    min-height: 1200px
}
</style>
</head>
<body>
    <div id="cv">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 style="letter-spacing: 6px;"><?php echo $fname ?> <b><?php echo $lname ?></b></h1>
                    <div>
                        <p style="font-size: larger;"><?php echo $address ?> - <?php echo $phone ?> - <?php echo $eaddress ?></p>
                    </div>
                </div>
                <div class="col-5">
                    <h2>Objective</h2>
                    <p style="text-align: justify;"><?php echo $objective ?></p>
                    <br>
                    <div>
                        <h2>EDUCATION</h2>
                        <?php
                            for ($i=0; $i < count($degreename); $i++) {
                                $j = 0;
                                echo '<div>';
                                echo '<h4>'.$qual[$j][$i].'</h4>';
                                $j++;
                                echo '<p>'.$qual[$j][$i];
                                $j++;
                                echo ' - '.$qual[$j][$i].'</p>';
                                echo '</div>'; 
                            }
                            ?>
                    </div>
                    <div>
                        <h2>skills</h2>
                        <div class="resume_item resume_skills">
                            <ul style="padding: 0;">
                            <?php
                            for ($i=0; $i < count($skill); $i++) {
                                $j = 0;
                                echo '<li>';
                                echo '<div class="skill_name">'.$skills[$j][$i].'</div>';
                                $j++;
                                echo '<div class="skill_progress"><span style="width: '.$skills[$j][$i].'%;"></span></div>';
                                echo '<div class="skill_per">'.$skills[$j][$i].'%</div>';
                                echo '</li>';
                            }
                    ?>
                        </div>
                    </div>
                </div>
                <div class="col-7">
                    <h2>work experience</h2>
                    <?php 
                            for ($i=0; $i < count($companyname) ; $i++) {
                                $j = 0; 
                                echo '<div>';
                                echo '<h4>'.$company[$j][$i].'</h4>';
                                $j++;
                                echo '<p>'.$company[$j][$i];
                                $j++;
                                echo '<br>'.$company[$j][$i];
                                $j++;
                                echo ' till '.$company[$j][$i].'</p>';
                                $j++;
                                echo '<div>';
                                echo '<p>'.$company[$j][$i].'</p>';
                                echo '</div>';
                                echo '</div>';
                            }
                            ?>
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