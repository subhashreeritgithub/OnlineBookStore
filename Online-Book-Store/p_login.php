<?php
session_start();
if(!isset($_SESSION['email']) && empty($_SESSION['email']))
{
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <!-- page refresh code start -->
    <script>history.pushState({}, "", "")</script>
    <!-- page refresh code end -->

    <!-- Bootstrap Css Link Start -->
    <link rel="stylesheet" href="bootstrap-5.2.0-dist/css/bootstrap.min.css">
    <!-- Bootstrap Css Link End -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/all.min.css">
  </head>
  <body>
       <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="signup-form">
                    <a href="index.php" class="btn btn-primary btn-sm fs-bold mb-1"><i class="fa-solid fa-backward"></i> Back to home page</a>
                    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" class="needs-validation border border-primary border-rounded p-5 bg-light shadow-lg signup-fo" novalidate>
                        <h1 class="mb-4 text-primary signup-h1"><u>Login Account</u></h1>
                        <div class="row">
                           
                            <div class="mb-3 col-md-12">
                                <label for="email" class="fs-5">Email <span class="text-danger">*</span></label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Enter your new Email @ Address" required>
                                <div class="invalid-feedback">
                                    Please enter the email first.....!
                                </div>
                            </div>
                            <div class="mb-3 col-md-12">
                                <label for="password" class="fs-5">Password <span class="text-danger">*</span></label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Enter your new Password" required>
                                <div class="invalid-feedback">
                                    Please enter the password first.....!
                                </div>
                            </div>
                         
                            <div class="d-grid gap-2">
                               <button type="submit" name="user_login" class="btn btn-primary btn-lg">Login</button>
                            </div>

                        </div>
                    </form>
                    <p class="text-center mt-3">If you forget your password please : <a href=".php" class="btn btn-danger btn-sm text-light">Click Here</a></p>
                    <p class="text-center mt-3">If you don't have an account please : <a href="signup.php" class="btn btn-success btn-sm text-light">Click Here</a></p>
 
                    <!-- logon config code start -->
                    <?php
                   
                    if(isset($_POST['user_login']))
                    {
                        include 'dbconnection.php';

                        $email = $_POST['email'];
                        $password = $_POST['password'];
                        
                        $query = "SELECT * FROM `user_signup` WHERE `email` = '$email' AND `password` = '$password'";

                        $result = mysqli_query($con,$query);

                        if(mysqli_num_rows($result) > 0)
                        {
                            while($row = mysqli_fetch_assoc($result))
                            {
                                

                                $_SESSION['user_id'] = $row['user_id'];
                                $_SESSION['f_name'] = $row['f_name'];
                                $_SESSION['l_name'] = $row['l_name'];
                                $_SESSION['contact'] = $row['contact'];
                                $_SESSION['dob'] = $row['dob'];
                                $_SESSION['address'] = $row['address'];
                                $_SESSION['email'] = $row['email'];
                                $_SESSION['password'] = $row['password'];
                                $_SESSION['city'] = $row['city'];
                                $_SESSION['state'] = $row['state'];
                                $_SESSION['zip_code'] = $row['zip_code'];
                                $_SESSION['gender'] = $row['gender'];
                                $_SESSION['image'] = $row['image'];

                                echo "<script>
                                alert('Congratulationes login susseccfully.....');
                                window.location = 'manage_mycart.php';
                                </script>";
                            }
                            
                        }
                        else
                        {
                            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Email and Password are not match.....!</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>';
                        }
                    }
                    ?>
                    <!-- logon config code end -->
                 
                </div>
            </div>
        </div>
       </div>
       <script src="bootstrap-5.2.0-dist/js/bootstrap.bundle.min.js"></script>
       <!-- java script code for validation -->
       <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
       </script>
       <!-- java script code for validation -->
  </body>
</html>
<?php
}
else
{
  header('location: index.php');
}
?>