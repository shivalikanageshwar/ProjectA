<?php
include('../db.php');
if($_SERVER['REQUEST_METHOD']=="GET")
{
    $id=$_GET['id'];
    $del="delete from blogs where id='$id'";
    //echo $del;
    $status=mysqli_query($con,$del);
    if($status)
    {
    echo "<script>alert('data deleted sucessfully ');
   window.location='blogs.php'</script>";
  }
  else
  {
   echo "<script>alert('delete denied ');
   window.location='blogs.php'</script>";
   }    
    
}
    ?>