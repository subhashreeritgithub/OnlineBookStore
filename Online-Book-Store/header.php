
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
   <link rel="stylesheet" href="bootstrap-5.2.0-dist/css/bootstrap.css">
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="css/all.min.css">
  </head>
  <body>
    <!-- NAV BAR START -->
    <nav class="navbar navbar-expand-xl nav_bg sticky-top shadow-lg">
        <div class="container-fluid">
          <span class="navbar-bran"><i class="fa-solid fa-book"></i> Online Book Store</span>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link text-light an-first" aria-current="page" href="index.php"><i class="fa-solid fa-house"></i> Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light an-first" href="buy-books.php"><i class="fa-solid fa-book-open"></i> Buy Books</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light an-first" href="about_us.php"><i class="fa-solid fa-circle-info"></i> About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light an-first" href="contact-us.php"><i class="fa-solid fa-comment"></i> Contact Us</a>
              </li>
          
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light an-first" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Books Categree
                </a>
                <ul class="dropdown-menu bg-ul">
                  <li><a class="dropdown-item ancor-t" href="education.php">Education</a></li>
                  <li><a class="dropdown-item ancor-t" href="comics.php">Comics</a></li>
                  <li><a class="dropdown-item ancor-t" href="novel.php">Novels</a></li>
                  <li><a class="dropdown-item ancor-t" href="cooking.php">Cooking</a></li>
                  <li><a class="dropdown-item ancor-t" href="sports.php">Sports</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light an-first" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  My Account
                </a>
                <ul class="dropdown-menu bg-ul">
                  <li><a class="dropdown-item ancor-t" href="profile.php">Profile</a></li>
                
                  <li><a class="dropdown-item ancor-t" href="signup.php">Create Account</a></li>
                  <?php 
                  session_start();
                  if(!isset($_SESSION['email']) && empty($_SESSION['email']))
                  {
                  ?>
                  <li><a class="dropdown-item ancor-t" href="login.php">Login</a></li>
                  <?php 
                  }
                  else
                  {
                   ?>
                  <li><a class="dropdown-item ancor-t" href="logout.php">Logout</a></li>
                  <?php } ?>
                </ul>
              </li>
              <li class="nav-item">
                <?php
                $count = 0;
                if(isset($_SESSION['cart']))
                {
                  $count = count($_SESSION['cart']);
                }
                ?>
                <a class="nav-link text-light an-first" href="manage_mycart.php"><i class="fa-solid fa-cart-shopping"></i> My cart( <?php echo $count; ?> )</a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li>
            </ul> -->
            <!-- <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form> -->
          </div>
        </div>
      </nav>
    <!-- NAV BAR END -->
    <script src="bootstrap-5.2.0-dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>