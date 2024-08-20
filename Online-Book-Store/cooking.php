<?php
include 'header.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cooking</title>
   <link rel="stylesheet" href="bootstrap-5.2.0-dist/css/bootstrap.css">
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="css/all.min.css">
<body>
  <!-- Image slider start -->
  <img src="Background-Images/buy-book4.jpg" class="img-fluid" alt="...">
  <!-- Image slider end -->
  <hr>
  <h1 class="fw-bold text-primary text-center">All Types of Cooking Books</h1>
  <!-- Card start -->
  <div class="container mt-5">
    <div class="row g-4">
       <?php
       include 'dbconnection.php';

       $query = "SELECT * from cooking_books";

       $result = mysqli_query($con , $query);

       if(mysqli_num_rows($result) > 0)
       {
         while($row = mysqli_fetch_assoc($result))
         {
       ?>
        <div class=" col-12 col-md-6 col-lg-3">
            <form action="manage_cart.php" method="POST" enctype="multipart/form-data">
              <div class="card px-3 pt-3 border-primary card-size h-100">
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
                      <a href="#" class="btn btn-info btn-sm">More info</a>
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
        echo "No data found.....";
       }
       ?>
    </div>
  </div> 
  <!-- Card end -->
  <hr>
</body>
</html>
<?php
include 'footer.php';
?>

