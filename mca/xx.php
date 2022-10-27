
<?php 
include('db.php');
if($_SERVER['REQUEST_METHOD']=="POST")
{
   $fname=$_POST['name'];
   $femail=$_POST['email'];
   $password=$_POST['password'];
   $ins="insert into user(name,email,password,datetime)
values('$fname','$femail','$password',now())";
$status=mysqli_query($con,$ins);
if($status)
{
 echo "<script>alert('Success');
   window.location='index.php'</script>";
}
else{
   echo "<script>alert('Fail');
   window.location='index.php'</script>";
}
}
?><!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/logo/image2.png" height="80" width="80" alt="">
        <h1>SwaGraha Pvt.<span>Lmt Constrution.</span></h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php" class="active">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="projects.php">Projects</a></li>
         <li><a href="blog.php">Blog</a></li>
         <li><a href="register.php">Register</a></li>
    </ul>
     
      <div class="icons">
      <div id="menu-btn" class="fas fa-bars"></div>
      <div id="search-btn" class="fas fa-search"></div>
      <div id="login-btn" class="fas fa-user"></div>
      <div id="info-btn" class="fas fa-info-circle"></div>  
   </div>

 
   <form action="" class="search-form" method="post">
      <input type="search" name="" placeholder="search here..." id="search-box">
      <label for="search-box" class="fas fa-search"></label>
   </form>

   <form action="" class="login-form" method="post">
      <h3>login form
   <i  class="fas fa-times"id="close-info"></i></h3>
      <input type="email" placeholder="enter your email" class="box">
      <input type="password" placeholder="enter your password" class="box">
      <div class="flex">
         <input type="checkbox" name="" id="remember-me">
         <label for="remember-me">remember me</label>
         <a href="#">forgot password?</a>
      </div>
      <input type="submit" value="login now" class="btn">
      <p>don't have an account <a href="#">create one!</a></p>
   </form>



<div class="contact-info">

   <div id="close-contact-info" class="fas fa-times"></div>

   <div class="info">
      <i class="fas fa-phone"></i>
      <h3>phone number</h3>
      <p>+91761931836</p>
   </div>

   <div class="info">
      <i class="fas fa-envelope"></i>
      <h3>email address</h3>
      <p>shivalikanagehswar807@gmail.com</p>
   </div>

   <div class="info">
      <i class="fas fa-map-marker-alt"></i>
      <h3>office address</h3>
      <p>bidar, india - 400104</p>
   </div>

   <div class="share">
      <a href="#" class="fab fa-facebook-f"></a>
      <a href="#" class="fab fa-twitter"></a>
      <a href="#" class="fab fa-instagram"></a>
      <a href="#" class="fab fa-linkedin"></a>
   </div>

</div>
    
 
      <!-- .navbar -->
      </nav>
    </div>
  </header>
  <!-- End Header -->
















  <?php
                                        include("db.php");
                                        $sel="select * from blogs";
                                        $status1=mysqli_query($con,$sel);
                                        $i=1;
                                        while($row=mysqli_fetch_array($status1))
                                        {
                                            $id=$row['id'];
                                            $name=$row['name'];
                                            $status=$row['status'];
                                            $description=$row['description'];
                                            $photo=$row['photo'];
                                            $datetime=$row['datetime'];

              echo"<div class='post-img'>
                <img src='assets/img/blog/blog-1.jpg'alt='' class='img-fluid'>
              </div>

              <h2 class='title'>$name</h2>

              <div class='meta-to'>
                <ul>
                  <li class='d-flex align-items-center'><i class='bi bi-person'></i> <a href='blog-details.php'>John Doe</a></li>
                  <li class='d-flex align-items-center'><i class='bi bi-clock'></i> <a href='blog-details.php'>$datetime</a></li>
                  <li class='d-flex align-items-center'><i class='bi bi-chat-dots'></i> <a href='blog-details.php'>12 Comments</a></li>
                </ul>
              </div>";
                                        }
              ?><!--










/*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/
.header {
  z-index: 997;
  position: absolute;
  padding: 30px 0;
  top: 0;
  left: 0;
  right: 0;
}

.header .logo img {
  height: 80;
  width: 80;
  margin-right: 6px;
  padding-left: 6px;

}
.header .logo h1 {
  font-size: 1.5rem;
  color: black;
  text-transform: capitalize;
  
}

.header .logo h1 span {
  color: yellowgreen;
}



 <h3>We will provide you the best work which you dreamt for!</h3>


  <div class="video">
         <video src="assets/logo/about-vid.mp4"height="700" width="800"loop muted autoplay></video>
          </div>


          
        <div class="row my-2">
          <h3><b>GET TO KNOW US</b></h3>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
         <div class="video">
         <video src="assets/logo/about-vid.mp4"height="400" width="700"loop muted autoplay></video>
          </div>
</div>



  <div class="col-lg-6">
                            <img src="admin/images/design-3.jpg" class="img-responsive">
                                </div>


                                 <h4>  <i class="fas fa-solid fa-indian-rupee-sign"></i>1250<span>/mo</span></h4>







                                        <div class="field">
                <span class="fa fa-user"></span>
                <input type="email" required placeholder="Email or Phone"class="form-control form-control-user"id="exampleInputEmail" aria-describedby="emailHelp">
            </div>
            <div class="field space">
                <span class="fa fa-lock"></span>
                <input type="password" class="pass-key"required placeholder="password"required class="form-control form-control-user" id="exampleInputPassword" >
                <span class="show">SHOW</span>
            </div>

            <h1>SwaGraha Pvt.<span>Lmt Constrution.</span></h1>