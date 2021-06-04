<!-- Header
		    ================================================== -->
		<header class="clearfix trans">
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="index.php"><img src="images/begresLogosmall-31.png" alt=""></a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li><a <?php if ($page == "home") {
								print'class="active"';
							}?> href="index.php">Home</a></li>
							<li><a <?php if ($page == "design") {
								print'class="active"';
							}?> href="design.php">Design </a></li>
							<li><a <?php if ($page == "construction") {
								print'class="active"';
							}?> href="construction.php">Construction </a></li>
							<li><a <?php if ($page == "p_management") {
								print'class="active"';
							}?> href="management.php">Project Management </a></li>

							<li class="drop"><a <?php if ($page == "tech") {
								print'class="active"';
							}?> href="#">Technology</a>
								<ul class="dropdown">
									<li><a href="shule_vans.php">Shulevans</a></li>
									<li><a href="urban_greens.php">Urbangreens</a></li>
								</ul>
							</li>

							<li><a <?php if ($page == "team") {
								print'class="active"';
							}?> href="team.php">Team</a></li>
							<li><a <?php if ($page == "contact") {
								print'class="active"';
							}?> href="contact.php">Contact us</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
		</header>
		<!-- End Header -->