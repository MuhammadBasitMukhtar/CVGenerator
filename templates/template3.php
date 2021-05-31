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
    $new_name = rand() . '.' . $ext;
    $dest = '../img/' . $new_name;
    move_uploaded_file($_FILES['img']["tmp_name"],$dest);

    $companyname = $_POST["companyname"];
    $desig = $_POST["companydesig"];
    $companyfrom = $_POST["companyfrom"];
    $companytill = $_POST["companytill"];
    $companydet = $_POST["companydet"];

    $company = array($companyfrom,$companytill,$desig,$companyname,$companydet);

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
    <title>Resume CV Design</title>
    <link rel="stylesheet" href="template3/Css/style.css">
    <link rel="stylesheet" href="template3/Css/all.min.css">
</head>

<body>
    <div class="wrapper">
        <div class="resume" id="resume">
            <div class="left">
                <div class="img_holder">
                    <img src="<?php echo $_FILES['img']['tmp_name'] ?>" alt="picture">
                </div>
                <div class="contact_wrap pb">
                    <div class="title">
                        Contact
                    </div>
                    <div class="contact">
                        <ul>
                            <li>
                                <div class="li_wrap">
                                    <div class="icon"><i class="fas fa-mobile-alt" aria-hidden="true"></i></div>
                                    <div class="text"><?php echo $phone ?></div>
                                </div>
                            </li>
                            <li>
                                <div class="li_wrap">
                                    <div class="icon"><i class="fas fa-envelope" aria-hidden="true"></i></div>
                                    <div class="text"><?php echo $email ?></div>
                                </div>
                            </li>
                            <li>
                                <div class="li_wrap">
                                    <div class="icon"><i class="fas fa-map-signs" aria-hidden="true"></i></div>
                                    <div class="text"><?php echo $address ?></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="skills_wrap pb">
                    <div class="title">
                        Skills
                    </div>
                    <div class="skills">
                        <ul>
                        <?php
                            for ($i=0; $i < count($skill); $i++) {
                                $j = 0;
                                echo '<li>';
                                echo '<div class="li_wrap">';
                                echo '<div class="text">'.$skill[$j][$i].'</div>';
                                echo '</div>';
                                echo '</li>';
                            }
                            ?>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="right">
                <div class="header">
                    <div class="name_role">
                        <div class="name">
                        <?php echo $fname ?> <b><?php echo $lname ?></b>
                        </div>
                    </div>
                    <div class="about">
                    <?php echo $objective ?>
                    </div>
                </div>
                <div class="right_inner">
                    <div class="exp">
                        <div class="title right_main_head">
                            experience
                        </div>
                        <div class="exp_wrap">
                            <ul>
                            <?php 
                                for ($i=0; $i < count($companyname) ; $i++) {
                                    $j = 0;
                                    echo '<li>';
                                    echo '<div class="li_wrap">';
                                    echo '<div class="date">';
                                    echo $company[$j][$i].' - ';
                                    $j++;
                                    echo $company[$j][$i];
                                    $j++;
                                    echo '</div>';
                                    echo '<div class="info">';
                                    echo '<p class="info_title">'.$company[$j][$i].'</p>';
                                    $j++;
                                    echo '<p class="info_com">'.$company[$j][$i].'</p>';
                                    $j++;
                                    echo '<p class="info_cont">'.$company[$j][$i].'</p>';
                                    echo '</div>';
                                    echo '</div>';
                                    echo '</li>';
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="education">
                        <div class="title right_main_head">
                            Education
                        </div>
                        <div class="education_wrap">
                            <ul>
                            <?php
                        for ($i=0; $i < count($degreename); $i++) {
                                $j = 0;
                                    echo '<li>';
                                    echo '<div class="li_wrap">';
                                    echo '<div class="date">'.$qual[$j][$i];
                                    $j++;
                                    echo '</div>';
                                    echo '<div class="info">';
                                    echo '<p class="info_title">'.$qual[$j][$i].'</p>';
                                    $j++;
                                    echo '<p class="info_com">'.$qual[$j][$i].'</p>';
                                    echo '</div>';
                                    echo '</div>';
                                    echo '</li>';
                        }
                                ?>
                            </ul>
                        </div>
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
        html2canvas(document.getElementById("resume")).then(function (canvas) {
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