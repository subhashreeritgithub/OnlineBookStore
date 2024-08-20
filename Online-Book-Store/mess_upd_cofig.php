<?php
include 'dbconnection.php';
if(isset($_POST['submit_message_first']))
{
    $message_id = $_POST['message_id'];
    $messages = $_POST['messages'];

    $update_query = "UPDATE `contact_us` SET `messages` = '$messages'
    where `message_id` = '$message_id'";

    $run_query = mysqli_query($con,$update_query);

    if($run_query)
    {
        echo "<script>
        alert('Message Updated successfully');
        window.location = 'profile.php';
        </script>";
    }
    else
    {
        echo "Query failed" . mysqli_error($con);
    }
}
?>