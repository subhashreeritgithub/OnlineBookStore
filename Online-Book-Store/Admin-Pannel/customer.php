<?php
session_start();
if(!isset($_SESSION['email']) && empty($_SESSION['email']))
{
    header('location:login.php');
}
else
{
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Customers</title>
   <link rel="stylesheet" href="bootstrap-5.2.0-dist/css/bootstrap.css">
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="css/all.min.css">
  </head>
  <body>
   <div class="container-fluid mt-5">
    <a href="index.php" class="btn btn-primary mb-2"><i class="fa-solid fa-house"></i> Home</a>
    <div class="card">
    <h1 class="text-primary fw-bold card-header bg-primary text-light text-center">Customers Details</h1>
    </div>
    <?php
    include '../dbconnection.php';

    $query = "SELECT * FROM user_signup";

    $result = mysqli_query($con , $query);

    if(mysqli_num_rows($result) > 0)
    {

    ?>
        <table class="table table-bordered border-dark shadow table-hover">
            
            <thead class="table-dark">
                <tr class="text-center">
                <th scope="col">User Id</th>
                <th scope="col">User Type</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Contact</th>
                <th scope="col">Date of Birth</th>
                <th scope="col">Address</th>
                <th scope="col">Email</th>
                <th scope="col">City</th>
                <th scope="col">State</th>
                <th scope="col">Zip Code</th>
                <th scope="col">Gender</th>
                <th scope="col">Image</th>
                </tr>
            </thead>
            <?php
             while($row = mysqli_fetch_assoc($result))
             {
            ?>
            <tbody class="align-middle">
                <tr class="text-center">
                <th scope="row"><?php echo $row['user_id'] ?></th>
                <td><?php echo $row['user_type'] ?></td>
                <td><?php echo $row['f_name'] ?></td>
                <td><?php echo $row['l_name'] ?></td>
                <td><?php echo $row['contact'] ?></td>
                <td><?php echo $row['dob'] ?></td>
                <td><?php echo $row['address'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['city'] ?></td>
                <td><?php echo $row['state'] ?></td>
                <td><?php echo $row['zip_code'] ?></td>
                <td><?php echo $row['gender'] ?></td>
                <td><img src="<?php echo "../user_signup_image/".$row['image'] ?>" alt="" height="100px" width="100px"></td>
                </tr>
            </tbody>
            <?php } ?>
        </table>
        <?php
           }
           else
           {
            echo "Sorry no data found.....";
           }
        ?>
   </div>
  </body>
</html>
<?php } ?>