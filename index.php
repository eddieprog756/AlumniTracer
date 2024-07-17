<?php
require 'vendor/autoload.php'; // Include PHPMailer autoload
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>MUST - About US</title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon" />
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect" />
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet" />
</head>

<body class="about-page">
  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">
      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/logo.png" width="40px" height="100px" alt="" />
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php" class="active">Home</a></li>
          <li><a href="about.php">About</a></li>
          <!-- <li><a href="courses.html">Courses</a></li> -->
          <li><a href="events.php">Events</a></li>
          <li>
            <a href="course-details.php">courses</a>
          </li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="courses.php">Get Started</a>
    </div>
  </header>


  <main class="main">

  </main>

  <!-- Hero Section -->
  <section id="hero" class="hero d-flex align-items-center">
    <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in" />

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h2 data-aos="fade-up" data-aos-delay="100" class="">
            MUST Alumni Tracer<br /> Study and Career Paths
          </h2>
          <p data-aos="fade-up" data-aos-delay="200">
            This platform is dedicated to connecting all alumni with<br> MUST. By participating in the tracer study,<br> and help you track career paths, uncover opportunities. <br>Your involvement is crucial for <br>maintaining a strong alumni network and fostering ongoing success for future graduates.
          </p>
          <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
            <a href="courses.html" class="btn-get-started">Get Started</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /Hero Section -->

  <!-- Why Us Section -->
  <section id="why-us" class="section why-us">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="why-box">
            <h3>Why Participate in the tracer Study?</h3>
            <p>
              Participating in a tracer study helps improve the university's
              curriculum, enhances its reputation, and supports future
              graduates. It provides networking opportunities and
              contributes to personal and professional development. Your
              feedback is essential for shaping the future of the university
              and ensuring the success of its students.
            </p>
            <div class="text-center">
              <a href="about.html" class="more-btn"><span>Learn More</span> <i class="bi bi-chevron-right"></i></a>
            </div>
          </div>
        </div>
        <!-- End Why Box -->

        <div class="col-lg-8 d-flex align-items-stretch">
          <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">
            <div class="col-xl-4">
              <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                <i class="bi bi-clipboard-data"></i>
                <h4>Curriculum Improvement</h4>
                <p>
                  Your feedback helps the university assess and improve the
                  curriculum, ensuring that future students receive an
                  education that meets industry standards.
                </p>
              </div>
            </div>
            <!-- End Icon Box -->

            <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
              <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                <i class="bi bi-person-workspace"></i>
                <h4>Networking Opportunities</h4>
                <p>
                  Participating in tracer studies can reconnect you with the
                  university and fellow alumni, opening doors to networking
                  opportunities that can benefit your career.
                </p>
              </div>
            </div>
            <!-- End Icon Box -->

            <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
              <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                <i class="bi bi-inboxes"></i>
                <h4>Personal and Professional Development</h4>
                <p>
                  Reflecting on your career journey and achievements can
                  provide valuable insights into your own professional
                  development
                </p>
              </div>
            </div>
            <!-- End Icon Box -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /Why Us Section -->

  <!-- Courses Section -->
  <section id="courses" class="courses section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Courses</h2>
      <p class="">Popular Courses</p>
    </div>

    <?php include('footer.php') ?>
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
    <script>
      window.addEventListener('scroll', function() {
        var sidebar = document.querySelector('.sidebar');
        var footer = document.querySelector('footer');
        if (window.pageYOffset > sidebar.offsetHeight) {
          footer.style.marginTop = sidebar.offsetHeight + 'px';
        } else {
          footer.style.marginTop = '0';
        }
      });

      //Subscription Pop Up
      document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('subscriptionForm').addEventListener('submit', function(event) {
          event.preventDefault(); // Prevent form submission

          // Perform form submission using AJAX
          var form = this;
          var formData = new FormData(form);

          // Send form data using AJAX
          var xhr = new XMLHttpRequest();
          xhr.open('POST', form.action, true);
          xhr.onload = function() {
            if (xhr.status === 200) {
              // Subscription was successful, show pop-up message
              alert('Subscription was successful!');
              form.reset(); // Reset the form
            } else {
              // Subscription failed, show error message if needed
              alert('Subscription failed. Please try again later.');
            }
          };
          xhr.send(formData);
        });
      });
    </script>