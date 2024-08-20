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
    <title>Update Message</title>
    <link rel="stylesheet" href="bootstrap-5.2.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>
<body>
    <?php
    $m_edit = $_GET['m_edit'];
    ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="signup-form">
                    <a href="index.php" class="btn btn-primary btn-sm fs-bold mb-1"><i class="fa-solid fa-backward"></i> Back to home page</a>
                    <form action="mess_upd_cofig.php" method="POST" class="needs-validation border border-primary border-rounded p-5 bg-light shadow-lg signup-fo" novalidate>
                        <h1 class="mb-4 text-primary signup-h1"><u>Update Message</u></h1>
                        <div class="row">
                           
                            <div class="mb-3 col-md-12">
                                <label for="validationTextarea" class="form-label fs-6 text-info fw-bold">Textarea</label>
                                <input type="hidden" name="message_id" value="<?php echo $m_edit; ?>">
                                <textarea class="form-control" name="messages" id="validationTextarea" placeholder="Please enter yor message" required></textarea>
                                <div class="invalid-feedback fw-bold">
                                   Please enter a message in the textarea.
                                </div>
                            </div>
                         
                            <div class="d-grid gap-2">
                               <button type="submit" name="submit_message_first" class="btn btn-primary btn-lg">Click Here</button>
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