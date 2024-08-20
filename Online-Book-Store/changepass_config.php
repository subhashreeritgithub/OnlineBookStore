<?php
$password_error = null;
include 'dbconnection.php';
if(isset($_POST['c_password']))
{
    $email = $_GET['email'];
    $password = $_POST['password'];
    $c_password = $_POST['c_password'];
    if($password != $c_password)
    {
        $password_error = "Password are not matched";
    }
    else
    {
        $update_query = "UPDATE `user_signup` SET `password` = '$password' WHERE `email` = '$email'";

        $query_res = mysqli_query($con,$update_query);
        if($query_res)
        {
            echo "<script>
            alert('Password updated successfully.....');
            window.location = 'pass_l.php';
            </script>";
        }
        else
        {
            echo "query failed" . mysqli_error($con);
        }
    }
}
?>