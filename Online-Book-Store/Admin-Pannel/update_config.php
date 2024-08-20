<?php
include '../dbconnection.php';

if(isset($_POST['educational_update']))
{
    $b_id = $_POST['b_id'];
    $book_name = $_POST['book_name'];
    $author_name = $_POST['author_name'];
    $release_date = $_POST['release_date'];
    $book_price = $_POST['book_price'];
    $publisher_name = $_POST['publisher_name'];

    $file_name = $_FILES['book_image']['name'];
    $file_size = $_FILES['book_image']['size'];
    $file_temp = $_FILES['book_image']['tmp_name'];
    $file_error = $_FILES['book_image']['error'];

    // image validation start
    $file_ext = explode('.' , $file_name);

    $file_ext_check = strtolower(end($file_ext));
    
    $valid_file_extention = array('png' , 'jpg' , 'jpeg');
    // image validation end

    if($_FILES['book_image']['name'] != '')
    {
    $file_name = $_FILES['book_image']['name'];
    $file_temp = $_FILES['book_image']['tmp_name'];
    move_uploaded_file($file_temp,"Book-Images/".$file_name);
    unlink("Book-Images/".$_POST['old_image']);
    }
    else
    {
        $file_name = $_POST['old_image'];
    }
    
    $query = "UPDATE `educational_books` SET `book_name` = '$book_name' , `author_name` = '$author_name' , `release_date` = '$release_date' , `book_price` = '$book_price' , `publisher_name` = '$publisher_name' , `book_image` = '$file_name' WHERE b_id = '$b_id'";

    $result = mysqli_query($con , $query);

    if($result)
    {
        echo "<script>
        alert('Updated Successfully.....!');
        window.location = 'display_edu_books.php';
        </script>";
    }
    else
    {
        echo "Query failed" . mysqli_error($con);
    }

}
// UPDATE COMIC CODE STARTS
include '../dbconnection.php';

if(isset($_POST['comic_update']))
{
    $b_id = $_POST['b_id'];
    $book_name = $_POST['book_name'];
    $author_name = $_POST['author_name'];
    $released_date = $_POST['released_date'];
    $book_price = $_POST['book_price'];
    $publisher_name = $_POST['publisher_name'];

    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_temp = $_FILES['image']['tmp_name'];
    $file_error = $_FILES['image']['error'];

    // image validation start
    $file_ext = explode('.' , $file_name);

    $file_ext_check = strtolower(end($file_ext));
    
    $valid_file_extention = array('png' , 'jpg' , 'jpeg');
    // image validation end

    if($_FILES['image']['name'] != '')
    {
    $file_name = $_FILES['image']['name'];
    $file_temp = $_FILES['image']['tmp_name'];
    move_uploaded_file($file_temp,"Book-Images/".$file_name);
    unlink("Book-Images/".$_POST['old_image']);
    }
    else
    {
        $file_name = $_POST['old_image'];
    }
    
    $query = "UPDATE `comics_books` SET `book_name` = '$book_name' , `author_name` = '$author_name' , `released_date` = '$released_date' , `book_price` = '$book_price' , `publisher_name` = '$publisher_name' , `image` = '$file_name' WHERE b_id = '$b_id'";

    $result = mysqli_query($con , $query);

    if($result)
    {
        echo "<script>
        alert('Updated Successfully.....!');
        window.location = 'dis_com_books.php';
        </script>";
    }
    else
    {
        echo "Query failed" . mysqli_error($con);
    }

}
// UPDATE COMIC CODE END

// UPDATE NOVEL CODE START
include '../dbconnection.php';

if(isset($_POST['novel_update']))
{
    $b_id = $_POST['b_id'];
    $book_name = $_POST['book_name'];
    $author_name = $_POST['author_name'];
    $release_date = $_POST['release_date'];
    $book_price = $_POST['book_price'];
    $publisher_name = $_POST['publisher_name'];

    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_temp = $_FILES['image']['tmp_name'];
    $file_error = $_FILES['image']['error'];

    // image validation start
    $file_ext = explode('.' , $file_name);

    $file_ext_check = strtolower(end($file_ext));
    
    $valid_file_extention = array('png' , 'jpg' , 'jpeg');
    // image validation end

    if($_FILES['image']['name'] != '')
    {
    $file_name = $_FILES['image']['name'];
    $file_temp = $_FILES['image']['tmp_name'];
    move_uploaded_file($file_temp,"Book-Images/".$file_name);
    unlink("Book-Images/".$_POST['old_image']);
    }
    else
    {
        $file_name = $_POST['old_image'];
    }
    
    $query = "UPDATE `novel_books` SET `book_name` = '$book_name' , `author_name` = '$author_name' , `release_date` = '$release_date' , `book_price` = '$book_price' , `publisher_name` = '$publisher_name' , `image` = '$file_name' WHERE b_id = '$b_id'";

    $result = mysqli_query($con , $query);

    if($result)
    {
        echo "<script>
        alert('Updated Successfully.....!');
        window.location = 'dis_nov_books.php';
        </script>";
    }
    else
    {
        echo "Query failed" . mysqli_error($con);
    }

}
// UPDATE NOVEL CODE END

// UPDATE COOKING CODE START
include '../dbconnection.php';

if(isset($_POST['cooking_update']))
{
    $b_id = $_POST['b_id'];
    $book_name = $_POST['book_name'];
    $author_name = $_POST['author_name'];
    $release_date = $_POST['release_date'];
    $book_price = $_POST['book_price'];
    $publisher_name = $_POST['publisher_name'];

    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_temp = $_FILES['image']['tmp_name'];
    $file_error = $_FILES['image']['error'];

    // image validation start
    $file_ext = explode('.' , $file_name);

    $file_ext_check = strtolower(end($file_ext));
    
    $valid_file_extention = array('png' , 'jpg' , 'jpeg');
    // image validation end

    if($_FILES['image']['name'] != '')
    {
    $file_name = $_FILES['image']['name'];
    $file_temp = $_FILES['image']['tmp_name'];
    move_uploaded_file($file_temp,"Book-Images/".$file_name);
    unlink("Book-Images/".$_POST['old_image']);
    }
    else
    {
        $file_name = $_POST['old_image'];
    }
    
    $query = "UPDATE `cooking_books` SET `book_name` = '$book_name' , `author_name` = '$author_name' , `release_date` = '$release_date' , `book_price` = '$book_price' , `publisher_name` = '$publisher_name' , `image` = '$file_name' WHERE b_id = '$b_id'";

    $result = mysqli_query($con , $query);

    if($result)
    {
        echo "<script>
        alert('Updated Successfully.....!');
        window.location = 'dis_cook_books.php';
        </script>";
    }
    else
    {
        echo "Query failed" . mysqli_error($con);
    }

}
// UPDATE COOKING CODE END

// UPDATE SPORTS CODE START
include '../dbconnection.php';

if(isset($_POST['sports_update']))
{
    $b_id = $_POST['b_id'];
    $book_name = $_POST['book_name'];
    $author_name = $_POST['author_name'];
    $release_date = $_POST['release_date'];
    $book_price = $_POST['book_price'];
    $publisher_name = $_POST['publisher_name'];

    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_temp = $_FILES['image']['tmp_name'];
    $file_error = $_FILES['image']['error'];

    // image validation start
    $file_ext = explode('.' , $file_name);

    $file_ext_check = strtolower(end($file_ext));
    
    $valid_file_extention = array('png' , 'jpg' , 'jpeg');
    // image validation end

    if($_FILES['image']['name'] != '')
    {
    $file_name = $_FILES['image']['name'];
    $file_temp = $_FILES['image']['tmp_name'];
    move_uploaded_file($file_temp,"Book-Images/".$file_name);
    unlink("Book-Images/".$_POST['old_image']);
    }
    else
    {
        $file_name = $_POST['old_image'];
    }
    
    $query = "UPDATE `sports_books` SET `book_name` = '$book_name' , `author_name` = '$author_name' , `release_date` = '$release_date' , `book_price` = '$book_price' , `publisher_name` = '$publisher_name' , `image` = '$file_name' WHERE b_id = '$b_id'";

    $result = mysqli_query($con , $query);

    if($result)
    {
        echo "<script>
        alert('Updated Successfully.....!');
        window.location = 'dis_spot_books.php';
        </script>";
    }
    else
    {
        echo "Query failed" . mysqli_error($con);
    }

}
// UPDATE SPORTS CODE END
?>