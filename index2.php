<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>MUST - Graduate Tracer</title>
    <link href="table.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script language="javascript" src="JQueries Libraries/dist/jquery.js" type="text/javascript"></script>
    <script language="javascript" src="JQueries Libraries/src/dimensions.js" type="text/javascript"></script>
    <script src="SpryAssets/SpryEffects.js" type="text/javascript"></script>
    <script src="jquery-mobile/jquery.mobile-1.0.min.js" type="text/javascript"></script>
    <style>
        body {
            background-color: #10274A;
        }

        .top_banner {
            background-color: #FFFFFF;
            color: #FFFFFF;
        }

        .sidebar {
            background-color: #10274A;
            position: absolute;
            top: 160px;
        }

        .sidebar button a,
        .sidebar ul i {
            color: white;
        }
    </style>
</head>

<body>
    <center>
        <div class="top_banner">
            <div class="in_banner">
                <div class="logo">
                    <img alt="" src="img/must.png" align="right" width="105%">
                </div>
                <div class="banner_text" style="align-items:center; justify-content: center;">
                    <h1 style="text-align:center; justify-content: center;">
                        Malawi University of Science and Technology(MUST)
                    </h1>
                    <h2>
                        Where Excellence Reigns
                    </h2>
                </div>
            </div>
        </div>
    </center>

    <div class="sidebar">
        <div class="sidebar" style="background-color: #10274A; position: absolute; top: 160px">
            <br>

            <div class="container">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#itModal">Computer Systems and Security</button>
            </div>
            <div class="modal fade " role="dialog" id="itModal">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content" style="background-color: #10274A;">
                        <div class="modal-header">
                            <h11 class="modal-title" style="color:#EFEFEF;"> <b>Dear "Computer Systems and Security" Graduates Please Fill-in The Tracer Study Form:</b>"Kindly complete to fill- up this questionnaire accurately and truthfully. Your responses will be used for research purposes to assess employability status and eventually, improve the curriculum of the programs offered at<b> Malawi University of Science and Technology (MUST)</b>. Your answers to this survey will be treated with outmost confidentiality. Thank you very much!"</h11>
                            <button type="button" class="close" data-dismiss="modal" title="Close">&times;</button>
                        </div>
                        <form name="aspnetForm" method="POST" action="">
                            <div class="modal-body" style="background-color: #EFEFEF;">
                                <?php include 'it.php'; ?>
                            </div>

                            <div class="modal-footer" style="justify-content:center;">
                                <button type="create" class="btn btn-primary" name="create">Submit</button>
                            </div>
                            <?php
                            include('admin/dbcon.php');
                            if (isset($_POST['create'])) {
                                /*Computer Systems and Security<*/
                                $fullname = $_POST['fullname'];
                                $age = $_POST['age'];
                                $dob = $_POST['dob'];
                                $cs = $_POST['cs'];
                                $sex = $_POST['sex'];
                                $religion = $_POST['religion'];
                                $street = $_POST['street'];
                                $barangay = $_POST['barangay'];
                                $municipal = $_POST['municipal'];
                                $province = $_POST['province'];
                                $region = $_POST['region'];
                                $zipcode = $_POST['zipcode'];
                                $country = $_POST['country'];
                                $course = $_POST['course'];
                                $batch = $_POST['batch'];
                                $facebook = $_POST['facebook'];
                                $twitter = $_POST['twitter'];
                                $estatus = $_POST['estatus'];
                                $organization = $_POST['organization'];
                                $profession = $_POST['profession'];
                                $type = $_POST['type'];
                                $location = $_POST['location'];
                                $status = $_POST['status'];
                                $number = $_POST['number'];
                                $income = $_POST['income'];
                                $relate = $_POST['relate'];
                                $sreason = $_POST['sreason'];
                                $nature = $_POST['nature'];
                                $company = $_POST['company'];
                                $num = $_POST['num'];
                                $mincome = $_POST['mincome'];
                                $reason = $_POST['reason'];
                                $consider = $_POST['consider'];
                                $phonenumber = $_POST['phonenumber'];
                                $email = $_POST['email'];

                                /*BSc In Business IT*/
                                mysqli_query($conn, "INSERT INTO `bsitgrad`(`fullname`, `age`, `dob`, `cs`, `sex`, `religion`, `street`, `barangay`, `municipal`, `province`, `region`, `zipcode`, `country`, `course`, `batch`, `facebook`, `twitter`, `estatus`, `organization`, `profession`, `type`, `location`, `status`, `number`, `income`, `relate`, `sreason`, `nature`, `company`, `num`, `mincome`, `reason`, `consider`, `phonenumber`, `email`) VALUES ('$fullname','$age','$dob','$cs','$sex','$religion','$street ','$barangay','$municipal','$province','$region','$zipcode','$country','$course','$batch','$facebook','$twitter','$estatus','$organization','$profession','$type','$location','$status','$number','$income','$relate','$sreason','$nature','$company','$num','$mincome','$reason','$consider','$phonenumber','$email')") or die(mysqli_error());

                                echo "<script>alert('Thank you Computer Systems and Security Alumni for your Cooperation in our School Department...your data was inserted successfully!!!')</script>";
                            } ?>
                        </form>
                    </div>
                </div>
            </div>

            <br>
            <div class="container" align="left">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#csModal">BSc in Business IT</button>
            </div></br>
            <div class="container" align="left">
                <button type="button" class="btn btn-success" data-toggle="modal">ADMIN</button>
            </div>
            <div class="modal fade " role="dialog" id="csModal">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content" style="background-color: #10274A;">
                        <div class="modal-header">
                            <h11 class="modal-title" style="color:#EFEFEF;"> <b>Dear "BSc in Business IT" Graduates Please Fill-in The Tracer Study Form:</b>"Kindly complete to fill- up this questionnaire accurately and truthfully. Your responses will be used for research purposes to assess employability status and eventually, improve the curriculum of the programs offered at<b> Malawi University of Science and Technology (MUST)</b>. Your answers to this survey will be treated with outmost confidentiality. Thank you very much!"</h11>
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
                                /*BSc In Business IT*/
                                $fullname = $_POST['fullname'];
                                $age = $_POST['age'];
                                $dob = $_POST['dob'];
                                $cs = $_POST['cs'];
                                $sex = $_POST['sex'];
                                $religion = $_POST['religion'];
                                $street = $_POST['street'];
                                $barangay = $_POST['barangay'];
                                $municipal = $_POST['municipal'];
                                $province = $_POST['province'];
                                $region = $_POST['region'];
                                $zipcode = $_POST['zipcode'];
                                $country = $_POST['country'];
                                $course = $_POST['course'];
                                $batch = $_POST['batch'];
                                $facebook = $_POST['facebook'];
                                $twitter = $_POST['twitter'];
                                $estatus = $_POST['estatus'];
                                $organization = $_POST['organization'];
                                $profession = $_POST['profession'];
                                $type = $_POST['type'];
                                $location = $_POST['location'];
                                $status = $_POST['status'];
                                $number = $_POST['number'];
                                $income = $_POST['income'];
                                $relate = $_POST['relate'];
                                $sreason = $_POST['sreason'];
                                $nature = $_POST['nature'];
                                $company = $_POST['company'];
                                $num = $_POST['num'];
                                $mincome = $_POST['mincome'];
                                $reason = $_POST['reason'];
                                $consider = $_POST['consider'];
                                $phonenumber = $_POST['phonenumber'];
                                $email = $_POST['email'];
                                /*bscs*/
                                mysqli_query($conn, "INSERT INTO bscsgrad(fullname, age, dob, cs, sex, religion, street, barangay, municipal, province, region, zipcode, country, course, batch, facebook, twitter, estatus, organization, profession, type, location, status, number, income, relate, sreason, nature, company, num, mincome, reason, consider, phonenumber, email) VALUES ('$fullname','$age','$dob','$cs','$sex','$religion','$street ','$barangay','$municipal','$province','$region','$zipcode','$country','$course','$batch','$facebook','$twitter','$estatus','$organization','$profession','$type','$location','$status','$number','$income','$relate','$sreason','$nature','$company','$num','$mincome','$reason','$consider','$phonenumber','$email')") or die(mysqli_error());

                                echo "<script>alert('Thank you BSc in Business IT Alumni for your Cooperation in our School Department... your data was inserted successfully!!!!')</script>";
                            } ?>
                        </form>
                    </div>
                </div>
            </div>



        </div>
    </div>



</body>

</html>