<?php
session_start();

if(isset($_SESSION['biker']))
{
?>
<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  </head>
  <body>
    
  <header class="header">
    <nav class="navbar navbar-style">
      <div class="container1">
        <div class="navbar-header">
          <a href="logo12.jpg"><img class="logo" style="border:solid black 5px;"src="wheelie2.jpg"></a>
        
          <a class="b1" id="abc" href="home.php" style="">HOME</a>
        
        </div>
      </div>
    </nav>
  </header>
  <form method="POST">
  <div class="row">

    <div class="column">
  <div class="card" style="width: 18rem;background-color: white; margin-left: 100px;opacity: 0.9;">
    <img src="s1.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">SLILT</h5>
      <p class="card-text">Best Level 1 Sports Helmet for safety.</p>
      <button type="submit" name="s1">4000 Buy Now!</button>
    </div>
  </div>
    </div>

    <div class="column">
        <div class="card" style="width: 18rem;background-color: white; margin-left: 60px;opacity: 0.9;">
          <img src="s2.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">FLUTTY</h5>
            <p class="card-text">Best Level 2 Sports Helmet for safety.</p>
            <button type="submit" name="s2">5000 Buy Now!</button>
          </div>
        </div>
          </div>

          <div class="column">
            <div class="card" style="width: 18rem;background-color: rgb(255, 255, 255); margin-left: 60px;opacity: 0.9;">
              <img src="s3.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">ROGE</h5>
                <p class="card-text">Best Level 3 Sports Helmet for safety.</p>
                <button type="submit" name="s3">6000 Buy Now!</button>
              </div>
            </div>
              </div>

              <div class="column">
                <div class="card" style="width: 18rem;background-color: white; margin-left: 60px;opacity: 0.9;">
                  <img src="s4.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">SMK09</h5>
                    <p class="card-text">Best Level 4 Sports Helmet for safety.</p>
                    <button type="submit" name="s4">7000 Buy Now!</button>
                  </div>
                </div>
                  </div>

                  

  </div></form>
  <?php
include 'config.php';
		if(isset($_POST['s1']))
					{
					//error_reporting(1);
					include 'config.php'; 
					$pid=5;
                    $price=4000;
							// Get all the submitted data from the form
							$sql = "INSERT INTO cart(pid,username,price) VALUES ('".$pid."','".$_SESSION['biker']."','".$price."')";
					 
							// Execute query
							mysqli_query($con, $sql);
						echo "<script>
										alert('product Added to cart');
									</script>";
						echo "<script> location.href='cart.php'; </script>";
											
										
					}
					if(isset($_POST['s2']))
					{
					//error_reporting(1);
					include 'config.php'; 
          $pid=6;
          $price=5000;
							// Get all the submitted data from the form
							$sql = "INSERT INTO cart(pid,username,price) VALUES ('".$pid."','".$_SESSION['biker']."','".$price."')";
					 
							// Execute query
							mysqli_query($con, $sql);
						echo "<script>
										alert('product Added to cart');
									</script>";
						echo "<script> location.href='cart.php'; </script>";
											
										
					}
					if(isset($_POST['s3']))
					{
					//error_reporting(1);
					include 'config.php'; 
          $pid=7;
          $price=6000;
							// Get all the submitted data from the form
							$sql = "INSERT INTO cart(pid,username,price) VALUES ('".$pid."','".$_SESSION['biker']."','".$price."')";
					 
							// Execute query
							mysqli_query($con, $sql);
						echo "<script>
										alert('product Added to cart');
									</script>";
						echo "<script> location.href='cart.php'; </script>";
											
										
					}
          if(isset($_POST['s4']))
					{
					//error_reporting(1);
					include 'config.php'; 
					$pid=8;
          $price=7000;
							// Get all the submitted data from the form
							$sql = "INSERT INTO cart(pid,username,price) VALUES ('".$pid."','".$_SESSION['biker']."','".$price."')";
					 
							// Execute query
							mysqli_query($con, $sql);
						echo "<script>
										alert('product Added to cart');
									</script>";
						echo "<script> location.href='cart.php'; </script>";
											
										
					}
				?>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper. min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
<?php
}	
?>