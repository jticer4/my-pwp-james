<!DOCTYPE html>
<html>
	<head lang="en">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- linked the css -->
		<link rel="stylesheet" href="style.css">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

		<!-- Import Font Awesome -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

		<!-- jQuery Form, Additional Methods, Validate -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>

		<!-- JavaScript Form Validator -->
		<script src="js/form-validate.js"></script>

		<!-- Google reCAPTCHA -->
		<script src='https://www.google.com/recaptcha/api.js'></script>

		<title>James Ticer PWP</title>
	</head>
	<body>

			<!-- navbar -->
		<div id="background">
			<div>
				<nav class="navbar">
					<!-- dropdown button -->
					<div class="dropdown">
						<button class="btn btn-light dropdown" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fas fa-bars"></i>
						</button>
						<!-- content within the drop down button -->
						<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							<a class="dropdown-item" href="#profile">Profile</a>
							<a class="dropdown-item" href="#edumacations">Edumacations</a>
							<a class="dropdown-item" href="#experience">Experience and Projects</a>
							<a class="dropdown-item" href="#languages">Languages and Technologies</a>
							<a class="dropdown-item" href="#contact">Contact Me</a>
						</div>
					</div>
					<!-- social media links -->
					<span class="inline-block ml-auto">
						<a id="git" class="fab fa-github" href="https://github.com/jticer4" target="_blank"></a>
						<a id="linkedin" class="fab fa-linkedin" href="https://www.linkedin.com/in/jticer4/" target="_blank"></a>
						<a id="twitter" class="fab fa-twitter" href="https://twitter.com/jticer4" target="_blank"></a>
						<a id="mail" class="fas fa-envelope" href="mailto:james@jticer4.com"></a>
					</span>
				</nav>
			</div>

		<div class="pb-5">
			<!-- my title section -->
			<div class="pb-5 pt-4">
				<h3 class="text-center mt-5 pt-5 title">James Ticer</h3>
				<hr id="title-hr" class="title">
				<h5 class="text-center mb-5 pb-5 title">Software Developer</h5>
				<div class="text-center mt-4 pt-5">
					<i class="fas fa-caret-down mt-5 pt-5 mb-5 pb-5 title"></i>
				</div>
			</div>
		</div>
		</div>
		<!-- my profile section -->
		<h3 class="text-center mt-5" id="profile">Profile</h3>
		<!-- horizontal rule under profile -->
		<hr class="pb-3">
		<div class="container-fluid text-center">
			<!-- row containing my profile section -->
			<div class="row">
				<div class="col-md-4 text-right">
			<!-- about me section -->
					<h5 class="font-weight-bold">About Me</h5>
					<p>James Ticer is a UI/UX focused Full Stack Web Developer. He strives to make the internet a better place by crafting elegant and user friendly web applications.</p>
				</div>

				<div class="col-md-4">
			<!-- picture of me -->
					<img class="rounded-circle" src="pic-of-me.jpg" alt="picture of me">
				</div>
			<!-- profile details section -->
				<div class="col-md-4 text-left">
					<h5 class="font-weight-bold">Details</h5>
					<p><strong>Name:</strong><br>James E Ticer IV</p>
					<p><strong>Age:</strong><br>25</p>
					<p><strong>Location:</strong><br>Albuquerque, NM</p>
					<p><strong>My Resume: </strong><a href="JamesTicerResume.pdf" target="_blank"><br>Click Here</a></p>
				</div>
			</div>
		</div>
		<!-- edumacations section -->
		<div class="container-fluid text-center">
			<h3 class="mt-5 pt-3" id="edumacations">Edumacations</h3>
			<!-- my horizontal rule after the edumacations title -->
			<hr class="pb-3">
			<!-- my edumacational credentials are listed here -->
			<p class="pb-3"><strong>Full Stack Web Development</strong><br>Deep Dive Coding Bootcamp</p>
			<p><strong>Psychology with a minor in Business Administration</strong><br>University of New Mexico</p>
		</div>
		<!-- experience and projects section -->
		<div class="container-fluid text-center">
			<h3 class="mt-5 pt-3" id="experience">Experience and Projects</h3>
			<!-- my horizontal rule after my experience and projects section -->
			<hr class="pb-3">
			<!-- my actual experience goes here -->
			<p class="pb-3"><a href="https://bit.ly/onTapAbq" target="_blank"><img id="onTapScreenshot" src="onTapScreenshot.png" alt="screenshot of on tap website" ></a><br><strong>OnTap, </strong>A web application designed to support local breweries and assist users in finding beers based on style, alcohol content, and bitterness.</p>
			<p class="pb-3"><a href="https://www.angularattack.com/" target="_blank"><img id="angularAttackScreenshot" src="angular-attack-screenshot.png" alt="screenshot of angular attack website"></a><br><strong>Angular Attack, </strong>A 48 hour online hackathon consisting of teams of 4 people, 2018.</p>
			<p class="pb-3"><strong>Night Manager, </strong>Ocean Properties of New Mexico 2016 to 2018</p>
			<p><strong>Talent Acquisition Specialist, </strong> Everett James Group 2015 to 2016</p>
		</div>
		<!-- languages and technologies section -->
		<div class="container-fluid text-center">
			<h3 class="mt-5 pt-3" id="languages">Languages and Technologies</h3>
			<!-- my horizontal rule under languages and technologies -->
			<hr class="pb-3">
			<ul class="text-left">

				<li class="pb-1">PHP
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
				</li>

				<li class="pb-1">SQL & Data Design
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
				</li>

				<li class="pb-1">OOP
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
				</li>

				<li class="pb-1">HTML, & CSS
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="far fa-star" aria-hidden="true"></i>
				</li>

				<li class="pb-1">Bootstrap
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="far fa-star" aria-hidden="true"></i>
				</li>

				<li class="pb-1">UI/UX Design
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="far fa-star" aria-hidden="true"></i>
				</li>

				<li class="pb-1">JavaScript
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="far fa-star" aria-hidden="true"></i>
				</li>

				<li class="pb-1">Unit Testing
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="far fa-star" aria-hidden="true"></i>
				</li>

				<li class="pb-1">REST APIs
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="far fa-star" aria-hidden="true"></i>
				</li>

				<li class="pb-1">Security
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="far fa-star" aria-hidden="true"></i>
				</li>

				<li class="pb-1">Angular & Node.js
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="far fa-star" aria-hidden="true"></i>
					<i class="far fa-star" aria-hidden="true"></i>
				</li>

				<li>Design Patterns
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="far fa-star" aria-hidden="true"></i>
					<i class="far fa-star" aria-hidden="true"></i>
				</li>
			</ul>
		</div>
		<!-- contact me form -->
		<div class="container-fluid text-center">
			<h3 class="mt-5 pt-3" id="contact">Contact Me</h3>
			<!-- the horizontal rule under my contact me title -->
			<hr class="pb-3">
			<form id="contact-form" action="php/mailer.php" method="post">
				<!-- new row -->
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="form_firstName">First Name *</label>
							<input id="form_firstName" type="text" name="firstName" class="form-control" placeholder="Please enter your first name *">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="form_lastName">Last Name *</label>
							<input id="form_lastName" type="text" name="lastName" class="form-control" placeholder="Please enter your last name *">
						</div>
					</div>
				</div>
				<!-- new row -->
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="form_email">Email *</label>
							<input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="form_phone">Phone</label>
							<input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone">
						</div>
					</div>
				</div>
				<!-- new row -->
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label for="form_message">Message *</label>
							<textarea id="form_message" name="message" class="form-control" placeholder="Your Message Here *" rows="4"></textarea>
						</div>
					</div>
					<div class="col-md-12">
						<div class="g-recaptcha" data-sitekey="6LejZlwUAAAAAAIlsGpxlvjAUa-2ku404Mx4XCgc"></div>
						<input type="submit" class="btn btn-success btn-send mt-3" value="Send message">
					</div>
				</div>
			</form>
			<!-- the form's output area -->
			<div id="output-area"></div>
		</div>


		<!-- Footer -->
		<footer class="page-footer font-small cyan darken-3 mt-4 bg-dark">
			<!-- Footer Links -->
			<div class="container">
				<!-- Grid row-->
				<div class="row">
					<!-- Grid column -->
					<div class="col-md-12 py-3">
						<div class="text-center">
							<!--  GitHub-->
							<a>
								<a class="fab fa-github mr-md-5 mr-3 fa-2x"  href="https://github.com/jticer4" target="_blank"></a>
							</a>
							<!-- LinkedIn -->
							<a class="tw-ic">
								<a class="fab fa-linkedin mr-md-5 mr-3 fa-2x" href="https://www.linkedin.com/in/jticer4/" target="_blank"></a>
							</a>
							<!-- Twitter -->
							<a class="gplus-ic">
								<a class="fab fa-twitter mr-md-5 mr-3 fa-2x" href="https://twitter.com/jticer4" target="_blank"> </a>
							</a>
							<!-- Email -->
							<a class="li-ic">
								<a class="fas fa-envelope mr-md-5 mr-3 fa-2x" href="mailto:jticer4@gmail.com"> </a>
							</a>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>

