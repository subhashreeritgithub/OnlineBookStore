
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Cooking Books</title>
    <script>history.pushState({}, "", "")</script>
   <link rel="stylesheet" href="bootstrap-5.2.0-dist/css/bootstrap.css">
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="css/all.min.css">
  </head>
  <body>
  <!-- Foem start -->
  <div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="education-book-form mt-5 mb-5">
                <a href="index.php" class="btn btn-primary btn-sm"><i class="fa-solid fa-backward"></i> Back to Home</a>
                <div class="card">
                    <h2 class="card-header text-center fw-bold bg-primary text-light">
                        <i class="fa-solid fa-plus"></i> Update Cooking Books
                    </h2>
                </div>
                <?php
                include '../dbconnection.php';

                $u_id = $_GET['u_id'];

                $query = "SELECT * FROM cooking_books WHERE b_id = '$u_id'";

                $result = mysqli_query($con , $query);

                if(mysqli_num_rows($result) > 0)
                {

                while($row = mysqli_fetch_assoc($result))
                {

                ?>
                <form action="update_config.php" method="POST" class="shadow border border-primary rounded p-5" novalidate enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <input type="hidden" name="b_id" value="<?php echo $row['b_id']; ?>">
                            <label for="book_name" class="fs-5">Book Name</label>
                            <input type="text" class="form-control" name="book_name" value="<?php echo $row['book_name']; ?>" id="book_name" placeholder="Enter the name of the book.....">
                        
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="author_name" class="fs-5">Author Name</label>
                            <input type="text" class="form-control" name="author_name" value="<?php echo $row['author_name']; ?>" id="author_name" placeholder="Enter the name of the author.....">
                       
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="post_date" class="fs-5">Released Date</label>
                            <input type="date" class="form-control" name="release_date" value="<?php echo $row['release_date']; ?>"  id="post_date">
                        
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="post_date" class="fs-5">Book Price</label>
                            <input type="number" class="form-control" name="book_price" value="<?php echo $row['book_price']; ?>" id="post_date" placeholder="Enter the price of the book.....">
                         
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="publisher" class="fs-5">Publisher Name</label>
                            <input type="text" class="form-control" name="publisher_name" value="<?php echo $row['publisher_name']; ?>" id="publisher" placeholder="Enter the publisher of the book.....">

                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="publisher" class="fs-5"><?php echo $row['image']; ?></label>
                            <input type="file" class="form-control" name="image" value="<?php echo $row['image']; ?>" id="publisher">
                            <img src="<?php echo "Book-Images/".$row['image']; ?>" alt="" height="100px" width="100px">
                            <input type="hidden" name="old_image" value="<?php echo $row['image']; ?>">
                
                        </div>

                        <div class="d-grid">
                            <button class="btn btn-primary btn-lg" name="cooking_update">Update Book</button>
                        </div>
                    </div>
                </form>
                <?php } } ?>
            </div>
        </div>
    </div>
  </div>
  </body>
</html>