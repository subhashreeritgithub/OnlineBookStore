<?php
session_start();
?>

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
    <nav class="navbar navbar-dark bg-dark sticky-top">
  <div class="container">
    <span class="navbar-bran fs-1 fw-bold text-light"><i class="fa-solid fa-toolbox text-primary"></i> Admin Pannel</span>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title heading-first" id="offcanvasDarkNavbarLabel"><?php echo $_SESSION['email']; ?> is Online.....!</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link list-admin fs-5" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link list-admin fs-5" href="#">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link list-admin fs-5" href="display_user_d.php">Customers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link list-admin fs-5" href="user_orders.php">Orders</a>
          </li>
         <!-- drop down list start -->
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle list-admin fs-5" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Add Books With Category
          </a>
          <ul class="dropdown-menu bg-dark">
            <li><a class="dropdown-item text-light category-tag" href="book-fo-educa.php">Education</a></li>
            <li><a class="dropdown-item text-light category-tag" href="book-fo-comics.php">Comics</a></li>
            <li><a class="dropdown-item text-light category-tag" href="book-fo-novels.php">Novels</a></li>
            <li><a class="dropdown-item text-light category-tag" href="book-fo-cooking.php">Cooking</a></li>
            <li><a class="dropdown-item text-light category-tag" href="book-fo-chi_teen.php">Sports</a></li>
          </ul>
        </li>
         <!-- drop down list end -->
          <li class="nav-item">
            <a class="nav-link list-admin fs-5" href="display_edu_books.php">Display Uploaded Books</a>
          </li>
          <li class="nav-item">
            <a class="nav-link list-admin fs-5" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
    <!-- NAV BAR END -->
    <script src="bootstrap-5.2.0-dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>