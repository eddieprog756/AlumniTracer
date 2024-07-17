<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Path to autoload.php from Composer

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $user = $_POST['user'];
  $password = sha1($_POST['password']);
  $position = $_POST['position'];

  // Your database connection and query to insert user data
  include('dbcon.php');
  mysqli_query($conn, "INSERT INTO adminuser (name, user, password, position) VALUES ('$name', '$user', '$password', '$position')") or die("Failed to add user");

  // Sending email using PHPMailer
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
    $mail->addAddress('recipient@example.com', 'Recipient'); // Add a recipient

    // Content
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = 'New User Added';
    $mail->Body    = 'You have been added to Alumni Tracer Succefully!. Name: ' . $name . ', Username: ' . $user . ', Position: ' . $position;

    $mail->send();
    echo 'Message has been sent';
  } catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
}
?>



<!-- add/edit form modal -->
<div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Admin<i class="fa fa-user-circle-o" aria-hidden="true"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Name:</label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-navicon" aria-hidden="true"></i>
              </div>
              <input type="text" class="form-control" id="name" name="name" required="required">
            </div>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Username:</label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
              </div>
              <input type="user" class="form-control" id="user" name="user" required="required">
            </div>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Password:</label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-krw" aria-hidden="true"></i></span>
              </div>
              <input type="password" class="form-control" id="password" name="password" required="required">
            </div>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Position:</label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-krw" aria-hidden="true"></i></span>
              </div>
              <input type="position" class="form-control" id="position" name="position" required="required">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success" id="submit">Submit</button>
          <input type="hidden" name="submit" value="adduser">
          <input type="hidden" name="userid" id="userid" value="">
        </div>
        <?php include('dbcon.php');
        if (isset($_POST['submit'])) {

          $name = $_POST['name'];
          $user = $_POST['user'];
          $password = sha1($_POST['password']);
          $position = $_POST['position'];

          mysqli_query($conn, "insert into adminuser (name,user,password,position)values('$name','$user','$password','$position')") or die("Failed To add User");
        } else {
          if (isset($_GET['submit'])) {
            $id = $_GET['submit'];
            $query = mysqli_query($conn, "UPDATE `adminuser` SET `id`='[$id]',`name`='[$name]',`user`='[$user]',`password`='[$password]',`position`='[$position]' WHERE id");
          }
        }
        ?>
      </form>
    </div>
  </div>
</div>