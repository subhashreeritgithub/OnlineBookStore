<?php
include 'header.php';
include 'contact_us_config.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us</title>
    <!-- page refresh code start -->
    <script>history.pushState({}, "", "")</script>
    <!-- page refresh code end -->
    <link rel="stylesheet" href="bootstrap-5.2.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/all.min.css">
  </head>
  <body>
    <!--Form Start -->
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="signup-form mt-5 mb-5">
                    <h1 class="mb-3 text-info text-start fw-bold signup-h1"><u>Contact Us</u></h1>
                    <span class="fw-bold text-success">Please fill up the form below to send us a message. We will contact you very soon.</span>
                    <form action="" method="POST" class="border border-info border-rounded p-5 bg-light shadow-lg signup-fo needs-validation" enctype="multipart/form-data" novalidate required>
                        <!-- <h1 class="mb-5 text-info text-center fw-bold signup-h1"><u>Contact Us</u></h1> -->
                        <div class="row">
                            <div class="mb-3 col-md-12">
                                <label for= "full_name" class="fs-6 text-info fw-bold">Full Name <span class="text-danger">*</span></label>
                                <input type="text" name="full_name" id="full_name" value="<?php echo $full_name; ?>" class="form-control" value="" placeholder="Enter your full name" required>
                                <div class="invalid-feedback fw-bold">
                                    This field is required....
                                </div>
                                <div class="text-danger fw-bold">
                                    <?php echo $full_name_error; ?>
                                </div>
                            </div>
                            <div class="mb-3 col-md-12">
                                <label for="contact" class="fs-6 text-info fw-bold">Contact <span class="text-danger">*</span></label>
                                <input type="text" name="contact" id="contact" value="<?php echo $contact; ?>" class="form-control" value="" placeholder="Enter the contact number" required>
                                <div class="invalid-feedback fw-bold">
                                    This field is required....
                                </div>
                                <div class="text-danger fw-bold">
                                    <?php echo $contact_error; ?>
                                </div>
                            </div>
                            <div class="mb-3 col-md-12">
                                <label for="address" class="fs-6 text-info fw-bold">Address <span class="text-danger">*</span></label>
                                <input type="text" name="address" id="address" value="<?php echo $address; ?>" class="form-control" value="" placeholder="Enter your address" required>
                                <div class="invalid-feedback fw-bold">
                                    This field is required....
                                </div>
                            </div>
                            <div class="mb-3 col-md-12">
                                <label for="email" class="fs-6 text-info fw-bold">Email <span class="text-danger">*</span></label>
                                <input type="email" name="email" id="email" value="<?php echo $email; ?>" class="form-control" value="" placeholder="Please enter your email address" required>
                                <div class="invalid-feedback fw-bold">
                                    This field is required....
                                </div>
                                <div class="text-danger fw-bold">
                                    <?php echo $email_error; ?>
                                </div>
                            </div>
                            <div class="mb-3 col-md-12">
                                <label for="subject" class="fs-6 text-info fw-bold">Select Subject <span class="text-danger">*</span></label>
                                <select name="subject" id="subject" class="form-select" required>
                                    <option value="">--Select--</option>
                                    <option value="Payment Related">Payment Related</option>
                                    <option value="Order Related">Order Related</option>
                                    <option value="Courier Related">Courier Related</option>
                                    <option value="Affiliate Realted">Affiliate Realted</option>
                                    <option value="Author/Publishers Realted">Author/Publishers Realted</option>
                                    <option value="Corporate Oredrs/Bulk Sales">Corporate Oredrs/Bulk Sales</option>
                                    <option value="Business Related">Business Related</option>
                                    <option value="Features Suggestion & Feedback">Features Suggestion & Feedback</option>
                                    <option value="AnyOther">AnyOther</option>
                                  </select>
                                  <div class="invalid-feedback fw-bold">
                                    This field is required....
                                  </div>
                            </div>
                            <div class="mb-3 col-md-12">
                                <label for="validationTextarea" class="form-label fs-6 text-info fw-bold">Textarea</label>
                                <textarea class="form-control" name="messages" id="validationTextarea" placeholder="Please enter yor message" required></textarea>
                                <div class="invalid-feedback fw-bold">
                                   Please enter a message in the textarea.
                                </div>
                            </div>
                            <div class="d-grid gap-2">
                               <button type="submit" name="contact_us_submit" class="btn btn-info fw-bold btn-lg">Submit</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6 mt-5">
               <img src="Background-Images/contactus1.png" class="img-fluid" alt="...">
               <div class="mb-5">
                    <span class="fw-bold">Online Books Store Pvt.Ltd</span>
                    <br>
                    <span class="fw-bold">2/14, ground floor , Ansari road , Haydrabaad</span>
                    <br>
                    <span class="fw-bold">Ameerpet Haydrabaad 110002</span>
               </div>
               <div class="diver">
                    <span class="text-danger fw-bold"><i class="fa-solid fa-envelope"></i> customerservice@onlinebookstore.com</span>
                    <br>
                    <span class="text-danger fw-bold"><i class="fa-solid fa-phone"></i> 011-41521153, Closed on Sundays and Public Holidays.</span>
                    <br>
                    <span class="text-danger fw-bold"><i class="fa-solid fa-clock"></i> 9:00 am to 6:00 pm</span>
               </div>
            </div>
            
        </div>
       </div>
    <!--Form End  -->
    <!-- Form validation jscript code start -->
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
    <!-- Form validation jscript code end -->
  </body>
</html>

<?php
include 'footer.php';
?>