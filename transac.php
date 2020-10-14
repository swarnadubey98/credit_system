
<?php 

include 'connection.php';
$u="select * from users";
$rr=mysqli_query($n,$u);
$r=mysqli_query($n,$u);

?> 
<!DOCTYPE html>
<html>
<head>
	<title>TRACNSACTION</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style2.css">
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
        background-image: url("katie-harp-dRCjgmc4B8I-unsplash.jpg");
        background-position: center;
        font-family: sans-serif;

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
      <li class="nav-item ">
        <a class="nav-link" href="index.php"><i class="fa fa-home" aria-hidden="true"></i></i>&nbspHome <span class="sr-only">(current)</span></a>
      </li>
      

      

      <li class="nav-item">
        <a class="nav-link" href="display.php"><i class="fa fa-users" aria-hidden="true"></i>&nbspCustomers</a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="transac.php"><i class="fa fa-money" aria-hidden="true"></i>&nbspTransaction</a>
      </li>

      <li class="nav-item">
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

<div  style="height: 700px;padding-top:10px background:">
  <h2 >Credit Details</h2>
  
	

  <form  method="POST" >
      <label >Transfer From:</label>
      <select name="from" class="custom-select custom-select-lg mb-3" >
      <option value="None" selected >None </option>
      <?php
    
	while($rwc=mysqli_fetch_array($rr))
	{
      	?>
      	 <option value="<?php echo $rwc['name']; ?>"><?php echo $rwc['name'];?> </option>
      	 <?php
      }
      ?>
  
  </select><br><br>
     <label >Transfer To:</label>
      <select name="to" class="custom-select custom-select-lg mb-3" >
      <option value="None" selected >None </option>
      <?php
    
	while($rw=mysqli_fetch_array($r))
	{
      	?>
      	 <option value="<?php echo $rw['name']; ?>"><?php echo $rw['name'];?> </option>
      	 <?php
      }
      ?>
         </select><br><br>
      <input type="text" class="form-control"id="amount" placeholder="Enter Amount" name="amount" required>
     <!--   <?php
      //mysqli_free_results($rs);
      ?>  -->
     <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
       I confirm to make the payment.
      </label>
      <div class="invalid-feedback">
        You have to agree before submitting.
      </div>
    </div>
  </div>
  <br><br>
  <button type="submit" name='submit' value="submit" class="btn btn-primary btn-lg">Transfer</button>
 
    </form>
    <script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
  
 <?php
 include 'details.php';
 ?>


</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  
  <footer>
  <p class="p-3 bg-dark text-white text-center">@credit_system</p>

</footer>

</body>

</html>