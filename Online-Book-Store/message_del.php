<?php
include 'dbconnection.php';

$m_del = $_GET['m_del'];

$query = "SELECT * FROM `contact_us` where `message_id` = '$m_del'";

$result = mysqli_query($con , $query);

$row = mysqli_fetch_assoc($result);

$delete_query = "DELETE FROM `contact_us` Where `message_id` = '$m_del'";

$result2 = mysqli_query($con , $delete_query);

if($result2)
{
   echo "<script>
   alert('Messages deleted successfully.....');
   window,location = 'profile.php';
   </script>";
}
else
{
   echo "query failed" . mysqli_error($con);
}

?>