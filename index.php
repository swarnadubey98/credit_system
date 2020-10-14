<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <link href='https://fonts.googleapis.com/css?family=Josefin Sans' rel='stylesheet'>
  <link href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>

  
</head>
<body>
 		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Credit Management System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php"><i class="fa fa-home" aria-hidden="true"></i></i>&nbspHome <span class="sr-only">(current)</span></a>
      </li>
      

      

      <li class="nav-item">
        <a class="nav-link" href="display.php"><i class="fa fa-users" aria-hidden="true"></i>&nbspCustomers</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="transac.php"><i class="fa fa-money" aria-hidden="true"></i>&nbspTransaction</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="history.php"><i class="fa fa-history" aria-hidden="true"></i>&nbspTransaction History</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="about.php"><i class="fa fa-info" aria-hidden="true"></i>&nbspAbout</a>
      </li>

      <li class="nav-item" >
        <a class="nav-link" href="#contactus"><i class="fa fa-phone" aria-hidden="true"></i>&nbspContact</a>
      </li>

      
      
      
      
    </ul>
    
  </div>
</nav>

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">

      <img src="nastuh-abootalebi-ZtC4_rPCRXA-unsplash.jpg" alt=""  width="1100" height="500">
      <h2 class="heading">We offer the best we can.</h2>
    </div>
    <div class="carousel-item">
      <img src="lauren-mancke-aOC7TSLb1o8-unsplash.jpg" alt="Chicago" width="1100" height="500">
      <h2 class="heading">Fastest and best credit system.</h2>
    </div>
    <div class="carousel-item">
      <img src="rupixen-com-Q59HmzK38eQ-unsplash.jpg" alt="New York" width="1100" height="500">
      <h2 class="heading">We value your money.</h2>
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">About Us</h2>
	</div>
	<div class="container-fluid">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-12">
			<img src="campaign-creators-gMsnXqILjp4-unsplash.jpg" class="img-fluid aboutimg">
			
		</div>

		<div class="col-lg-6 col-md-6 col-12">
			<h2 class="display-5">We provide the best service.</h2>
			<p class="py-3"> 
			We are third largest private sector bank in India offering entire spectrum of financial services for personal & corporate banking.</p>

			<a href="about.php" class="btn btn-success">More About Us</a>
			
		</div>
		</div>
	</div>
</section>


<section class="my-5">
	<div class="py-5">
		<a name="contactus"><h2 class="text-center"> Contact Us</h2></a>
	</div>

	<div class="w-50 m-auto">
		<form action="userinfo.php" method="post">
			<div class="form-group">
				<label>User Name</label>
				<input type="text" name="user" autocomplete="off" class="form-control">
				
			</div>

			<div class="form-group">
				<label>Email Id</label>
				<input type="text" name="email" autocomplete="off" class="form-control">
				
			</div>

			<div class="form-group">
				<label>Mobile</label>
				<input type="text" name="mobile" autocomplete="off" class="form-control">
				
			</div>

			<div class="form-group">
				<label>Comments</label>
				<textarea class="form-control" name="comments"></textarea>
				
			</div>

			<button type="submit" class="btn btn-success">Submit</button>
			
		</form>
	</div>

</section>

<footer>
	<p class="p-3 bg-dark text-white text-center">@credit_system</p>

</footer>



	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>


</html>