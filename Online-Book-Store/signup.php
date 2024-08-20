<?php
include 'header.php';
require 'signup_config.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Account</title>
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
                <div class="signup-form">
                    <form action="" method="POST" class="mt-5 border border-success border-rounded p-5 bg-light shadow-lg signup-fo" enctype="multipart/form-data">
                        <h1 class="mb-5 text-success text-center fw-bold signup-h1"><u>Create Account</u></h1>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="fs-5">First Name <span class="text-danger">*</span></label>
                                <input type="text" name="f_name" class="form-control" value="<?php echo $f_name; ?>" placeholder="Enter the first name">
                                <span class="text-danger fw-bold">
                                    <?php echo $f_name_error ?>
                                </span>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="fs-5">Last Name <span class="text-danger">*</span></label>
                                <input type="text" name="l_name" class="form-control" value="<?php echo $l_name; ?>" placeholder="Enter the Last name">
                                <span class="text-danger fw-bold">
                                    <?php echo $l_name_error ?>
                                </span>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="fs-5">Contact <span class="text-danger">*</span></label>
                                <input type="text" name="contact" class="form-control" value="<?php echo $contact; ?>" placeholder="Enter the contact number">
                                <span class="text-danger fw-bold">
                                    <?php echo $contact_error ?>
                                </span>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="fs-5">Date of Birth <span class="text-danger">*</span></label>
                                <input type="date" name="dob" class="form-control" value="<?php echo $dob; ?>" placeholder="Enter the Date of Birth">
                                <span class="text-danger fw-bold">
                                    <?php echo $dob_error ?>
                                </span>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="fs-5">Address <span class="text-danger">*</span></label>
                                <input type="text" name="address" class="form-control" value="<?php echo $address; ?>" placeholder="Enter your address">
                                <span class="text-danger fw-bold">
                                    <?php echo $address_error ?>
                                </span>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="fs-5">Email <span class="text-danger">*</span></label>
                                <input type="email" name="email" class="form-control" value="<?php echo $email; ?>" placeholder="Enter your new Email @ Address">
                                <span class="text-danger fw-bold">
                                    <?php echo $email_error ?>
                                </span>
                            </div>
                            <div class="mb-3 col-md-12">
                                <label class="fs-5">Password <span class="text-danger">*</span></label>
                                <input type="password" name="password" class="form-control" placeholder="Enter your new Password">
                                <span class="text-danger fw-bold">
                                    <?php echo $password_error ?>
                                </span>
                            </div>
                            <div class="mb-3 col-md-12">
                                <label class="fs-5">Confirm Password <span class="text-danger">*</span></label>
                                <input type="password" name="c_password" class="form-control" placeholder="Please Confirm your new Password">
                                <span class="text-danger fw-bold">
                                    <?php echo $c_password_error ?>
                                </span>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="fs-5">City <span class="text-danger">*</span></label>
                                <input type="text" name="city" class="form-control" value="<?php echo $city; ?>" placeholder="Enter your City">
                                <span class="text-danger fw-bold">
                                    <?php echo $city_error ?>
                                </span>
                            </div>
                            <div class="mb-3 col-md-4">
                                <label class="fs-5">State <span class="text-danger">*</span></label>
                                <select name="state" id="inputState" class="form-select">
                                    <option value="">--Select State--</option>
                                    <option value="Assam">Assam</option>
                                    <option value="Bihar">Bihar</option>
                                    <option value="Jharkhand">Jharkhand</option>
                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                    <option value="Goa">Goa</option>
                                    <option value="Gujarat">Gujarat</option>
                                    <option value="Himachal">Himachal</option>
                                    <option value="Karnataka">Karnataka</option>
                                    <option value="Maharashtra">Maharashtra</option>
                                    <option value="Manipur">Manipur</option>
                                    <option value="Meghalaya">Meghalaya</option>
                                    <option value="Mizoram">Mizoram</option>
                                    <option value="Nagaland">Nagaland</option>
                                    <option value="Odisha">Odisha</option>
                                  </select>
                                  <span class="text-danger fw-bold">
                                    <?php echo $state_error ?>
                                </span>
                            </div>
                            <div class="mb-3 col-md-2">
                                <label class="fs-5">Zip<span class="text-danger">*</span></label>
                                <input type="number" name="zip_code" class="form-control" value="<?php echo $zip_code; ?>" placeholder="">
                                <span class="text-danger fw-bold">
                                    <?php echo $zip_code_error ?>
                                </span>
                            </div>

                            <div class="mb-3 col-md-12">
                                <label class="fs-5">Select Gender <span class="text-danger">*</span></label>
                                <select name="gender" id="inputState" class="form-select">
                                    <option value="">--Select Gender--</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="others">Others</option>
                                </select>
                                <span class="text-danger fw-bold">
                                    <?php echo $gender_error ?>
                                </span>
                            </div>

                            <div class="mb-3 col-md-12">
                                <label class="form-label"><?php echo $file_name ?>Default file input example</label>
                                <input class="form-control" name="image" type="file" id="formFile">
                                <span class="text-danger fw-bold">
                                    <?php echo $file_name_error ?>
                                </span>
                            </div>

                            <div class="mb-3">
                              <input type="hidden" name="tc_accepted" value="0">
                              <input class="form-check-input" type="checkbox" name="tc_accepted" value="accepted" id="flexCheckDefault">
                              <label class="form-check-label" for="flexCheckDefault">
                                Please check  <a href="#" class="btn btn-primary btn-sm"> term's and condition's </a>  before creating account
                              </label>
                              <p class="text-danger fw-bold mt-2">
                                    <?php
                                    echo $tc_accepted_error;
                                    ?>
                                </p>
                            </div>
                            <div class="d-grid gap-2">
                               <button type="submit" name="user_signup" class="btn btn-success btn-lg">Create Account</button>
                            </div>

                        </div>
                    </form>
                    <p class="text-center mt-3">If you already have an account please : <a href="login.php" class="btn btn-primary btn-sm text-light">Click Here</a></p>
                </div>
            </div>
        </div>
       </div>
  </body>
</html>