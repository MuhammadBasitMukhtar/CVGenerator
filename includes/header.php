<?php

require('includes/connection.php');
require('includes/functions.php');
$user = new users();
$con = $user->DB;
$msg = '';
$engpath = '';
$frpath = '';
$grpath = '';
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
if(isset($_SERVER['HTTP_REFERER']))
{
    if(basename($_SERVER['HTTP_REFERER']) == '.php')
    {
        switch ($path) {
            case 'fr':
                $engpath = '../'.basename($_SERVER['HTTP_REFERER']);
                $frpath = '#';
                $grpath = '../gr/'.basename($_SERVER['HTTP_REFERER']);
                break;
        
            case 'gr':
                $engpath = '../'.basename($_SERVER['HTTP_REFERER']);
                $frpath = '../fr/'.basename($_SERVER['HTTP_REFERER']);
                $grpath = '#';
                break;
            
            default:
            $engpath = '#';
            $frpath = 'fr/'.basename($_SERVER['HTTP_REFERER']);
            $grpath = 'gr/'.basename($_SERVER['HTTP_REFERER']);
                break;
        }
    }
    else {
        switch ($path) {
            case 'fr':
                $engpath = '../index.php';
                $frpath = '#';
                $grpath = '../gr/index.php';
                break;
        
            case 'gr':
                $engpath = '../index.php';
                $frpath = '../fr/index.php';
                $grpath = '#';
                break;
            
            default:
                $engpath = '#';
                $frpath = 'fr/index.php';
                $grpath = 'gr/index.php';
                break;
        }
    }
}

if(isset($_GET['msg']))
{
    switch ($_GET['msg']) {
        case 1:
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
          unset($_GET['msg']);
            break;
        
        case 2:
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
        Logged in Successfully!
      </div>
    </div>
            
          ';
          unset($_GET['msg']);
          break;

          case 3:
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
        Wrong Email or Password!
      </div>
    </div>
            
          ';
          unset($_GET['msg']);
            break;
        case 'logout':
                // set the expiration date to one hour ago
                $user->logout();
                unset($_GET['msg']);
                //header("location: index.php");
                
                break;

        default:
        
            break;
    }
    
}
if(isset($_POST['Login']))
{
    $user->login($_POST['email'],$_POST['pass'])   ; 
}

    else if(isset($_POST['Register']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $data = array($name,$email,$pass);
        $user->insert($data);
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
    You are registered Successfully! Login to continue.
  </div>
</div>
        
      ';
    }
?>


<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title><?php echo $title ?> - Quatrefoil</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400&display=swap" rel="stylesheet">
    

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="js/jquery.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">

    <!-- Responsive Stylesheet -->
    <link rel="stylesheet" href="css/responsive.css">
    

</head>

<body class="light-version">

    <?php if($msg != ''){echo $msg; $msg = "";} ?>
    <!-- Preloader -->
    <div id="preloader">
        <div class="preload-content">
            <div id="dream-load"></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area wow fadeInDown" data-wow-delay="0.2s">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="dreamNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="#"><img src="img/logo-long-white.png" alt="logo" width="200"></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul id="nav">
                               
                                <li><a href="resumes.php">Resume Templates</a></li>
                                <li><a href="cv.php">CV Templates</a></li>
                                <li><a href="cover.php">Cover Letter Templates</a></li>
                                <!-- <li><a href="#">Language</a>
                                    <ul class="dropdown">
                                        <li><a href="<?php echo $engpath ?>"><img src="img/icons/usa.png" width="18" height="18" style="margin-right: 5px">English US</a></li>
                                        <li><a href="<?php echo $frpath ?>"><img src="img/icons/france.png" width="18" height="18" style="margin-right: 5px">French</a></li>
                                        <li><a href="<?php echo $grpath ?>"><img src="img/icons/germany.png" width="18" height="18" style="margin-right: 5px">Germany</a></li>
                                    </ul>
                                </li> -->
                            </ul>

                            <!-- Button -->
                            <?php
                            if(!isset($_COOKIE['user']))
                            {
                                echo '<a href="#test-popup" class="open-popup-link btn login-btn mr-im">Log in</a>
                                <a href="#signup-popup" class="open-signup-link btn login-btn">Get Started</a>
                                ';
                            }
                            else {
                                echo '<ul style="text-transform: lowercase; margin-left: 10px;">
                                        <li><a href="#">'.$_COOKIE['user'].'</a>
                                            <ul class="dropdown">
                                                <li><a href="#">Deactivate</a></li>
                                                <li><a href="?msg=logout">Logout</a></li>    
                                            </ul>
                                        </li>
                                    </ul>';
                            }
                            
                            ?>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- Login popup form  -->

    <div id="test-popup" class="white-popup mfp-hide">
      <div class="top-form-header">
          <h4>Login Form</h4>
      </div>
      <form action="" name="login" method="post" id="main_login_form" novalidate="">
            <div class="row">
             
               <div class="col-12 col-md-12">
                    <div class="group">
                        <input type="email" name="email" id="name0" required="">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Email</label>
                    </div>
                </div>
                <div class="col-12 col-md-12">
                    <div class="group">
                        <input type="password" name="pass" id="name1" required="">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Password</label>
                    </div>
                </div>
                
                <div class="col-12 col-sm-5 text-left ">
                    <button type="submit" name="Login" class="btn dream-btn">Login</button>
                </div>
                
                <!-- <div class="col-12 col-sm-7 text-left">
                    <p class="mb-0 mt-10">Don't have an account? <a href="#signup-popup" >Sign up</a></p>
                </div> -->
            </div>
        </form>

       
    </div>
    
    <!-- signup popup form so: -->

    <div id="signup-popup" class="white-popup mfp-hide">
      <div class="top-form-header">
          <h4>Create an account!</h4>
      </div>
      <form action="" name="register" method="post" id="main_Signup_form" novalidate="">
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="group">
                        <input type="text" name="name" id="name3" required="">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Name</label>
                    </div>
                </div>
               <div class="col-12 col-md-12">
                    <div class="group">
                        <input type="text" name="email" id="name4" required="">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Email</label>
                    </div>
                </div>
                <div class="col-12 col-md-12">
                    <div class="group">
                        <input type="password" name="password" id="name5" required="">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Password</label>
                    </div>
                </div>
                <div class="col-12 col-md-12">
                    <div class="group">
                        <input type="password" name="pass" id="name6" required="">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Confirm Password</label>
                    </div>
                </div>
                
                <div class="col-12 col-sm-5 text-left ">
                    <button type="submit" name="Register" class="btn dream-btn">Register</button>
                </div>
                <!-- <div class="col-12 col-sm-7 text-left">
                    <p class="mb-0 mt-10">Already have an account? <a href="#test-popup" >Sign in</a></p>
                </div> -->
            </div>
        </form>

       
    </div>

    
