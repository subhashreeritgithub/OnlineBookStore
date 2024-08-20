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
    <title>Home</title>
   <link rel="stylesheet" href="bootstrap-5.2.0-dist/css/bootstrap.css">
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="css/all.min.css">
<body>
  <!-- nav bar start -->
<nav class="navbar navbar-dark bg-dark sticky-top">
  <div class="container">
    <span class="navbar-bran"><i class="fa-solid fa-book text-info"></i> Welcome back to <span class="text-primary">Online Book Store</span> <?php echo $_SESSION['f_name'] ?>  <?php echo $_SESSION['l_name'] ?>....!</span>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel"><img src="<?php echo "user_signup_image/".$_SESSION['image'] ?>" alt="" height="50px" width="50px" class="rounded-circle"> <?php echo $_SESSION['email'] ?> online</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link profile-links" aria-current="page" href="index.php"><i class="fa-solid fa-house"></i> Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link profile-links" href="#"><i class="fa-solid fa-gauge"></i> Dashboard</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle profile-links" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             <i class="fa-solid fa-user"></i> Account
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
                <!-- <li><a class="dropdown-item list-s-dr-p" href="#">Change Profile Pic</a></li> -->
                <li><a class="dropdown-item list-s-dr-p" href="#">Favourite Books</a></li>
                <li><a class="dropdown-item list-s-dr-p" href="#">Downloaded Books</a></li>
                <li><a class="dropdown-item list-s-dr-p" href="#">Subscription Status</a></li>
                <li><a class="dropdown-item list-s-dr-p" href="#">Earning Coins</a></li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item list-s-dr-d" href="logout.php">Logout</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-success" type="submit">Search</button>
        </form>
        
      </div>
    </div>
  </div>
 
</nav>
<!-- nav bar end -->

<!-- card start -->
<div class="container-fluid mt-5 mb-5">
            <div class="row">
                <div class="col-md-12">
                    <a href="index.php" class="btn btn-info mb-2 text-light fw-bold btn-home-pro"><i class="fa-solid fa-house"></i> Home</a>
                    <div class="box bg-light shadow-lg border rounded">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-4 border-end text-center">
                                    <h5 class="mt-3">Profile Pic</h5>
                                    <img src="<?php echo "user_signup_image/".$_SESSION['image']; ?>" class="img-fluid shadow-lg border p-2 border-primary" alt="..." height="200" width="200">
                                    <hr>
                                    <a href="update_propic.php?email=<?php echo $_SESSION['email'] ?>" class="btn btn-outline-success"><i class="fa-solid fa-pen"></i> Update Profile Pic</a>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <!-- My cart start -->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h3 class="fw-semibold"><?php echo $_SESSION['f_name'];?> <?php echo $_SESSION['l_name'];?></h3>
                                                </div>
                                                <div class="col-md-6">
                                                    <h6 class="text-secondary"><i class="fa-solid fa-location-dot"></i> <span class=""><?php echo $_SESSION['city'];?></span> <span class="mx-1"><?php echo $_SESSION['state'];?></span></h6>
                                                </div>
                                            </div>
                                            
                                                <span class="text-primaryc">You are Online.....</span><a href="logout.php" class="btn btn-danger btn-sm mx-2">Logout</a>
                                                <div class="mt-5">
                                                    <a href="contact_us_display.php?email=<?php echo $_SESSION['email']; ?>" class="btn btn-sm btn-outline-success"><i class="fa-solid fa-envelope"></i> Messages</a>
                                                    <a href="#" class="btn btn-sm btn-outline-primary">Contact <i class="fa-solid fa-check"></i></a>
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
                                                        <h6><?php echo $_SESSION['f_name']; ?><span class="mx-1"></span></span><?php echo $_SESSION['l_name'];?></span></h6>  
                                                        <h6><?php echo $_SESSION['contact'];?></h6>
                                                        <h6><?php echo $_SESSION['dob'];?></h6>
                                                        <h6><?php echo $_SESSION['address'];?></h6>
                                                        <h6><?php echo $_SESSION['city'];?></h6>
                                                        <h6><?php echo $_SESSION['state'];?></h6>
                                                        <h6><?php echo $_SESSION['zip_code'];?></h6>
                                                        <h6><?php echo $_SESSION['gender'];?></h6>
                                                        <h6><?php echo $_SESSION['email'];?></h6>
                                                    </div>
                                                    <hr>
                                                    <div class="mt-2 d-flex justify-content-between">
                                                      <div class="bugtyg">
                                                        <a href="update_fo_profile.php?email=<?php echo $_SESSION['email'] ?>" class="btn btn-outline-primary"><i class="fa-solid fa-pen"></i> Edit</a>
                                                        <a href="delete_fo_profile.php?del=<?php echo $_SESSION['email'] ?>" class="btn btn-outline-danger"><i class="fa-solid fa-trash-can"></i> Delete</a>
                                                      </div>
                                                        <a href="your_order.php?oid_email=<?php echo $_SESSION['email'] ?>" class="btn btn-info">Your Orders</a>
                                                    </div>
                                                </div>
                                        <!-- My cart end -->
                                    </div>
                                </div>
                            </div>
                          </div>
                    </div>
                </div>
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
