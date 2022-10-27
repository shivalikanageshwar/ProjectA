<?php 
include('db.php');
if($_SERVER['REQUEST_METHOD']=="POST")
{
   $name=$_POST['name'];
   $email=$_POST['email'];
   $contactno=$_POST['contactno'];
   $message=$_POST['message'];
   $ins="insert into enquiry(name,email,contactno,message,datetime)
values('$name','$email','$contactno','$message',now())";
$status=mysqli_query($con,$ins);
if($status)
{
   echo "<script>alert('Success');
   window.location='contact.html'</script>";
}
else{
   echo "<script>alert('Fail');
   window.location='contact.html'</script>";
}
}
?>