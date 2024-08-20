<?php

$delete_id = $_GET['del'];

include 'dbconnection.php';

$query = "SELECT * FROM `user_signup` where `email` = '$delete_id'";

$result = mysqli_query($con , $query);

$row = mysqli_fetch_assoc($result);

unlink("user_signup_image/".$row['image']);

$delete_query = "DELETE FROM `user_signup` Where `email` = '$delete_id'";

$result2 = mysqli_query($con , $delete_query);

if($result2)
{
   echo "<script>
   alert('Your account deleted successfully.....');
   window.location = 'forget_pass_logout.php';
   </script>";
}
else
{
   echo "query failed" . mysqli_error($con);
}

?>