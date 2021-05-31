<?php
$title = "Cover Templates";
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
                            <h2 class="w-text title wow fadeInUp" data-wow-delay="0.2s">Cover Templates</h2>
                            <ol class="breadcrumb justify-content-center wow fadeInUp" data-wow-delay="0.4s">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Cover Templates</li>
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
                            <img src="img/cover1.png" alt="">
                        </div>
                        <!-- Post Content -->
                        <div class="blog-content">
                            <!-- Dream Dots -->
                            <div class="dream-dots mt-30">
                                <span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                            </div>
                            <div class="post-meta">
                                <p>By <a href="#" class="post-author">Admin</a> <a href="#">Mar 21, 2021</a> <a href="#" class="post-comments">7 comments</a></p>
                            </div>
                            <a href="#" class="post-title">
                                <h4>Cover Letter Template 1</h4>
                            </a>
                            <p>A simple yet modern and elegant design.</p>
                            <a href="cover-build.php?cover=1" class="btn dream-btn mt-15">Use This Template</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6">
                    <div class="single-blog-area wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Post Thumbnail -->
                        <div class="blog_thumbnail">
                            <img src="img/cover2.png" alt="">
                        </div>
                        <!-- Post Content -->
                        <div class="blog-content">
                            <!-- Dream Dots -->
                            <div class="dream-dots mt-30">
                                <span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                            </div>
                            <div class="post-meta">
                                <p>By <a href="#" class="post-author">Admin</a> <a href="#">Mar 21, 2021</a> <a href="#" class="post-comments">7 comments</a></p>
                            </div>
                            <a href="#" class="post-title">
                                <h4>Cover Letter Template 2</h4>
                            </a>
                            <p>Theme With Simplicity and EleganceModèle de couverture avec un design simple.</p>
                            <a href="cover-build.php?cover=2" class="btn dream-btn mt-15">Use this TemplateUtilisez ce modèle</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
require('includes/footer.php');
?>