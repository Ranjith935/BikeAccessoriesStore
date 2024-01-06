<?php
session_start();
if(isset($_SESSION['admin']))
{
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- shortcode-forms19:20-->
<head>



  <!-- Start main-content -->
  <div class="main-content">
	 <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/bg/bg6.jpg">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title text-white">Reset Password</h2>
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
              <h4 class="heading-title" style="color:black;">Password Details</h4>
            </div>
            <div class="row" style="color:black;">
              <div class="col-md-12">
                <form method="post" action="#" style="background: rgba(255,255,255,0.1);padding:100px;">
				  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" class="form-control" name="email" readonly="true" id="exampleInputEmail1" value="<?php echo $_SESSION['admin']; ?>">
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">existing Password</label>
                    <input type="password" class="form-control" name="opass" id="exampleInputEmail1" placeholder="existing password">
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">New Password</label>
                    <input type="password" class="form-control" name="npass" id="exampleInputEmail1" placeholder="new password">
                  </div>
                  <button type="submit" name="change" class="btn btn-default" style=" background-color: #4CAF50;border: none;color: white;padding: 5px 22px; text-align: center;text-decoration: none; display: inline-block;font-size: 16px;">Change Password</button>
                </form>
				<?php
								if(isset($_POST['change']))
								{
									
								//error_reporting(1);
								include 'config.php'; 
									
									$opass=$_POST['opass'];
									$npass=$_POST['npass'];
																		
								$query1 = "update admin set password='".$npass."' where email='".$_SESSION['admin']."' and password='".$opass."'";
										   
											$res = mysqli_query($con,$query1);
											$x=mysqli_affected_rows($con);
								if($x>0)
										{
										
										echo "<script>
												alert('Password Updated');
											</script>";
											echo "<script> location.href='profile.php'; </script>";
										}
										else
										{
											echo "<script>
												alert('please check Your existing password');
											</script>";
											echo "<script> location.href='profile.php'; </script>";
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
<?php
}
else
{
	echo "<script> location.href='index.php'; </script>";
}	
?>