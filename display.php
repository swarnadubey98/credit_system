


<!DOCTYPE html>
<html>
<head>
	<title>CUSTOMERS</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <link href='https://fonts.googleapis.com/css?family=Josefin Sans' rel='stylesheet'>
  <link href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
	<style>
		body{
		    background-image: url("matt-hoffman-Q0AM87PsYkE-unsplash.jpg");
		    background-position: center;
		    background-size: cover;

		}

		table{
			width: 800px;
			margin: auto;
			text-align: center;
			table-layout: fixed;
		}	

		table, tr, th, td{
			padding: 20px;
			color: white;
			border:1px solid #080808;
			border-collapse: collapse;
			font-size: 18px;
			font-family: sans-serif;
			background: linear-gradient(top,#3c3c3c 0%, #222222 100%);
			background: -webkit-linear-gradient(top,#3c3c3c 0%, #222222 100%);
		}


	</style>


</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Credit Management System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php"><i class="fa fa-home" aria-hidden="true"></i></i>&nbspHome <span class="sr-only">(current)</span></a>
      </li>
      

      

      <li class="nav-item active">
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

      <li class="nav-item">
        <a class="nav-link" href="index.php#contactus" ><i class="fa fa-phone" aria-hidden="true"></i>&nbspContact</a>
      </li>

      
      
      
      
    </ul>
    
  </div>
</nav>

	<div class="main-div" style="text-align: center;margin-top: 18px; ">

		<h3 style="color: rgb(59,59,59);">CUSTOMERS</h3>
		<div class="center-div">
			<div class="table-responsive">
				<table>
					<thead>
						<tr>
							<th><u>Id</u></th>
							<th><u>Name</u></th>
							<th><u>Email</u></th>
							<th><u>Balance</u></th>
							
						</tr>
					</thead>

					<tbody>

						<?php 

						include 'connection.php';

						$selectquery = "select * from users";

						$query = mysqli_query($n,$selectquery);

						$nums =mysqli_num_rows($query);



						while ($res = mysqli_fetch_array($query)) {
							
							?>
							<tr>
							<td><?php echo $res['Id']; ?></td>
							<td><?php echo $res['name'];?></td>
							<td><?php echo $res['email'];?></td>
							<td><?php echo $res['amount'];?></td>
							
							

						</tr>


						<?php
						}
						 ?>


						
					</tbody>
				</table>
				
			</div>
			
		</div>


	</div>
	<footer>
	<p class="p-3 bg-dark text-white text-center">@credit_system</p>

</footer>

</body>


</html>