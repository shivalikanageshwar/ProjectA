
<?php
session_start();
error_reporting(0);
include('../db.php');
if($_SERVER['REQUEST_METHOD']=="POST")
{
   $email=$_POST['email'];
   $password=$_POST['password'];
   $sel="select * from register where email='$email' and password='$password'";
   $status=mysqli_query($con,$sel);
   $count=mysqli_num_rows($status);
   //echo $count;
 if($count=="1")
  {
    $row=mysqli_fetch_array($status);
    $name=$row['name'];
    $_SESSION['name']=$name;
    $id=$row['id'];
    $_SESSION['id']=$id;
    // echo $name;
    echo "<script>alert('Successfully login');
   window.location='home.php'</script>";
  }
  else
  {
    echo "<script>alert('login Fail');
  window.location='index.php'</script>";

}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>swagraha pvt.ltm-index</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
     integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
     crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"  href="assets/css/style.css">
</head>
<body>
  <div class="bg-img">
    <div class="content">
    <div class="fa fa-user  fa-6x text-gray-300">
        
        <header>Login Form</header>
</div>
        <form class="user"method="post"action="">
            <div class="field">
                <span class="fa fa-user"></span>
                <input type="email"name="email" required class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address...">
            </div>
            <div class="field space">
                <span class="fa fa-lock"></span>

                <input type="password" name="password" required class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password"  >
                <span class="show">SHOW</span>
            </div>
           
            <div class="field">
                <input type="submit" value="LOGIN">
                </div>
                <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>

        </form>
        <!---<div class="login">
            Or login with
            </div>
            <div class="links">
                <div class="facebook">
                    <i class="fab fa-facebook-f"><span>Facebook</span></i>
            </div>
            <div class="instagram">
                <i class="fab fa-instagram"><span>instagram</span> </i>
        </div>
    </div>-->
    <div class="pass">
                <a href="forgot-password.php">Forget Password?</a>
            </div>
<div class="signup">
    don't a have account?
    <a href="register.php">signup now</a>
</div>
  </div>

<script type="module" src="assets/js/main1.js"></script>
</body>
</html>
