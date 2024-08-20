<?php
include 'books_config.php';
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cooking</title>
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
                        <i class="fa-solid fa-plus"></i> Add Cooking Books
                    </h2>
                </div>
                <form action="" method="POST" class="needs-validation shadow border border-primary rounded p-5"novalidate enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="book_name" class="fs-5">Book Name</label>
                            <input type="text" class="form-control" id="book_name" name="book_name" value="<?php echo $book_name; ?>" placeholder="Enter the name of the book....." required>
                            <div class="invalid-feedback fw-bold">
                            !!.....This field is required.....!!
                            </div>
                            <span class="text-danger fw-bold">
                              <?php echo $book_name_error; ?>
                            </span>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="author_name" class="fs-5">Author Name</label>
                            <input type="text" class="form-control" id="author_name" name="author_name" value="<?php echo $author_name; ?>" placeholder="Enter the name of the author....." required>
                            <div class="invalid-feedback fw-bold">
                            !!.....This field is required.....!!
                            </div>
                            <span class="text-danger fw-bold">
                              <?php echo $author_name_error; ?>
                            </span>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="post_date" class="fs-5">Released Date</label>
                            <input type="date" class="form-control" id="post_date" name="release_date" value="<?php echo $release_date; ?>" required>
                            <div class="invalid-feedback fw-bold">
                            !!.....This field is required.....!!
                            </div>
                            <span class="text-danger fw-bold">
                              <?php echo $release_date_error; ?>
                            </span>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="post_date" class="fs-5">Book Price</label>
                            <input type="number" class="form-control" id="post_date" name="book_price" value="<?php echo $book_price; ?>" placeholder="Enter the price of the book....." required>
                            <div class="invalid-feedback fw-bold">
                            !!.....This field is required.....!!
                            </div>
                            <span class="text-danger fw-bold">
                              <?php echo $book_price_error; ?>
                            </span>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="publisher" class="fs-5">Publisher Name</label>
                            <input type="text" class="form-control" id="publisher" name="publisher_name" value="<?php echo $publisher_name; ?>" placeholder="Enter the publisher of the book....." required>
                            <div class="invalid-feedback fw-bold">
                            !!.....This field is required.....!!
                            </div>
                            <span class="text-danger fw-bold">
                              <?php echo $publisher_name_error; ?>
                            </span>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="publisher" class="fs-5">Image</label>
                            <input type="file" class="form-control" id="publisher" name="image" required>
                            <div class="invalid-feedback fw-bold">
                            !!.....This field is required.....!!
                            </div>
                            <span class="text-danger fw-bold">
                              <?php echo $file_name_error; ?>
                            </span>
                        </div>

                        <div class="d-grid">
                            <button type="submit" name="cooking_submit" class="btn btn-primary btn-lg">Add Book</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </div>
  <!-- Foem end -->

     <!-- form validation javascript code start -->
     <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
       </script>
    <!-- form validation javascript code end -->
  </body>
</html>