<footer id="footer" class="footer position-relative">
  <div class="container footer-top">
    <div class="row gy-4">
      <div class="col-lg-4 col-md-6 footer-about">
        <a href="index.html" class="logo d-flex align-items-center">
          <img src="assets/img/logo.png" width="40px" height="100px" alt="" />
        </a>
        <div class="footer-contact pt-3">
          <p>Where Excellence Reigns</p>
          <p>P.O. Box 5196,</p>
          <p>Limbe, Malawi</p>
          <p class="mt-3">
            <strong>Phone:</strong> <span> +265 111 678 000</span>
          </p>
          <p><strong>Email:</strong> <span>registrar@must.ac.mw</span></p>
        </div>
        <div class="social-links d-flex mt-4">
          <a href=""><i class="bi bi-twitter"></i></a>
          <a href="https://www.facebook.com/mustmalawi?ref=br_rs&_rdc=1&_rdr"><i class="bi bi-facebook"></i></a>
          <a href=""><i class="bi bi-instagram"></i></a>
          <a href=""><i class="bi bi-linkedin"></i></a>
        </div>
      </div>

      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="about.html">About us</a></li>
          <li><a href="admin/index.php">Admin</a></li>
        </ul>
      </div>

      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Quick Links</h4>
        <ul>
          <li><a href="#">ODEL</a></li>
          <li><a href="https://saris.must.ac.mw/">SARIS</a></li>
          <li><a href="https://elearning.must.ac.mw/">E-learning</a></li>
          <li>
            <a href="https://shop.directpay.online/paymybills/must">Pay Online</a>
          </li>
          <li>
            <a href="https://pgapplication.must.ac.mw/">PG application</a>
          </li>
        </ul>
      </div>

      <div class="col-lg-4 col-md-12 footer-newsletter">
        <h4>Our Newsletter</h4>
        <p>
          Subscribe to our newsletter and receive the latest news about the
          university and other carrier opportunities!
        </p>
        <form action="forms/newsletter.php" id="subscriptionForm" method="post" class="php-email-form">
          <div class="newsletter-form">
            <input id="input-type" type="email" name="email" placeholder="Enter valid email" /><input type="submit" value="Subscribe" />
          </div>
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">
            Your subscription request has been sent. Thank you!
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="container copyright text-center mt-4" style="background-color: #181818; color:#f6fbfd;">
    <p>
      © <span>Copyright</span>
      <strong class="px-1 sitename">MUST - Alumni Tracer</strong>
      <span> 2024 All Rights Reserved</span>
    </p>
    <div class="credits">
      Designed by
      <a href=" https://wa.me/+265999637532" style="color: #5fcf80;">Alick Kaambankadzanja</a>
    </div>
  </div>
</footer>
<script>
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