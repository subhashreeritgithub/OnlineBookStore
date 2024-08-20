<?php
session_start();
if(isset($_SESSION['email']) && !empty($_SESSION['email']))
{

include 'header.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="bootstrap-5.2.0-dist/css/bootstrap.css">
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="css/all.min.css">
  </head>
  <body>

    <div class="container-fluid">
        <div class="table mt-5">
            <div class="card">
                
                <h1 class="card-header text-center fw-bold bg-dark text-light">Your Orders</h1>
            </div>
            <?php
            include 'dbconnection.php';

            $email = $_GET['oid_email'];

            $query = "SELECT * FROM `purchase_order_manager` WHERE `email` = '$email'";

            $result = mysqli_query($con , $query);

            if(mysqli_num_rows($result) > 0)
            {

            ?>
            <table class="table shadow table-bordered table-hover">
                <thead class="table-warning">
                    <tr>
                    <th scope="col">Order Id</th>
                    <th scope="col">Your Name</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Pay Mode</th>
                    <th scope="col" class="text-center">Orders</th>
                    </tr>
                </thead>
                <?php
                while($rowf = mysqli_fetch_assoc($result))
                {

                
                ?>
                <tbody>
                    <tr>
                    <th scope="row"><?php echo $rowf['order_id'] ?></th>
                    <td><?php echo $rowf['full_name'] ?></td>
                    <td><?php echo $rowf['contact'] ?></td>
                    <td><?php echo $rowf['email'] ?></td>
                    <td><?php echo $rowf['address'] ?></td>
                    <td><?php echo $rowf['payment_mode'] ?></td>
                    <td>

                    <!-- tale -->
                    <table class="table table-hover">
                    <?php
                    include 'dbconnection.php';

                    $query2 = "SELECT * FROM `purchase_user_orders` WHERE order_id = '$rowf[order_id]'";

                    $result2 = mysqli_query($con , $query2);

                    if(mysqli_num_rows($result2) > 0)
                    {

                    ?>
                        <thead>
                            <tr>
                            <th scope="col">Book Name</th>
                            <th scope="col">Book Price</th>
                            <th scope="col">Quantity</th>
                        
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while($row = mysqli_fetch_assoc($result2))
                            {
            
                            ?>
                            <tr>
                            <td scope="row"><?php echo $row['book_name'] ?></td>
                            <td><?php echo $row['book_price'] ?></td>
                            <td><?php echo $row['quantity'] ?></td>
                            </tr>
                           <?php } ?>
                        </tbody>
                    </table>
                    <?php } ?>
                    <!-- tale -->

                    </td>
                    </tr>
                </tbody>
                <?php } ?>
            </table>
            <?php 
        
        }
        else
        {
            echo '<div class="alert alert-danger mt-5" role="alert">
            Havent placed an order yet.....! <a href="profile.php" class="btn btn-primary btn-sm">Go back</a>
          </div>';
        }
        ?>
        </div>
    </div>
    
  
  </body>
</html>
<?php
}
else
{
    header('location:login.php');
}
?>