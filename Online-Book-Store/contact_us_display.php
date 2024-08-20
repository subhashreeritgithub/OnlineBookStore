<?php
session_start();
if(isset($_SESSION['email']))
{


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap-5.2.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>
<body>
    <!-- card start -->
    <div class="container-fluid mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <a href="index.php" class="btn btn-info mb-2 text-light fw-bold btn-home-pro"><i class="fa-solid fa-house"></i> Home</a>
                <div class="box bg-light shadow-lg border rounded">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4 border-end text-center">
                                <h5 class="mt-3">Profile Pic</h5>
                                <img src="<?php echo "user_signup_image/".$_SESSION['image']; ?>" class="img-fluid shadow-lg border p-2 border-primary" alt="..." height="200" width="200">
                                <hr>
                                <a href="update_propic.php?email=<?php echo $_SESSION['email'] ?>" class="btn btn-outline-success"><i class="fa-solid fa-pen"></i> Update Profile Pic</a>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <!-- My cart start -->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h3 class="fw-semibold"><?php echo $_SESSION['f_name'];?> <?php echo $_SESSION['l_name'];?></h3>
                                            </div>
                                            <div class="col-md-6">
                                                <h6 class="text-secondary"><i class="fa-solid fa-location-dot"></i> <span class=""><?php echo $_SESSION['city'];?></span> <span class="mx-1"><?php echo $_SESSION['state'];?></span></h6>
                                            </div>
                                        </div>
                                        
                                            <span class="text-primaryc">You are Online.....</span><a href="logout.php" class="btn btn-danger btn-sm mx-2">Logout</a>
                                            <div class="mt-5">
                                                <a href="profile.php" class="btn btn-sm btn-outline-success"><i class="fa-solid fa-backward"></i> Back</a>
                                                <a href="#" class="btn btn-sm btn-outline-primary">Contact <i class="fa-solid fa-check"></i></a>
                                            </div>
                                            <hr>
                                            <div class="row">

                                            <?php
                                            include 'dbconnection.php';

                                            $email = $_GET['email'];
                                            
                                            $display_query = "SELECT * FROM `contact_us` WHERE `email` = '$email'";

                                            $result = mysqli_query($con , $display_query);

                                            if(mysqli_num_rows($result) > 0)
                                            {
                                                while($row = mysqli_fetch_assoc($result))
                                                {

                                            ?>
                                                <div class="col-md-6 col-sm-6 col-6">
                                                    <div class="card mb-3 shadow-lg">
                                                        <div class="card-header text-center">
                                                          <h5 class="">Message</h5>
                                                          
                                                        </div>
                                                        <div class="card-body">
                                                
                        
                                                          <p class="card-text"><?php echo $row['messages']; ?></p>
                                                          <?php
                                                          if($row['status'] == 'recieved')
                                                          {
                                                          ?>
                                                          <span class="btn btn-success btn-sm"><?php echo $row['status']; ?> <i class="fa-solid fa-check"></i></span>
                                                          <?php
                                                          }
                                                          else
                                                          {
                                                          ?>
                                                          <span class="btn btn-primary btn-sm"><?php echo $row['status']; ?> <i class="fa-solid fa-paper-plane"></i></span>
                                                          <?php
                                                          }
                                                          ?>
                                                        </div>
                                                        <div class="card-footer text-body-secondary d-flex justify-content-between">
                                                          <span>
                                                            <?php echo $row['date_time'] ?>
                                                          </span>
                                                          <div class="fw-bold">
                                                            <a href="message_update.php?m_edit=<?php echo $row['message_id']; ?>" class="btn btn-primary btn-sm">Edit <i class="fa-solid fa-pen-to-square"></i></a>
                                                            <a href="message_del.php?m_del=<?php echo $row['message_id']; ?>" class="btn btn-danger btn-sm">Delete <i class="fa-solid fa-trash-can"></i></a>
                                                          </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                                }
                                            }
                                            else
                                            {
                                                echo '<div class="alert alert-danger text-center" role="alert">
                                                Sorry no messages available for you!
                                              </div>';
                                            }
                                                ?>
                                          
                        
                                            </div>
                                    <!-- My cart end -->
                                </div>
                            </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
    <!-- card end -->
</body>
</html>
<?php
}
else
{
    header('location:login.php');
}
?>