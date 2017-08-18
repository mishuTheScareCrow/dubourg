<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Trademark Search | Dubourg</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="mdubourg copyright patent law firm" />
	<meta name="keywords" content="mdubourg , trademark, copyright, patent, domain, litigation, legal advisor" />
	<meta name="author" content="mdubourg.com" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet">
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="#">	
	<!-- Animate.css -->
<!-- 	<link rel="stylesheet" href="css/animate.css"> -->
	<!-- Fontawesome Icon Fonts-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Normalize CSS -->
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

	</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
  		<div class="container-fluid">
    		<div class="navbar-header">
      			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>                        
      			</button>
      			<a class="navbar-brand" href="https://daanguli.com/dubourg/">Dubourg</a>
    		</div>
    		<div class="collapse navbar-collapse" id="myNavbar">
      			<ul class="nav navbar-nav">
        			<li><a href="https://daanguli.com/dubourg/">Home</a></li>
        			<li><a href="https://daanguli.com/dubourg/about.php">About Us</a></li>
        			<li class="dropdown">
       					<a class="dropdown-toggle" data-toggle="dropdown" href="#">Our Services<span class="caret"></span></a>
          					<ul class="dropdown-menu">
            					<li><a href="https://daanguli.com/dubourg/trademark.php">Trademark</a></li>
            					<li><a href="https://daanguli.com/dubourg/patent.php">Patent</a></li>
            					<li><a href="https://daanguli.com/dubourg/renewals.php">Trademark Renewals</a></li>
                      <li><a href="https://daanguli.com/dubourg/copyright.php">Copyright</a></li>
            					<li><a href="https://daanguli.com/dubourg/domain.php">Software & Domain Names</a></li>
                      <li><a href="https://daanguli.com/dubourg/litigation.php">Litigation</a></li>
          					</ul>
        			</li>
        			<li><a href="https://daanguli.com/dubourg/legal.php">Legal Department</a></li>
        			<li class="dropdown">
       					<a class="dropdown-toggle" data-toggle="dropdown" href="#">Online Services<span class="caret"></span></a>
          					<ul class="dropdown-menu">
            					<li><a href="https://daanguli.com/dubourg/trademark_search.php">Trademark Search</a></li>
            					<li><a href="https://daanguli.com/dubourg/estimate_cost.php">Estimate Cost</a></li>
          					</ul>
        			</li>
              		<li><a href="https://daanguli.com/dubourg/contact.php">Contact Us</a></li>
      			</ul>
    		</div>
  		</div>
	</nav>








<?php

	if(isset($_POST['submit'])){
		$trademark=$_POST['trademark'];
		$email=$_POST['email'];
		$class=$_POST['class'];
		$company=$_POST['company'];
		$message=$_POST['message'];



		$to='info@mdubourg.com';
		$subject='Trademark Search Form';
		$body="Trademark:"."\t".$trademark."\n\n"."Email :"."\t".$email."\n\n"."Class :"."\t".$class."\n\n"."Company:"."\t".$company."\n\n"."Message :"."\t".$message;
		$headers="From: ".$email;

		if(mail($to, $subject, $body, $headers)){
			$result="<h4 class='alert alert-success'>Thank You! You will get your search result shortly.</h4>";
		}
		else{
			$result="<h4 class='alert alert-danger'>Sorry there was an error sending your message. Please try again later.</h4>";
		}
	}
?>




<section id="tm-search">
	<div class="tm-search-banner">
	<div class="container">
		<div class="overlay"></div>
		<div class="row">
			<div class="col-md-6">
				<div class="tm-search-header">
					<h2>Search for a trademark</h2>
					<h4>Search it for free anytime!</h4>
				</div>
			</div>
		</div>
	</div>
	</div>
	<div class="tm-search-content">
		<div class="container">
			<div class="col-md-12">




			<div class="form-submission-result">
				<?php echo $result; ?>
			</div>







				<form action="#" class="tm-search-form" name="tm-search-form" method="post">
					<div class="row">
						<div class="col-sm-6">
							<input type="text" name="trademark" required="required" placeholder="Trademark*">
						</div>
						<div class="col-sm-6">
							<input type="email" name="email" required="required" placeholder="Email*">
						</div>
						<div class="col-sm-6">
							<input type="text" name="class" placeholder="Class">
						</div>
						<div class="col-sm-6">
							<input type="text" name="company" placeholder="Company">
						</div>
						<div class="col-sm-12">
							<textarea name="message" required="required" cols="30" rows="7" placeholder="Message*"></textarea>
						</div>
						<div class="col-sm-12">
							<input type="submit" name="submit" value="Search Trademark" class="btn btn-send">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>












	<footer>
		<div class="container">
			<div class="row">
        <div class="col-md-4">
          <div class="footer-links">
            <h2>Links at a glance</h2>
            <ul>
              <li><a href="https://daanguli.com/dubourg/trademark.php">Trademark</a></li>
              <li><a href="https://daanguli.com/dubourg/patent.php">Patent</a></li>
              <li><a href="https://daanguli.com/dubourg/renewals.php">Trademark Renewals</a></li>
              <li><a href="https://daanguli.com/dubourg/copyright.php">Copyright</a></li>
              <li><a href="https://daanguli.com/dubourg/domain.php">Software & Domain Names</a></li>
              <li><a href="https://daanguli.com/dubourg/litigation.php">Litigation</a></li>
            </ul>
          </div>
        </div>

				<div class="col-md-4">
					<div class="footer-location">
						<h2>Find Us</h2>
						<p class="location"><a href="https://goo.gl/maps/smN2efF6e9z" target="_blank" aria-hidden="true"></i> Demóstenes 3491/402 Montevideo,<br> Uruguay - 11600</a></p>
						<p class="meet">Visit us at:<br>9:00am - 5:00pm ( Mon - Thu )<br>9:00am - 4:00pm ( Fri )</p>
					</div>
				</div>

				<div class="col-md-4">
					<div class="footer-contact">
						<h2>Stay Connected</h2>
						<p class="phone"><a href="tel:+59826242574"><i class="fa fa-phone-square" aria-hidden="true"></i> +598 2624 2574</a></p>
						<p class="email"><a href="mailto:info@mdubourg.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> info@mdubourg.com</a></p>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">


				<div class="row">
					<div class="col-md-12">
						<div class="footer-social">
							<ul class="footer-social-icons">
								<li><a href="https://www.facebook.com/dubourg.marcasypatentes"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                <li><a href="https://www.linkedin.com/in/dubourg-patent-and-trademarks-238b3ab2/"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
								<li><a href="https://www.youtube.com/channel/UCxWUwc562Mddw_2Pw7-hyew"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>




				<hr>
				<div class="row">
					<div class="col-md-12 copyright">&copy 2017 Dubourg | All Rights Reserved</div>
				</div>
			</div>
		</div>
		<a href="#" id="return-to-top"><i class="fa fa-chevron-up"></i></a>
	</footer>




	<!-- jQuery -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Stellar Parallax -->
<!-- 	<script src="js/jquery.stellar.min.js"></script> -->

	<!-- Counter -->
	<script type="text/javascript" src="js/counter.js"></script>

	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Auto Hiding Navbar -->
	<script src="js/jquery.bootstrap-autohidingnavbar.min.js"></script>


	<!-- Auto Hiding Navbar -->
	<script>
  		$("nav.navbar-fixed-top").autoHidingNavbar();
	</script>
	<!-- Scroll to Top -->
	<script type="text/javascript">
		$(window).scroll(function() {
    		if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
        		$('#return-to-top').fadeIn(200);    // Fade in the arrow
    		} else {
        		$('#return-to-top').fadeOut(200);   // Else fade out the arrow
    		}
		});
		$('#return-to-top').click(function() {      // When arrow is clicked
    		$('body,html').animate({
        		scrollTop : 0                       // Scroll to top of body
    		}, 500);
		});
	</script>





			<script type="text/javascript">
				$('.owl-carousel').owlCarousel({
					loop: false,
					margin: 30,
					nav: true,
                	autoplay:true,
                	autoplayTimeout:2000,
  					navText: [ "<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>" ],
  					autoplay: true,
  					autoplayHoverPause: true,
                	responsive: {
                  		320: {
                    		items: 1
                  		},
                  		480: {
                    		items: 1
                  		},
                  		768: {
                    		items: 5
                  		}
                	}
            	})
			</script>



	</body>
	</html>
