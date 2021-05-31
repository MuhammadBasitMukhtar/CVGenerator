<?php
$title = "CV Build";
$fname = '';
$lname ='';
$email = '';
$phone = '';
$address = '';
$receiver = '';
$raddress = '';
$letter = '';
if(isset($_POST))
{
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["eaddress"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];

    $receiver = $_POST["receiver"];
    $raddress = $_POST["address1"];
    $letter = $_POST["letter"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400&display=swap" rel="stylesheet">
 <style>
     * 
        {
            font-family: 'Roboto Slab', serif;
            border-bottom: 3px;
        }
     #letter
     {
        min-height: 2000px;
     }
     .line{
         padding: 3px;
         display: block;
         background-color: rgba(0, 0, 0, 0.685);
         margin: 3px;
     }
 </style>
</head>
<body>
    <div id="letter">
    <div class="container">
        <div>
        <h1 align="center"><?php echo $fname ?> <b><?php echo $lname ?></b></h1>
        <span class="line"></span>
        <p align="center"><?php echo $address ?> - <?php echo $phone ?> - <?php echo $eaddress ?></p>
    </div>
    <div>
    <?php echo date("d-m-Y") ?>
      <br>
      <br>
      To,<br><?php echo $receiver ?>
      <br>
      <br>
      <?php echo $address1[0] ?>
      <br>
      <?php echo $address1[1] ?>
      <br>
      <?php echo $address1[2] ?>
      <br><br><br>
      <?php echo $letter ?>
    <div>
            <br><br>
            Sincerely,
            <br><?php echo $fname?> <?php echo $fname?> 
        </p>
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
        html2canvas(document.getElementById("letter")).then(function (canvas) {
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
    
    
     
    $("#form").append(img);
    $("#form").append(file);
    $("#form").submit();
    //out = doc.output('test.pdf');        
});
    }

    $(document).ready(function(){
        demoFromHTML();
        $.ajax('../includes/data_operation.php',
            {
                method: 'POST',
                data: {formData: formData, action: "cover"},
                processData: false,
                contentType: false,
                success: function(data){console.log(data);},
                error: function(data){console.log(data)}
            });
    });
    </script>
</html>