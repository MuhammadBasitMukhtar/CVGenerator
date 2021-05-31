<?php
$title = "Resume Templates";
require('includes/header.php');
if(!isset($_SESSION)) 
    { 
        ; 
    } 
$msg = '';
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
                            <h2 class="w-text title wow fadeInUp" data-wow-delay="0.2s">Resume Templates</h2>
                            <ol class="breadcrumb justify-content-center wow fadeInUp" data-wow-delay="0.4s">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Resume Templates</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Welcome Area End ##### -->

    <section class="blog-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Single Blog Post -->
                <div class="col-12 col-sm-6">
                    <div class="single-blog-area wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Post Thumbnail -->
                        <div class="blog_thumbnail">
                            <img src="img/resume1.png" alt="">
                        </div>
                        <!-- Post Content -->
                        <div class="blog-content">
                            <!-- Dream Dots -->
                            <div class="dream-dots mt-30">
                                <span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                            </div>
                            <div class="post-meta">
                                <p>By <a href="data.php?cv=1" class="post-author">Admin</a> <a href="#">Mar 20, 2021</a> </p>
                            </div>
                            <a href="data.php?cv=1" class="post-title">
                                <h4>Simple Modern Resume</h4>
                            </a>
                            <p>This template is simple yet modern and powerful and give stunning look to your resume.</p>
                            <a href="data.php?cv=1" class="btn dream-btn mt-15">Use This Template</a>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="col-12 col-sm-6">
                    <div class="single-blog-area wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Post Thumbnail -->
                        <div class="blog_thumbnail">
                            <img src="img/template.png" alt="">
                        </div>
                        <!-- Post Content -->
                        <div class="blog-content">
                            <!-- Dream Dots -->
                            <div class="dream-dots mt-30">
                                <span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                            </div>
                            <div class="post-meta">
                                <p>By <a href="data.php?cv=4" class="post-author">Admin</a> <a href="#">Mar 20, 2021</a> </p>
                            </div>
                            <a href="data.php?cv=4" class="post-title">
                                <h4>Simple Modern Resume 2</h4>
                            </a>
                            <p>This template is simple yet modern and powerful and give stunning look to your resume.</p>
                            <a href="data.php?cv=4" class="btn dream-btn mt-15">Use This Template</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
require('includes/footer.php');
?>