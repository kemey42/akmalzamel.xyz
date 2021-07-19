<!doctype html>
<html lang="en">

<!-- 
	Akmal says hello again!

	HAHAHAHAHAHA

	Ok please leave me alone.

	Sincerely, 
	Akmal
 -->

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Laoding screen -->
	<style>
		.loading-screen {
			position: fixed;
			left: 0px;
			top: 0px;
			width: 100%;
			height: 100%;
			overflow: hidden;
			z-index: 999;
			background: url(assets/pulse.gif) center no-repeat #282846;
		}
	</style>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- Google Font CSS -->
	<link href='https://fonts.googleapis.com/css?family=Advent Pro' rel='stylesheet'>
	<link href="css/all.css" rel="stylesheet">
	<!-- Octicon CSS -->
	<link href="webfonts/octicons.css" rel="stylesheet">
	<!-- Custom CSS -->
	<link href="css/style.css" rel="stylesheet">

	<link rel="shortcut icon" href="#" />

	<title>Hello, world!</title>
	<meta name="description"
		content="Akmal Zamel, software engineer based in Kuala Lumpur, Malaysia. Check out my LinkedIn profile, Github commits, and how to reach out to me.">
</head>

<body>
	<div class="loading-screen"></div>

	<main class="d-flex align-items-center">

		<div id="particles-js"></div>
		<div id="content">

			<!-- Section 1: Main content -->
			<div class="row">

				<!-- Card 1 -->
				<div class="col col-sm col-md-4 col-lg-4">
					<div class="fade-in glass my-4 m-md-0 text-center">
						<form class="my-3">
							<img class="round-photo shadow mb-3" src="avatar.jpg" alt="avatar" width="100" height="100">
							<h1 class="h2 mb-1 text-light">Akmal Zamel</h1>
							<h5 class="h5 mb-4">Software Engineer<br />Kuala Lumpur, Malaysia</h5>

							<div id="my-links" class="list-group">
								<a href="https://www.linkedin.com/in/akmalzamel/"
									class="list-group-item list-group-item-action h5">
									<span class="mouse-off"><i class="fab fa-linkedin"></i></span>
									<span class="mouse-on text-dark">LinkedIn</span>
								</a>
								<a href="https://github.com/kemey42" class="list-group-item list-group-item-action h5">
									<span class="mouse-off"><i class="fab fa-github"></i></span>
									<span class="mouse-on text-dark">GitHub</span>
								</a>
								<a href="https://akmalzamel.xyz/blog/"
									class="list-group-item list-group-item-action h5">
									<span class="mouse-off"><i class="fas fa-blog"></i></span>
									<span class="mouse-on text-dark">Blog</span>
								</a>
								<a href="mailto:akmalzamel@gmail.com" class="list-group-item list-group-item-action h5">
									<span class="mouse-off"><i class="fas fa-envelope"></i></span>
									<span class="mouse-on text-dark">Email</span>
								</a>
							</div>

						</form>
					</div>
				</div>
				<!--Card 1-->

				<!--Card 2-->
				<div class="col col-sm col-md-8 col-lg-8">
					<div class="fade-in glass my-4 m-md-0">
						<h6>Recent GitHub Activities</h6>
						<div id="github-feed" class="mt-3 scroll"></div>
					</div>
				</div>
				<!--Card 2-->

			</div>

			<!-- Footer -->
			<div class="row">
				<p class="col my-4 text-center text-muted">akmalzamel.xyz <?php echo date("Y"); ?></p>
			</div>

		</div>

	</main>
	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
	<!-- Particle-js -->
	<script type="text/javascript" src="js/particle.js"></script>
	<!-- Github activity js -->
	<script type="text/javascript" src="js/mustache.min.js"></script>
	<script type="text/javascript" src="js/github-activity.js"></script>
	<!-- Custom js -->
	<script type="text/javascript" src="js/app.js"></script>
</body>

</html>