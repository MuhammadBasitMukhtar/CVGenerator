<?php
$title = "Index";
require('includes/header.php');
$msg = '';

if(isset($_POST['mail']))
{
    echo $_POST['message'];
    $to = "basitmukhtar2015@gmail.com";
    $subject = $_POST['subject'];
    $txt = $_POST['message'];
    $headers = "From: ". $_POST['email'] ." . \r\n ";

mail($to,$subject,$txt,$headers);
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
    Thank You for contacting us! <br>We have received your email, we will contact you regarding your email.
  </div>
</div>
        
      ';
}
?>
    
   <!-- ##### Welcome Area Start ##### -->
   <section class="welcome_area demo3 flex align-items-center">
   <?php if($msg != ''){echo $msg; $msg = "";} ?>
        <div class="container">
            <div class="row align-items-center">
                <!-- Welcome Content -->
                <div class="col-12 col-lg-12 text-center col-md-12">
                    <div class="welcome-content">
                        <div class="promo-section">
                            <div class="integration-link">
                                <span class="integration-icon">
                                    <img src="img/svg/file.png" width="24" height="24" alt="">
                                </span>
                                <span class="integration-text">Create your job winning resume for free!</span>
                            </div>
                        </div>
                        <h1 class="wow fadeInUp w-text" data-wow-delay="0.2s">User Friendly Resume Builder</h1>
                        <p class="wow fadeInUp" data-wow-delay="0.3s">One of the biggest trials for many jobseekers is creating the perfect resume. You can find a professional to do it for you, or you can use a template, but if you are a victim of the do-it-yourself attitude (like most of us in IT) then you need to know how to include your IT skills in a clean and readable format. You also need to make sure to utilize important keywords. </p>
                        <div class="dream-btn-group wow fadeInUp" data-wow-delay="0.4s">
                            <a href="#" class="btn dream-btn green-btn mr-3">Our Services</a>
                            <a href="#" class="btn dream-btn green-btn">Get Started</a>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
        
    </section>
    <!-- ##### Welcome Area End ##### -->

    <div class="st-bg">
        <!-- ##### About Us Area Start ##### -->
        <section class="about-us-area section-padding-100 clearfix" id="about">
            <div class="container">
                <div class="row align-items-center">
                    
                    <div class="col-12 col-lg-6">
                        <div class="welcome-meter wow fadeInUp" data-wow-delay="0.7s">
                            <img src="img/svg/about2.svg" class="img-responsive center-block" alt="">
                            <!-- client meta -->
                            <div class="growing-company text-center mt-30 wow fadeInUp" data-wow-delay="0.8s">
                                <p>* Already helped <span class="counter">100,000</span> users with their Job-Winning Resume</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6">
                        <div class="who-we-contant">
                            <!-- Dream Dots -->
                            <div class="dream-dots wow fadeInUp" data-wow-delay="0.2s">
                                <span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                            </div>
                            <h4 class="wow fadeInUp" data-wow-delay="0.3s">We help our users in creating their job-winning resumes.</h4>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">User can easily build his own resume and he can view the resume from the system. User can find his expected job in finest companies by entering his personal and educational & experience details. </p>
                            <p class="wow fadeInUp" data-wow-delay="0.5s">Further he can generate resume by speaking rather than typing each word. So, the resume will be generated manually and automatically by our application, and parallelly he can view the generated resume. </p>
                            <a class="btn dream-btn mt-30 wow fadeInUp" data-wow-delay="0.6s" href="cv.php">Get Started</a>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- ##### About Us Area End ##### -->

        <!-- ##### About Us Area Start ##### -->
        <section class="about-us-area section-padding-0-100 clearfix">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-12 col-lg-6">
                        <div class="who-we-contant">
                            <!-- Dream Dots -->
                            <div class="dream-dots wow fadeInUp" data-wow-delay="0.2s">
                                <span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                            </div>
                            <h4 class="wow fadeInUp" data-wow-delay="0.3s">Built-In Templated help you get your resume ready within no time!</h4>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">Quatrefoil resume creator app simplifies the work of finding the job by providing intelligent and user-friendly web app can display the resume structure in a user-friendly format, so that you can choose which sections of the resume to publish. You can also modify the order of the Published Sections – Biographical Data, Objective, Employment History, Education History, Personal, Skill Areas, Publications, Summary and Certifications.</p>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6">
                        <div class="welcome-meter wow fadeInUp" data-wow-delay="0.7s">
                            <img src="img/core-img/digital-4.png" class="center-block" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ##### About Us Area End ##### -->
    

        <section class="demo-video feat section-padding-0-100 bub-right">
        <div class="container">
            <div class="section-heading text-center">
                <!-- Dream Dots -->
                <div class="dream-dots justify-content-center wow fadeInUp" data-wow-delay="0.2s">
                    <span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                </div>
                <h2 class="d-blue fadeInUp" data-wow-delay="0.3s">Quatrefoil</h2>
                <p class="fadeInUp" data-wow-delay="0.4s" style="color:#888">We have made following of the features easy for you.</p>
            </div>
            <div class="row align-items-center">
                <!-- Welcome Video Area -->
                <div class="col-lg-6 col-md-12  col-sm-12">
                    <div class="welcome-video-area fadeInUp" data-wow-delay="0.5s">
                        <!-- Welcome Thumbnail -->
                        <div class="welcome-thumb">
                            <img src="img/bg-img/bg-4.jpg" alt="">
                        </div>
                        <!-- Video Icon -->
                        <!-- <div class="video-icon">
                            <a href="https://www.youtube.com/watch?v=gbXEPHsTkgU" class="btn dream-btn video-btn" id="videobtn"><i class="fa fa-play"></i></a>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="services-block-four mt-s">
                        <div class="inner-box">
                            <div class="icon-img-box">
                                <img src="img/icons/d1.png" alt="">
                            </div>
                            <h3><a href="resumes.php">Pre-made Resume Templates</a></h3>
                            <div class="text">You can use these templates for a head start.</div>
                            
                        </div>
                    </div>
                    <div class="services-block-four">
                        <div class="inner-box">
                            <div class="icon-img-box">
                                <img src="img/icons/d2.png" alt="">
                            </div>
                            <h3><a href="cv.php">Pre-made CV Templates </a></h3>
                            <div class="text">You get to choose between several design options with our selection of free resume templates. </div>
                            
                        </div>
                    </div>
                    <div class="services-block-four" style="margin-bottom:0">
                        <div class="inner-box">
                            <div class="icon-img-box">
                                <img src="img/icons/d3.png" alt="">
                            </div>
                            <h3><a href="cover.php">Pre-Built Cover Templates</a></h3>
                            <div class="text">Use one of our cover letter templates to create the total package for impressing employers. </div>
                            
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    </div>

    <div class="clearfix"></div>


    <!-- ##### Our Services Area Start ##### -->
    <section class="our_services_area section-padding-100-70 ring-bg" id="services">
        <div class="container">
            
            <div class="section-heading text-center">
                <!-- Dream Dots -->
                <div class="dream-dots justify-content-center wow fadeInUp" data-wow-delay="0.2s">
                    <span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                </div>
                <h2 class="wow fadeInUp" data-wow-delay="0.3s">Why should you choose Quatrefoil?</h2>
                <p class="wow fadeInUp" data-wow-delay="0.4s">Here are some benefits of using our Resume Builder.</p>
            </div>
                

            <div class="row">
                <div class="col-12 col-sm-6 col-lg-3">
                    <!-- Content -->
                    <div class="service_single_content text-center mb-100 wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Icon -->
                        <div class="service_icon">
                            <img src="img/services/1.svg" alt="">
                        </div>
                        <h6>A Resume Layout That Stands Out</h6>
                        <p>A creative, professional layout can grab a recruiter's attention. Our resume layout optimizer makes sure all your content is aligned and organized so your resume looks like a work of art.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <!-- Content -->
                    <div class="service_single_content text-center mb-100 wow wow fadeInUp" data-wow-delay="0.3s">
                        <!-- Icon -->
                        <div class="service_icon">
                            <img src="img/services/2.svg" alt="">
                        </div>
                        <h6>Live Feedback to Improve Your Content</h6>
                        <p>If you aren't sure how to write a resume, don't worry. Our content optimizer analyzes your resume and gives you suggested revisions to increase the quality of your content.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <!-- Content -->
                    <div class="service_single_content text-center mb-100 wow fadeInUp" data-wow-delay="0.4s">
                        <!-- Icon -->
                        <div class="service_icon">
                            <img src="img/services/3.svg" alt="">
                        </div>
                        <h6>Templates Suited to Your Exact Needs</h6>
                        <p>Let our free resume templates and cover letter templates do the work for you. Choose from a selection of recruiter-approved layout designs for different job types.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <!-- Content -->
                    <div class="service_single_content text-center mb-100 wow fadeInUp" data-wow-delay="0.5s">
                        <!-- Icon -->
                        <div class="service_icon">
                            <img src="img/services/4.svg" alt="">
                        </div>
                        <h6>Free Cover Letter and Resume Samples</h6>
                        <p>Not only do you get to build your resume for free, you also get access to successful resume samples and cover letter examples that you can use for guidance.</p>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- ##### Our Services Area End ##### -->

    
    <!-- ##### Subscribe Area start ##### -->
    <section class="container " style="padding-bottom: 0px" id="start">
        <div class="subscribe">
            <div class="row">
                <div class="col-sm-12">
                    <div class="subscribe-wrapper">
                        <div class="section-heading text-center">
                            <h2 class="wow fadeInUp w-text" data-wow-delay="0.3s">Don’t Miss Our News And Updates!</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo.</p>
                        </div>
                        <div class="service-text">
                            
                            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-12 text-center">
                                <div class="group">
                                    <input type="text" name="subject" required="">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Enter Your Email</label>
                                    <button class="dream-btn"><i class="fa fa-paper-plane-o"></i></button>
                                </div>
                            </div>
                            <div class="col-lg-5 col-lg-offset-1 col-sm-12 text-center">
                                <span class="telegram-text">Join our chat: </span>
                                <a href="#" class="button"><i class="fa fa-telegram"></i>Telegram</a>
                            </div>
                            <div class="col-lg-5 col-sm-12 text-center">
                                <ul class="list-unstyled list-inline social-list">
                                    <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-github-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-medium"></i></a></li>
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                </div>
                
            </div>
        </div>  
    </section>
    <!-- ##### Subscribe Area End ##### -->


    <!-- ##### Team Area Start ##### -->
    <section class="our_team_area section-padding-100-0 clearfix" id="team">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <!-- Dream Dots -->
                        <div class="dream-dots justify-content-center wow fadeInUp" data-wow-delay="0.2s">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <h2 class="wow fadeInUp" data-wow-delay="0.3s">Awesome Team</h2>
                        <!-- <p class="wow fadeInUp" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo. </p> -->
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Team Member -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-member wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Image -->
                        <div class="team-member-thumb">
                            <img src="img/svg/2.png" class="center-block" alt="">
                        </div>
                        <!-- Team Info -->
                        <div class="team-info">
                            <h5>Hira Izhar</h5>
                            <p>Executive Officer</p>
                        </div>
                        <!-- Social Icon -->
                        <div class="team-social-icon">
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-skype"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Single Team Member -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-member wow fadeInUp" data-wow-delay="0.3s">
                        <!-- Image -->
                        <div class="team-member-thumb">
                            <img src="img/svg/3.png" class="center-block" alt="">
                        </div>
                        <!-- Team Info -->
                        <div class="team-info">
                            <h5>Kanwal Ahmed</h5>
                            <p>Services Manager</p>
                        </div>
                        <!-- Social Icon -->
                        <div class="team-social-icon">
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-skype"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Single Team Member -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-member wow fadeInUp" data-wow-delay="0.4s">
                        <!-- Image -->
                        <div class="team-member-thumb">
                            <img src="img/svg/4.png" class="center-block" alt="">
                        </div>
                        <!-- Team Info -->
                        <div class="team-info">
                            <h5>Suman Zaheer</h5>
                            <p>UX/UI Designer</p>
                        </div>
                        <!-- Social Icon -->
                        <div class="team-social-icon">
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-skype"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Single Team Member -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-member wow fadeInUp" data-wow-delay="0.5s">
                        <!-- Image -->
                        <div class="team-member-thumb">
                            <img src="img/svg/5.png" class="center-block" alt="">
                        </div>
                        <!-- Team Info -->
                        <div class="team-info">
                            <h5>Fatimah Khan</h5>
                            <p>Head of Marketing</p>
                        </div>
                        <!-- Icon -->
                        <div class="team-social-icon">
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-skype"></i></a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- ##### Team Area End ##### -->

    <!-- ##### Contact Area Start ##### -->
    <section class="contact_us_area" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <!-- Dream Dots -->
                        <div class="dream-dots justify-content-center wow fadeInUp" data-wow-delay="0.2s">
                            <span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                        </div>
                        <h2 class="wow fadeInUp" data-wow-delay="0.3s">Contact With Us</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.4s">If you have any queries, feel free to contact us.</p>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8">
                    <div class="contact_form">
                        <form action="" method="post" id="main_contact_form0">
                            <div class="row">
                                <!-- <div class="col-12">
                                    <div id="success_fail_info"></div>
                                </div> -->

                                <div class="col-12 col-md-6">
                                    <div class="group wow fadeInUp" data-wow-delay="0.2s">
                                        <input type="text" name="name" id="name7" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Name</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="group wow fadeInUp" data-wow-delay="0.3s">
                                        <input type="text" name="email" id="email" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="group wow fadeInUp" data-wow-delay="0.4s">
                                        <input type="text" name="subject" id="subject" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="group wow fadeInUp" data-wow-delay="0.5s">
                                        <textarea name="message" id="message" required></textarea>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Message</label>
                                    </div>
                                </div>
                                <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.6s">
                                    <button type="submit" name="mail" class="btn dream-btn">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->


<?php
require('includes/footer.php');
?>