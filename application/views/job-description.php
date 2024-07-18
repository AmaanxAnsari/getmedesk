<!DOCTYPE html>
<html lang="zxx">

<head>
  <!-- meta tag -->
  <meta charset="utf-8" />
  <title>GetMeDesk -
    <?php echo $job_description[0]->title ?>
  </title>
  <meta name="description" content="" />
  <!-- responsive tag -->
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- favicon -->
  <link rel="apple-touch-icon" href="apple-touch-icon.png" />
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets') ?>/images/fav.png" />
  <!-- Bootstrap v4.4.1 css -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets') ?>/css/bootstrap.min.css" />
  <!-- font-awesome css -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets') ?>/css/font-awesome.min.css" />
  <!-- flaticon css -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets') ?>/fonts/flaticon.css" />
  <!-- animate css -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets') ?>/css/animate.css" />
  <!-- owl.carousel css -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets') ?>/css/owl.carousel.css" />
  <!-- off canvas css -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets') ?>/css/off-canvas.css" />
  <!-- magnific popup css -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets') ?>/css/magnific-popup.css" />
  <!-- Main Menu css -->
  <link rel="stylesheet" href="<?php echo base_url('assets') ?>/css/rsmenu-main.css" />
  <!-- nivo slider CSS -->
  <link rel="stylesheet" type="text/css"
    href="<?php echo base_url('assets') ?>/inc/custom-slider/css/nivo-slider.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets') ?>/inc/custom-slider/css/preview.css" />

  <link rel="stylesheet" href="<?php echo base_url('assets') ?>/css/globalStyle.css" />

  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <!-- spacing css -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets') ?>/css/rs-spacing.css" />
  <!-- style css -->
  <link rel="stylesheet" type="text/css" href="../style.css" />
  <!-- This stylesheet dynamically changed from style.less -->
  <!-- responsive css -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets') ?>/css/responsive.css" />
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-G7D54H61N3"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag("js", new Date());

    gtag("config", "G-G7D54H61N3");
  </script>
</head>

<body class="home-blue-color">
  <div class="offwrap"></div>

  <!-- Preloader start here-->
  <div id="pre-load">
    <div id="loader" class="loader">
      <div class="loader-container">
        <div class="loader-icon">
          <img src="<?php echo base_url('assets') ?>/images/fav.png" alt="Bizup Consulting Business" />
        </div>
      </div>
    </div>
  </div>
  <!--Preloader area end here -->

  <!-- Main content Start -->
  <div class="main-content">
    <!--Full width header Start-->
    <div class="full-width-header">
      <!--Header Start-->
      <header id="rs-header" class="rs-header style3">
        <!-- Topbar Area Start -->
        <div class="topbar-area style2">
          <div class="container custom">
            <div class="row-table">
              <div class="col-cell">
                <div class="header-logo">
                  <div class="logo-area">
                    <a href="index.html">
                      <img class="normal-logo" src="<?php echo base_url('assets') ?>/images/logo-dark2.png"
                        alt="logo" />
                      <img class="sticky-logo" src="<?php echo base_url('assets') ?>/images/logo-dark.png" alt="logo" />
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-cell">
                <div class="header-quote">
                  <ul class="rs-address-area">
                    <li class="address-list">
                      <div class="info-icon">
                        <i class="flaticon-location"></i>
                      </div>
                      <div class="info-content">
                        <div class="info-title"><a href="#">Location</a></div>
                        <div class="info-des">
                          Hinjewadi, Pune, MH 411045, IND
                        </div>
                      </div>
                    </li>
                    <li class="address-list">
                      <div class="info-icon">
                        <i class="flaticon-email"></i>
                      </div>
                      <div class="info-content">
                        <div class="info-title"><a href="#">Mail us</a></div>
                        <div class="info-des">
                          <a href="mailto:info@getmedesk.com">info@getmedesk.com</a>
                        </div>
                      </div>
                    </li>
                    <li class="address-list">
                      <div class="info-icon">
                        <i class="flaticon-call"></i>
                      </div>
                      <div class="info-content">
                        <div class="info-title"><a href="#">Call us</a></div>
                        <div class="info-des">
                          <a href="tel:(+191)8390380888">
                            (+191) 8390 380 888</a>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Topbar Area End -->

        <!-- Menu Start -->
        <div class="menu-area menu-sticky">
          <div class="container custom box-layout">
            <div class="row-table">
              <div class="col-cell header-logo">
                <div class="logo-area">
                  <a href="index.html">
                    <img src="<?php echo base_url('assets') ?>/images/logo-dark.png" alt="logo" />
                  </a>
                </div>
              </div>
              <div class="col-cell menu-responsive">
                <div class="rs-menu-area">
                  <div class="main-menu">
                    <nav class="rs-menu hidden-md">
                      <ul class="nav-menu">
                        <li><a href="<?= base_url('home') ?>">Home</a></li>
                        <li><a href="<?= base_url('home') ?>#rs-about">About</a></li>
                        <li><a href="<?= base_url('home') ?>#rs-services">Services</a></li>
                        <li><a href="<?= base_url('home') ?>#rs-project">Clients</a></li>
                        <li><a href="<?= base_url('home') ?>#rs-contact">Contact</a></li>
                        <li><a href="<?= base_url('job_list') ?>">Jobs</a></li>
                      </ul>
                      <!-- //.nav-menu -->
                    </nav>
                  </div>
                  <!-- //.main-menu -->
                </div>
              </div>
              <div class="col-cell rightbar-menu">
                <div class="expand-btn-inner">
                  <ul>
                    <li class="search-parent">
                      <a class="hidden-xs rs-search" data-bs-toggle="modal" data-bs-target="#searchModal" href="#">
                        <i class="flaticon-search"></i>
                      </a>
                    </li>
                    <li class="humburger">
                      <a id="nav-expander" class="nav-expander bar" href="#">
                        <div class="bar">
                          <span class="dot1"></span>
                          <span class="dot2"></span>
                          <span class="dot3"></span>
                          <span class="dot4"></span>
                          <span class="dot5"></span>
                          <span class="dot6"></span>
                          <span class="dot7"></span>
                          <span class="dot8"></span>
                          <span class="dot9"></span>
                        </div>
                      </a>
                    </li>
                  </ul>
                  <div class="toolbar-sl-share">
                    <ul>
                      <li>
                        <a href="https://www.linkedin.com/company/getmedesk/?viewAsMember=true"><i
                            class="fa fa-linkedin"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Menu End -->
        <!-- Canvas Menu start -->
        <nav class="right_menu_togle hidden-md">
          <div class="close-btn">
            <a id="nav-close" class="nav-close">
              <div class="line">
                <span class="line1"></span>
                <span class="line2"></span>
              </div>
            </a>
          </div>
          <div class="canvas-logo">
            <a href="index.html"><img src="<?php echo base_url('assets') ?>/images/logo.png" alt="logo" /></a>
          </div>
          <div class="offcanvas-text">
            <p>
              We denounce with righteous indig nation in and dislike men who
              are so beguiled and to demo realized, that they data forest see
              best business consulting wordpress theme 2021.
            </p>
          </div>
          <div class="media-img">
            <img src="<?php echo base_url('assets') ?>/images/off2.jpg" alt="Images" />
          </div>
          <div class="canvas-contact">
            <div class="address-area">
              <div class="address-list">
                <div class="info-icon">
                  <i class="flaticon-location"></i>
                </div>
                <div class="info-content">
                  <h4 class="title">Address</h4>
                  <em>05 kandi BR. New York</em>
                </div>
              </div>
              <div class="address-list">
                <div class="info-icon">
                  <i class="flaticon-email"></i>
                </div>
                <div class="info-content">
                  <h4 class="title">Email</h4>
                  <em><a href="mailto:support@rstheme.com">support@rstheme.com</a></em>
                </div>
              </div>
              <div class="address-list">
                <div class="info-icon">
                  <i class="flaticon-call"></i>
                </div>
                <div class="info-content">
                  <h4 class="title">Phone</h4>
                  <em>+019988772</em>
                </div>
              </div>
            </div>
            <ul class="social">
              <li>
                <a href="#"><i class="fa fa-facebook"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-twitter"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-pinterest-p"></i></a>
              </li>
            </ul>
          </div>
        </nav>
        <!-- Canvas Menu end -->

        <!-- Canvas Mobile Menu start -->
        <nav class="right_menu_togle mobile-navbar-menu" id="mobile-navbar-menu">
          <div class="close-btn">
            <a id="nav-close2" class="nav-close">
              <div class="line">
                <span class="line1"></span>
                <span class="line2"></span>
              </div>
            </a>
          </div>
          <ul class="nav-menu onepage-menu onpage-ul">
            <li class="current-menu-item"><a href="#rs-header">Home</a></li>
            <li><a href="#rs-about">About</a></li>
            <li><a href="#rs-services">Services</a></li>
            <li><a href="#rs-project">Portfolios</a></li>
            <li><a href="#rs-blog">Blog</a></li>
            <li><a href="#rs-contact">Contact</a></li>
          </ul>
          <!-- //.nav-menu -->
          <div class="canvas-contact">
            <div class="address-area">
              <div class="address-list">
                <div class="info-icon">
                  <i class="flaticon-location"></i>
                </div>
                <div class="info-content">
                  <h4 class="title">Address</h4>
                  <em>05 kandi BR. New York</em>
                </div>
              </div>
              <div class="address-list">
                <div class="info-icon">
                  <i class="flaticon-email"></i>
                </div>
                <div class="info-content">
                  <h4 class="title">Email</h4>
                  <em><a href="mailto:support@rstheme.com">support@rstheme.com</a></em>
                </div>
              </div>
              <div class="address-list">
                <div class="info-icon">
                  <i class="flaticon-call"></i>
                </div>
                <div class="info-content">
                  <h4 class="title">Phone</h4>
                  <em>+019988772</em>
                </div>
              </div>
            </div>
          </div>
        </nav>
        <!-- Canvas Mobile Menu end -->
      </header>
      <!--Header End-->
    </div>
    <!--Full width header End-->
  </div>
  <!-- Main content End -->

  <section class="job-description-area ptb-100">
    <!-- <?php print_r($job_description) ?> -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="hot-jobs-list">
            <div class="row align-items-center">
              <div class="col-lg-2">
                <div class="hot-jobs-img">
                  <?php $company_logo = $this->User_model->get_data_by_id("company", $job_description[0]->company_id, "id"); ?>
                  <img src="<?php echo base_url('uploads') ?>/<?php echo $company_logo[0]->logo; ?>" alt="logo" />
                </div>
              </div>

              <div class="col-lg-6">
                <div class="hot-jobs-content">
                  <h3>
                    <?php echo $job_description[0]->title ?>
                  </h3>
                  <span class="sub-title">
                    <strong>
                      <?= $company_logo[0]->company_name ?>
                    </strong>
                    <div>
                      <small>
                        <?= $job_description[0]->category ?>
                      </small>

                    </div>
                  </span>

                  <ul>
                    <li><span>Vacancy:</span>
                      <?= $job_description[0]->no_of_openings ?>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="hot-jobs-btn">
                  <!-- <a href="#" class="default-btn">Apply Now</a> -->

                  <a class="default-btn" type="button" data-bs-toggle="modal" data-bs-target="#applynow">Apply Now</a>

                  <div class="modal fade" id="applynow" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Fill Basic Details</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <!-- <?php print_r($job_description) ?> -->
                          <form action="<?php echo base_url('add_job_candidates/') . $job_description[0]->id ?>"
                            method="POST" enctype="multipart/form-data">
                            <h3>Basic Info</h3>

                            <div class="row">
                              <div class="form-group">
                                <input name="job_id" type="hidden" class="form-control" id="exampleFormControlInput1"
                                  value="<?php echo $job_description[0]->id; ?>">
                              </div>
                              <div class="col-lg-12 col-md-12">

                                <div class="form-group">
                                  <label for="exampleFormControlInput1">Title *</label>
                                  <input name="title" type="text" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Enter Job Title" value="<?php echo $job_description[0]->title ?>"
                                    disabled>
                                </div>
                              </div>
                              <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                  <label>First Name</label>
                                  <input class="form-control" type="text" name="candidate_fname" required />
                                </div>
                              </div>


                              <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                  <label>Last Name</label>
                                  <input class="form-control" type="text" name="candidate_lname" required />
                                </div>
                              </div>

                              <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                  <label>Email</label>
                                  <input class="form-control" type="email" name="candidate_email" required />
                                </div>
                              </div>

                              <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                  <label>Phone</label>
                                  <input class="form-control" type="text" name="candidate_phone" required />
                                </div>
                              </div>


                              <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                  <label>Resume</label>
                                  <input class="form-control" type="file" name="upload_resume" required />
                                </div>
                              </div>

                            </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-success">Save changes</button>
                        </div>
                        </form>


                      </div>
                    </div>
                  </div>

                  <p><span>Deadline: </span>
                    <?php
                    $original_date = $job_description[0]->deadline;
                    $date_object = DateTime::createFromFormat('Y-m-d', $original_date);
                    $deadline_date = $date_object->format('d-m-Y');
                    ?>
                    <?= $deadline_date ?>
                  </p>
                </div>

              </div>
              <!--Apply Now Modal -->

            </div>
          </div>

          <div class="job-description-content">
            <?= $job_description[0]->description ?>
            <!-- <h3>Job Description</h3>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore
              et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
              Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit
              amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
              aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Lorem ipsum
              dolor sit amet, consetetur</p>

            <h4>Responsibilities:</h4>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A nisi aspernatur modi doloribus dolorem quidem!
              Neque placeat numquam vel magni ipsam, similique eligendi sunt laudantium, nihil alias soluta eos in Lorem
              ipsum, dolor sit amet consectetur adipisicing elit. Et nam eveniet quasi.</p>

            <ul>
              <li>Stet clita kasd gubergren, no sea takimata sanctus</li>
              <li>Lorem ipsum dolor sit amet lorem ipsum dolor sit amet</li>
              <li>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor</li>
              <li>Aliquyam erat, sed diam voluptua</li>
            </ul>

            <h4>Qualifications:</h4>

            <ul>
              <li>Stet clita kasd gubergren, no sea takimata sanctus</li>
              <li>Lorem ipsum dolor sit amet lorem ipsum dolor sit amet</li>
              <li>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor</li>
              <li>Aliquyam erat, sed diam voluptua</li>
            </ul>

            <h4>Competencies:</h4>

            <ul>
              <li>Stet clita kasd gubergren, no sea takimata sanctus</li>
              <li>Lorem ipsum dolor sit amet lorem ipsum dolor sit amet</li>
              <li>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor</li>
              <li>Aliquyam erat, sed diam voluptua</li>
              <li>Stet clita kasd gubergren, no sea takimata sanctus</li>
              <li>Lorem ipsum dolor sit amet lorem ipsum dolor sit amet, </li>
              <li>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor</li>
              <li>Aliquyam erat, sed diam voluptua.</li>
            </ul>

            <h4>Experience Requirements:</h4>

            <ul>
              <li>Stet clita kasd gubergren, no sea takimata sanctus</li>
              <li>Lorem ipsum dolor sit amet lorem ipsum dolor sit amet</li>
              <li>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor</li>
            </ul> -->
          </div>
        </div>

        <div class="col-lg-4">
          <div class="job-description-sidebar">
            <div class="job-widget">
              <h3>Share This Job</h3>

              <ul class="social-icon">
                <li>
                  <a href="#">
                    <i class='bx bxl-facebook'></i> </a>
                </li>
                <li>
                  <a href="#">
                    <i class="bx bxl-instagram"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="bx bxl-linkedin-square"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="bx bxl-twitter"></i>
                  </a>
                </li>
              </ul>
            </div>

            <div class="job-widget">
              <h3>Job Overview</h3>

              <ul class="overview">
                <li>
                  Published On
                  <span>:
                    <?php
                    $created_datetime = $job_description[0]->created_date;
                    $timestamp = strtotime($created_datetime);
                    $date = date('d-m-Y', $timestamp);

                    ?>
                    <?php echo $date ?>
                  </span>
                </li>
                <li>
                  Vacancy
                  <span>:
                    <?= $job_description[0]->no_of_openings ?>
                  </span>
                </li>
                <li>
                  Job Type
                  <span>:
                    <?= $job_description[0]->job_type ?>
                  </span>
                </li>
                <li>
                  Experience
                  <span>:
                    <?= $job_description[0]->min_experience ?> -
                    <?= $job_description[0]->max_experience ?> Year
                  </span>
                </li>
                <li>
                  Job Location
                  <span>:
                    <?= $job_description[0]->location ?>
                  </span>
                </li>
                <li>
                  Category
                  <span>:
                    <?= $job_description[0]->category ?>
                  </span>
                </li>
                <li>
                  Gender
                  <span>:
                    <?= $job_description[0]->gender ?>
                  </span>
                </li>
                <li>
                  Salary
                  <span>: ₹
                    <?= $job_description[0]->min_salary ?> -
                    <?= $job_description[0]->max_salary ?> LPA
                  </span>
                </li>
                <li>
                  Application Due
                  <span>:
                    <?php
                    $original_date = $job_description[0]->deadline;
                    $date_object = DateTime::createFromFormat('Y-m-d', $original_date);
                    $deadline_date = $date_object->format('d-m-Y');
                    ?>
                    <?= $deadline_date ?>

                  </span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer Start -->
  <footer id="rs-footer" class="rs-footer style1 footer-home3-style">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-12 col-sm-12 md-mb-10">
            <div class="footer-logo mb-40">
              <a href="index.html"><img src="<?php echo base_url('assets') ?>/images/logo-dark3.png" alt="" /></a>
            </div>
            <div class="textwidget white-color pb-40">
              <p>
                GetMeDesk is one of the leading human resources and
                recruitment services company based out of Pune. We specialize
                in IT recruitments.
              </p>
            </div>
            <ul class="footer-social md-mb-30">
              <li>
                <a href="https://www.linkedin.com/company/getmedesk/?viewAsMember=true" target="_blank"><span><i
                      class="fa fa-linkedin"></i></span></a>
              </li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-12 col-sm-12 md-mb-10 pl-55 md-pl-15">
            <h3 class="footer-title">Our Services</h3>
            <ul class="site-map">
              <li><a href="business-planning.html">Permanent Hiring</a></li>
              <li><a href="tax-strategy.html">Contractual Hiring</a></li>
              <li><a href="financial-advices.html">Temporary Hiring</a></li>
              <li><a href="insurance-strategy.html">Bulk Recruitement</a></li>
              <li><a href="manage-investment.html">Execuitive Search</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-12 col-sm-12 md-mb-10">
            <h3 class="footer-title">Contact Info</h3>
            <ul class="address-widget">
              <li>
                <i class="flaticon-location"></i>
                <div class="desc">
                  601, White Square, Hinjawadi<br />
                  Pune, India
                </div>
              </li>
              <li>
                <i class="flaticon-call"></i>
                <div class="desc">
                  <a href="tel:(+91)88390380888">(+91)883 90380 888</a>
                </div>
              </li>
              <li>
                <i class="flaticon-email"></i>
                <div class="desc">
                  <a href="mailto:info@getmedesk.com">info@getmedesk.com</a>
                </div>
              </li>
              <li>
                <i class="flaticon-clock-1"></i>
                <div class="desc">Office Hours: 10AM - 6PM</div>
              </li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-12 col-sm-12">
            <h3 class="footer-title">Newsletter</h3>
            <p class="widget-desc white-color">
              Stay up to update with our latest news and products.
            </p>
            <p>
              <input type="email" name="EMAIL" placeholder="Your email address" required="" />
              <input type="submit" value="Subscribe Now" />
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row y-middle">
          <div class="col-lg-6 md-mb-10 text-lg-end text-center order-last">
            <ul class="copy-right-menu">
              <li><a href="#rs-header">Home</a></li>
              <li><a href="#rs-about">About</a></li>
              <li><a href="#rs-contact">Contact</a></li>
            </ul>
          </div>
          <div class="col-lg-6">
            <div class="copyright text-lg-start text-center">
              <p>
                © 2022 GetMeDesk - A part of ScaleFull Technologies LLP. All
                Rights Reserved.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer End -->

  <!-- start scrollUp  -->
  <div id="scrollUp" class="blue-color">
    <i class="fa fa-angle-up"></i>
  </div>
  <!-- End scrollUp  -->

  <!-- Search Modal Start -->
  <div class="modal fade search-modal" id="searchModal" tabindex="-1">
    <button type="button" class="close" data-bs-dismiss="modal">
      <span class="flaticon-cross"></span>
    </button>
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="search-block clearfix">
          <form>
            <div class="form-group">
              <input class="form-control" placeholder="Search Here..." type="text" />
              <button type="submit" value="Search">
                <i class="flaticon-search"></i>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Search Modal End -->

  <!-- modernizr js -->
  <script src="<?php echo base_url('assets') ?>/js/modernizr-2.8.3.min.js"></script>
  <!-- jquery latest version -->
  <script src="<?php echo base_url('assets') ?>/js/jquery.min.js"></script>
  <!-- Bootstrap v4.4.1 js -->
  <script src="<?php echo base_url('assets') ?>/js/bootstrap.bundle.min.js"></script>
  <!-- op nav js -->
  <script src="<?php echo base_url('assets') ?>/js/jquery.nav.js"></script>
  <!-- isotope.pkgd.min js -->
  <script src="<?php echo base_url('assets') ?>/js/isotope.pkgd.min.js"></script>
  <!-- owl.carousel js -->
  <script src="<?php echo base_url('assets') ?>/js/owl.carousel.min.js"></script>
  <!-- wow js -->
  <script src="<?php echo base_url('assets') ?>/js/wow.min.js"></script>
  <!-- Skill bar js -->
  <script src="<?php echo base_url('assets') ?>/js/skill.bars.jquery.js"></script>
  <!-- imagesloaded js -->
  <script src="<?php echo base_url('assets') ?>/js/imagesloaded.pkgd.min.js"></script>
  <!-- waypoints.min js -->
  <script src="<?php echo base_url('assets') ?>/js/waypoints.min.js"></script>
  <!-- counterup.min js -->
  <script src="<?php echo base_url('assets') ?>/js/jquery.counterup.min.js"></script>
  <!-- magnific popup js -->
  <script src="<?php echo base_url('assets') ?>/js/jquery.magnific-popup.min.js"></script>
  <!-- Nivo slider js -->
  <script src="<?php echo base_url('assets') ?>/inc/custom-slider/js/jquery.nivo.slider.js"></script>
  <!-- pointer js -->
  <script src="<?php echo base_url('assets') ?>/js/pointer.js"></script>
  <!-- contact form js -->
  <script src="<?php echo base_url('assets') ?>/js/contact.form.js"></script>
  <!-- main js -->
  <script src="<?php echo base_url('assets') ?>/js/main.js"></script>
</body>

</html>