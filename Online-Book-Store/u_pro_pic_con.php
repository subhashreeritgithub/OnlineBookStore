
<?php
$file_name_error = null;
include 'dbconnection.php';

if(isset($_POST['update_pro_pic']))
{ 

   $email = $_POST['email'];
   $file_name = $_FILES['image']['name'];
   $file_size = $_FILES['image']['size'];
   $file_type = $_FILES['image']['type'];
   $file_error = $_FILES['image']['error'];
   $file_temp_name = $_FILES['image']['tmp_name'];

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
   if(!(in_array($file_ext_check , $valid_file_extention)))
   {
    $file_name_error = "!!!.....Only jpg , jpeg , png extentions are valid.....!!!";
   }
   else
   {
    if(!($file_size <= 2015232))
    {
        $file_name_error = "!!!.....File size not more then 2 mb.....!!!";
    }
    else
    {
        $query = "UPDATE `user_signup` SET `image` = '$file_name' WHERE `email` = '$email'";

        $result = mysqli_query($con , $query);

        if($result)
        {

            echo "<script>
            alert('Profile pic updated successfully.....!');
            window.location = 'logout.php';
            </script>";

        }
        else
        {
            echo "QUERY FAILED" . mysqli_error($con);
        }

    }
   }
    
}
?>