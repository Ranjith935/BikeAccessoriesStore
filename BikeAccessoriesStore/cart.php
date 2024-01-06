<?php
session_start();
if(isset($_SESSION['biker']))
{
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">


<head>


<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="LearnPress | Education & Courses HTML Template" />
<meta name="keywords" content="academy, course, education, education html theme, #, learning," />



<title></title>
</style>

                <table id="customers" class="table table-striped table-bordered tbl-shopping-cart" style=" border:5px solid black; width:60%" >
                  <thead >
                    <tr>
                        <th></th>  
                      <th>Product Id     </th>
                      <th>Price</th>
                    </tr>
                  </thead>
			
                  <tbody>
				  <?php
									include 'config.php';
									$sql1 = "SELECT pid, price FROM cart where username='".$_SESSION['biker']."'";
									$result1 = mysqli_query($con,$sql1);
									$num1=mysqlI_num_rows($result1);
									$sl=0;
									$total=0;
									if($num1 > 0)
									{ 
									while($row1 = mysqli_fetch_array($result1))
									{ 
									$pid=$row1[0];
									$price=$row1[1];
									$total=$total+$price;
									?>
									
                    <tr class="cart_item">
                      <td class="product-remove"><form method="post" action="#">
			<input type="text" name="cid[]" value="<?php echo $pid; ?>" hidden="true"><hr>
			<input type="submit" name="delete" value="Delete" style="font-weight:bold;font-size:13px;padding-top:0px">
			</form><?php
			if(isset($_POST['delete']))
			{
				foreach ($_POST['cid'] as $key => $value) 
				{	
					$id=$value;	
				}
				$query6 = "delete from cart where pid='".$id."'";
				mysqli_query($con,$query6) or die(mysqli_error($con));
				echo "<script>
										alert('Product Removed from Cart');
									</script>";
				echo "<script> location.href='cart.php'; </script>";
			}
			?></td>
                      
                     
						</td>
                        <td class="product-name" style="text-align:center;font-weight:bold" ><hr><span class="amount"> <?php echo $pid; ?></span></td>
                      <td class="product-price" style="text-align:center;font-weight:bold"><hr><span class="amount">Rs. <?php echo $price; ?></span></td>
                    </tr>
									<?php }}?>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="col-md-12 mt-30">
              <div class="row">
                <div class="col-md-6" style="color:white;">
                  <h4 style="color:black;"><u>Cart Totals:</u></h4>
                  <table class="table table-bordered" style="background-color:#ba0909;">
                    <tbody>
                      <tr>
                        <td>Order Total</td>
                        <td>Rs. <?php echo $total; ?></td>
                      </tr>
                    </tbody>
                  </table>
                <form method="post" action="#">
				<input type="submit" name="check" value="Place Order" style=" background-color: #4CAF50;border: none;color: white;padding: 5px 22px; text-align: center;text-decoration: none; display: inline-block;font-size: 16px;">
				</form>
				</div>
				  <?php
				  if(isset($_POST['check']))
								{
								include 'config.php';
								echo "<script>
												alert('Product Ordered');
											</script>";
											echo "<script> location.href='home.php'; </script>";
								
								}
								?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  
 
</body>


</html>
<?php
}
else
{
	echo "<script> location.href='login.php'; </script>";
}	
?>