<?php
session_start();
session_unset();
session_destroy();
echo"<script>alert('Successfully logedout');
window.location='index.php'</script>";
?>