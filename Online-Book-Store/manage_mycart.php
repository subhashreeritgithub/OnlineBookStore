<?php
include 'header.php';
require 'purchase.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <!-- page refresh start -->
    <script>history.pushState({}, "", "")</script>
    <!-- page refresh end -->
   <link rel="stylesheet" href="bootstrap-5.2.0-dist/css/bootstrap.css">
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="css/all.min.css">
<body>
    <div class="container-fluid mt-5 mb-5">
        <div class="row">
            <div class="col-lg-9">
                <div class="card">
                    <h1 class="card-header fw-bold bg-primary text-light text-center">
                        My Cart
                    </h1>
                </div>
                <table class="table table-bordered">
                    <thead class="table-dark">
                        <tr class="text-center">
                        <th scope="col">Serial No</th>
                        <th scope="col">Book Image</th>
                        <th scope="col">Book Name</th>
                        <th scope="col">Author Name</th>
                        <th scope="col">Book Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                        <?php
                        // $total=0;
                        if(isset($_SESSION['cart']))
                        {
                            foreach($_SESSION['cart'] as $key => $value)
                            {
                                $sr=$key+1;
                                // $total=$total+$value['book_price'];
                                ?>
                                <tr class="text-center">
                                    <td><?php echo $sr; ?></td>
                                    <td><?php echo $value['image']; ?></td>
                                    <td><?php echo $value['book_name']; ?></td>
                                    <td><?php echo $value['author_name']; ?></td>
                                    <td><?php echo $value['book_price']; ?><input type="hidden" class="iprice" value="<?php echo $value['book_price']; ?>"></td>
                                    <td>
                                        <form action="manage_cart.php" method="POST">
                                            <input type="number" class="text-center iquantity" name="mod_quantity" onchange="this.form.submit();" value="<?php echo $value['quantity']; ?>" min="1" max="10">
                                            <input type="hidden" name="book_name" value="<?php echo $value['book_name'] ?>">
                                        </form>
                                    </td>
                                    <td class="itotal"></td>
                                    <td>
                                        <form action="manage_cart.php" method="POST">
                                            <button type="submit" name="remove" class='btn btn-outline-danger fw-bold'>Remove</button>
                                            <input type="hidden" name="book_name" value="<?php echo $value['book_name'] ?>">
                                        </form>
                                    </td>
                                </tr>
                                <?php
                            }
                        }
                        ?>
                        
                    </tbody>
                </table>
                
            </div>
            <div class="col-lg-3">
                <div class="border bg-dark text-light align-middle p-5 shadow rounded">
                    <h4>Grand Total : <span id="gtotal"></span></h4>
                    <!-- Purchase Form Start-->
                    <?php 
                    if(isset($_SESSION['cart']) && count($_SESSION['cart']) > 0)
                    {

                    ?>
                    <form action="" method="POST" class="needs-validation" novalidate>
                        <div class="mb-3">
                            <label for="full_name" class="fs-5">Full Name</label>
                            <input type="text" name="full_name" class="form-control" id="full_name"  value="<?php echo $full_name; ?>"    placeholder="Enter your full name....."required>
                            <div class="invalid-feedback fw-bold">
                                !!!.....This field is required.....!!!
                            </div>
                            <span class="text-danger fw-bold">
                              <?php echo $full_name_error; ?>
                            </span>
                        </div>

                        <div class="mb-3">
                            <label for="contact" class="fs-5">Contact</label>
                            <input type="number" name="contact" class="form-control" id="contact"   value="<?php echo $contact; ?>"   placeholder="Enter your contact number....."required>
                            <div class="invalid-feedback fw-bold">
                                !!!.....This field is required.....!!!
                            </div>
                            <span class="text-danger fw-bold">
                              <?php echo $contact_error; ?>
                            </span>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="fs-5">Email</label>
                            <input type="email" name="email" class="form-control" id="email"   value="<?php echo $email; ?>"   placeholder="Enter your email @ address....."required>
                            <div class="invalid-feedback fw-bold">
                                !!!.....This field is required.....!!!
                            </div>
                            <span class="text-danger fw-bold">
                              <?php echo $email_error; ?>
                            </span>
                        </div>

                        <div class="mb-3">
                            <label for="validationTextarea" class="form-label fs-5">Full Address</label>
                            <textarea class="form-control" name="address" id="validationTextarea" value="<?php echo $address; ?>" placeholder="Please enter your full address" required></textarea>
                            <div class="invalid-feedback fw-bold">
                                !!!.....This field is required.....!!!
                            </div>
                            <span class="text-danger fw-bold">
                              <?php echo $address_error; ?>
                            </span>
                          </div>

                        <div class="form-check mb-3">
                            <input type="radio" class="form-check-input" id="validationFormCheck2" name="payment_mode" value="cod" required>
                            <label class="form-check-label" for="validationFormCheck2">Cash on Delivery</label>
                        </div>

                        <div class="d-grid">
                          <button type="submit" name="purchase" class="btn btn-outline-success fw-bold">Make Purchase</button>
                        </div>
                    </form>
                    <?php
                    }
                    ?>
                    <!-- Purchase Form End-->
                </div>
            </div>
          
        </div>
    </div>
    <script>
        var gt = 0;
        var iprice = document.getElementsByClassName('iprice');
        var iquantity = document.getElementsByClassName('iquantity');
        var itotal = document.getElementsByClassName('itotal');
        var gtotal = document.getElementById('gtotal');

        function subTotal()
        {
            gt = 0;
            for(i=0;i<iprice.length;i++)
            {
              itotal[i].innerText=(iprice[i].value)*(iquantity[i].value); 
              gt = gt + (iprice[i].value)*(iquantity[i].value);
            }
            gtotal.innerText = gt;
        }

        subTotal();
    </script>



    <!-- Form validation java script bootstrap start -->
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
    <!-- Form validation java script bootstrap end -->
</body>
</html>
