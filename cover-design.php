<?php

$title = "CV Build";
require('includes/header.php');
if(!isset($_COOKIE['user']))
{
   $msg = '
            <div role="alert" aria-live="assertive" aria-atomic="true" class="toast" data-delay="4000" data-autohide="true" style="position: absolute; top: 0; right: 0; margin: 40px; z-index: 1000000;">
      <div class="toast-header">
        <strong class="mr-auto">Quatlefoil</strong>
        <small></small>
        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="toast-body">
        Please Login First!
      </div>
    </div>
            
          ';
          header('Location: ' . $_SERVER['HTTP_REFERER'] . '?msg=1');
    
}

?>

  <!-- ##### Welcome Area Start ##### -->
  <div class="breadcumb-area clearfix dzsparallaxer auto-init" data-options='{direction: "normal"}'>
        <div class="divimage dzsparallaxer--target" style="width: 101%; height: 130%; background-image: url(img/bg-img/bg-2.jpg)"></div>
        <!-- breadcumb content -->
        <div class="breadcumb-content">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <nav aria-label="breadcrumb" class="breadcumb--con text-center">
                            <h2 class="w-text title wow fadeInUp" data-wow-delay="0.2s">Cover Letter Build</h2>
                            <ol class="breadcrumb justify-content-center wow fadeInUp" data-wow-delay="0.4s">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Cover Letter Build</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Welcome Area End ##### -->

     <!-- ##### Our features Area start ##### -->
     <section class="features section-padding-100-0">

<div class="section-heading text-center">
    <!-- Dream Dots -->
    <div class="dream-dots justify-content-center wow fadeInUp" data-wow-delay="0.2s">
        <span></span><span></span><span></span><span></span><span></span><span></span><span></span>
    </div>
    <h2 class="wow fadeInUp" data-wow-delay="0.3s">Your Cover Letter has been prepared!</h2>
    <p class="wow fadeInUp" data-wow-delay="0.4s">Find the link below to save your cover letter as pdf.</p>
</div>

<div class="container">
   <div class="row align-items-center">
      <div class="col-md-12">
         <div id="data" style="border: 1px solid black">
                <img src="<?php echo $_POST["img"] ?>" width="1200" height="1000" id="CVD">
         </div>

        
      </div>
   </div>
</div>
</section>
<br>
<br>
<div class="section-heading text-center">
    <!-- Dream Dots -->
    <h2 class="wow fadeInUp" data-wow-delay="0.3s">Save Your Cover Letter in PDF format!</h2>
    <p class="wow fadeInUp" data-wow-delay="0.4s"><button class="btn btn-primary" id="savePDF">Save as PDF</button><a href="<?php echo $_POST["img"] ?>" class="btn btn-succesfull" download>Save as PNG</a></p>
    <!-- <p>Here are the list of companies who you might be interested in your skills.</p> -->
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>

<script>
    function demoFromHTML() {
       
    var img = document.getElementById("CVD").src;
    var doc = new jsPDF("p","mm","a4");
    //var width = doc.internal.pageSize.getWidth();
    //var height = doc.internal.pageSize.getHeight();
    doc.addImage(img, 'JPEG',0, 0, 210, 280.5);
    doc.output("save","cv.pdf");
    }
    $("#savePDF").click(function(){
        demoFromHTML()
    });
    </script>
<!-- ##### Our features Area End ##### -->

<?php
require('includes/footer.php');
?>
