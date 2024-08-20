<?php
include 'u_pro_pic_con.php';
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- page refresh code start -->
      <script>history.pushState({}, "", "")</script>
    <!-- page refresh code end -->
    <title>Update Profile Pic</title>
    <link rel="stylesheet" href="bootstrap-5.2.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/all.min.css">
  </head>
  <body>
   <div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <a href="index.php" class="btn btn-primary fw-bold"><i class="fa-solid fa-backward"></i> Go Back To Home</a>
            <div class="card">
                <div class="card-header bg-success">
                    <h1 class="text-center text-light">Update Profile Pic</h1>
                 </div>
            </div>
            <?php

                include 'dbconnection.php';

                $email = $_GET['email'];

                $query = "SELECT * FROM `user_signup` WHERE `email` = '$email'";

                $result = mysqli_query($con , $query);

                if(mysqli_num_rows($result) > 0)
                {
                   while($row = mysqli_fetch_assoc($result))
                   {

                   
                ?>
            <div class="update-form border border-success p-5">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- <fieldset disabled> -->
                                <div class="mb-3">
                                  
                                  <input type="hidden" name="email" value="<?php echo $row['email'] ?>">
                                  <!-- <input type="email" name ="email"id="disabledTextInput" value="<?php echo $row['email']; ?>" class="form-control" placeholder="Disabled input"> -->
                                </div>
                            <!-- </fieldset> -->
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="formFile" class="form-label"><?php echo $row['image']; ?></label>
                            <input class="form-control" type="file" name="image" value="<?php echo $row['image']; ?>" id="formFile" required>
                            <div class="text-danger fw-bold">
                              <?php echo $file_name_error; ?>
                            </div>
                            <img src="<?php echo "user_signup_image/".$row['image'] ?>" alt="" height="100px" width="100px">
                            <input type="hidden" name="old_image" value="<?php echo $row['image'] ?>">
                        </div>
                        <div class="d-grid">
                            <button type="submit" name="update_pro_pic" class="btn btn-success btn-lg fw-bold">Update</button>
                        </div>
                    </div>
                </form>
            </div>
            <?php
                   }
                }
            ?>
        </div>
    </div>
   </div>
  </body>
</html>
