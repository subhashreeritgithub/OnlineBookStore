<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Education</title>
    <script>history.pushState({}, "", "")</script>
   <link rel="stylesheet" href="bootstrap-5.2.0-dist/css/bootstrap.css">
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="css/all.min.css">
  </head>
  <body>
    <div class="card">
      <h1 class="text-center fw-bold card-header bg-dark text-light">All Posts of Educational Books</h1>
    </div>
   <div class="container-fluid mt-5 mb-5">
   <a href="index.php" class="btn btn-primary mb-2">Go to Home Page</a>
       <?php
       include '../dbconnection.php';

       $query = "SELECT * FROM educational_books";

       $result = mysqli_query($con , $query);

       if(mysqli_num_rows($result) > 0)
       {
         
       ?>
        <table class="table table-hover table-bordered border-dark">
            <thead class="table-dark">
                <tr>
                <th scope="col">B Id</th>
                <th scope="col">Book Id</th>
                <th scope="col">Book Name</th>
                <th scope="col">Author Name</th>
                <th scope="col">Release Date</th>
                <th scope="col">Book Price</th>
                <th scope="col">Publisher Name</th>
                <th scope="col">Book Image</th>
                <th scope="col" colspan="2" class="text-center">Perform Action</th>
                </tr>
            </thead>
            <?php
            while($row = mysqli_fetch_assoc($result))
            {
            ?>
            <tbody class="align-middle text-center">
                <tr>
                <th scope="row"><?php echo $row['b_id'] ?></th>
                <td><?php echo $row['book_id'] ?></td>
                <td><?php echo $row['book_name'] ?></td>
                <td><?php echo $row['author_name'] ?></td>
                <td><?php echo $row['release_date'] ?></td>
                <td><?php echo $row['book_price'] ?></td>
                <td><?php echo $row['publisher_name'] ?></td>
                <td><img src="<?php echo "Book-Images/".$row['book_image'] ?>" alt="" height="100" width="100"></td>
                <td><a href="update_educa_form.php?u_id=<?php echo $row['b_id'] ?>" class="btn btn-success">Update</a></td>
                <td><a href="delete_educa.php?d_id=<?php echo $row['b_id']; ?>" class="btn btn-danger">Delete</a></td>
                </tr>
            </tbody>
            <?php } ?>
        </table>
        <?php
       }
       else
       {
        echo "Sorry no record found.....";
       }
       ?>
        <div class="container">
        <div class="d-grid d-md-flex justify-content-md-end">
            <a href="dis_com_books.php" class="btn btn-primary">Next <i class="fa-solid fa-forward"></i></a>
        </div>
        </div>
     
   </div>
  </body>
</html>