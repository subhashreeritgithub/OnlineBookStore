<?php
// validation variables start
$full_name = null;
$full_name_error = null;
$contact = null;
$contact_error = null;
$email = null;
$email_error = null;
$address = null;
$address_error = null;
// validation variables end
include 'dbconnection.php';

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(isset($_POST['purchase']))
    {
        if(!isset($_SESSION['email']))
        {
            echo "<script>
                      alert('Please login first');
                      window.location = 'p_login.php';
                      </script>";
        }
        else
        {
        $full_name = $_POST['full_name'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $payment_mode = $_POST['payment_mode'];
        

        if(!preg_match("/^[A-Za-z ]*$/",$full_name))
        {
            $full_name_error = "!!!.....Check the name.....!!!";
        }
        else
        {
            if(!preg_match("/^[6-9]\d{9}$/",$contact))
            {
              $contact_error = "!!!.....Number not valid.....!!!";
            }
            else
            {
                $query = "INSERT INTO purchase_order_manager(`full_name` , `contact` , `email` , `address` , `payment_mode`) VALUES ('$full_name' , '$contact' , '$email' , '$address' , '$payment_mode')";

                $result = mysqli_query($con , $query);

                if($result)
                {
                    $order_id = mysqli_insert_id($con);
                   $query2 = "INSERT INTO purchase_user_orders(`order_id` , `book_name` , `book_price` , `quantity`) VALUES (? , ? , ? , ?)";
                   $stmt = mysqli_prepare($con , $query2);

                   if($stmt)
                   {
                      mysqli_stmt_bind_param($stmt,"issi",$order_id,$book_name,$book_price,$quantity);
                      foreach($_SESSION['cart'] as $key => $values)
                      {
                        $book_name = $values['book_name'];
                        $book_price = $values['book_price'];
                        $quantity = $values['quantity'];

                        mysqli_stmt_execute($stmt);
                      }
                      unset($_SESSION['cart']);
                      echo "<script>
                      alert('Order Placed');
                      window.location = 'index.php';
                      </script>";
                   }
                   else
                   {
                      echo "query prepared failed....." . mysqli_error($con);
                   }
                }
                else
                {
                    echo "query failed....." . mysqli_error($con);
                }
            }
        }
    }
}
}
?>