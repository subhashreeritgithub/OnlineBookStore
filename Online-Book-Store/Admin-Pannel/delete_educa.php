<?php
include '../dbconnection.php';

 $d_id = $_GET['d_id'];

 $query = "SELECT * FROM educational_books where b_id = '$d_id'";

 $result = mysqli_query($con , $query);

 $row = mysqli_fetch_assoc($result);

 unlink("Book-Images/".$row['book_image']);

 $delete_query = "DELETE FROM educational_books Where b_id = '$d_id'";

 $result2 = mysqli_query($con , $delete_query);

 if($result2)
 {
    echo "<script>
    alert('Book deleted successfully.....');
    window,location = 'display_edu_books.php';
    </script>";
 }
 else
 {
    echo "query failed" . mysqli_error($con);
 }


?>