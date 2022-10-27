
<?php 
include('db.php');
if($_SERVER['REQUEST_METHOD']=="POST")
{
   $name=$_POST['name'];
   $email=$_POST['email'];
   $contactno=$_POST['contactno'];
   $message=$_POST['message'];
   $ins="insert into contact(name,email,contactno,message,datetime)
values('$name','$email','$contactno','$message',now())";
$status=mysqli_query($con,$ins);
if($status)
{
  echo "<script>alert('Success');
   window.location='service-details.php'</script>";
}
else{
   echo "<script>alert('Fail');
  window.location='service-details.php'</script>";
}
}
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SwaGraha pvt,limited construction - Service Details</title>
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
  * Template Name: UpConstruction - v1.1.0
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
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/about1.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Service Details</h2>
        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Service Details</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

      <!-- ======= Service Details Section ======= -->
      <section  class="service-details">
    <div class="row gy-4">
        <div class="col-lg-4">
          <div class="services-list">
            <a href="services.php" class="active">Architectural Plans</a>
            <a href="services.php">Structural Design</a>
            <a href="services.php">Construction</a>
            <a href="services.php">Renovation</a>
            
          </div>
        </div>
        
      <div class='col-md-8'>

        <?php
       include('db.php');
       if($_SERVER['REQUEST_METHOD']=="GET")
       {
        $id=$_GET['id'];
       $sel="select * from services where id='$id'";
       $status1=mysqli_query($con,$sel);
       $row=mysqli_fetch_array($status1);

           $id=$row['id'];
           $name=$row['name'];
           $status=$row['status'];
           $description=$row['description'];
           $photo=$row['photo'];
           $datetime=$row['datetime'];
         
           echo"<div class='col-md-8'>
                     <div class='card' style='width:100%;'>
                     <img src='admin/images/$photo'width=500 hight=200 class='card-img-top' alt='...'>
                        <div class='card-body'>
                         <h5 class='card-title'>$name</h5>
                        <p class='card-text'>$description</p>
                         <form action='' method='post'>
<button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#exampleModal'data-bs-whatever='@mdo'>BOOKNOW</button>
<div class='modal fade' id='exampleModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='exampleModalLabel'>contact</h5>
        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
      </div>
      <div class='modal-body'>
        <form>
        <div class='mb-3'>
        <label for='recipient-name' class='col-form-label'>name:</label>
        <input type='text' class='form-control' id='recipient-name'name='name'>
        <input type='hidden' class='form-control' id='recipient-name'name='id' value='$id' required>
      </div>
      <div class='mb-3'>
      <label for='recipient-name' class='col-form-label'>email:</label>
      <input type='text' class='form-control' id='recipient-name'name='email'required>
    </div>
          <div class='mb-3'>
            <label for='recipient-name' class='col-form-label'>contact:</label>
            <input type='text' class='form-control' id='recipient-name'name='contactno'required>
          </div>
          <div class='mb-3'>
            <label for='message-text' class='col-form-label'>Message:</label>
            <textarea class='form-control' id='message-text'name='message'></textarea>
          </div>
        </form>
      </div>
      <div class='modal-footer'>
        <button type='submit' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
        <button type='submit' class='btn btn-primary'>Send message</button>
      </div>
    </div>
  </div>
</div> 
</form>    
                 </div>
             </div>
           </div>
         </div>";
        }
        ?>
    </div>
    
  </section>
  <!-- End Service Details Section -->

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
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  
</body>

</html>