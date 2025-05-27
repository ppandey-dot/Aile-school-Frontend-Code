<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@700&amp;family=Open+Sans:wght@400;700&amp;family=Roboto+Slab:wght@300;400;500&amp;display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="vendor/icofont/icofont.min.css">
  <link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

  <!-- style sheet -->
  <link rel="stylesheet" href="css/style.css">
  <title>Aile International School</title>
</head>

<body>
  <?php include("include/header.php");?>

  <section id="page-banner" class="coverup" style="background-image: url(img/backimg/page-banner.jpg); ">

    <div class="coverup">
        <div class="container ">
            <div class="row">
                <div class="col-lg-12 pl-md-0 col-10 offset-1 pl-0 offset-md-0 offset-md-0">
                    <div class="banner-content"><h2 class="text-uppercase text-white text-left pl-md-0">Enquiry Now</h2>
<nav aria-label="breadcrumb ml-md-0 pl-md-0">
  <ol class="breadcrumb ">
    <li class="breadcrumb-item pl-md-0"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Enquiry Now</li>
  </ol>

</nav>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
  
<div class="container">
	<div class="row">

		<div class="col-md-11  ">
			<form action="enquirymail.php" method="post">
				<h3> Get in touch with us:</h3>

         
				
				 <div class="row">

				 <div class="col-md-6">
				<div class="form-group">
					<label for=""> Student Name</label>
					<input type="text" name="name" placeholder="Student Name" class="form-control" required />
				</div>
			</div>

			 <div class="col-md-6">
				<div class="form-group">
					<label for=""> Father / Guardian Name</label>
					<input type="text" name="fname" placeholder="Father Name" class="form-control" required />
				</div>
			</div>


           <div class="col-md-6">
				<div class="form-group">
					<label for="phone">Enter a phone number:</label>
					<input name="phone" type="tel" class="form-control" placeholder="Mobile Phone Number" pattern="[0-9]{10}" required>
				</div>
			</div>

			<div class="col-md-6">
				<div class="form-group">
					<label for="">Email </label>
					<input type="Email" name="email" placeholder="Email" class="form-control" value="" required="required" />
				</div>
			</div>
			 <div class="col-md-6">
				<div class="form-group">
					<label for="Address">Address:</label>
					<textarea name="address" class="form-control"  rows="3" maxlength="100" placeholder="Enter Address "></textarea>
				</div>
			</div>

 	<div class="col-md-6">
				<div class="form-group">
					<label>Enter Message</label>
					<textarea name="message" class="form-control" rows="3" maxlength="100" placeholder="Enter Message"></textarea>
				</div>
			</div>
			 <div class="col-md-6">
				<div class="form-group">
					<input type="submit" name="submit" class="btn btn-info" value="Submit" />
				</div>
			</div>


</div>
			</form>

		</div>
	</div>

</div>

<style>
	form {
		margin: 20px auto;
	}

	form h3,
	.card h3 {
		font-family: 'Open Sans Condensed', sans-serif;
		color: #7b96bd !important;
	}

	label {
		font-family: 'Roboto Slab', serif;
		color: #404d7c;
	}

	input.form-control,
	select.form-control {

		font-family: 'Roboto Slab', serif;

		width: 100% !important;

		font-size: 16px;
		font-weight: 400;
		line-height: 1.5;
		border: 2px solid #9dadc3 !important;
		color: #495057 !important;
		background-color: #7b96bd;


		border-radius: 0 !important;

	}

	textarea {
		width: 100% !important;
		border-radius: 0 !important;
		background-color: #7b96bd !important;
		border: 2px solid #9dadc3 !important;
		border-radius: 0 !important;
	}
</style>



<?php include("include/footer.php");?>
    <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-sticky/jquery.sticky.js"></script>
    <script src="js/script.js"> </script>
<script src="js/lightbox.js"> </script>
  </body>


<!-- Mirrored from www.avadhinternational.com/enqform.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Jun 2023 12:05:21 GMT -->
</html><script>
	$(document).ready(function() {
		$('#stream').hide();

		$('#standard').change(function() {
			if ($('#standard option:selected').text() == "XI") {

				$('#stream').show();

			} else {
				$('#stream').hide();
			}
		});

		$('#admform').hide();
		$("#submit").click(function() {


			if ($('#success').text() == "Thank you for contacting us") {
				$('#admform').show();

			} else {
				$('#admform').hide();
			}


		});







	});
</script>