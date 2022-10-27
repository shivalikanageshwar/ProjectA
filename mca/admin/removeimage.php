<?php
session_start();
session_unset();
session_destroy();
echo"<script>alert('Successfully removed');
window.location='home.php'</script>";
?>