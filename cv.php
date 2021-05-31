<?php
$title = "CV Templates";
require('includes/header.php');
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
                            <h2 class="w-text title wow fadeInUp" data-wow-delay="0.2s"> CV Templates</h2>
                            <ol class="breadcrumb justify-content-center wow fadeInUp" data-wow-delay="0.4s">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">CV Templates</li>
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
                            <img src="img/cv1.png" alt="" width="200" style="height: 550px !important">
                        </div>
                        <!-- Post Content -->
                        <div class="blog-content">
                            <!-- Dream Dots -->
                            <div class="dream-dots mt-30">
                                <span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                            </div>
                            <div class="post-meta">
                                <p>By <a href="data.php?cv=2" class="post-author">Admin</a> <a href="#">Mar 20, 2021</a> <a href="#" class="post-comments">7 comments</a></p>
                            </div>
                            <a href="data.php?cv=2" class="post-title">
                                <h4>Elegant CV Theme</h4>
                            </a>
                            <p>An elegant cv theme for professionals, who want an elegant designed cv to ace their interviews.</p>
                            <a href="data.php?cv=2" class="btn dream-btn mt-15">Use This Template</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6">
                    <div class="single-blog-area wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Post Thumbnail -->
                        <div class="blog_thumbnail">
                            <img src="img/cv2.png" alt="" width="200" style="height: 550px !important">
                        </div>
                        <!-- Post Content -->
                        <div class="blog-content">
                            <!-- Dream Dots -->
                            <div class="dream-dots mt-30">
                                <span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                            </div>
                            <div class="post-meta">
                                <p>By <a href="data.php?cv=3" class="post-author">Admin</a> <a href="#">Mar 20, 2021</a> <a href="#" class="post-comments">7 comments</a></p>
                            </div>
                            <a href="data.php?cv=3" class="post-title">
                                <h4>Colourful Professional CV</h4>
                            </a>
                            <p>An professional cv theme for colour seekers, who want a colourful cv to help them in their interviews.</p>
                            <a href="data.php?cv=3" class="btn dream-btn mt-15">Use This Template</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
require('includes/footer.php');
?>