
<?php
  
  include 'dbconnection.php';

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




if(isset($_POST['user_signup']))
{
   $f_name = $_POST['f_name'];
   $l_name = $_POST['l_name'];
   $contact = $_POST['contact'];
   $dob = $_POST['dob'];
   $address = $_POST['address'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $c_password = $_POST['c_password'];
   $city = $_POST['city'];
   $state = $_POST['state'];
   $zip_code = $_POST['zip_code'];
   $gender = $_POST['gender'];
   $tc_accepted = $_POST['tc_accepted'];


   // contact check start
   $contact_check_query = "SELECT * FROM `user_signup` WHERE `contact` = '$contact' ";

   $contact_check_result = mysqli_query($con , $contact_check_query);

   $contact_check_row = mysqli_num_rows($contact_check_result);
   // contact check end

   // for email check strat
   $email_check_query = "SELECT * FROM `user_signup` WHERE `email` = '$email' ";

   $email_check_result = mysqli_query($con , $email_check_query);

   $email_check_row = mysqli_num_rows($email_check_result);
   // for email check end

   // password check start
   $password_check_query = "SELECT * FROM `user_signup` WHERE `password` = '$password' ";

   $password_check_result = mysqli_query($con , $password_check_query);

   $password_check_row = mysqli_num_rows($password_check_result);
   // password check end

   // for Image insertion ande validation

   $file_name = $_FILES['image']['name'];
   $file_type = $_FILES['image']['type'];
   $file_size = $_FILES['image']['size'];
   $file_error = $_FILES['image']['error'];
   $file_temp_name = $_FILES['image']['tmp_name'];

   $file_ext = explode('.' , $file_name);

   $file_ext_check = strtolower(end($file_ext));
   
   $valid_file_extention = array('png' , 'jpg' , 'jpeg');

//   for image end

// for image check start
$image_check_query = "SELECT * FROM `user_signup` WHERE `image` = '$file_name' ";

$image_check_result = mysqli_query($con , $image_check_query);

$image_check_row = mysqli_num_rows($image_check_result);
// for image check end

   if(empty($f_name))
   {
      $f_name_error = "*** First name is required.....!";
   }
   else
   {
      if(!preg_match("/^[A-Za-z]*$/",$f_name))
      {
         $f_name_error = "*** Only letters are allowed.....!";
      }
      else
      {
         if(empty($l_name))
         {
            $l_name_error = "*** Last name is required.....!";
         }
         else
         {
            if(!preg_match("/^[A-Za-z]*$/",$l_name))
            {
               $l_name_error = "*** Only letters are allowed.....!";
            }
            else
            {
               if(empty($contact))
               {
                  $contact_error = "*** Contact is required.....!";
               }
               else
               {
                  if($contact_check_row > 0)
                  {
                     $contact_error = "*** This contact is already taken.....!";
                  }
               
                  else
                  {
                     if(!preg_match("/^[6-9]\d{9}$/",$contact))
                     {
                        $contact_error = "*** This Contact number is not valid.....!";
                     }
                     else
                     {
                        if(empty($dob))
                        {
                           $dob_error = "*** Date of Birth is required.....!";
                        }
                        else
                        {
                           if(empty($address))
                           {
                              $address_error = "*** Address is required.....!";
                           }
                           else
                           {
                              if(!preg_match("/^[A-Za-z -=,+]*$/",$address))
                              {
                                 $address_error = "*** Please check the address.....!";
                              }
                              else
                              {
                                 if(empty($email))
                                 {
                                    $email_error = "*** Email is required.....!";
                                 }
                                 else
                                 {
                                    if($email_check_row > 0)
                                    {
                                       $email_error = "*** This email is already taken.....!";
                                    }
                                    
                                    else
                                    {
                                       if(empty($password))
                                       {
                                          $password_error = "*** Password is required.....!";
                                       }
                                       else
                                       {
                                          if($password_check_row > 0)
                                          {
                                             $password_error = "*** This password is already taken.....!";
                                          }
                                       
                                          else
                                          {
                                             if(empty($c_password))
                                             {
                                                $c_password_error = "*** Please confirm your new password.....!";
                                             }
                                             else
                                             {
                                                if($password != $c_password)
                                                {
                                                   $password_error = "*** Passwords are not match.....!";
                                                }
                                                else
                                                {
                                                   if(empty($city))
                                                   {
                                                      $city_error = "*** City is required.....!";
                                                   }
                                                   else
                                                   {
                                                      if(empty($state))
                                                      {
                                                         $state_error = "*** State is required.....!";
                                                      }
                                                      else
                                                      {
                                                      if(empty($zip_code))
                                                      {
                                                         $zip_code_error = "*** required";
                                                      }
                                                      else
                                                      {
                                                            if(!preg_match("/^[0-9]\d{5}$/",$zip_code))
                                                            {
                                                               $zip_code_error = "not valid";
                                                            }
                                                            else
                                                            {
                                                               if(empty($gender))
                                                               {
                                                                  $gender_error = "*** Gender is required.....!";
                                                               }
                                                            
                                                               else
                                                               {
                                                                  if(empty($file_name))
                                                                  {
                                                                     $file_name_error = "*** Please select a image.....!";
                                                                  }
                                                                  else
                                                                  {
                                                                     if(!(in_array($file_ext_check , $valid_file_extention)))
                                                                     {
                                                                        $file_name_error = "*** Only jpg , jpeg , png extentions are valid.....!";
                                                                     }
                                                                     else
                                                                     {
                                                                        if(!($file_size <= 2015232))
                                                                        {
                                                                           $file_name_error = "*** File size not more then 2 mb.....!";
                                                                        }
                                                                        else
                                                                        {
                                                                           if($image_check_row > 0)
                                                                           {
                                                                              $file_name_error = "*** This image is already taken.....!"; 
                                                                           }
                                                                        
                                                                           else
                                                                           {
                                                                              if(empty($tc_accepted))
                                                                              {
                                                                                 $tc_accepted_error = "*** Please check this first.....!";
                                                                              }
                                                                              else
                                                                              {
                                                                                 $query = "INSERT INTO `user_signup`(`f_name` , `l_name` , `contact` , `dob` , `address` , `email` , `password` , `city` , `state` , `zip_code` , `gender` , `image` , `tc_accepted`) VALUES ('$f_name' , '$l_name' , '$contact' , '$dob' , '$address' , '$email' , '$password' , '$city' , '$state' , '$zip_code' , '$gender' , '$file_name' , '$tc_accepted')";

                                                                                 $result = mysqli_query($con , $query);

                                                                                 if($result)
                                                                                 {
                                                                                    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                                                            <strong>Accounted Created!</strong> Congratilations your account created successfully.
                                                                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                                                          </div>';
                                                                                    move_uploaded_file($file_temp_name,"user_signup_image/".$file_name);
                                                                                 }
                                                                                 else
                                                                                 {
                                                                                    echo "query failed" . mysqli_error($con);
                                                                                 }
                                                                              }
                                                                           }
                                                                        }
                                                                     }
                                                                  }
                                                               }
                                                            }
                                                         }
                                                      }
                                                   }
                                                }
                                             }
                                          }
                                       }
                                    }
                                 }
                              }
                           }
                        }
                     }
                  }
               }
            }
         }
      }
   }
}
?>