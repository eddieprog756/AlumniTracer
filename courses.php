<?php
$useragent = $_SERVER['HTTP_USER_AGENT'];

if (preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i', $useragent) || preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i', substr($useragent, 0, 4)))

  include('admin/dbcon.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Path to autoload.php from Composer

if (isset($_POST['submit'])) {
  // Your database connection

  // Check if email address already exists
  $email = $_POST['email'];
  $emailQuery = "SELECT * FROM bscsgrad WHERE email='$email'";
  $emailResult = mysqli_query($conn, $emailQuery);
  if (mysqli_num_rows($emailResult) > 0) {
    echo "<script>alert('Email already exists. Please use a different email address.')</script>";
  } else {
    // Check if phone number already exists
    $phonenumber = $_POST['phonenumber'];
    $phoneQuery = "SELECT * FROM bscsgrad WHERE phonenumber='$phonenumber'";
    $phoneResult = mysqli_query($conn, $phoneQuery);
    if (mysqli_num_rows($phoneResult) > 0) {
      echo "<script>alert('Phone number already exists. Please use a different phone number.')</script>";
    } else {
      // If email and phone number are unique, proceed with form submission and email sending
      // Your form processing code goes here

      // Sending email to the user
      $mail = new PHPMailer(true);

      try {
        //Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'ed.eddie756@gmail.com'; // SMTP username
        $mail->Password = 'dzubdkcvuemfjkvj'; // SMTP password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        //Recipients
        $mail->setFrom('registar@must.ac.mw', 'MUST Admin');
        $mail->addAddress($_POST['email'], $_POST['fullname']); // Add recipient's email and name dynamically

        // Content
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = 'Thank you for submitting the form';
        $mail->Body    = 'Dear ' . $_POST['fullname'] . ',<br><br>Your form has been submitted successfully. We appreciate your cooperation.<br><br>Regards,<br>Your Organization';

        $mail->send();
        echo "<script>alert('Thank you for submitting the form. An email has been sent to your email address.')</script>";
      } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
      }
    }
  }
}
?>

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>MUST - Alumni Tracer study</title>
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

  <!-- <link href="table.css" type="text/css" rel="stylesheet"> -->
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" /> -->
  <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script> -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <script language="javascript" src="JQueries Libraries/dist/jquery.js" type="text/javascript"></script>
  <script language="javascript" src="JQueries Libraries/src/dimensions.js" type="text/javascript"></script>
  <script src="SpryAssets/SpryEffects.js" type="text/javascript"></script>
  <script src="jquery-mobile/jquery.mobile-1.0.min.js" type="text/javascript"></script>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

  <style>
    /*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/
    #header {
      background: #fff;
      transition: all 0.5s;
      z-index: 997;
      padding: 15px 0;
      top: 40px;
      box-shadow: 0px 2px 15px rgba(25, 119, 204, 0.1);
    }

    #header.header-scrolled {
      top: 0;
    }

    #header .logo {
      font-size: 32px;
      margin: 0;
      padding: 0;
      line-height: 1;
      font-weight: 700;
      letter-spacing: 0.5px;
      font-family: "Poppins", sans-serif;
    }

    #header .logo a {
      color: #2c4964;
    }

    #header .logo img {
      max-height: 40px;
    }

    @media (max-width: 992px) {
      #header {
        top: 0;
      }

      #header .logo {
        font-size: 28px;
      }
    }
  </style>
</head>

<body class="courses-page">
  <header class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">
      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/logo.png" width="40px" height="50px" alt="" />
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a style="text-decoration:none;" href="index.php">Home</a></li>
          <li><a style="text-decoration:none;" href="about.php">About</a></li>
          <!-- <li><a href="courses.html">Courses</a></li> -->
          <li><a style="text-decoration:none;" href="events.php">Events</a></li>
          <li>
            <a style="text-decoration:none;" href="courses.php">Courses</a>
          </li>
          <li><a style="text-decoration:none;" href="contact.php">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="courses.php" style="text-decoration:none;">Alumni</a>
    </div>
  </header>

  <main class="main">
    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Alumni Tracer Study</h1>
              <p class="mb-0">
                Dear Alumni, please complete the tracer study form accurately and truthfully. Your responses will be used to assess your employability status and help improve our curriculum. Your answers will be treated with utmost confidentiality. Thank you for your cooperation!
              </p>
            </div>
          </div>
        </div>
        <h3 style="text-align:center; justify-content:center; margin-top:70px; margin-bottom:-60px;">Choose Your Course To Get Started</h3>

      </div>

      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Courses</li>
          </ol>
        </div>
      </nav>
    </div>
    <!-- End Page Title -->

    <!-- Courses Section -->
    <section id="courses" class="courses section">
      <div class="container text-center">
        <!-- <h2>Choose Course</h2> -->
        <div class="d-flex justify-content-center flex-wrap">
          <button type="button" class="btn btn-success m-2" data-toggle="modal" data-target="#itModal">Business IT</button>
          <button type="button" class="btn btn-success m-2" data-toggle="modal" data-target="#metallurgyEngineeringModal">Metallurgy Eng</button>
          <button type="button" class="btn btn-success m-2" data-toggle="modal" data-target="#biomedicalEngineeringModal">Biomedical Eng</button>
          <button type="button" class="btn btn-success m-2" data-toggle="modal" data-target="#manufacturingEngineeringModal">Manufacturing Eng</button>
          <button type="button" class="btn btn-success m-2" data-toggle="modal" data-target="#textileEngineeringModal">Textile Eng</button>
          <button type="button" class="btn btn-success m-2" data-toggle="modal" data-target="#earthSciencesModal">Earth Sciences</button>
          <button type="button" class="btn btn-success m-2" data-toggle="modal" data-target="#meteorologyModal">Meteorology</button>
          <button type="button" class="btn btn-success m-2" data-toggle="modal" data-target="#bitModal">Chemical Eng</button>
          <button type="button" class="btn btn-success m-2" data-toggle="modal" data-target="#medicalMicrobiologyModal">Medical Microbio</button>
          <button type="button" class="btn btn-success m-2" data-toggle="modal" data-target="#geoInfoModal">Geo-Info</button>
          <button type="button" class="btn btn-success m-2" data-toggle="modal" data-target="#cssModal">Computer Systems</button>
          <button type="button" class="btn btn-success m-2" data-toggle="modal" data-target="#disasterRiskModal">Disaster Risk</button>
          <button type="button" class="btn btn-success m-2" data-toggle="modal" data-target="#sustainableEnergyModal">Sustainable Energy</button>
          <button type="button" class="btn btn-success m-2" data-toggle="modal" data-target="#waterQualityModal">Water Quality</button>
          <button type="button" class="btn btn-success m-2" data-toggle="modal" data-target="#sportsSciencesModal">Sports Sciences</button>
          <button type="button" class="btn btn-success m-2" data-toggle="modal" data-target="#indigenousKnowledgeModal">Indigenous Knowledge</button>
          <button type="button" class="btn btn-success m-2" data-toggle="modal" data-target="#petroleumResourcesModal">Petroleum Resources</button>
          <button type="button" class="btn btn-success m-2" data-toggle="modal" data-target="#africanMusicologyModal">African Musicology</button>
          <button type="button" class="btn btn-success m-2" data-toggle="modal" data-target="#medicalImagingModal">Medical Imaging</button>
          <button type="button" class="btn btn-success m-2" data-toggle="modal" data-target="#immunologyModal">Immunology</button>
          <button type="button" class="btn btn-success m-2" data-toggle="modal" data-target="#languageCommModal">Language & Comm</button>
          <button type="button" class="btn btn-success m-2" data-toggle="modal" data-target="#foodScienceModal">Food Science</button>
          <button type="button" class="btn btn-success m-2" data-toggle="modal" data-target="#mathScienceModal">Math Science</button>
          <button type="button" class="btn btn-success m-2" data-toggle="modal" data-target="#sciencesEducationModal">Sciences Education</button>
          <button type="button" class="btn btn-success m-2" data-toggle="modal" data-target="#culturalEconomyModal">Cultural Economy</button>
        </div>

      </div>
    </section>
    <!-- /Courses Section -->

    <!-- Modals and PHP code remain the same -->
    <div class="modal fade" role="dialog" id="itModal">
      <div class="modal-dialog modal-lg">
        <div class="modal-content" style="background-color: #10274A;">
          <div class="modal-header">
            <h11 class="modal-title" style="color:#EFEFEF;">
              <b>Dear "African Musicology" Graduates Please Fill-in The Tracer Study Form:</b>"Kindly complete to fill- up this questionnaire accurately and truthfully. Your responses will be used for research purposes to assess employability status and eventually, improve the curriculum of the programs offered at <b>Malawi University of Science and Technology (MUST)</b>. Your answers to this survey will be treated with utmost confidentiality. Thank you very much!"
            </h11>
            <button type="button" class="close" data-dismiss="modal" title="Close">&times;</button>
          </div>
          <form name="aspnetForm" method="POST" action="">
            <div class="modal-body" style="background-color: #EFEFEF;">
              <?php include 'it.php'; ?>
            </div>
            <div class="modal-footer" style="justify-content:center;">
              <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </div>
            <?php
            include('admin/dbcon.php');
            if (isset($_POST['submit'])) {
              // Data submission logic
            }
            ?>
          </form>
        </div>
      </div>
    </div>

    <div class="modal" role="dialog" id="csModal">
      <div class="modal-dialog modal-lg">
        <div class="modal-content" style="background-color: #10274A;">
          <div class="modal-header">
            <h11 class="modal-title" style="color:#EFEFEF;">
              <b>Dear "Business IT" Graduates Please Fill-in The Tracer Study Form:</b>"Kindly complete to fill- up this questionnaire accurately and truthfully. Your responses will be used for research purposes to assess employability status and eventually, improve the curriculum of the programs offered at <b>Malawi University of Science and Technology (MUST)</b>. Your answers to this survey will be treated with utmost confidentiality. Thank you very much!"
            </h11>
            <button type="button" class="close" data-dismiss="modal" title="Close">&times;</button>
          </div>
          <form name="aspnetForm" method="POST" action="">
            <div class="modal-body" style="background-color: #EFEFEF;">
              <?php include 'it.php'; ?>
            </div>
            <div class="modal-footer" style="justify-content:center;">
              <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </div>
            <?php
            include('admin/dbcon.php');
            if (isset($_POST['submit'])) {
              // Data submission logic
            }
            ?>
          </form>
        </div>
      </div>
    </div>
  </main>




  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
</body>

</html>