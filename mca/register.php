<?php 
include('db.php');
if($_SERVER['REQUEST_METHOD']=="POST")
{
   $name=$_POST['name'];
   $email=$_POST['email'];
   $contactno=$_POST['contactno'];
   $address=$_POST['address'];
   $password=$_POST['password'];
   $state=$_POST['state'];
   $gender=$_POST['gender'];
   $ins="insert into register(name,email,contactno,address,password,state,gender,datetime)
values('$name','$email','$contactno','$address','$password','$state','$gender',now())";
$status=mysqli_query($con,$ins);
if($status)
{
  echo "<script>alert('Success');
   window.location='register.php'</script>";
}
else{
   echo "<script>alert('Fail');
   window.location='register.php'</script>";
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SwaGraha pvt,limited construction - Register</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: SwaGraha pvt,limited construction- v1.1.0
  * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <?php include('head.php')?>
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/contactus.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Register</h2>
        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Register</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact us" class="contact us">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12">
            <form action="" method="post">
              <div class="row gy-4">
                <div class="col-lg-6 my-2 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-lg-6 my-2 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="my-2 form-group">
                <input type="text" class="form-control" name="contactno" id="contactno" placeholder="contactno" required>
              </div>
              <div class="my-2 form-group">
                <textarea class="form-control" name="address" rows="2" placeholder="address" required></textarea>
              </div>
              <div class="row gy-6 my=3">
              <div class="col-lg-4 my-2 form-group">
                  <input type="password" name="password" class="form-control" id="name" placeholder="password" required>
                </div>
                <div class="col-lg-4 my-2 form-group">
  <select name="state" class="form-select" aria-label="Default select example">
  <option selected value="">state</option>
  <option value="karnataka">karnataka</option>
  <option value="telgana">telgana</option>
  <option value="maharashtra">maharashtra</option>
</select>
              </div>
              <div class="col-lg-4 my-2 form-group">
              <div class="form-check">
  <input class="form-check-input" name="gender" value="male" type="radio" name="flexRadioDisabled "id="flexRadioDisabled" >
  <label class="form-check-label" for="flexRadioDisabled">
 Male
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" name="gender" value="female" type="radio" name="flexRadioDisabled id="flexRadioCheckedDisabled">
  <label class="form-check-label" for="flexRadioCheckedDisabled">
   Female
  </label>
</div>
</div>
               <div class="text-center"><button type="submit"class="bg-primary text-white">Submit</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
 
  <?php include('footers.php')?>
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>

</html>