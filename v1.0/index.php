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

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- Google Font CSS -->
	<link href='https://fonts.googleapis.com/css?family=Advent Pro' rel='stylesheet'>
	<link href="css/all.css" rel="stylesheet">
	<!-- Github Activity CSS -->
	<link rel="stylesheet" href="node_modules/octicons/build/font/octicons.css">
	<link rel="stylesheet" href="css/github-activity.css">
	<link rel="stylesheet" href="css/github-activity.dark.css">
	<!-- Custom CSS -->
	<link href="css/style.css" rel="stylesheet">

	<title>Hello, world!</title>
	<meta name="description"
		content="Akmal Zamel, software engineer based in Kuala Lumpur, Malaysia. Check out my LinkedIn profile, Github commits, and how to reach out to me.">
</head>

<body>
	<main class="d-flex align-items-center">
		<div id="particles-js"></div>

		<div id="content">
			
			<!-- Section 1: Hello! -->
			<div class="fade-out row">
				<div class="col">
					<p class="h1 text-center text-light">Hello!</p>
				</div>
			</div>

			<!-- Section 2: Main content -->
			<div class="row">

				<!-- Card 1 -->
				<div class="col-lg-4">
					<div class="fade-in glass m-1 text-center">
						<form>
							<img class="mt-3 mb-3 round-photo shadow" src="avatar.jpg" alt="avatar" width="100"
								height="100">
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

							<p class="mt-4 mb-3">akmalzamel.xyz <?php echo date("Y"); ?></p>

						</form>
					</div>
				</div>
				<!--Card 1-->

				<!--Card 2-->
				<div class="col-lg-8">
					<div class="fade-in glass m-1">
						<h6>Recent GitHub Activities</h6>
						<div id="feed" class="mt-3"></div>
					</div>
				</div>
				<!--Card 2-->

			</div>
		</div>

	</main>
	<!-- Particle-js -->
	<script type="text/javascript" src="js/particle.js"></script>
	<!-- Github activity js -->
	<script type="text/javascript" src="js/mustache.min.js"></script>
	<script type="text/javascript" src="js/github-activity.js"></script>
	<!-- Custom js -->
	<script type="text/javascript" src="js/app.js"></script>
</body>

</html>