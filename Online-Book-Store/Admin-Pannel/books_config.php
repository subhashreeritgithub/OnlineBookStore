<?php
include '../dbconnection.php';

// Error message start
    $book_name = null;
    $book_name_error = null;
    $author_name = null;
    $author_name_error = null;
    $release_date = null;
    $release_date_error = null;
    $book_price = null;
    $book_price_error = null;
    $publisher_name = null;
    $publisher_name_error = null;
    $file_name = null;
    $file_name_error = null;
// Error message end

if(isset($_POST['educational_submit']))
{
    $book_name = $_POST['book_name'];
    $author_name = $_POST['author_name'];
    $release_date = $_POST['release_date'];
    $book_price = $_POST['book_price'];
    $publisher_name = $_POST['publisher_name'];

    // for Image Validation start
    $file_name = $_FILES['book_image']['name'];
    $file_type = $_FILES['book_image']['type'];
    $file_size = $_FILES['book_image']['size'];
    $file_error = $_FILES['book_image']['error'];
    $file_temp_name = $_FILES['book_image']['tmp_name'];

    $file_ext = explode('.' , $file_name);

    $file_ext_check = strtolower(end($file_ext));
    
    $valid_file_extention = array('png' , 'jpg' , 'jpeg');
    // for Image Validation end

    // Image check start
    $image_check_query = "SELECT * from educational_books WHERE book_image = '$file_name'";

    $result_check = mysqli_query($con , $image_check_query);

    $image_result = mysqli_num_rows($result_check);
    // Image check end

    if(!preg_match("/^[A-Za-z 0-9]+$/" , $book_name))
    {
        $book_name_error = "!!!.....Please check the name.....!!!";
    }
    else
    {
        if(!preg_match("/^[A-Za-z ]*$/" , $author_name))
        {
            $author_name_error = "!!!.....Please check the name.....!!!";
        }
        else
        {
            if(!preg_match("/^[A-Za-z ]*$/" , $publisher_name))
            {
                $publisher_name_error = "!!!.....Please check the name.....!!!";
            }
            else
            {
                if(!(in_array($file_ext_check , $valid_file_extention)))
                {
                   $file_name_error = "!!!.....Only jpg , jpeg , png extentions are valid.....!!!";
                }
                else
                {
                    if(!($file_size <= 2015232))
                    {
                        $file_name_error = "*** File size not more then 2 mb.....!";
                    }
                    else
                    {
                        if($image_result > 0)
                        {
                            $file_name_error = "*** This image is already taken.....!";
                        }
                        else
                        {
                            $insert_education_query = "INSERT INTO `educational_books`(`book_name` , `author_name` , `release_date` , `book_price` , `publisher_name` , `book_image`) VALUES ('$book_name' , '$author_name' , '$release_date' , '$book_price' , '$publisher_name' , '$file_name')";

                            $result_education = mysqli_query($con , $insert_education_query);

                            if($result_education)
                            {
                                
                                echo "<script>
                                alert('Book added successfully.....');
                                window.location = 'display_edu_books.php';
                                </script>";
                                move_uploaded_file($file_temp_name , "Book-Images/" . $file_name);
                            }
                            else
                            {
                                echo "Query failed....." . mysqli_error($con);
                            }
                        }
                    }
                }
            }
        }
    }
}
// insert comics books start

// Error message start
    $book_name = null;
    $book_name_error = null;
    $author_name = null;
    $author_name_error = null;
    $release_date = null;
    $release_date_error = null;
    $book_price = null;
    $book_price_error = null;
    $publisher_name = null;
    $publisher_name_error = null;
    $file_name = null;
    $file_name_error = null;
// Error message end

if(isset($_POST['insert_comics']))
{
    $book_name = $_POST['book_name'];
    $author_name = $_POST['author_name'];
    $release_date = $_POST['released_date'];
    $book_price = $_POST['book_price'];
    $publisher_name = $_POST['publisher_name'];

    // for Image Validation start
    $file_name = $_FILES['image']['name'];
    $file_type = $_FILES['image']['type'];
    $file_size = $_FILES['image']['size'];
    $file_error = $_FILES['image']['error'];
    $file_temp_name = $_FILES['image']['tmp_name'];

    $file_ext = explode('.' , $file_name);

    $file_ext_check = strtolower(end($file_ext));
    
    $valid_file_extention = array('png' , 'jpg' , 'jpeg');
    // for Image Validation end

    // Image check start
    $image_check_query = "SELECT * from comics_books WHERE image = '$file_name'";

    $result_check = mysqli_query($con , $image_check_query);

    $image_result = mysqli_num_rows($result_check);
    // Image check end

    if(!preg_match("/^[A-Za-z 0-9]+$/" , $book_name))
    {
        $book_name_error = "!!!.....Please check the name.....!!!";
    }
    else
    {
        if(!preg_match("/^[A-Za-z ]*$/" , $author_name))
        {
            $author_name_error = "!!!.....Please check the name.....!!!";
        }
        else
        {
            if(!preg_match("/^[A-Za-z ]*$/" , $publisher_name))
            {
                $publisher_name_error = "!!!.....Please check the name.....!!!";
            }
            else
            {
                if(!(in_array($file_ext_check , $valid_file_extention)))
                {
                   $file_name_error = "!!!.....Only jpg , jpeg , png extentions are valid.....!!!";
                }
                else
                {
                    if(!($file_size <= 2015232))
                    {
                        $file_name_error = "*** File size not more then 2 mb.....!";
                    }
                    else
                    {
                        if($image_result > 0)
                        {
                            $file_name_error = "*** This image is already taken.....!";
                        }
                        else
                        {
                            $insert_education_query = "INSERT INTO `comics_books`(`book_name` , `author_name` , `released_date` , `book_price` , `publisher_name` , `image`) VALUES ('$book_name' , '$author_name' , '$release_date' , '$book_price' , '$publisher_name' , '$file_name')";

                            $result_education = mysqli_query($con , $insert_education_query);

                            if($result_education)
                            {
                                
                                echo "<script>
                                alert('Book added successfully.....');
                                window.location = 'dis_com_books.php';
                                </script>";
                                move_uploaded_file($file_temp_name , "Book-Images/" . $file_name);
                            }
                            else
                            {
                                echo "Query failed....." . mysqli_error($con);
                            }
                        }
                    }
                }
            }
        }
    }
}
// insert comics books end

// insert NOVELS BOOKS START

// Error message start
$book_name = null;
$book_name_error = null;
$author_name = null;
$author_name_error = null;
$release_date = null;
$release_date_error = null;
$book_price = null;
$book_price_error = null;
$publisher_name = null;
$publisher_name_error = null;
$file_name = null;
$file_name_error = null;
// Error message end

if(isset($_POST['submit_novels']))
{
$book_name = $_POST['book_name'];
$author_name = $_POST['author_name'];
$release_date = $_POST['release_date'];
$book_price = $_POST['book_price'];
$publisher_name = $_POST['publisher_name'];

// for Image Validation start
$file_name = $_FILES['image']['name'];
$file_type = $_FILES['image']['type'];
$file_size = $_FILES['image']['size'];
$file_error = $_FILES['image']['error'];
$file_temp_name = $_FILES['image']['tmp_name'];

$file_ext = explode('.' , $file_name);

$file_ext_check = strtolower(end($file_ext));

$valid_file_extention = array('png' , 'jpg' , 'jpeg');
// for Image Validation end

// Image check start
$image_check_query = "SELECT * from novel_books WHERE image = '$file_name'";

$result_check = mysqli_query($con , $image_check_query);

$image_result = mysqli_num_rows($result_check);
// Image check end

    if(!preg_match("/^[A-Za-z 0-9]+$/" , $book_name))
    {
        $book_name_error = "!!!.....Please check the name.....!!!";
    }
    else
    {
        if(!preg_match("/^[A-Za-z ]*$/" , $author_name))
        {
            $author_name_error = "!!!.....Please check the name.....!!!";
        }
        else
        {
            if(!preg_match("/^[A-Za-z ]*$/" , $publisher_name))
            {
                $publisher_name_error = "!!!.....Please check the name.....!!!";
            }
            else
            {
                if(!(in_array($file_ext_check , $valid_file_extention)))
                {
                $file_name_error = "!!!.....Only jpg , jpeg , png extentions are valid.....!!!";
                }
                else
                {
                    if(!($file_size <= 2015232))
                    {
                        $file_name_error = "*** File size not more then 2 mb.....!";
                    }
                    else
                    {
                        if($image_result > 0)
                        {
                            $file_name_error = "*** This image is already taken.....!";
                        }
                        else
                        {
                            $insert_education_query = "INSERT INTO `novel_books`(`book_name` , `author_name` , `release_date` , `book_price` , `publisher_name` , `image`) VALUES ('$book_name' , '$author_name' , '$release_date' , '$book_price' , '$publisher_name' , '$file_name')";

                            $result_education = mysqli_query($con , $insert_education_query);

                            if($result_education)
                            {
                                
                                echo "<script>
                                alert('Book added successfully.....');
                                window.location = 'dis_nov_books.php';
                                </script>";
                                move_uploaded_file($file_temp_name , "Book-Images/" . $file_name);
                            }
                            else
                            {
                                echo "Query failed....." . mysqli_error($con);
                            }
                        }
                    }
                }
            }
        }
    }
}
// insert NOVELS BOOKS END

// insert COOKING BOOK START

// Error message start
$book_name = null;
$book_name_error = null;
$author_name = null;
$author_name_error = null;
$release_date = null;
$release_date_error = null;
$book_price = null;
$book_price_error = null;
$publisher_name = null;
$publisher_name_error = null;
$file_name = null;
$file_name_error = null;
// Error message end

if(isset($_POST['cooking_submit']))
{
$book_name = $_POST['book_name'];
$author_name = $_POST['author_name'];
$release_date = $_POST['release_date'];
$book_price = $_POST['book_price'];
$publisher_name = $_POST['publisher_name'];

// for Image Validation start
$file_name = $_FILES['image']['name'];
$file_type = $_FILES['image']['type'];
$file_size = $_FILES['image']['size'];
$file_error = $_FILES['image']['error'];
$file_temp_name = $_FILES['image']['tmp_name'];

$file_ext = explode('.' , $file_name);

$file_ext_check = strtolower(end($file_ext));

$valid_file_extention = array('png' , 'jpg' , 'jpeg');
// for Image Validation end

// Image check start
$image_check_query = "SELECT * from cooking_books WHERE image = '$file_name'";

$result_check = mysqli_query($con , $image_check_query);

$image_result = mysqli_num_rows($result_check);
// Image check end

    if(!preg_match("/^[A-Za-z 0-9]+$/" , $book_name))
    {
        $book_name_error = "!!!.....Please check the name.....!!!";
    }
    else
    {
        if(!preg_match("/^[A-Za-z ]*$/" , $author_name))
        {
            $author_name_error = "!!!.....Please check the name.....!!!";
        }
        else
        {
            if(!preg_match("/^[A-Za-z ]*$/" , $publisher_name))
            {
                $publisher_name_error = "!!!.....Please check the name.....!!!";
            }
            else
            {
                if(!(in_array($file_ext_check , $valid_file_extention)))
                {
                $file_name_error = "!!!.....Only jpg , jpeg , png extentions are valid.....!!!";
                }
                else
                {
                    if(!($file_size <= 2015232))
                    {
                        $file_name_error = "*** File size not more then 2 mb.....!";
                    }
                    else
                    {
                        if($image_result > 0)
                        {
                            $file_name_error = "*** This image is already taken.....!";
                        }
                        else
                        {
                            $insert_education_query = "INSERT INTO `cooking_books`(`book_name` , `author_name` , `release_date` , `book_price` , `publisher_name` , `image`) VALUES ('$book_name' , '$author_name' , '$release_date' , '$book_price' , '$publisher_name' , '$file_name')";

                            $result_education = mysqli_query($con , $insert_education_query);

                            if($result_education)
                            {
                                
                                echo "<script>
                                alert('Book added successfully.....');
                                window.location = 'dis_cook_books.php';
                                </script>";
                                move_uploaded_file($file_temp_name , "Book-Images/" . $file_name);
                            }
                            else
                            {
                                echo "Query failed....." . mysqli_error($con);
                            }
                        }
                    }
                }
            }
        }
    }
}
// insert COOKING BOOK END

// INSERT SPORTS BOOK START

// Error message start
$book_name = null;
$book_name_error = null;
$author_name = null;
$author_name_error = null;
$release_date = null;
$release_date_error = null;
$book_price = null;
$book_price_error = null;
$publisher_name = null;
$publisher_name_error = null;
$file_name = null;
$file_name_error = null;
// Error message end

if(isset($_POST['sports_update']))
{
$book_name = $_POST['book_name'];
$author_name = $_POST['author_name'];
$release_date = $_POST['release_date'];
$book_price = $_POST['book_price'];
$publisher_name = $_POST['publisher_name'];

// for Image Validation start
$file_name = $_FILES['image']['name'];
$file_type = $_FILES['image']['type'];
$file_size = $_FILES['image']['size'];
$file_error = $_FILES['image']['error'];
$file_temp_name = $_FILES['image']['tmp_name'];

$file_ext = explode('.' , $file_name);

$file_ext_check = strtolower(end($file_ext));

$valid_file_extention = array('png' , 'jpg' , 'jpeg');
// for Image Validation end

// Image check start
$image_check_query = "SELECT * from sports_books WHERE image = '$file_name'";

$result_check = mysqli_query($con , $image_check_query);

$image_result = mysqli_num_rows($result_check);
// Image check end

    if(!preg_match("/^[A-Za-z 0-9]+$/" , $book_name))
    {
        $book_name_error = "!!!.....Please check the name.....!!!";
    }
    else
    {
        if(!preg_match("/^[A-Za-z ]*$/" , $author_name))
        {
            $author_name_error = "!!!.....Please check the name.....!!!";
        }
        else
        {
            if(!preg_match("/^[A-Za-z ]*$/" , $publisher_name))
            {
                $publisher_name_error = "!!!.....Please check the name.....!!!";
            }
            else
            {
                if(!(in_array($file_ext_check , $valid_file_extention)))
                {
                $file_name_error = "!!!.....Only jpg , jpeg , png extentions are valid.....!!!";
                }
                else
                {
                    if(!($file_size <= 2015232))
                    {
                        $file_name_error = "*** File size not more then 2 mb.....!";
                    }
                    else
                    {
                        if($image_result > 0)
                        {
                            $file_name_error = "*** This image is already taken.....!";
                        }
                        else
                        {
                            $insert_education_query = "INSERT INTO `sports_books`(`book_name` , `author_name` , `release_date` , `book_price` , `publisher_name` , `image`) VALUES ('$book_name' , '$author_name' , '$release_date' , '$book_price' , '$publisher_name' , '$file_name')";

                            $result_education = mysqli_query($con , $insert_education_query);

                            if($result_education)
                            {
                                
                                echo "<script>
                                alert('Book added successfully.....');
                                window.location = 'dis_spot_books.php';
                                </script>";
                                move_uploaded_file($file_temp_name , "Book-Images/" . $file_name);
                            }
                            else
                            {
                                echo "Query failed....." . mysqli_error($con);
                            }
                        }
                    }
                }
            }
        }
    }
}
// INSERT SPORTS BOOK END
?>