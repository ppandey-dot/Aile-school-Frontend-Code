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
                    <div class="banner-content"><h2 class="text-uppercase text-white text-left pl-md-0">Contact Us</h2>
<nav aria-label="breadcrumb ml-md-0 pl-md-0">
  <ol class="breadcrumb ">
    <li class="breadcrumb-item pl-md-0"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
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
		<div class="col-md-11">
			<form  action="mail.php" method="post">
				<h3> Get in touch with us:</h3><br>
				<div class="row">
					 <div class="col-md-6">
               <div class="form-group">
					<label for=""> Name</label>
					<input type="text" name="name" placeholder="Enter your name" class="form-control" required />
				</div>
					 </div>

			


					
            <div class="col-md-6">
            	<div class="form-group">
              <label for="phone">Phone Number:</label>
					<input name="phone" type="tel" class="form-control" placeholder="Enter Your Phone Number" pattern="[0-9]{10}" required>
				</div>
            	</div>
					 

          

						
				 <div class="col-md-6">
				<div class="form-group">
					<label for="">Email </label>
					<input type="Email" name="email" placeholder="Enter Your Email " class="form-control" value=""  required="required" />
				</div>
			</div>
			<div class="col-md-6">
               <div class="form-group">
					<label for=""> Subject</label>
					<input type="text" name="subjects" placeholder="Enter Your Subject" class="form-control"  required />
				</div>
					 </div>
			

           
         <div class="col-md-12">
				<div class="form-group">
					<label> Message</label>
					<textarea name="message" class="form-control" rows="5" maxlength="100" placeholder="Enter Your Message"></textarea>
				</div>
			</div>

			    <div class="col-md-6">
				<div class="form-group">
					<input type="submit" name="submit" class="btn btn-info" value="Submit" />
				</div>
			</div>

			</form>

			<div class="downlink"><a id="admform" href="admform.pdf">Click here to download form</a></div>
		</div>
</div></div></div>



 <section class="map">
    <div class="container container-lg py-3  pt-sm-5  ">
      <div class="row pb-4">
        <h1 class="font-class"><span class="light-blue">Contact</span> <span class="light-orange">Us</span> </h1>
      </div>
    </div>
    <div class="container-fluid container-md">
      <div class="row">
        <div class="col-8 offset-2 mb-5 mb-md-0 col-md-4 col-sm=6 offset-md-0">
          <div class="contacts">
            <div class="contact-item pb-2">
              <div class="contact-icon light-blue"> <i class="icofont-phone"></i></div>
              <div class="contact-text light-blue">+91 8765874610</div>
            </div>
            <div class="contact-item pb-2">
              <div class="contact-icon light-blue"> <i class="icofont-ui-message"></i></div>
              <div class="contact-text light-blue"> aileinternational@gmail.com

              </div>
            </div>
            <div class="contact-item">
              <div class="contact-icon light-blue"> <i class="icofont-location-arrow"></i></div>
              <div class="contact-text light-blue">
                   Sri bhagwati place,4km fatehpur road, Lalganj, district - Raebareli, Uttar Pradesh pin 229206
              </div>
            </div>



          </div>
        </div>
        <div class="col-6  offset-1 col-md-8 col-sm-6 offset-md-0">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3581.7364968226902!2d80.93776087382759!3d26.14013329286741!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399b827c2cb95cdd%3A0x5fce041478d6deff!2sAile%20International%20School!5e0!3m2!1sen!2sin!4v1688032030216!5m2!1sen!2sin"
            frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" width="100%"></iframe>
        </div>
      </div>
    </div>

  </section>


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