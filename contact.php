<?php
// Define some constants
define("RECIPIENT_NAME", "Begres Investments");
define("RECIPIENT_EMAIL", "smaina991@gmail.com");

// Read the form values
$success = false;
if (isset($_POST['submit_contact'])) {
    $userName = $_POST['name'];
    $senderEmail = $_POST['mail'];
    $senderPhone = $_POST['phone'];
    $EmailSubject = $_POST['subject'];
    $message = $_POST['message'];

    // If all values exist, send the email
    if ($userName && $senderEmail && $senderPhone && $EmailSubject && $message) {
        $recipient = RECIPIENT_NAME . " <" . RECIPIENT_EMAIL . ">";
        $headers = "From: " . $userName . " <" . $senderEmail . ">";
        $msgBody = " Subject: " . $EmailSubject . " \n Sender Phone: " . $senderPhone . " \n \n Message: " . $message . "";
        $success = mail($recipient, $headers, $msgBody);

        //Set Location After Successsfull Submission
        echo "<script type='text/javascript'>alert('SUCCESS.');</script>";
        echo '<style>body{display:none;}</style>';
        echo '<script>window.location.href = "index.php";</script>';
    } else {
        //Set Location After Unsuccesssfull Submission
        echo "<script type='text/javascript'>alert('FAILED.');</script>";
        echo '<style>body{display:none;}</style>';
        echo '<script>window.location.href = "contact.php";</script>';
    }

}

?>

<!doctype html>


<html lang="en" class="no-js">

<head>
	<title>Contact us | Begres investments</title>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link
		href="https://fonts.googleapis.com/css?family=Damion|Gochi+Hand|Raleway:200,300,400,500,600,700,800,900|Droid+Serif:400,400italic,700,700italic"
		rel="stylesheet">

	<link rel="stylesheet" href="css/strix-assets.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">

</head>

<body>

	<!-- Container -->
	<div id="container">
		<!-- Start header -->
        <?php include 'nav.php';?>
	<!-- End Header -->

	<!-- banner-page-section
			================================================== -->
	<section class="banner-page-section contact-banner">
		<div class="container">
			<h1>Contact Us</h1>
			<p>Get in Touch with Us</p>
		</div>
	</section>
	<!-- End banner-page-section -->

	<!--page-depth-section
				================================================== -->
				<section class="page-depth-section">
				<div class="container">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="contact.php">Contact us</a></li>
					</ul>
				</div>
			</section>
			<!-- End page-depth-section -->


	<!-- contact-section
			================================================== -->
	<section class="contact-page-section">
		<div class="contact-info">
			<div class="container">
				<div class="contact-info-box">
					<div class="row">
						<div class="col-md-4">
							<span><i class="fa fa-phone"></i></span>
							<h2>Phone / Fax</h2>
							<p> +254 114741612 </p>
						</div>
						<div class="col-md-4">
							<span><i class="fa fa-envelope"></i></span>
							<h2>Email</h2>
							<p> begresolutions@gmail.com <br> info@begresolutions.co.ke </p>
						</div>
						<div class="col-md-4">
							<span><i class="fa fa-map-marker"></i></span>
							<h2>Location</h2>
							<p>Cash Gate building, <br> Syokimau, Mombasa road, Nairobi.</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="contact-form">
				<div class="container">
					<div class="title-section">
						<h1>Get in Touch</h1>
					</div>
					<form id="contact-form" action="contact.php" method="POST">
						<div class="row">
							<div class="col-md-6">
								<input name="name" id="name" type="text" placeholder="Name*" required>
							</div>
							<div class="col-md-6">
								<input name="mail" id="mail" type="text" placeholder="Email*" required>
							</div>
							<div class="col-md-6">
								<input name="phone" id="phone" type="text" placeholder="Phone number (optional)" >
							</div>
							<div class="col-md-6">
								<input name="subject" id="subject" type="text" placeholder="Subject*" required>
							</div>
						</div>
						<textarea name="message" id="comment" placeholder="*Message*" required></textarea>
						<div class="submit-area">
							<input type="submit" name="submit_contact" value="Send Message">
							<div id="msg" class="message"></div>
						</div>
					</form>
				</div>
			</div>


		<iframe style="border:0; width: 100%; height: 350px;"
			src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.7038916791203!2d36.94004201384262!3d-1.3542452360838175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f0d47c1c5c1ff%3A0xe47d7c7b1d76918!2sCash%20gate%20building-Syokimau!5e0!3m2!1sen!2ske!4v1621416653659!5m2!1sen!2ske"
			allowfullscreen></iframe>



	</section>
	<!-- End contact section -->

	<!-- footer
			================================================== -->
	<?php include 'footer.php';?>
	<!-- End footer -->

	</div>
	<!-- End Container -->
	<!--Go top link -->
	<a class="go-top" href="#"><i class="fa fa-angle-up"></i></a>


	<script src="js/strix-plugins.min.js"></script>

	<!--<script src="js/script.js"></script>-->

</body>

</html>