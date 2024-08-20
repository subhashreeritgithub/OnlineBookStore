<?php
include 'header.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>More Information</title>
   <link rel="stylesheet" href="bootstrap-5.2.0-dist/css/bootstrap.css">
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="css/all.min.css">
<body>
    <hr>
    <div class="container-fluid">
        <?php
        include 'dbconnection.php';

          $dis_book_id = $_GET['dis_book_id'];

          $query = "SELECT * FROM `sports_books` WHERE `b_id`= '$dis_book_id'";

          $result = mysqli_query($con , $query);

          if(mysqli_num_rows($result) > 0)
          {
            while($row = mysqli_fetch_assoc($result))
            {

                
        ?>
           <!-- card start -->
             <form action="manage_cart.php" method="POST" enctype="multipart/form-data">
             <div class="ad-card offset-md-2">
            <div class="row">
                <div class="col-md-4">
                    <div class="shadow-lg">
                    <div class="p-4 border">
                        <img src="<?php echo "Admin-Pannel/Book-Images/".$row['image'] ?>" class="img-fluid shadow" alt="..."    height="300px" width="300px">
                    </div>
                    </div>
                </div>
                <div class="col-md-8">
                <p><span class="text-danger fs-5 fw-bold"> Book Name : <?php echo $row['book_name'] ?> | </span> <span class="fw-bold">Released : <?php echo $row['release_date'] ?></span></p>
                <p><span class="fw-bold">By : </span> <span class="text-danger fw-bold">Morgan Housel</span> (Author) |<span class="fw-bold"> Publisher </span>: <span class="fw-bold text-danger">Jaico Publishing House</span></p>
                <hr>
                <p class="fw-bold text-danger fs-4">Book Price : <i class="fa-solid fa-indian-rupee-sign text-danger"></i><?php echo $row['book_price'] ?></p>
                <hr>
                    <div class="text-center d-grid col-6 mx-auto">
                            <button type="submit" name="add_to_cart" class="btn btn-primary btn-lg fw-bold">Add to Cart</button>
                            <input type="hidden" name="image" value="<img src='<?php echo 'Admin-Pannel/Book-Images/'.$row['image'] ?>'>">
                        <input type="hidden" name="book_name" value="<?php echo $row['book_name'] ?>">
                        <input type="hidden" name="author_name" value="<?php echo $row['author_name'] ?>">
                        <input type="hidden" name="book_price" value="<?php echo $row['book_price'] ?>">
                    </div>
                </div>
            </div>
        </div>
             </form>
           <!-- card end -->
        <?php } } ?>
    </div>
   <hr>

   
</body>
</html>
