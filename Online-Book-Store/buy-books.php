<?php
include 'header.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Buy Books</title>
   <link rel="stylesheet" href="bootstrap-5.2.0-dist/css/bootstrap.css">
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="css/all.min.css">
  </head>
  <body>
    <img src="Background-Images/manga1.jpg" class="img-fluid mt-2 mb-2" alt="...">
    <!-- image slider start -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="2000">
            <img src="Background-Images/buy-book1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="Background-Images/buy-book2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="Background-Images/buy-book3.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="Background-Images/buy-book4.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="Background-Images/buy-book5.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    <!-- image slider end -->
    <hr>
    <h1 class="text-center style-chh1"><u>Comics Books</u></h1>
    <div class="container mt-5">
                <div class="row g-4">
                 <?php
                 include 'dbconnection.php';

                 $query = "SELECT * FROM comics_books";

                 $result = mysqli_query($con , $query);

                 if(mysqli_num_rows($result) > 0)
                 {
                  while($row = mysqli_fetch_assoc($result))
                  {
                 ?>
                    <div class=" col-12 col-md-6 col-lg-3">
                        <form action="manage_cart.php" method="POST" enctype="multipart/form-data">
                          <div class="card px-3 pt-3 border-primary card-size h-100">
                              <img src="<?php echo "Admin-Pannel/Book-Images/".$row['image']; ?>" class="card-img-top img-style" alt="..." height="290px">
                              <div class="card-body ">
                                <p class="card-title fw-bold">Book : <?php echo $row['book_name']; ?></p>
                                <span class="card-text">Author : <?php echo $row['author_name']; ?></span>
                                <p class="card-text">Price : <i class="fa-solid fa-indian-rupee-sign text-danger"></i> <?php echo $row['book_price']; ?></p>
                                <div class="d-grid">
                                  <button type="submit" name="add_to_cart" class="btn btn-warning btn-sm mb-2">Add to cart</button>
                                  <input type="hidden" name="image" value="<img src='<?php echo 'Admin-Pannel/Book-Images/'.$row['image'] ?>'>">
                                  <input type="hidden" name="book_name" value="<?php echo $row['book_name'] ?>">
                                  <input type="hidden" name="author_name" value="<?php echo $row['author_name'] ?>">
                                  <input type="hidden" name="book_price" value="<?php echo $row['book_price'] ?>">
                                  <a href="display_comic.php?dis_book_id=<?php echo $row['b_id'] ?>" class="btn btn-info btn-sm">More Info</a>
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
                  echo "Sorry no data found";
                 }
                  ?>
                </div>
</div>
     <hr>
     <div class="container-fluid">
         <img src="Background-Images/buy-book3.jpg" class="img-fluid">
      </div>
     <hr>
    <h1 class="text-center style-chh1"><u>Cooking Books</u></h1>
    <div class="container mt-5">
                <div class="row g-4">
                  <?php
                  $query = "SELECT * FROM cooking_books";

                  $result = mysqli_query($con , $query);
 
                  if(mysqli_num_rows($result) > 0)
                  {
                   while($row = mysqli_fetch_assoc($result))
                   {
                  ?>
                    <div class=" col-12 col-md-6 col-lg-3">
                      <form action="manage_cart.php" method="POST" enctype="multipart/form-data">
                          <div class="card px-3 pt-3 border-primary card-size h-100">
                              <img src="<?php echo "Admin-Pannel/Book-Images/".$row['image']; ?>" class="card-img-top img-style" alt="..." height="290px">
                              <div class="card-body ">
                                <p class="card-title fw-bold">Book : <?php echo $row['book_name']; ?></p>
                                <span class="card-text">Author : <?php echo $row['author_name']; ?></span>
                                <p class="card-text">Price : <i class="fa-solid fa-indian-rupee-sign text-danger"></i> <?php echo $row['book_price']; ?></p>
                                <div class="d-grid">
                                  <button type="submit" name="add_to_cart" class="btn btn-warning btn-sm mb-2">Add to cart</button>
                                  <input type="hidden" name="image" value="<img src='<?php echo 'Admin-Pannel/Book-Images/'.$row['image'] ?>'>">
                                  <input type="hidden" name="book_name" value="<?php echo $row['book_name'] ?>">
                                  <input type="hidden" name="author_name" value="<?php echo $row['author_name'] ?>">
                                  <input type="hidden" name="book_price" value="<?php echo $row['book_price'] ?>">
                                  <a href="display_cooking.php?dis_book_id=<?php echo $row['b_id'] ?>" class="btn btn-info btn-sm">More Info</a>
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
                    echo "Sorry no data found";
                  }
                   ?>
            
                </div>
</div>
       <hr>
    <div class="container-fluid">
        <img src="Background-Images/buy-book5.jpg" class="img-fluid">
     </div>
    <hr>
    <h1 class="text-center style-chh1"><u>Educational Books</u></h1>
    <div class="container mt-5">
                <div class="row g-4">
                  <?php
               
                   $query = "SELECT * FROM educational_books";
 
                   $result = mysqli_query($con , $query);
  
                   if(mysqli_num_rows($result) > 0)
                   {
                    while($row = mysqli_fetch_assoc($result))
                    {
                   ?>
                
                    <div class=" col-12 col-md-6 col-lg-3">
                        <form action="manage_cart.php" method="POST" enctype="multipart/form-data">
                          <div class="card px-3 pt-3 border-primary card-size h-100">
                              <img src="<?php echo "Admin-Pannel/Book-Images/".$row['book_image']; ?>" class="card-img-top img-style" alt="..." height="290px">
                              <div class="card-body ">
                                <p class="card-title fw-bold">Book : <?php echo $row['book_name']; ?></p>
                                <span class="card-text">Author : <?php echo $row['author_name']; ?></span>
                                <p class="card-text">Price : <i class="fa-solid fa-indian-rupee-sign text-danger"></i> <?php echo $row['book_price']; ?></p>
                                <div class="d-grid">
                                  <button type="submit" name="add_to_cart" class="btn btn-warning btn-sm mb-2">Add to cart</button>
                                  <input type="hidden" name="image" value="<img src='<?php echo 'Admin-Pannel/Book-Images/'.$row['book_image'] ?>'>">
                                  <input type="hidden" name="book_name" value="<?php echo $row['book_name'] ?>">
                                  <input type="hidden" name="author_name" value="<?php echo $row['author_name'] ?>">
                                  <input type="hidden" name="book_price" value="<?php echo $row['book_price'] ?>">
                                  <a href="display_educational.php?dis_book_id=<?php echo $row['b_id'] ?>" class="btn btn-info btn-sm">More Info</a>
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
                      echo "Sorry no record found";
                    }
                ?>
                </div>
             
</div>
    <hr>
      <div class="container-fluid">
        <img src="Background-Images/novel.jpg" class="img-fluid">
      </div>
    <hr>
      <h1 class="text-center style-chh1"><u>Novel Books</u></h1>
      <!-- card -->
      <div class="container mt-5">
        <div class="row g-4">
          <?php
       
           $query = "SELECT * FROM novel_books";

           $result = mysqli_query($con , $query);

           if(mysqli_num_rows($result) > 0)
           {
            while($row = mysqli_fetch_assoc($result))
            {
           ?>
        
            <div class=" col-12 col-md-6 col-lg-3">
                <form action="manage_cart.php" method="POST" enctype="multipart/form-data">
                  <div class="card px-3 pt-3 border-primary card-size h-100">
                      <img src="<?php echo "Admin-Pannel/Book-Images/".$row['image']; ?>" class="card-img-top img-style" alt="..." height="290px">
                      <div class="card-body ">
                        <p class="card-title fw-bold">Book: <?php echo $row['book_name']; ?></p>
                        <span class="card-text">Author : <?php echo $row['author_name']; ?></span>
                        <p class="card-text">Price : <i class="fa-solid fa-indian-rupee-sign text-danger"></i> <?php echo $row['book_price']; ?></p>
                        <div class="d-grid">
                          <button type="submit" name="add_to_cart" class="btn btn-warning btn-sm mb-2">Add to cart</button>
                          <input type="hidden" name="image" value="<img src='<?php echo 'Admin-Pannel/Book-Images/'.$row['image'] ?>'>">
                          <input type="hidden" name="book_name" value="<?php echo $row['book_name'] ?>">
                          <input type="hidden" name="author_name" value="<?php echo $row['author_name'] ?>">
                          <input type="hidden" name="book_price" value="<?php echo $row['book_price'] ?>">
                          <a href="display_novel.php?dis_book_id=<?php echo $row['b_id'] ?>" class="btn btn-info btn-sm">More Info</a>
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
              echo "Sorry no record found";
            }
        ?>
        </div>
     
</div>
      <!-- card -->
    <hr>
    <div class="container-fluid">
      <img src="Background-Images/sopt.jpg" class="img-fluid">
    </div>
    <hr>
    <h1 class="text-center style-chh1"><u>Sports Books</u></h1>
    <!-- card -->
    <div class="container mt-5">
        <div class="row g-4">
          <?php
       
           $query = "SELECT * FROM sports_books";

           $result = mysqli_query($con , $query);

           if(mysqli_num_rows($result) > 0)
           {
            while($row = mysqli_fetch_assoc($result))
            {
           ?>
        
            <div class=" col-12 col-md-6 col-lg-3">
                <form action="manage_cart.php" method="POST" enctype="multipart/form-data">
                  <div class="card px-3 pt-3 border-primary card-size h-100">
                      <img src="<?php echo "Admin-Pannel/Book-Images/".$row['image']; ?>" class="card-img-top img-style" alt="..." height="290px">
                      <div class="card-body ">
                        <p class="card-title fw-bold">Book: <?php echo $row['book_name']; ?></p>
                        <span class="card-text">Author : <?php echo $row['author_name']; ?></span>
                        <p class="card-text">Price : <i class="fa-solid fa-indian-rupee-sign text-danger"></i> <?php echo $row['book_price']; ?></p>
                        <div class="d-grid">
                          <button type="submit" name="add_to_cart" class="btn btn-warning btn-sm mb-2">Add to cart</button>
                          <input type="hidden" name="image" value="<img src='<?php echo 'Admin-Pannel/Book-Images/'.$row['image'] ?>'>">
                          <input type="hidden" name="book_name" value="<?php echo $row['book_name'] ?>">
                          <input type="hidden" name="author_name" value="<?php echo $row['author_name'] ?>">
                          <input type="hidden" name="book_price" value="<?php echo $row['book_price'] ?>">
                          <a href="display_booka_details.php?dis_book_id=<?php echo $row['b_id'] ?>" class="btn btn-info btn-sm">More Info</a>
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
              echo "Sorry no record found";
            }
        ?>
        </div>
     
</div>
    <!-- card -->
    <hr>
  </body>
</html>
<?php
include 'footer.php';
?>