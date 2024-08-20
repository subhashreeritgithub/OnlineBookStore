
<?php
// validatione error start
$f_name = null;
 $f_name_error = null;
 $l_name = null;
 $l_name_error = null;
 $contact = null;
 $contact_error = null;
 $dob = null;
 $dob_error = null;
 $address = null;
 $address_error = null;
 $email = null;
 $email_error = null;
 $password = null;
 $password_error = null;
 $c_password = null;
 $c_password_error = null;
 $city = null;
 $city_error = null;
 $state = null;
 $state_error = null;
 $zip_code = null;
 $zip_code_error = null;
 $gender = null;
 $gender_error = null;
 $tc_accepted = null;
 $tc_accepted_error = null;
 $file_name = null;
 $file_name_error = null;

// validatione error end
include 'dbconnection.php';

if(isset($_POST['user_signup_update']))
{
    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $contact = $_POST['contact'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip_code = $_POST['zip_code'];
    $gender = $_POST['gender'];
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];

    $file_ext = explode('.' , $file_name);

    $file_ext_check = strtolower(end($file_ext));
    
    $valid_file_extention = array('png' , 'jpg' , 'jpeg');

    if($_FILES['image']['name'] != '')
    {
        $file_name = $_FILES['image']['name'];
        $temp_name = $_FILES['image']['tmp_name'];
        move_uploaded_file($temp_name,"user_signup_image/".$file_name);
        unlink("user_signup_image/".$_POST['old_image']);
    }
    else
    {
        $file_name = $_POST['old_image'];
    }

    if(!preg_match("/^[A-Za-z]*$/" , $f_name))
    {
        $f_name_error =  "!!!.....Only letters are allowed.....!!!";
    }
    else
    {
        if(!preg_match("/^[A-Za-z]*$/" , $l_name))
        {
            $l_name_error =  "!!!.....Only letters are allowed.....!!!";
        }
        else
        {
            if(!preg_match("/^[6-9]\d{9}$/",$contact))
            {
                $contact_error = "!!!.....This contact number is not valid.....!!!";
            }
            else
            {
                if(!preg_match("/^[0-9]\d{5}$/",$zip_code))
                {
                    $zip_code_error = "not valid";
                }
                else
                {
                    if(!($file_size <= 2015232))
                    {
                       $file_name_error = "***File size not more then 2 mb.....!";
                    }
                    else
                    {
                        $update_query = "UPDATE `user_signup` SET `f_name` = '$f_name' , `l_name` = '$l_name' , `contact` = '$contact' , `dob` = '$dob' , `address` = '$address' , `email` = '$email' , `password` = '$password' , `city` = '$city' , `state` = '$state' , `zip_code` = '$zip_code' , `gender` = '$gender' , `image` = '$file_name'
                        where `email` = '$email'";

                        $result = mysqli_query($con , $update_query);

                        if($result)
                        {
                            echo "<script>
                            alert('Profile updated successfully see changes login first.....');
                            window.location = 'logout.php';
                            </script>";
                        }
                        else
                        {
                            echo "Query failed" . mysqli_error($con);
                        }
                        
                    }
                }
            }
        }
    }


}
?>