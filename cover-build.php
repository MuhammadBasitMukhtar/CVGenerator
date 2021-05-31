<?php
$title = "CV Information";

$cv = $_GET['cover'];

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

require('includes/header.php');



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
                            <h2 class="w-text title wow fadeInUp" data-wow-delay="0.2s">Cover Letter Information</h2>
                            <ol class="breadcrumb justify-content-center wow fadeInUp" data-wow-delay="0.4s">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Cover Letter Builder</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Welcome Area End ##### -->
  <section class="demo-video feat bub-right" style="margin-top: 50px">
        <div class="container">
            <div class="section-heading text-center">
                <!-- Dream Dots -->
               
                <h2 class="d-blue fadeInUp" data-wow-delay="0.3s">Provide your information to get your Cover Letter designed</h2>
                <p class="fadeInUp" data-wow-delay="0.4s" style="color:#888">Fill the form below according to your requirements.</p>
            </div>
            <div class="row align-items-center">
                <!-- Welcome Video Area -->
                <div class="col-lg-12 col-md-12  col-sm-12">
                    <div class="welcome-video-area fadeInUp" data-wow-delay="0.5s">
                        <!-- Welcome Thumbnail -->
                        <div class="form">
                            <form action="templates/cover<?php echo $cv ?>.php" method="post">
                                <div class="promo-section">
                                    <div class="integration-link1 text-center">
                                        <span class="integration-icon">
                                            <img src="img/svg/file.png" width="24" height="24" alt="">
                                        </span>
                                        <span class="integration-text text-black">Personal Information</span>
                                    </div>
                                </div>
                                <!--Personal Information-->
                                <div class="form-group row">
                                    <div class="col-md-6 row">
                                    <label for="inputPassword" class="col-sm-3 col-form-label">First Name</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="fname" id="fname" placeholder="Enter First Name" aria-describedby="inputGroupPrepend" required>
                                            <div class="input-group-prepend" onclick="runSpeechRecognition('fname')">
                                                <span class="input-group-text" id="inputGroupPrepend">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mic" viewBox="0 0 16 16">
                                                        <path d="M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0 1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5z"/>
                                                        <path d="M10 8a2 2 0 1 1-4 0V3a2 2 0 1 1 4 0v5zM8 0a3 3 0 0 0-3 3v5a3 3 0 0 0 6 0V3a3 3 0 0 0-3-3z"/>
                                                    </svg>    
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-md-6 row">
                                    <label for="inputPassword" class="col-sm-3 col-form-label">Last Name</label>
                                    <div class="col-sm-9">
                                    <div class="input-group">
                                            <input type="text" class="form-control" name="lname" id="lname" placeholder="Enter Last Name" aria-describedby="inputGroupPrepend" required>
                                            <div class="input-group-prepend" onclick="runSpeechRecognition('lname')">
                                                <span class="input-group-text" id="inputGroupPrepend">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mic" viewBox="0 0 16 16">
                                                        <path d="M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0 1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5z"/>
                                                        <path d="M10 8a2 2 0 1 1-4 0V3a2 2 0 1 1 4 0v5zM8 0a3 3 0 0 0-3 3v5a3 3 0 0 0 6 0V3a3 3 0 0 0-3-3z"/>
                                                    </svg>    
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    
                                </div>

                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Email Address</label>
                                    <div class="col-sm-10">
                                    <div class="input-group">
                                            <input type="email" class="form-control" name="eaddress" id="eaddress" placeholder="Enter Email Address" aria-describedby="inputGroupPrepend" required>
                                            <div class="input-group-prepend" onclick="runSpeechRecognition('eaddress')">
                                                <span class="input-group-text" id="inputGroupPrepend">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mic" viewBox="0 0 16 16">
                                                        <path d="M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0 1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5z"/>
                                                        <path d="M10 8a2 2 0 1 1-4 0V3a2 2 0 1 1 4 0v5zM8 0a3 3 0 0 0-3 3v5a3 3 0 0 0 6 0V3a3 3 0 0 0-3-3z"/>
                                                    </svg>    
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Phone Number</label>
                                    <div class="col-sm-10">
                                    <div class="input-group">
                                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter First Name" aria-describedby="inputGroupPrepend" required>
                                            <div class="input-group-prepend" onclick="runSpeechRecognition('phone')">
                                                <span class="input-group-text" id="inputGroupPrepend">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mic" viewBox="0 0 16 16">
                                                        <path d="M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0 1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5z"/>
                                                        <path d="M10 8a2 2 0 1 1-4 0V3a2 2 0 1 1 4 0v5zM8 0a3 3 0 0 0-3 3v5a3 3 0 0 0 6 0V3a3 3 0 0 0-3-3z"/>
                                                    </svg>    
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Address</label>
                                    <div class="col-sm-10">
                                    <div class="input-group">
                                            <input type="text" class="form-control" name="address" id="address" placeholder="Enter First Name" aria-describedby="inputGroupPrepend" required>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupPrepend" onclick="runSpeechRecognition('address')">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mic" viewBox="0 0 16 16">
                                                        <path d="M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0 1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5z"/>
                                                        <path d="M10 8a2 2 0 1 1-4 0V3a2 2 0 1 1 4 0v5zM8 0a3 3 0 0 0-3 3v5a3 3 0 0 0 6 0V3a3 3 0 0 0-3-3z"/>
                                                    </svg>    
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="promo-section">
                                    <div class="integration-link1 text-center">
                                        <span class="integration-icon">
                                            <img src="img/svg/file.png" width="24" height="24" alt="">
                                        </span>
                                        <span class="integration-text text-black">Letter Content</span>
                                    </div>
                                </div>
                                <!--Work Experience-->
                                <div id="work">
                                    <!--Experience-->
                                    <div class="experience">
                                        <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Sending To</label>
                                    <div class="col-sm-10">
                                    <div class="input-group">
                                            <input type="text" class="form-control" name="receiver" id="receiver" placeholder="Enter Receiver Name" required aria-describedby="inputGroupPrepend" required>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupPrepend" onclick="runSpeechRecognition('receiver')">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mic" viewBox="0 0 16 16">
                                                        <path d="M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0 1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5z"/>
                                                        <path d="M10 8a2 2 0 1 1-4 0V3a2 2 0 1 1 4 0v5zM8 0a3 3 0 0 0-3 3v5a3 3 0 0 0 6 0V3a3 3 0 0 0-3-3z"/>
                                                    </svg>    
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Address Line 1</label>
                                    <div class="col-sm-10">
                                    <div class="input-group">
                                            <input type="text" class="form-control" name="address1[]" id="address1" placeholder="Enter Address Line 1" required aria-describedby="inputGroupPrepend" required>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupPrepend" onclick="runSpeechRecognition('address1')">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mic" viewBox="0 0 16 16">
                                                        <path d="M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0 1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5z"/>
                                                        <path d="M10 8a2 2 0 1 1-4 0V3a2 2 0 1 1 4 0v5zM8 0a3 3 0 0 0-3 3v5a3 3 0 0 0 6 0V3a3 3 0 0 0-3-3z"/>
                                                    </svg>    
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Address Line 2</label>
                                    <div class="col-sm-10">
                                    <div class="input-group">
                                            <input type="text" class="form-control" name="address1[]" id="address2" placeholder="Enter Address Line 2" required aria-describedby="inputGroupPrepend" required>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupPrepend" onclick="runSpeechRecognition('address2')">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mic" viewBox="0 0 16 16">
                                                        <path d="M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0 1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5z"/>
                                                        <path d="M10 8a2 2 0 1 1-4 0V3a2 2 0 1 1 4 0v5zM8 0a3 3 0 0 0-3 3v5a3 3 0 0 0 6 0V3a3 3 0 0 0-3-3z"/>
                                                    </svg>    
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Address Line 3</label>
                                    <div class="col-sm-10">
                                    <div class="input-group">
                                            <input type="text" class="form-control" name="address1[]" id="address3" placeholder="Enter Address Line 3" required aria-describedby="inputGroupPrepend" required>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupPrepend" onclick="runSpeechRecognition('address3')">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mic" viewBox="0 0 16 16">
                                                        <path d="M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0 1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5z"/>
                                                        <path d="M10 8a2 2 0 1 1-4 0V3a2 2 0 1 1 4 0v5zM8 0a3 3 0 0 0-3 3v5a3 3 0 0 0 6 0V3a3 3 0 0 0-3-3z"/>
                                                    </svg>    
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                            
                                                <div class="form-group row">
                                                    <label for="formGroupExampleInput">Letter Content</label>
                                                    
                                                    <div class="input-group">
                                                    <textarea class="form-control" name="letter" id="companydet_0_textarea" cols="30" rows="35" placeholder="Enter Letter Content" required></textarea>
                                                                <div class="input-group-prepend" onclick="runSpeechRecognition('companydet_0_textarea')">
                                                                    <span class="input-group-text" id="inputGroupPrepend">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mic" viewBox="0 0 16 16">
                                                        <path d="M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0 1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5z"/>
                                                        <path d="M10 8a2 2 0 1 1-4 0V3a2 2 0 1 1 4 0v5zM8 0a3 3 0 0 0-3 3v5a3 3 0 0 0 6 0V3a3 3 0 0 0-3-3z"/>
                                                    </svg>    
                                                </span>
                                            </div>
                                        </div>
                                                </div>
                                            </div>
                                        
                                    </div>
                                    <!--Experience-->
                                    
                                </div>

                            
                                <input type="submit" class="btn btn-primary" value="Generate My Cover Letter" name="abc">
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        $(document).ready(function(){
            i = 1;
            j = 1;
            k = 1;
            var exp = '<b class="hr"></b><div class="experience"><div class="row"><div class="col-3"><div class="form-group"><label for="formGroupExampleInput">Company Name</label><div class="input-group"><input type="text" name="companyname[]" class="form-control" id="companyname_'+i+'_text" placeholder="Company Name"><div class="input-group-prepend" onclick="runSpeechRecognition(`companyname_'+i+'_text`)"><span class="input-group-text" id="inputGroupPrepend"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mic" viewBox="0 0 16 16"><path d="M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0 1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5z"/><path d="M10 8a2 2 0 1 1-4 0V3a2 2 0 1 1 4 0v5zM8 0a3 3 0 0 0-3 3v5a3 3 0 0 0 6 0V3a3 3 0 0 0-3-3z"/></svg></span></div></div></div></div><div class="col-3"><div class="form-group"><label for="formGroupExampleInput">Designation</label><div class="input-group"><input type="text" name="companydesig[]" class="form-control" id="companydesig_'+i+'_text" placeholder="Designation"><div class="input-group-prepend" onclick="runSpeechRecognition(`companydesig_'+i+'_text`)"><span class="input-group-text" id="inputGroupPrepend"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mic" viewBox="0 0 16 16"><path d="M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0 1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5z"/><path d="M10 8a2 2 0 1 1-4 0V3a2 2 0 1 1 4 0v5zM8 0a3 3 0 0 0-3 3v5a3 3 0 0 0 6 0V3a3 3 0 0 0-3-3z"/></svg></span></div></div></div></div><div class="col-3"><div class="form-group"><label for="formGroupExampleInput">From</label><input type="date" name="companyfrom[]" class="form-control" id="companyfrom_'+i+'_date" placeholder="Company Name"></div></div><div class="col-3"><div class="form-group"><label for="formGroupExampleInput">Till</label><input type="date" name="companytill[]" class="form-control" id="companytill_'+i+'_date" placeholder="Company Name"></div></div><div class="col-12"><div class="form-group"><label for="formGroupExampleInput">Company Details</label><div class="input-group"><textarea class="form-control" name="companydet[]" id="companydet_'+i+'_textarea" cols="30" rows="5" placeholder="Enter Company Details"></textarea><div class="input-group-prepend" onclick="runSpeechRecognition(`companydet_'+i+'_textarea`)"><span class="input-group-text" id="inputGroupPrepend"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mic" viewBox="0 0 16 16"><path d="M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0 1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5z"/><path d="M10 8a2 2 0 1 1-4 0V3a2 2 0 1 1 4 0v5zM8 0a3 3 0 0 0-3 3v5a3 3 0 0 0 6 0V3a3 3 0 0 0-3-3z"/></svg></span></div></div></div></div></div></div></hr>';
            var qual = '<b class="hr"></b><div class="qualification"><div class="row"><div class="col-4"><div class="form-group"><label for="formGroupExampleInput">Degree Name</label><div class="input-group"><input type="text" name="degreename[]" class="form-control" id="degreename_'+j+'_text" placeholder="Degree Name"><div class="input-group-prepend" onclick="runSpeechRecognition(`degreename_'+j+'_text`)"><span class="input-group-text" id="inputGroupPrepend"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mic" viewBox="0 0 16 16"><path d="M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0 1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5z"/><path d="M10 8a2 2 0 1 1-4 0V3a2 2 0 1 1 4 0v5zM8 0a3 3 0 0 0-3 3v5a3 3 0 0 0 6 0V3a3 3 0 0 0-3-3z"/></svg></span></div></div></div></div><div class="col-4"><div class="form-group"><label for="formGroupExampleInput">School Name</label><div class="input-group"><input type="text" name="schoolname[]" class="form-control" id="schoolname_'+j+'_text" placeholder="Institute Name"><div class="input-group-prepend" onclick="runSpeechRecognition(`schoolname_'+j+'_text`)"><span class="input-group-text" id="inputGroupPrepend"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mic" viewBox="0 0 16 16"><path d="M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0 1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5z"/><path d="M10 8a2 2 0 1 1-4 0V3a2 2 0 1 1 4 0v5zM8 0a3 3 0 0 0-3 3v5a3 3 0 0 0 6 0V3a3 3 0 0 0-3-3z"/></svg></span></div></div></div></div><div class="col-4"><div class="form-group"><label for="formGroupExampleInput">Year Passing</label><input type="date" name="yearpassing[]" class="form-control" id="yearpassing_'+j+'_date" placeholder="Company Name"></div></div></div></div>';
            var skill = '<b class="hr"></b><div class="skill"><div class="row"><div class="col-4"><div class="form-group"><label for="formGroupExampleInput">Skill Name</label><div class="input-group"><input type="text" name="skill[]" class="form-control" id="skill_'+k+'_text" placeholder="Company Name"><div class="input-group-prepend" onclick="runSpeechRecognition(`skill_'+k+'_text`)"><span class="input-group-text" id="inputGroupPrepend"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mic" viewBox="0 0 16 16"><path d="M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0 1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5z"/><path d="M10 8a2 2 0 1 1-4 0V3a2 2 0 1 1 4 0v5zM8 0a3 3 0 0 0-3 3v5a3 3 0 0 0 6 0V3a3 3 0 0 0-3-3z"/></svg></span></div></div></div></div><div class="col-8"><div class="form-group"><label for="formGroupExampleInput">Expertise</label><input type="range" name="expertise[]" class="form-control" id="expertise_'+k+'_text" placeholder="Company Name"></div></div></div></div>';
            $("#addExp").click(function(){
                $("#work").append(exp);
                i++;
            });
            $("#addQual").click(function(){
                $("#qual").append(qual);
                j++;
            });
            $("#addSkill").click(function(){
                $("#skills").append(skill);
                j++;
            });
            
        });
        

        function runSpeechRecognition(inputid) {
		        // get output div reference
		        var output = document.getElementById(inputid);
		        // get action element reference
		        var action = document.getElementById("action");
                // new speech recognition object
                var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
                var recognition = new SpeechRecognition();
                // This runs when the speech recognition service starts
               // recognition.onstart = function() {
                    //action.innerHTML = "<small>listening, please speak...</small>";
               // };
                recognition.start();
                
                //recognition.onspeechend = function() {
                    //action.innerHTML = "<small>stopped listening, hope you are done...</small>";
                 //   recognition.stop();
               // }
              
                // This runs when the speech recognition service returns result
                recognition.onresult = function(event) {
                    var transcript = event.results[0][0].transcript;
                    var confidence = event.results[0][0].confidence;
                    $("#"+inputid).val(transcript);
                    recognition.stop();
                    //output.classList.remove("hide");
                };
              
                 // start recognition
                 
	        }
    </script>
<?php
require('includes/footer.php');
?>

