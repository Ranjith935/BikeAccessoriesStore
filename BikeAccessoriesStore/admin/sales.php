<?php
session_start();
if(isset($_SESSION['admin']))
{
?>
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

<!-- Favicon and Touch Icons -->
<!--<link href="images/favicon.png" rel="shortcut icon" type="image/png">
<link href="images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">-->

<!-- Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- CSS | Theme Color -->
<link href="css/colors/theme-skin-color-set-1.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="js/jquery-plugin-collection.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  color:black;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #a8aef7;}

#customers tr:hover {background-color: #6a6fa6;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #0f1675;
  color: white;
}

</style>
</head>
<body>

  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/bg/bg6.jpg">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <center><h2 class="title text-white">VIEW SALES</h2></center>
            </div>
          </div>
        </div>
      </div>
    </section>
	<section>
	<div class="container">
        <div class="row">
			<div class="col-md-12">
			<table id="customers" border="1" style="width:100%;" id="user">
			<tr>
			<th style="text-align:center;">sl.no</th>
			<th style="text-align:center;">User Name</th>
            <th style="text-align:center;">Product ID</th>
            <th style="text-align:center;">Price</th>
			</tr>
			<?php
				include 'config.php';
				$confirm="Delivered";
				$sql1 = "SELECT pid,username,price from cart";
				$result1 = mysqli_query($con,$sql1);
				$num1=mysqlI_num_rows($result1);
				$sl=0;
				$total=0;
				if($num1 > 0)
				{ 
				while($row1 = mysqli_fetch_array($result1))
				{ 
			$sl+=1;
				$pid=$row1[0];
                $username=$row1[1];
                $price=$row1[2];
				
				
				
			?>
				
			<tr style="text-align:center;">
			<td><?php echo $sl; ?></td>
            <td><?php echo $username; ?></td>
            <td><?php echo $pid; ?></td>
			<td><?php echo $price; ?></td>
			</tr>
				<?php }}?>
			</table>
			</div>
		</div>
	</div>
	</section>
  </div>
  <!-- end main-content -->

  
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

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