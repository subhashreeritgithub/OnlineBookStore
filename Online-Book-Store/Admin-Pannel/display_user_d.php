<?php
session_start();

if(isset($_SESSION['email']) && !empty($_SESSION['email']))
{

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Customer Details</title>
   <link rel="stylesheet" href="bootstrap-5.2.0-dist/css/bootstrap.css">
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="css/all.min.css">
<body>
<!-- card start -->
<div class="container-fluid mt-5 mb-5">
<a href="index.php" class="btn btn-info mb-2 text-light fw-bold btn-home-pro"><i class="fa-solid fa-house"></i> Home</a>
            <div class="row">
            <?php
            include '../dbconnection.php';

            $display_query = "SELECT * FROM `user_signup`";

            $store_query = mysqli_query($con,$display_query);

            if(mysqli_num_rows($store_query) > 0)
            {

                while($row = mysqli_fetch_assoc($store_query))
                {

                
            ?>
                <div class="col-md-12">
                   
                    <div class="box bg-light shadow-lg">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-4 border-end text-center mb-3">
                                    <h5 class="mt-3">Profile Pic</h5>
                                    <img src="<?php echo "../user_signup_image/".$row['image']; ?>" class="img-fluid shadow-lg border p-2 border-primary" alt="..." height="200" width="200">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <!-- My cart start -->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h3 class="fw-semibold"><?php echo $row['f_name'];?> <?php echo $row['l_name'];?></h3>
                                                </div>
                                                
                                            </div>
                                            
                                                
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-4 col-4">
                                                        <h6>Name :</h6>  
                                                        <h6>Contact :</h6>
                                                        <h6>Date of Birth :</h6>
                                                        <h6>Address :</h6>
                                                        <h6>City :</h6>
                                                        <h6>State :</h6>
                                                        <h6>Zip Code :</h6>
                                                        <h6>Gender :</h6>
                                                        <h6>Email :</h6>
                                                    </div>
                                                    <div class="col-md-8 col-sm-8 col-8">
                                                        <h6><?php echo $row['f_name']; ?><span class="mx-1"></span></span><?php echo $row['l_name'];?></span></h6>  
                                                        <h6><?php echo $row['contact'];?></h6>
                                                        <h6><?php echo $row['dob'];?></h6>
                                                        <h6><?php echo $row['address'];?></h6>
                                                        <h6><?php echo $row['city'];?></h6>
                                                        <h6><?php echo $row['state'];?></h6>
                                                        <h6><?php echo $row['zip_code'];?></h6>
                                                        <h6><?php echo $row['gender'];?></h6>
                                                        <h6><?php echo $row['email'];?></h6>
                                                    </div>
                                                    
                                                </div>
                                        <!-- My cart end -->
                                    </div>
                                </div>
                            </div>
                          </div>
                    </div>
                </div>
                <?php
                }
            }
            else
            {
                echo "No user found.....";
            }
                ?>
            </div>
        </div>
<!-- card end -->
<script src="bootstrap-5.2.0-dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
<?php
}
else
{
  echo "<script>
    alert('You are logged-out please login first.....!');
    window.location = 'login.php';
  </script>";
}
?>
