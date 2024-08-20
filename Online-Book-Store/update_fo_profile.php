<?php
session_start();
if(isset($_SESSION['email']) && !empty($_SESSION['email']))
{
?>

<?php
include 'u_update_con.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Profile</title>
    <!-- page refresh start -->
    <script>history.pushState({}, "", "")</script>
    <!-- page refresh end -->
    <!-- Bootstrap Css Link Start -->
    <link rel="stylesheet" href="bootstrap-5.2.0-dist/css/bootstrap.min.css">
    <!-- Bootstrap Css Link End -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/all.min.css">
  </head>
  <body>
       <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="signup-form mt-5">
                <a href="profile.php" class="btn btn-primary mb-2">Back to profile</a>
                <?php

                include 'dbconnection.php';

                $email = $_GET['email'];

                $query = "SELECT * FROM user_signup WHERE email = '$email'";

                $result = mysqli_query($con , $query);

                if(mysqli_num_rows($result) > 0)
                {
                   while($row = mysqli_fetch_assoc($result))
                   {

                   
                ?>
                    <form action="" method="POST" class=" mb-5 border border-success border-rounded p-5 bg-light shadow-lg signup-fo" enctype="multipart/form-data">
                        <h1 class="mb-5 text-success text-center fw-bold signup-h1"><u>Update Account</u></h1>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <input type="hidden" name="email" value="<?php echo $row['email'] ?>">
                                <label class="fs-5">First Name <span class="text-danger">*</span></label>
                                <input type="text" name="f_name" value="<?php echo $row['f_name'] ?>" class="form-control" placeholder="Enter the first name">
                                 <span class="fw-bold text-danger">
                                    <?php echo $f_name_error; ?>
                                 </span>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="fs-5">Last Name <span class="text-danger">*</span></label>
                                <input type="text" name="l_name" value="<?php echo $row['l_name'] ?>" class="form-control"  placeholder="Enter the Last name">
                                <span class="fw-bold text-danger">
                                    <?php echo $l_name_error; ?>
                                </span>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="fs-5">Contact <span class="text-danger">*</span></label>
                                <input type="text" name="contact" value="<?php echo $row['contact'] ?>" class="form-control"  placeholder="Enter the contact number">
                                <span class="fw-bold text-danger">
                                    <?php echo $contact_error; ?>
                                </span>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="fs-5">Date of Birth <span class="text-danger">*</span></label>
                                <input type="date" name="dob" value="<?php echo $row['dob'] ?>" class="form-control"  placeholder="Enter the Date of Birth">
                                <span class="fw-bold text-danger">
                                    <?php echo $dob_error; ?>
                                </span>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="fs-5">Address <span class="text-danger">*</span></label>
                                <input type="text" name="address" value="<?php echo $row['address'] ?>" class="form-control"  placeholder="Enter your address">
                                <span class="fw-bold text-danger">
                                    <?php echo $address_error; ?>
                                </span>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="fs-5">Email <span class="text-danger">*</span></label>
                                <input type="email" name="email" value="<?php echo $row['email'] ?>" class="form-control"  placeholder="Enter your new Email @ Address">
                                <span class="fw-bold text-danger">
                                    <?php echo $email_error; ?>
                                </span>
                            </div>
                            <div class="mb-3 col-md-12">
                                <label class="fs-5">Password <span class="text-danger">*</span></label>
                                <input type="password" name="password" value="<?php echo $row['password'] ?>" class="form-control" placeholder="Enter your new Password">
                                <span class="fw-bold text-danger">
                                    <?php echo $password_error; ?>
                                </span>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="fs-5">City <span class="text-danger">*</span></label>
                                <input type="text" name="city" value="<?php echo $row['city'] ?>" class="form-control"  placeholder="Enter your City">
                                <span class="fw-bold text-danger">
                                    <?php echo $city_error; ?>
                                </span>
                            </div>
                            <div class="mb-3 col-md-4">
                                <label class="fs-5">State <span class="text-danger">*</span></label>
                                <select name="state" id="inputState" class="form-select">
                                    <option value="">--Select State--</option>
                                    <option value="Assam"
                                    <?php
                                          if($row['state'] == 'Assam')
                                          {
                                              echo "selected";
                                          }
                                        ?>
                                    >Assam</option>
                                    <option value="Bihar"
                                    <?php
                                          if($row['state'] == 'Bihar')
                                          {
                                              echo "selected";
                                          }
                                        ?>
                                    >Bihar</option>
                                    <option value="Jharkhand"
                                    <?php
                                          if($row['state'] == 'Jharkhand')
                                          {
                                              echo "selected";
                                          }
                                        ?>
                                    >Jharkhand</option>
                                    <option value="Chhattisgarh"
                                    <?php
                                          if($row['state'] == 'Chhattisgarh')
                                          {
                                              echo "selected";
                                          }
                                        ?>
                                    >Chhattisgarh</option>
                                    <option value="Goa"
                                    <?php
                                          if($row['state'] == 'Goa')
                                          {
                                              echo "selected";
                                          }
                                        ?>
                                    >Goa</option>
                                    <option value="Gujarat"
                                    <?php
                                          if($row['state'] == 'Gujarat')
                                          {
                                              echo "selected";
                                          }
                                        ?>
                                    >Gujarat</option>
                                    <option value="Himachal"
                                    <?php
                                          if($row['state'] == 'Himachal')
                                          {
                                              echo "selected";
                                          }
                                        ?>
                                    >Himachal</option>
                                    <option value="Karnataka"
                                    <?php
                                          if($row['state'] == 'Karnataka')
                                          {
                                              echo "selected";
                                          }
                                        ?>
                                    >Karnataka</option>
                                    <option value="Maharashtra"
                                    <?php
                                          if($row['state'] == 'Maharashtra')
                                          {
                                              echo "selected";
                                          }
                                        ?>
                                    >Maharashtra</option>
                                    <option value="Manipur"
                                    <?php
                                          if($row['state'] == 'Manipur')
                                          {
                                              echo "selected";
                                          }
                                        ?>
                                    >Manipur</option>
                                    <option value="Meghalaya"
                                    <?php
                                          if($row['state'] == 'Meghalaya')
                                          {
                                              echo "selected";
                                          }
                                        ?>
                                    >Meghalaya</option>
                                    <option value="Mizoram"
                                    <?php
                                          if($row['state'] == 'Mizoram')
                                          {
                                              echo "selected";
                                          }
                                        ?>
                                    >Mizoram</option>
                                    <option value="Nagaland"
                                    <?php
                                          if($row['state'] == 'Nagaland')
                                          {
                                              echo "selected";
                                          }
                                        ?>
                                    >Nagaland</option>
                                    <option value="Odisha"
                                    <?php
                                          if($row['state'] == 'Odisha')
                                          {
                                              echo "selected";
                                          }
                                        ?>
                                    >Odisha</option>
                                  </select>
                                  <span class="fw-bold text-danger">
                                    <?php echo $state_error; ?>
                                  </span>
                            </div>
                            <div class="mb-3 col-md-2">
                                <label class="fs-5">Zip<span class="text-danger">*</span></label>
                                <input type="number" name="zip_code" value="<?php echo $row['zip_code'] ?>" class="form-control"  placeholder="">
                                <span class="fw-bold text-danger">
                                    <?php echo $zip_code_error; ?>
                                </span>
                            </div>

                            <div class="mb-3 col-md-12">
                                <label class="fs-5">Select Gender <span class="text-danger">*</span></label>
                                <select name="gender" id="inputState" class="form-select">
                                    <option value="">--Select Gender--</option>
                                    <option value="male"
                                    <?php
                                          if($row['gender'] == 'male')
                                          {
                                              echo "selected";
                                          }
                                        ?>
                                    >Male</option>
                                    <option value="female"
                                    <?php
                                          if($row['gender'] == 'female')
                                          {
                                              echo "selected";
                                          }
                                        ?>
                                    >Female</option>
                                    <option value="others"
                                    <?php
                                          if($row['gender'] == 'others')
                                          {
                                              echo "selected";
                                          }
                                        ?>
                                    >Others</option>
                                </select>
                                <span class="fw-bold text-danger">
                                    <?php echo $gender_error; ?>
                                </span>
                            </div>

                            <div class="mb-3 col-md-12">
                                <label class="form-label"><?php echo $row['image'] ?></label>
                                <input class="form-control" name="image" value="<?php echo $row['image'] ?>" type="file" id="formFile">
                                <span class="fw-bold text-danger">
                                    <?php echo $file_name_error; ?>
                                </span>
                                <img src="<?php echo "user_signup_image/".$row['image'] ?>" alt="" height="100px" width="100px">

                                <input type="hidden" name="old_image" value="<?php echo $row['image'] ?>">
                               
    
                             
                            </div>

                    
                            <div class="d-grid gap-2">
                               <button type="submit" name="user_signup_update" class="btn btn-success btn-lg">Update Account</button>
                            </div>

                        </div>
                    </form>
                    <?php } } ?>
                   
                </div>
            </div>
        </div>
       </div>
  </body>
</html>
<?php 
}
else
{
  header('location: login.php');
}
?>