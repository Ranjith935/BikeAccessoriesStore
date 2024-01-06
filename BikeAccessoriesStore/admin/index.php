<?php session_start(); ?>   
<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- shortcode-forms19:20-->
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="LearnPress | Education & Courses HTML Template" />
<meta name="keywords" content="academy, course, education, education html theme, #, learning," />


<!-- Page Title -->
<title>Admin</title>


  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/bg/bg6.jpg">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title text-white">Admin Login</h2>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row">
          
          
          <div class="col-md-8">
            <div class="heading-line-bottom">
              <h4 class="heading-title">Enter the Credentials to Login</h4>
            </div>
            <div class="row">
              <div class="col-md-12">
                <form method="post" action="#">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" name="email" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="password" class="form-control" name="password" id="exampleInputEmail1" placeholder="Enter Password">
                  </div>
                  
                  <button type="submit" name="login" class="btn btn-default">Login</button>
                </form>
				<?php
	if(isset($_POST['login']))
	{
	error_reporting(1);
	include("config.php");
	
	$email=$_POST['email'];
	$pass=$_POST['password'];
	
	$sql = "select * from admin where email='".$email."' and password='".$pass."'";
	$result = mysqli_query($con,$sql);
	$count=mysqlI_num_rows($result);


	if($count>0)
	{  
		session_start();
		$_SESSION['admin']=$email;
		$uid=$_SESSION['admin'];
		echo "<script>
				alert('Login Successful $uid');
			</script>";
		echo "<script> location.href='home.php'; </script>";
	}
	else
	{
		
		echo "<script>
				alert('Invalid Email or Password');
			</script>";
	}       
}
?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->

  

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>

</body>

<!-- shortcode-forms19:20-->
</html>