 <?php
$servername = "localhost";
$username = "galwayhandyman";
$password = "handymanpassword1";
$dbname = "handymancontact";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Escape user inputs for security

$FIRST_NAME  = $_POST ['FIRST_NAME'];

$LAST_NAME  = $_POST ['LAST_NAME'];

$PHONENUMBER  = $_POST ['PHONENUMBER'];

$ADDRESS  = $_POST ['ADDRESS'];

$CITY  = $_POST ['CITY'];

$STATE  = $_POST ['STATE'];

$ZIP  = $_POST ['ZIP'];

$PROBLEM_TYPE  = $_POST ['PROBLEM_TYPE'];

$PROBLEM  = $_POST ['PROBLEM'];

 

// attempt insert query execution

mysqli_query($conn, "INSERT INTO contact (FIRST_NAME, LAST_NAME, PHONENUMBER, ADDRESS, CITY, STATE, ZIP, PROBLEM_TYPE, PROBLEM) VALUES ('$FIRST_NAME', '$LAST_NAME', '$PHONENUMBER', '$ADDRESS', '$CITY', '$STATE', '$ZIP', '$PROBLEM_TYPE', '$PROBLEM')");

if(mysqli_affected_rows($conn)>0){



} else{

    echo "ERROR: Was not able to execute $sql. " . mysqli_error($conn);

}

 

// close connection

mysqli_close($conn);

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Local CSS -->
    <link href="../css/handy_style.css" rel="stylesheet">
	
	<!-- Adds the School Logo as Website Icon -->
	<link rel="icon" type="image/png" href="../img/mock_logo.png">

	<!-- Links to GoogleFonts to add in custom fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Cantarell&family=Fjalla+One&display=swap" rel="stylesheet">

	<!-- Links to this site to get icons -->
	<script src="https://kit.fontawesome.com/7160eaab08.js" crossorigin="anonymous"></script>

    <title>Form Page</title>
		
  </head>
  
  <body>
  
	<div class="header"><!-- Start of top site image -->
		<img src="../img/logo1.gif" alt="School Logo" id="logo_top" >
	</div><!-- End of top site image -->
 
	<!-- Navbar with links to different pages-->
	<nav class="navbar navbar-expand-sm navbar-dark ">
		<div class="mx-auto d-sm-flex d-block flex-sm-nowrap">
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse text-center" id="navbarsExample11">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="../html/handyman_home.html" style="color: #fc8c34; text-shadow: 2px 2px black;">Home<i class="fa-solid fa-house"></i></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../html/handyman_about.html" style="color: #fc8c34; text-shadow: 2px 2px black;">About<i class="fa-solid fa-address-card"></i></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../html/handyman_gallery.html" style="color: #fc8c34; text-shadow: 2px 2px black;">Gallery<i class="fa-solid fa-images"></i></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../html/handyman_form.html" style="color: #174dee; text-shadow: 2px 2px black;">Form<i class="fa-solid fa-file-pen fa-beat"></i></a>
					</li>
				</ul>
			</div>
		</div>
	</nav> 

	<div class="section_1"><!-- Start of first row -->
	
		<div class="lesser_header">
		<img src="../img/contact.png" id="img1" alt="...">
		<div class="centered">Contact Form</div>
		</div>	
		
		<img src="../img/cara_bord.png" id="caraB" alt="...">

	</div><!-- End of first row -->
	
		<div class="container-fluid"><!-- Start of Container -->
			<div class="row"><!-- Start of Lesser Container -->
			
				<div class="col-2" id="sideBar"><!-- Left Content -->
				</div><!-- Left Content -->
				
				<div class="col-8"><!-- Main Content -->

				<div class="container-fluid" id="Para"><!-- The Galway Handyman Row -->
					<div class="row no-gutters">
						<img src="../img/para_bord.png" id="bord" alt="Border">
						<h2>About Requests</h2>
						<img src="../img/para_bord.png" id="bord" alt="Border">					
					</div>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
					</p>
				</div><!-- End of The Galway Handyman Row -->



				<div class="row no-gutters" id="contact_Title" style="text-align: center;"><!-- Title box for Get in Contact -->
					<img src="../img/para_bord.png" id="bord" alt="Border">
					<h2>Get in Contact</h2>
					<img src="../img/para_bord.png" id="bord" alt="Border">					
				</div><!-- End of Title box for Get in Contact -->
	
				<div id="formcontent"><!-- Start of Form Styling -->

					<form  action="../php/insert_form.php" method="post" class="row g-3 needs-validation" id="request_form" ><!-- Start of Form -->
					
						<img src="../img/para_bord.png" id="bord_form" alt="Border">	
									
						<div class="row">
						  <div class="col-md-6 mb-3">
							<label for="FIRST_NAME">First name</label>
							<input type="text" class="form-control" name="FIRST_NAME" id="FIRST_NAME" required />
							<div class="invalid-feedback">
							  Valid first name is required.
							</div>
						  </div>
						  <div class="col-md-6 mb-3">
							<label for="LAST_NAME">Last name</label>
							<input type="text" class="form-control" name="LAST_NAME" id="LAST_NAME" required />
							<div class="invalid-feedback">
							  Valid last name is required.
							</div>
						  </div>
						</div>	

						<div class="mb-3">
						  <label for="PHONENUMBER">Phone Number</label>
						  <input type="text" class="form-control" name="PHONENUMBER" id="PHONENUMBER" placeholder="1234 Main St" required />
						  <div class="invalid-feedback">
							Please enter your shipping address.
						  </div>
						</div>	

						<div class="mb-3">
						  <label for="ADDRESS">Address</label>
						  <input type="text" class="form-control" name="ADDRESS" id="ADDRESS" placeholder="1234 Main St" required />
						  <div class="invalid-feedback">
							Please enter your shipping address.
						  </div>
						</div>		
						

						<div class="col-md-6">
							<label for="CITY" class="form-label">City</label>
							<input type="text" class="form-control" name="CITY" id="CITY" required />
							<div class="invalid-feedback">
							  Please provide a valid city.
							</div>
						</div>
						
						<div class="col-md-3">
							<label for="STATE" class="form-label">State</label>
							<select class="form-select" name="STATE" id="STATE" required />
							  <option selected disabled value="">Choose...</option>
							  <option>...</option>
							</select>
							<div class="invalid-feedback">
							  Please select a valid state.
							</div>
						</div>
						<div class="col-md-3">
							<label for="ZIP" class="form-label">Zip</label>
							<input type="text" class="form-control" name="ZIP" id="ZIP" required />
							<div class="invalid-feedback">
							  Please provide a valid zip.
							</div>
						</div>

						<div class="mb-3">
							<label for="PROBLEM_TYPE" class="form-label">Problem Type</label>
							<select class="form-select" name="PROBLEM_TYPE" id="PROBLEM_TYPE" required />
							  <option selected disabled value="">Choose...</option>
							  <option>Fix Inside Wall</option>							  
							  <option>Fix Ceiling</option>		
							  <option>Water Feature</option>		
							  <option>Replace/Fit New Floor</option>
							  <option>Fit New Stove</option>	
							  <option>General House Maintenance</option>	
                              <option>Fit a Kitchen</option>							  
							  <option>Tiling</option>
							  <option>Stone Wall</option>
							  <option>Stone Facing</option>							  
							  <option>Other</option>						  							  
							</select>
							<div class="invalid-feedback">
							  Please select a valid Problem.
							</div>
						</div>	
						  
						<div class="form-group">
							<label for="PROBLEM">Problem Description</label>
							<textarea class="form-control" name="PROBLEM" id="PROBLEM" rows="3" required /></textarea>
						</div>			  
						  
						<div class="col-12">
							<div class="form-check">
							  <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required />
							  <label class="form-check-label" for="invalidCheck">
								Agree to terms and conditions
							  </label>
							  <div class="invalid-feedback">
								You must agree before submitting.
							  </div>
							</div>
						</div>
						  
						<img src="../img/para_bord.png" id="bord_form" alt="Border">	
						  
						  
						<div class="col-12">		
<h2 style="text-align: center">
Your Form has been submitted!
</h2>	
						 </div>
						 
					</form><!-- End of Form -->

				</div><!-- End of Form Styling -->


				<!-- Start of Bootstrap Cards -->
				<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"><!-- Links to this site to get icons -->
				<script src="https://kit.fontawesome.com/7160eaab08.js" crossorigin="anonymous"></script><!-- Links to this site to get icons -->
				<div class="container" style="padding-top:50px;">
					<div class="row">
						<div class="col-md-4 col-xl-3">
							<div class="card bg-c-blue order-card">
								<div class="card-block">
									<h6 class="m-b-20">Jobs Completed</h6>
									<h2 class="text-right"><i class="fa-solid fa-circle-check f-left"></i><span>213</span></h2>
									<p class="m-b-0">With Great <br>Feedback<span class="f-right"></span></p>
								</div>
							</div>
						</div>
						
						<div class="col-md-4 col-xl-3">
							<div class="card bg-c-green order-card">
								<div class="card-block">
									<h6 class="m-b-20">Response Time</h6>
									<h2 class="text-right"><i class="fa-solid fa-clock f-left"></i><span>24 Hrs</span></h2>
									<p class="m-b-0">Hang <br>On!<span class="f-right"></span></p>
								</div>
							</div>
						</div>
						
						<div class="col-md-4 col-xl-3">
							<div class="card bg-c-yellow order-card">
								<div class="card-block">
									<h6 class="m-b-20">Loyal Clients</h6>
									<h2 class="text-right"><i class="fa-solid fa-circle-user f-left"></i><span>12</span></h2>
									<p class="m-b-0">Regular <br>Maintanence<span class="f-right"></span></p>
								</div>
							</div>
						</div>
						
						<div class="col-md-4 col-xl-3">
							<div class="card bg-c-pink order-card">
								<div class="card-block">
									<h6 class="m-b-20">Years Experience</h6>
									<h2 class="text-right"><i class="fa-regular fa-calendar-days f-left"></i><span>30+</span></h2>
									<p class="m-b-0">5+ <br>As Handyman<span class="f-right"></span></p>
								</div>
							</div>
						</div>
					</div>
				</div><!-- End of Bootstrap Cards -->
	  
			</div><!-- Main Content -->
				
			<div class="col-2" id="sideBar"><!-- Right Content -->
			</div><!-- Right Content -->

			<div class="no-gutters" id="logoFooter"><!-- Site Footer -->
				<h2>The Galway Handyman</h2>
			</div><!-- End of Site Footer -->
				
		</div><!-- End of Lesser Container -->
	</div><!-- End of Container -->

	<script>
		// create references to the modal...
		var modal = document.getElementById('myModal');
		// to all images -- note I'm using a class!
		var images = document.getElementsByClassName('myImages');
		// the image in the modal
		var modalImg = document.getElementById("img01");
		// and the caption in the modal
		var captionText = document.getElementById("caption");

		// Go through all of the images with our custom class
		for (var i = 0; i < images.length; i++) {
		  var img = images[i];
		  // and attach our click listener for this image.
		  img.onclick = function(evt) {
			modal.style.display = "block";
			modalImg.src = this.src;
			captionText.innerHTML = this.alt;
		  }
		}

		var span = document.getElementsByClassName("close")[0];

		span.onclick = function() {
		  modal.style.display = "none";
		}
	</script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>