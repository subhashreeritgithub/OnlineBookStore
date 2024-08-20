
<?php
include 'header.php';
if(isset($_SESSION['usert_type']))
{
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Home</title>
   <link rel="stylesheet" href="bootstrap-5.2.0-dist/css/bootstrap.css">
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="css/all.min.css">
  </head>
  <body>
  <!-- image slider start -->
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="2000">
      <img src="BG-Images/admin1.jpg" class="d-block w-100" alt="..." height="660px">
      <div class="carousel-caption d-none d-md-block">
        <h1 class="fs">Admin Pannel</h1>
        <p class="fs-3">Welcome to Admin Pannel of Online Book Store.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="1000">
      <img src="BG-Images/admin2.jpg" class="d-block w-100" alt="..." height="660px">
      <div class="carousel-caption d-none d-md-block">
        <h1 class="fs">Admin Pannel</h1>
        <p class="fs-3">Welcome to Admin Pannel of Online Book Store.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="1000">
      <img src="BG-Images/admin3.jpg" class="d-block w-100" alt="..." height="660px">
      <div class="carousel-caption d-none d-md-block">
        <h1 class="fs">Admin Pannel</h1>
        <p class="fs-3">Welcome to Admin Pannel of Online Book Store.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="BG-Images/admin4.jpg" class="d-block w-100" alt="..." height="660px">
      <div class="carousel-caption d-none d-md-block">
        <h1 class="fs">Admin Pannel</h1>
        <p class="fs-3">Welcome to Admin Pannel of Online Book Store.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  <!-- image slider end -->
  </body>
</html>
<?php
}
else
{
  header('location: login.php');
}
?>