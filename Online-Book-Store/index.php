<?php
include 'header.php';
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
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="2000">
        <img src="Background-Images/img-sliderh3.jpg" class="d-block w-100" height="600px" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="h5-home">Welcome to Online Book Store</h5>
          <p class="p-home">If you want to buy or sale or read books then please login first Thank You.</p>
          <?php
          if(!isset($_SESSION['email']) && empty($_SESSION['email']))
          {
          ?>
          <a href="login.php" class="btn btn-primary btn-lg btn-style1">Login Account</a>
          <?php
          }
          ?>

          <a href="signup.php" class="btn btn-secondary btn-lg btn-style2">Create Account</a>

        </div>
        
      </div>
      <div class="carousel-item" data-bs-interval="1000">
        <img src="Background-Images/img-dslider3.jpg" class="d-block w-100" height="600px" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="h5-home">Welcome to Online Book Store</h5>
          <p class="p-home">SIf you want to buy or sale or read books then please login first Thank You.</p>

          <?php
          if(!isset($_SESSION['email']) && empty($_SESSION['email']))
          {
          ?>
          <a href="login.php" class="btn btn-primary btn-lg btn-style1">Login Account</a>
          <?php
          }
          ?>

          <a href="signup.php" class="btn btn-secondary btn-lg btn-style2">Create Account</a>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="1000">
        <img src="Background-Images/img-dslider1.jpg" class="d-block w-100" height="600px" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="h5-home">Welcome to Online Book Store</h5>
          <p class="p-home">If you want to buy or sale or read books then please login first Thank You.</p>

          <?php
          if(!isset($_SESSION['email']) && empty($_SESSION['email']))
          {
          ?>
          <a href="login.php" class="btn btn-primary btn-lg btn-style1">Login Account</a>
          <?php
          }
          ?>

          <a href="signup.php" class="btn btn-secondary btn-lg btn-style2">Create Account</a>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="1000">
        <img src="Background-Images/img-dslider4.jpg" class="d-block w-100" height="600px" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="h5-home">Welcome to Online Book Store</h5>
          <p class="p-home">If you want to buy or sale or read books then please login first Thank You.</p>

          <?php
          if(!isset($_SESSION['email']) && empty($_SESSION['email']))
          {
          ?>
          <a href="login.php" class="btn btn-primary btn-lg btn-style1">Login Account</a>
          <?php
          }
          ?>

          <a href="signup.php" class="btn btn-secondary btn-lg btn-style2">Create Account</a>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="1000">
        <img src="Background-Images/img-dslider6.jpg" class="d-block w-100" height="600px" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="h5-home">Welcome to Online Book Store</h5>
          <p class="p-home">If you want to buy or sale or read books then please login first Thank You.</p>

          <?php
          if(!isset($_SESSION['email']) && empty($_SESSION['email']))
          {
          ?>
          <a href="login.php" class="btn btn-primary btn-lg btn-style1">Login Account</a>
          <?php
          }
          ?>

          <a href="signup.php" class="btn btn-secondary btn-lg btn-style2">Create Account</a>
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
<hr>
<img src="Background-Images/homea.jpg" class="img-fluid" alt="...">
<hr>
<!-- Cart new arrival start -->
<h1 class="text-center style-ch">Buy Books</h1>
<hr class="border border-2 border-primary border-hr opacity-50">

  <div class="container mt-5">
    <div class="row g-4">
       <?php 
       include 'dbconnection.php';

       $query = "SELECT * FROM sports_books";

       $result = mysqli_query($con , $query);

       if(mysqli_num_rows($result) > 0)
       {
        while($row = mysqli_fetch_assoc($result))
        {
       ?>
        <div class=" col-12 col-md-6 col-lg-3">
            <form action="manage_cart.php" method="POST" enctype="multipart/form-data">
              <div class="card px-3 pt-3 border-primary card-size ">
                  <img src="<?php echo "Admin-Pannel/Book-Images/".$row['image'] ?>" class="card-img-top img-style" alt="..." height="290px">
                  <div class="card-body">
                    <p class="card-title fw-bold">Book : <?php echo $row['book_name'] ?></p>
                    <span class="card-text">Author : <?php echo $row['author_name'] ?></span>
                    <p class="card-text">Price : <i class="fa-solid fa-indian-rupee-sign text-danger"></i> <?php echo $row['book_price'] ?></p>
                      <div class="d-grid">
                      <button type="submit" name="add_to_cart" class="btn btn-warning btn-sm mb-2">Add to cart</button>
                      <input type="hidden" name="image" value="<img src='<?php echo 'Admin-Pannel/Book-Images/'.$row['image'] ?>'>">
                      <input type="hidden" name="book_name" value="<?php echo $row['book_name'] ?>">
                      <input type="hidden" name="author_name" value="<?php echo $row['author_name'] ?>">
                      <input type="hidden" name="book_price" value="<?php echo $row['book_price'] ?>">
                      <a href="display_booka_details.php?dis_book_id=<?php echo $row['b_id'] ?>" class="btn btn-info btn-sm">More info</a>
                    </div>
                  </div>
              </div>
            </form>
        </div> 

        <?php
        }
      }
        else
        {
          echo "Sorry no data found.....";
        }
        ?>
        
    </div>
  </div> 
<hr class="border border-2 border-primary border-hr opacity-50">
<!-- end -->
<hr>
  </body>
</html>
<?php
include 'footer.php'
?>