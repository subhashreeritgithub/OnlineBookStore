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
    <title>Admin Login</title>
    <!-- page refresh start -->
    <script>history.pushState({}, "", "")</script>
    <!-- page refresh end -->
   <link rel="stylesheet" href="bootstrap-5.2.0-dist/css/bootstrap.css">
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="css/all.min.css">
  </head>
  <body>
     <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="admin-login mt-5">
                    <div class="card mt-5">
                        <h1 class="card-header bg-primary text-light text-center fw-bold">
                            Admin Login
                        </h1>
                    </div>
                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" class="needs-validation border border-primary rounded p-5 shadow-lg"novalidate>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="email" class="fs-5">Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter the email....."required>
                                <div class="invalid-feedback fw-bold">
                                    !!.....Please enter your email.....!!
                                </div>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="password" class="fs-5">Password</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Enter the password....."required>
                                <div class="invalid-feedback fw-bold">
                                    !!.....Please enter your password.....!!
                                </div>
                            </div>
                            <div class="d-grid">
                                <button type="submit" name="admin_login" class="btn btn-primary btn-lg fw-bold fs-5">Login</button>
                            </div>
                        </div>
                    </form>
                    <!-- admin login code start -->
                         <?php
                         include '../dbconnection.php';

                          if(isset($_POST['admin_login']))
                          {
                            $email = $_POST['email'];
                            $password = $_POST['password'];

                            $query = "SELECT * FROM admin_signup WHERE email = '$email' && password = '$password' ";

                            $result = mysqli_query($con , $query);

                            if(mysqli_num_rows($result) > 0)
                            {
                                while($row = mysqli_fetch_assoc($result))
                                {
                                    
                                    $_SESSION['email'] = $row['email'];
                                    $_SESSION['password'] = $row['password'];
                                    $_SESSION['usert_type'] = $row['usert_type'];

                                        echo "<script>
                                        alert('Congratulations login successfully.....');
                                        window.location = 'index.php';
                                        </script>";
                                    
                                }
                            }
                            else
                            {
                                echo '<div class="alert alert-danger fw-bold">Sorry Email and Password are not matched.....!</div>';
                            }
                          }
                         ?>
                    <!-- admin login code end -->
                </div>
            </div>
        </div>
     </div>
     <script src="bootstrap-5.2.0-dist/js/bootstrap.bundle.min.js"></script>
    <!-- form validation javascript code start -->
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
    <!-- form validation javascript code end -->
  </body>
</html>
<?php
} 
else
{
    echo "<script>
    alert('You are already loggedin please logout first.....!');
    window.location= 'index.php';
    </script>";
}
?>