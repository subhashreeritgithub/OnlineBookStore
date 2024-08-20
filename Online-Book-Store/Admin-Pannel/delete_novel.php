<?php
include '../dbconnection.php';

$d_id = $_GET['d_id'];

$sql = "SELECT * FROM novel_books WHERE b_id = '$d_id'";

$result = mysqli_query($con , $sql);

$row = mysqli_fetch_assoc($result);

unlink("Book-Images/".$row['image']);

$query = "DELETE FROM novel_books WHERE b_id = '$d_id'";

$result_d = mysqli_query($con , $query);

if($result_d)
{
    echo "<script>
    alert('Book deleted successfully.....');
    window.location = 'dis_nov_books.php';
    </script>";
}
else
{
    echo "Query Failed....." . mysqli_error($con);
}
?>