<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Font Awesome link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- External CSS -->
	<link rel="stylesheet" href="style.css">

	<!-- Projects CSS -->
	<link rel="stylesheet" href="css/projects.css">

	<title>Arvin Caparros | Home</title>

</head>
<body>
	<!-- Header -->
	<?php include("templates/navigation.php"); ?>
	<!-- Header -->

	<!-- Intro Section -->
	<section id="intro">
		<div class="intro-container">
			<div class="intro-wrapper">
				<div class="intro-details">
					<p>Hi, My name is</p>
					<h1>arvin caparros</h1>
					<p>I am Fullstack Web Developer</p>

					<div class="intro-btn">
						<div class="hire-me-btn">
							<a href="#">Hire Me</a>
						</div>

						<div class="view-cv-btn">
							<a href="#">View CV <i class="fa-solid fa-eye"></i></a>
						</div>
					</div>
				</div>
			
				<img src="" alt="intro-image">

			</div>
			
		</div>
	</section>
	<!-- Intro Section-->

	<!-- Project Section -->
	<?php include("templates/projects.php") ?>
	<!-- Project Section -->

	<div class="hieght"></div>


	<!-- Footer -->
	<?php include("templates/footer.php"); ?>
	<!-- Footer -->
</body>
</html>