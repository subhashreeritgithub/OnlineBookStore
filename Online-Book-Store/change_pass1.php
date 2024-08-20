<?php
session_start();
include 'changepass_config.php';
if(isset($_SESSION['email']) && !empty($_SESSION['email']))
{
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create New Password</title>
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
                    <a href="forget_pass_logout.php" class="btn btn-primary btn-sm fs-bold mb-1"><i class="fa-solid fa-backward"></i> Back to home page</a>
                    <form action="" method="POST" class="needs-validation border border-primary border-rounded p-5 bg-light shadow-lg signup-fo" novalidate>
                        <h1 class="mb-4 text-primary signup-h1"><u>Create New Password</u></h1>
                        <div class="row">
                           
                            <div class="mb-3 col-md-12">
                                <label for="password" class="fs-5">New password <span class="text-danger">*</span></label>
                                <input type="hidden" value="<?php echo $_SESSION['email']; ?>">
                                <input type="password" name="password" id="password" class="form-control" placeholder="Enter your new password" required>
                                <div class="invalid-feedback">
                                    Please enter your new password.....!
                                </div>
                            </div>
                            <div class="mb-3 col-md-12">
                                <label for="c_password" class="fs-5">Confirm Password <span class="text-danger">*</span></label>
                                <input type="password" name="c_password" id="c_password" class="form-control" placeholder="Confirm your new Password" required>
                                <div class="invalid-feedback">
                                    Please confirm your new password.....!
                                </div>
                                <div class="text-danger fw-bold">
                                    <?php echo $password_error; ?>
                                </div>
                            </div>
                         
                            <div class="d-grid gap-2">
                               <button type="submit" name="ch_password" class="btn btn-primary btn-lg">Click Here</button>
                            </div>

                        </div>
                    </form>
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
    header('location:login.php');
}
?>