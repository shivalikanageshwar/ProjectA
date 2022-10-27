<?php
session_start();
error_reporting(0);//it igonres warning
$name=$_SESSION['name'];
$id=$_SESSION['id'];
if($name=="")
{
    echo"<script>alert('please login to access');
    window.location='index.php'</script>";
}
include('../db.php');
//displaying profile data
$sel="select * from register where id='$id'";
$status=mysqli_query($con,$sel);
$row=mysqli_fetch_array($status);
$fname=$row['name'];
$email=$row['email'];
$contactno=$row['contactno'];
$password=$row['password'];
//for update
if($_SERVER['REQUEST_METHOD']=="POST")
{
   $name=$_POST['name'];
   $email=$_POST['email'];
   $contactno=$_POST['contactno'];
   $password=$_POST['password'];
   $update="update register set name='$name',email='$email',contactno='$contactno',password='$password' where id='$id'";
$status=mysqli_query($con,$update);
if($status)
{
   echo "<script>alert('Successfully update');
   window.location='index.php'</script>";
}
else{
   echo "<script>alert('Fail');
   window.location='profile.php'</script>";
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>swagraha pvt,limited constrution. -profile</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
 

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

<?php include("sidebar.php")?>

 <!-- Content Wrapper -->
 <div id="content-wrapper" class="d-flex flex-column">

     <!-- Main Content -->
     <div id="content">

         <!-- Topbar -->
         <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

             <!-- Sidebar Toggle (Topbar) -->
             <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                 <i class="fa fa-bars"></i>
             </button>

             <!-- Topbar Search -->
             <form
                 class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                 <div class="input-group">
                     <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                         aria-label="Search" aria-describedby="basic-addon2">
                     <div class="input-group-append">
                         <button class="btn btn-primary" type="button">
                             <i class="fas fa-search fa-sm"></i>
                         </button>
                     </div>
                 </div>
             </form>
             <?php include('topbar.php')?>
            <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Profile Details</h1>
<div class="row">
    <div class="col-md-12">
    <form class="user" method="post" action="">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="name" value="<?php echo $fname ?>" class="form-control form-control-user" id="examplesName"
                                            placeholder="Name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="email" value="<?php echo $email ?>" class="form-control form-control-user" id="exampemail"
                                            placeholder="email"readonly>
                                    </div>
                                </div>
                                <div class="form-group row">

                                    <div class="col-sm-6  mb-3 mb-sm-0">
                                        <input type="text" name="contactno" value="<?php echo $contactno ?>" class="form-control form-control-user"
                                            id="examplecontactno" placeholder="Contactno">
                                    </div>
                              
                                <div class="col-sm-6">
                                    <input type="password" name="password" value="<?php echo $password ?>" class="form-control form-control-user" id="examplepassword"
                                        placeholder="password">
                                </div>
</div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                   Update
                                </button>
                             
                            </form>
    </div>
</div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            <?php include("footer.php")?>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="index.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script scr="https://kit.fontawesome.com/03f4210a43.js"crossorigin="anonymous"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>