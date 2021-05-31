<?php
require ('../includes/connection.php');
$company = new companies();

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
$ext;$new_name;$dest;
if(isset($_POST))
{
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["eaddress"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $objective = $_POST["objective"];

    $ext = explode('.',$_FILES['img']['name']);
    $new_name = rand() . '.' . $ext[0];
    $dest = '../img/' . $new_name;
    move_uploaded_file($_FILES['img']["tmp_name"],$dest);
     

    $companyname = $_POST["companyname"];
    $desig = $_POST["companydesig"];
    $companyfrom = $_POST["companyfrom"];
    $companytill = $_POST["companytill"];
    $companydet = $_POST["companydet"];

    $company = array($companyfrom,$companytill,$companyname,$desig,$companydet);

    $degreename = $_POST["degreename"];
    $schoolname = $_POST["schoolname"];
    $yearpassing = $_POST["yearpassing"];

    $qual = array($yearpassing,$degreename,$schoolname);

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
    <title>Resume/CV Design</title>
    <link rel="stylesheet" href="template2/Css/style.css">
    <link rel="stylesheet" href="template2/Css/all.min.css">
</head>

<body>

    <div class="resume" id="resume">
        <div class="resume_left">
            <div class="resume_profile">
                <img src="<?php echo $dest ?>" alt="profile_pic">
            </div>
            <div class="resume_content">
                <div class="resume_item resume_info">
                    <div class="title">
                        <p class="bold"><?php echo $fname ?> <b><?php echo $lname ?></b></p>
                        <!-- <p class="regular">Designer</p> -->
                    </div>
                    <ul>
                        <li>
                            <div class="icon">
                                <i class="fas fa-map-signs"></i>
                            </div>
                            <div class="data">
                            <?php echo $address ?>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <div class="data">
                            <?php echo $phone ?>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="data">
                            <?php echo $email ?>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="resume_item resume_skills">
                    <div class="title">
                        <p class="bold">skills</p>
                    </div>
                    <ul>
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
                    </ul>
                </div>
                
            </div>
        </div>
        <div class="resume_right">
            <div class="resume_item resume_about">
                <div class="title">
                    <p class="bold">Objective</p>
                </div>
                <p><?php echo $objective ?></p>
            </div>
            <div class="resume_item resume_work">
                <div class="title">
                    <p class="bold">Work Experience</p>
                </div>
                <ul>
                <?php 
                            for ($i=0; $i < count($companyname) ; $i++) {
                                $j = 0; 
                                echo '<li>';
                                echo '<div class="date">'.$company[$j][$i];
                                $j++;
                                echo ' till '.$company[$j][$i].'</div>';
                                $j++;
                                echo '<div class="info">';
                                echo '<h3>'.$company[$j][$i].'</h3>';
                                $j++;
                                echo '<p class="semi-bold">'.$company[$j][$i].'</p>';
                                $j++;
                                echo '<p>'.$company[$j][$i].'</p>';
                                echo '</div>';
                                echo '</li>';
                            }
?>
                </ul>
            </div>
            <div class="resume_item resume_education">
                <div class="title">
                    <p class="bold">Education</p>
                </div>
                <ul>
                    <?php
                        for ($i=0; $i < count($degreename); $i++) {
                                $j = 0;
                                echo '<li>';
                                echo '<div class="date">'.$qual[$j][$i].'</div>';
                                $j++;
                                echo '<div class="info">';
                                echo '<p class="semi-bold">'.$qual[$j][$i].'</p>';
                                $j++;
                                echo '<p>'.$qual[$j][$i].'</p>';
                                echo '</div>';
                                echo '</li>';
                        }
                    ?>
                </ul>
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
        html2canvas(document.getElementById("resume")).then(function (canvas) {
    var img = canvas.toDataURL("image/png");
    var doc = new jsPDF("p","mm","a4");
    //var width = doc.internal.pageSize.getWidth();
    //var height = doc.internal.pageSize.getHeight();
    doc.addImage(img, 'JPEG',0, 0, 210, 270.5);
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