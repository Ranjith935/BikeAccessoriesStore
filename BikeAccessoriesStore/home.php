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

    <title>BIKE STORE.....!</title>
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  </head>
  <body>
    
    

   
  <header class="header">
    <nav class="navbar navbar-style">
      <div class="container1">
        <div class="navbar-header">
          <a href="logo12.jpg"><img class="logo" style="border:solid black 5px;" src="wheelie2.jpg"></a>
        
          <a class="b1" id="abc" href="index.php" style="">HOME</a>
    
            <a class="b1" id="navbarDropdown" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              PRODUCTS
            </a>
            
            <div class="dropdown-menu" aria-labelledby="navbarDropdown" >
              <a class="dropdown-item" href="helmets.php" style="font-size:18px;font-weight:bold">HELMETS</a>
              <a class="dropdown-item" href="tyres.php"  style="font-size:18px;font-weight:bold">TYRES</a>
              <a class="dropdown-item" href="lights.php"  style="font-size:18px;font-weight:bold">LIGHTS</a> 
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="spares.php"  style="font-size:18px;font-weight:bold">UPCOMINGS!!</a>
              </div>
        
           
             <a class="b1" href="logout.php">LOGOUT</a>
          <a class="b1" href="about.html">ABOUT</a>
          
        </div>
      </div>
    </nav>
  </header>


 <div class="container2">
      
     <div class="col-sm-6">
      <h1 style="font-size:60px;"><u>BIKEZONE....!</u></h1>
      <p><h3 class="p1" style="font-size:35px;">BIKE PARTS AND ACCESSORIES...!</h3></p>
      </div>
    </div>

</div>
 


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper. min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
<?php
}	
?>