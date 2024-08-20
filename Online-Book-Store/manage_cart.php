<?php
session_start();
// session_destroy();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
  if(isset($_POST['add_to_cart']))
  {
    if(isset($_SESSION['cart']))
    {
        $myitems = array_column($_SESSION['cart'],'book_name');
        if(in_array($_POST['book_name'],$myitems))
        {
          echo "<script>
          alert('Item already added.....!');
          window.location.href = 'index.php';
          </script>";
        }

      else
      {
        $count = count($_SESSION['cart']);
        $_SESSION['cart'][$count]=array('image'=>$_POST['image'],'book_name'=>$_POST['book_name'],'author_name'=>$_POST['author_name'],'book_price'=>$_POST['book_price'],'quantity'=>1);
        echo "<script>
        alert('Item added successfully.....!');
        window.location.href = 'index.php';
        </script>";
      }
    } 
    
    else
    {
      $_SESSION['cart'][0]=array('image'=>$_POST['image'],'book_name'=>$_POST['book_name'],'author_name'=>$_POST['author_name'],'book_price'=>$_POST['book_price'],'quantity'=>1);

      echo "<script>
      alert('Item added successfully.....!');
      window.location.href = 'index.php';
      </script>";
      
    }
  }
  if(isset($_POST['remove']))
  {
    foreach($_SESSION['cart'] as $key => $value)
    {
      if($value['book_name'] == $_POST['book_name'])
      {
        unset($_SESSION['cart'][$key]);
        $_SESSION['cart'] = array_values($_SESSION['cart']);

        echo "<script>
        alert('Book removed successfully.....!');
        window.location = 'manage_mycart.php';
        </script>";
      }
    }
  }
  if(isset($_POST['mod_quantity']))
  {
    foreach($_SESSION['cart'] as $key => $value)
    {
      if($value['book_name'] == $_POST['book_name'])
      {
        $_SESSION['cart'][$key]['quantity'] = $_POST['mod_quantity'];
      
        echo "<script>
        window.location = 'manage_mycart.php';
        </script>";
      }
    }
  }
}
?>