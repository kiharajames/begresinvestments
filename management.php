<!doctype html>


<html lang="en" class="no-js">

<head>
	<title>Project Management | Begres Investments</title>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link
		href="https://fonts.googleapis.com/css?family=Damion|Gochi+Hand|Raleway:200,300,400,500,600,700,800,900|Droid+Serif:400,400italic,700,700italic"
		rel="stylesheet">

	<link rel="stylesheet" href="css/strix-assets.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">

	<script src="js/strix-plugins.min.js"></script>
	<script src="js/jquery.themepunch.tools.min.js"></script>
	<script src="js/jquery.themepunch.revolution.min.js"></script>
	<script src="js/jquery.appear.js"></script>
	<script src="js/jquery.countTo.js"></script>
	<script src="js/script.js"></script>

	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">

</head>

<body>

	<!-- Container -->
	<div id="container">
		<?php include 'nav.php'; ?>

		<!-- banner-page-section 
			================================================== -->
		<section class="banner-page-section management-banner">
			<div class="container">
				<h1>Project management </h1>
				<p>Ensure proper flow of your construction works coupled with excellent management.</p>
			</div>
		</section>
		<!-- End banner-page-section -->

		<!--page-depth-section 
				================================================== -->
				<section class="page-depth-section">
				<div class="container">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="management.php">Project Management</a></li>
					</ul>
				</div>
			</section>
			<!-- End page-depth-section -->

		<section class="about-alt-section">
			<div class="background-stretch">
				<div class="white-area"></div>
				<div class="image-area"></div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="title-section">

							<p>We have built our reputation as
								a construction
								company that puts people first.
								By harnessing the power of relationships between our company,
								our partners and our clients, we transform landscapes,
								communities and minds. </p>
						</div>
					</div>
				</div>
			</div>
	</div>
	</div>
	</section>
	<!-- End short section-->

    



	<!-- portfolio-section
			================================================== -->
	<?php include 'mini_gallery.php' ; ?>
	<!-- End portfolio section -->
	<br>

	<!-- banner-line
			================================================== -->
			<section class="banner-line-default">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h1>Want to start a new project with us?</h1>
					</div>
					<div class="col-md-6">
						<a href="https://api.whatsapp.com/send?phone=%E2%80%8E+254114741612." class="button-one white-button">Get a quote</a>
					</div>
				</div>
			</div>
		</section>
		<!-- End banner-line -->

	<!--Go top link -->
	<a class="go-top" href="#"><i class="fa fa-angle-up"></i></a>
	<!-- footer
			================================================== -->
	<?php include 'footer.php'; ?>
	<!-- End footer -->

	<!--Go top link -->
	<a class="go-top" href="#"><i class="fa fa-angle-up"></i></a>
	<!-- Revolution slider -->
	<script>

		jQuery(document).ready(function () {

			revapi = jQuery('.tp-banner').show().revolution(
				{
					dottedOverlay: "none",
					delay: 10000,
					startwidth: 960,
					startheight: 700,
					hideThumbs: 200,

					thumbWidth: 100,
					thumbHeight: 50,
					thumbAmount: 5,

					navigationType: "none",
					navigationArrows: "none",

					touchenabled: "on",
					onHoverStop: "off",

					swipe_velocity: 0.7,
					swipe_min_touches: 1,
					swipe_max_touches: 1,
					drag_block_vertical: false,

					parallax: "mouse",
					parallaxBgFreeze: "on",
					parallaxLevels: [7, 4, 3, 2, 5, 4, 3, 2, 1, 0],

					keyboardNavigation: "off",

					navigationHAlign: "center",
					navigationVAlign: "bottom",
					navigationHOffset: 0,
					navigationVOffset: 320,
					soloArrowLeftHOffset: 260,
					soloArrowRightHOffset: 260,

					shadow: 0,
					fullWidth: "off",
					fullScreen: "on",

					spinner: "spinner4",

					stopLoop: "off",
					stopAfterLoops: -1,
					stopAtSlide: -1,

					shuffle: "off",

					autoHeight: "off",
					forceFullWidth: "off",



					hideThumbsOnMobile: "off",
					hideNavDelayOnMobile: 1500,
					hideBulletsOnMobile: "off",
					hideArrowsOnMobile: "off",
					hideThumbsUnderResolution: 0,

					hideSliderAtLimit: 0,
					hideCaptionAtLimit: 0,
					hideAllCaptionAtLilmit: 0,
					startWithSlide: 0,
					fullScreenOffsetContainer: ".header"
				});

			var slideThumb = $('.slide-thumbs');

			slideThumb.on('click', function (event) {
				event.preventDefault();
				var btn = $(this);
				revapi.revshowslide(btn.data('slide'));

			});
			// revapi.bind("revolution.slide.onchange", function (e, data) {
			// 	slideThumb.parent('li').removeClass('active');
			// 	$('#slidethumb' + data.slideIndex).parent('li').addClass('active');
			// });

		});	//ready

	</script>
</body>

</html>