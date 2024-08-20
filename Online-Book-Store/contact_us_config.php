<?php
include 'dbconnection.php';
$full_name = null;
$full_name_error = null;
$contact = null;
$contact_error = null;
$address =null;
$email = null;
$email_error = null;
$subject = null;
$subject_error = null;
$messages = null;
$messages_error = null;


if(isset($_POST['contact_us_submit']))
{
    $full_name = $_POST['full_name'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $messages = $_POST['messages'];

    $email_check_query = "SELECT * FROM `user_signup` WHERE `email` = '$email' ";

    $email_check_result = mysqli_query($con , $email_check_query);

    $email_check_row = mysqli_num_rows($email_check_result);

    if(!preg_match("/^[A-Za-z ]*$/",$full_name))
    {
        $full_name_error = 'Only letterts and spaces are allowed.....';
    }
    else
    {
        if(!preg_match("/^[6-9]\d{9}$/",$contact))
        {
            $contact_error = "*** This Contact number is not valid.....!";
        }
        else
        {
            if($email_check_row > 0)
            {
               
            
                $insert_query = "INSERT INTO `contact_us` (`full_name` , `contact` , `address` , `email` , `subject` , `messages`) VALUES ('$full_name' , '$contact' , '$address' , '$email' , '$subject' , '$messages')";

                $result = mysqli_query($con , $insert_query);

                if($result)
                {
                    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Message sended!</strong> Congratilations your message sended successfully.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                }
                else
                {
                    echo "Query failed" . mysqli_error($con);
                }
            }
            else
            {
                $email_error = "Invalid email please check your email.....";
            }
        }
    }
}
?>