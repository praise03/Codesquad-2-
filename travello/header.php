<?php include "db.php"; ?>
<?php ob_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Travello</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travello template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<?php
  // $home = $about = $services = $news = $contact = "";
  // switch ($pageTitle) {
  //   case 'index':
  //     $home = 'active';
  //     break;
  //   case 'about':
  //     $about = 'active';
  //     break;
  //   case 'services':
  //     $services = 'active';
  //     break;
  //   case 'news':
  //     $news = 'active';
  //     break;
  //   case 'contact':
  //     $contact = 'active';
  //     break;
  //   default:
  //     $home = $about = $services = $news = $contact = "";
  //     break;
  // }
  ?>

<!-- <li class='$home'><a href='index.php'>Home</a></li>
<li class='$about'><a href='about.php'>About us</a></li>
<li class='$services'><a href='#'>Services</a></li>
<li class='$news'><a href='news.php'>News</a></li>
<li class='$contact'><a href='contact.php'>Contact</a></li>
 -->                      
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>

<div class="super_container">
	
	<!-- Header -->


	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-start">
						<div class="header_content_inner d-flex flex-row align-items-end justify-content-start">
							<div class="logo"><a href="index.html">Travello</a></div>
							<nav class="main_nav">
								<ul class="d-flex flex-row align-items-start justify-content-start">
									<li class="" id="home"><a href="index.php">Home</a></li>
									<li id="about"><a href="about.php">About us</a></li>
									<li id="news"><a href="news.php">News</a></li>
                                    <li id="cont"><a href="contact.php">Contact</a></li>
                                  <?php
                                  	if (isset($_SESSION['firstname'])) {
                                  		echo "<li class= 'btn btn-secondary'>Hello " . $_SESSION['firstname'];
                                  		echo "</li>";

                                  		echo "<a class='btn btn-danger mr-5' href='logout.php'> Logout <a/>";
                                  	}else {
                                  		echo "<li><a href='login.php'>Login/Register</a></li>";
                                  	}
                                  ?>
                                    
								</ul>
							</nav>
							<div class="header_phone ml-auto">Call us: 00-56 445 678 33</div>

							<!-- Hamburger -->

							<div class="hamburger ml-auto">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="header_social d-flex flex-row align-items-center justify-content-start">
			<ul class="d-flex flex-row align-items-start justify-content-start">
				<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu">
		<div class="menu_header d-flex flex-row align-items-center justify-content-start">
			<div class="menu_logo"><a href="index.html">Travello</a></div>
			<div class="menu_close_container ml-auto"><div class="menu_close"><div></div><div></div></div></div>
		</div>
		<div class="menu_content">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About us</a></li>
				<li><a href="#">Services</a></li>
				<li><a href="news.php">News</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</div>
		<div class="menu_social">
			<div class="menu_phone ml-auto">Call us: 00-56 445 678 33</div>
			<ul class="d-flex flex-row align-items-start justify-content-start">
				<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>