
<?php
session_start();
if(isset($_SESSION['email']) && !empty($_SESSION['email']))
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Email</title>
    <!-- page refresh start -->
    <script>history.pushState({}, "", "")</script>
     <!-- page refresh end -->
    <link rel="stylesheet" href="bootstrap-5.2.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="signup-form">
                    <a href="forget_pass_logout.php" class="btn btn-primary btn-sm fs-bold mb-1"><i class="fa-solid fa-backward"></i> Back to home page</a>
                    <form action="" method="POST" class="needs-validation border border-primary border-rounded p-5 bg-light shadow-lg signup-fo" novalidate>
                        <h1 class="mb-4 text-primary signup-h1 text-center"><u>Email Verfication</u></h1>
                        <div class="row">
                         
                            <div class="d-grid gap-2">
                               <a href="Change_pass1.php?email=<?php echo $_SESSION['email']; ?>" class="btn btn-primary btn-lg fw-bold">Email Verified <i class="fa-solid fa-check"></i></a>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
       </div>
</body>
</html>
<?php
}
else
{
    header('Location: login.php');
}
?>
