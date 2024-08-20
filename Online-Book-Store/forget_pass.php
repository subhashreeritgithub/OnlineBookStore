<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
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
                    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" class="needs-validation border border-primary border-rounded p-5 bg-light shadow-lg signup-fo" novalidate>
                        <h1 class="mb-4 text-primary signup-h1"><u>Forget Password</u></h1>
                        <div class="row">
                           
                            <div class="mb-3 col-md-12">
                                <label for="email" class="fs-5">Email <span class="text-danger">*</span></label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Enter your new Email @ Address" required>
                                <div class="invalid-feedback">
                                    Please enter the email first.....!
                                </div>
                            </div>
                         
                            <div class="d-grid gap-2">
                               <button type="submit" name="user_forget_pass" class="btn btn-primary btn-lg">Verify Email</button>
                            </div>

                        </div>
                    </form>
                
                    <!-- logon config code start -->
                    <?php
                   
                    if(isset($_POST['user_forget_pass']))
                    {
                        include 'dbconnection.php';

                        $email = $_POST['email'];
                        
                        $query = "SELECT * FROM `user_signup` WHERE `email` = '$email'";

                        $result = mysqli_query($con,$query);

                        if(mysqli_num_rows($result) > 0)
                        {
                            while($row = mysqli_fetch_assoc($result))
                            {
                                $_SESSION['email'] = $row['email'];
                                $_SESSION['f_name'] = $row['f_name'];
                                $_SESSION['l_name'] = $row['l_name'];

                                echo "<script>
                                alert('Congratulationes email verified susseccfully.....');
                                window.location = 'change_pass.php';
                                </script>";
                            }
                            
                        }
                        else
                        {
                            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Sorry invalid email please check your email.....!</strong>
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
       <!-- Java Script Code Start -->
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
       <!-- Java Script Code End -->
</body>
</html>