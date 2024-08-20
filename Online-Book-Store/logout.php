<?php
session_start();

session_unset();

session_destroy();

echo "<script>
alert('You are logged out.....!');
window.location = 'index.php';
</script>";
?>