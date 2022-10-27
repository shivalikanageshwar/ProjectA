<?php
include('../db.php');
if($_SERVER['REQUEST_METHOD']=="GET")
{
    $id=$_GET['id'];
    //for deleting image
    $img="select photo from profile where id='$id'";
    $selimg=mysqli_query($con,$img);
    $selphoto=mysqli_fetch_array($selimg);
    //identifying name
    $photo=$selphoto['photo'];
    //delete file from folder
    unlink("images/$photo");
    //for deleting records 
    $del="delete from profile where id='$id'";
    //echo $del;
    $status=mysqli_query($con,$del);
    if($status)
    {
   echo "<script>alert('data deleted sucessfully');
    window.location='profile1.php'</script>";
  }
  else
  {
   echo "<script>alert('delete denied');
window.location='profile1.php'</script>";
   }    
    
}
    ?>