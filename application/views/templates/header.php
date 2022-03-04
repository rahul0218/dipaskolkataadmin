<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>Dishari Institute of Paramedical & Allied Health Science Kolkata</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/bootstrap/bootstrap.min.css');?>">
  <!-- slick slider -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/slick/slick.css');?>">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/themify-icons/themify-icons.css');?>">
  <!-- animation css -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/animate/animate.css');?>">
  <!-- aos -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/aos/aos.css');?>">
  <!-- venobox popup -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/venobox/venobox.css');?>">

  <!-- Main Stylesheet -->
  <link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet">

  <!--Favicon-->
  <link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.png');?>" type="image/x-icon">
  <link rel="icon" href="<?php echo base_url('assets/images/favicon.png');?>" type="image/x-icon">

</head>

<body>
  <!-- preloader start -->
  <div class="preloader">
    <img src="<?php echo base_url('assets/images/preloader.gif');?>" alt="preloader">
  </div>
  <!-- preloader end -->

<!-- header -->
<header class="fixed-top header">
  <!-- top header -->
  <div class="top-header py-2 bg-white">
    <div class="container">
      <div class="row no-gutters">
      <div class="col-lg-4 text-center text-lg-left">
        </div>
        <div class="col-lg-8 text-center text-lg-right">
          <ul class="list-inline">
          <a class="text-color mr-3" href="callto:+918250685419"><strong>CALL</strong> 033 71200000</a>
          <a class="text-color mr-3" href="callto:+918250685419"><strong>CALL</strong> +91 825 068 5419</a>
          <a href="mailto:dishariparamedical.kolkata@gmail.com" class="text-color mr-3">dishariparamedical.kolkata@gmail.com</a>
            <ul class="list-inline d-inline">
              <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-facebook"></i></a></li>
              <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-twitter-alt"></i></a></li>
              <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-linkedin"></i></a></li>
              <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-instagram"></i></a></li>
            </ul>
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="<?php base_url();?>notice">notice</a></li>
            <!-- <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="<?php base_url();?>research">research</a></li>
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="<?php base_url();?>scholarship">SCHOLARSHIP</a></li> -->
            <!-- <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#" data-toggle="modal" data-target="#loginModal">login</a></li>
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#" data-toggle="modal" data-target="#signupModal">register</a></li> -->
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- navbar -->
  <div class="navigation w-100">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark p-0">
        <a class="navbar-brand" href="<?php base_url();?>home"><img src="<?php echo base_url('assets/images/logo.png');?>" alt="logo" width="330" height="55"></a>
        <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation"
          aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navigation">
          <ul class="navbar-nav ml-auto text-center">
            <li class="nav-item @@home">
              <a class="nav-link" href="<?php base_url();?>home">Home</a>
            </li>
            <li class="nav-item @@about">
              <a class="nav-link" href="<?php base_url();?>about">About</a>
            </li>
            <li class="nav-item @@courses">
              <a class="nav-link" href="<?php base_url();?>courses">COURSES</a>
            </li>
            <!-- <li class="nav-item @@events">
              <a class="nav-link" href="<?php base_url();?>events">EVENTS</a>
            </li> -->
            <!-- <li class="nav-item @@blog">
              <a class="nav-link" href="<?php base_url();?>blog">BLOG</a>
            </li> -->
            <!-- <li class="nav-item dropdown view">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Pages
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php base_url();?>teacher">Teacher</a>
                <a class="dropdown-item" href="<?php base_url();?>teacher-single">Teacher Single</a>
                <a class="dropdown-item" href="<?php base_url();?>notice">Notice</a>
                <a class="dropdown-item" href="<?php base_url();?>notice-single">Notice Details</a>
                <a class="dropdown-item" href="<?php base_url();?>research">Research</a>
                <a class="dropdown-item" href="<?php base_url();?>scholarship">Scholarship</a>
                <a class="dropdown-item" href="<?php base_url();?>course-single">Course Details</a>
                <a class="dropdown-item" href="<?php base_url();?>event-single">Event Details</a>
                <a class="dropdown-item" href="<?php base_url();?>blog-single">Blog Details</a>
              </div>
            </li> -->
            <li class="nav-item @@contact">
              <a class="nav-link" href="<?php base_url();?>contact">CONTACT</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
</header>
<!-- /header -->
<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Register</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login">
                    <form action="#" class="row">
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="signupPhone" name="signupPhone" placeholder="Phone">
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="signupName" name="signupName" placeholder="Name">
                        </div>
                        <div class="col-12">
                            <input type="email" class="form-control mb-3" id="signupEmail" name="signupEmail" placeholder="Email">
                        </div>
                        <div class="col-12">
                            <input type="password" class="form-control mb-3" id="signupPassword" name="signupPassword" placeholder="Password">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">SIGN UP</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Login</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" class="row">
                    <div class="col-12">
                        <input type="text" class="form-control mb-3" id="loginPhone" name="loginPhone" placeholder="Phone">
                    </div>
                    <div class="col-12">
                        <input type="text" class="form-control mb-3" id="loginName" name="loginName" placeholder="Name">
                    </div>
                    <div class="col-12">
                        <input type="password" class="form-control mb-3" id="loginPassword" name="loginPassword" placeholder="Password">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">LOGIN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

