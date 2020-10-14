
<?php 

include 'connection.php';
  	$sq="select * from history order by abc desc";
   	$q=mysqli_query($n,$sq);

?> 
<!DOCTYPE html>
<html>
<head>
	<title>HISTORY</title>
		 <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" type="text/css" href="style15.css">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	  <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@300&display=swap" rel="stylesheet">
	  <link href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
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
			margin-top: 40px;
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
      

      

      <li class="nav-item">
        <a class="nav-link" href="display.php"><i class="fa fa-users" aria-hidden="true"></i>&nbspCustomers</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="transac.php"><i class="fa fa-money" aria-hidden="true"></i>&nbspTransaction</a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="history.php"><i class="fa fa-history" aria-hidden="true"></i>&nbspTransaction History</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="about.php"><i class="fa fa-info" aria-hidden="true"></i>&nbspAbout</a>
      </li>

      <li class="nav-item" >
        <a class="nav-link" href="index.php#contactus"><i class="fa fa-phone" aria-hidden="true"></i>&nbspContact</a>
      </li>

      
      
      
      
    </ul>
    
  </div>
</nav>


 <div style="height: 700px;padding-top:10px "> 
   <div class="index3">
<div class="table-responsive">
	<table >
		<thead>
			<tr>
			
				<th><u>From</u></th>
				<th><u>To</u></th>
				<th><u>Amount</u></th>
				
				
			</tr>
		</thead>
		<?php
		while($rees=mysqli_fetch_assoc($q))
		{ ?>
			<tbody>
				<tr>
					
					<td> <?php echo $rees['sen'];?></td>
					<td> <?php echo $rees['rec'];?></td>
					<td> <?php echo $rees['amount'];?></td>
					
				</tr>
			</tbody>
			<?php }
			?>

	
	</table>

</div>
</div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  

</body>
</html>
