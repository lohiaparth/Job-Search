<?php 

session_start();

	if(!isset($_SESSION['userlogin'])){
		header("Location: login.php");
	}

	if(isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION);
		header("Location: login.php");
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="css/styles2.css">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Find Jobs</title>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
	<script src="//code.jquery.com/jquery-1.12.4.js"></script>
 	 <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>
	<script>
		$(function() {
			$( "h1" ).show( "fold", 2000 );

		});
	</script>
	<div class="row">
		<div class="containe gray highlightTextIn">
			<a alt="Find Jobs">Find Jobs</a>
			<a alt="Employers" href="employers.php">Employers</a>
			<a alt="Upload Job" href="/WEBSITE/jobupload/uploadjob.php">Upload Job</a>
			<a alt="About Us" href="aboutus.php">About Us</a>
			
		</div>
		
	</div>
		
	<div class="row">
	<h1 id="head">Find Your Dream Job Here</h1>
	</div>
	<div class="row">
		<div class="container">
			
			
			
			
			<div class="search-bar">
				<div id="select">	
					<p id ="selectText">Anywhere</p>
					<img src="arrow.png" alt="image here">
					<ul id="list">
						<li class="options">Andhra Pradesh</li>
						<li class="options">Arunachal Pradesh</li>
						<li class="options">Assam</li>
						<li class="options">Bihar</li>
						<li class="options">Chandigarh</li>
						<li class="options">Chhattisgarh</li>
						<li class="options">Dadra and Nagar Haveli</li>
						<li class="options">Daman and Diu</li>
						<li class="options">Delhi</li>
						<li class="options">Goa</li>
						<li class="options">Gujarat</li>
						<li class="options">Haryana</li>
						<li class="options">Himachal Pradesh</li>
						<li class="options">Jammu and Kashmir</li>
						<li class="options">Jharkhand</li>
						<li class="options">Karnataka</li>
						<li class="options">Kerala</li>
						<li class="options">Ladakh</li>
						<li class="options">Lakshadweep</li>
						<li class="options">Madhya Pradesh</li>
						<li class="options">Maharashtra</li>
						<li class="options">Manipur</li>
						<li class="options">Meghalaya</li>
						<li class="options">Mizoram</li>
						<li class="options">Nagaland</li>
						<li class="options">Odisha</li>
						<li class="options">Puducherry</li>
						<li class="options">Punjab</li>
						<li class="options">Rajasthan</li>
						<li class="options">Sikkim</li>
						<li class="options">Tamil Nadu</li>
						<li class="options">Telangana</li>
						<li class="options">Tripura</li>
						<li class="options">Uttar Pradesh</li>
						<li class="options">Uttarakhand</li>
						<li class="options">West Bengal</li>
						
					</ul>
				</div>	
				
				<form action="keywordjobs.php" style="display: contents;">
				<input type="text" name="keyword" value="<?php echo $searchKeyword; ?>" placeholder="JOB TITLE OR KEYWORD">

				<input type="hidden" name="location" id="location" value="Anywhere">
				
				<input type="submit" id="select" style="width: 160px;" value="Submit" >
				</form>
				
			</div>

		</div>
	</div> 
	
	<script>
		let select = document.getElementById("select");
		let list = document.getElementById("list");
		let selectText = document.getElementById("selectText");
		
		let options = document.getElementsByClassName("options");

		select.onclick = function(){
			list.classList.toggle("open");
		}

		for(option of options){
			option.onclick = function(){
				selectText.innerHTML = this.innerHTML;
				document.getElementById("location").value = selectText.innerHTML;
			}
		}
	</script>
	<div class="row">
		<a id="logout" href="index.php?logout=true">Logout</a>
		<?php
		include "dbconfig.php";
		//include "keywordjobs.php";
		?>
		</div>
	</div>
</body>
</html>


