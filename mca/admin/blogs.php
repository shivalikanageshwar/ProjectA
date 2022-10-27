<?php 
session_start();
$name=$_SESSION['name'];
include('../db.php');
if($_SERVER['REQUEST_METHOD']=="POST")
{
   $name=$_POST['name'];
   $status=$_POST['status'];
   $description=$_POST['description'];
   $photo=$_FILES['photo']['name'];
   move_uploaded_file($_FILES['photo']['tmp_name'],"bimages/$photo");
   $ins="insert into blogs(name,status,description,photo,datetime)
values('$name','$status','$description','$photo',now())";
$status=mysqli_query($con,$ins);
if($status)
{
   echo "<script>alert('Success');
   window.location='blogs.php'</script>";
}
else{
   echo "<script>alert('Fail');
   window.location='blogs.php'</script>";
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

    <title>swagraha pvt,limited constrution. -blogs</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css"rel="stylesheet">
    <link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
        <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

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

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Blogs details</h1>
<div class="row">
    <div class="col-md-12">
    <form  action=""method="post" enctype='multipart/form-data'>
                                <div class="form-group row">
                                    <div class="col-sm-6 ">
                                        <input type="text" name="name" class="form-control form-control-user" id="examplename"placeholder="name">      
                                         </div>
                                         <div class="col-sm-6 ">
                                        <input type="text" name="datetime" class="form-control form-control-user" id="examplename"placeholder="datetime">      
                                         </div>
                                         <div class="col-sm-6">
                                <input class="form-check-input"name="status" type="radio"value="0" name="block" id="flexRadioDefault1"checked>
                                 Block<br>
                                <input class="form-check-input"name="status" type="radio" value="1"name="active" id="flexRadioDefault2" >
                                 Active
                                </div>
                                </div>
                                <div class="form-group row">
                                <div class="col-sm-6 my-4">
                               <textarea class="form-control" name="description" rows="2" placeholder="description" id="fromgroupexample" ></textarea>
                                </div>
                                <script>
                                CKEDITOR.replace('fromgroupexample');
                                </script>
                                 <div class="col-sm-6 my-4">
                                 <input type="file" name="photo"  class="form-control" id="fromgroupexample" placeholder="image">
                               </div>
</div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">submit</button>
                             
                            </form>
    </div>
</div>
</div>
 <!-- DataTales Example -->
                <div class="container-fluid">
                <div class="card shadow mb-4 my-6">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">BLOGS</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="datatable" style="width=100%">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>name</th>
                                            <th>status</th>
                                            <th>description</th>
                                            <th>photo</th>
                                            <th>datetime</th>
                                            <th>delete</th>
                                            <th>update</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include("../db.php");
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
                                            echo"<tr>
                                            <td>$id</td>
                                            <td>$name</td>
                                            <td>$status</td>
                                            <td>$description</td>
                                            <td><img src='bimages/$photo' width='50' hight='50'></td>
                                            <td>$datetime</td>
                                            <td><a href='blogsdelete.php?id=$id'><i class='fas fa-fw fa-trash'></i></a></td>
                                            <td><a href='blogsupdate.php?id=$id'><i class='bi bi-pencil-square'></i></a></td>
                                        </tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
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
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.bootstrap5.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
$(document).ready(function ()
 {
    $('#datatable').DataTable({
    pageLength : 2,
    lengthMenu: [[2, 5, 10, 20, -1], [2,5, 10, 20, 'Todos']]
  });
});
      </script>
</body>

</html>