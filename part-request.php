<?php

$server_name = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "trinity";

$connection = mysqli_connect($server_name,$db_username,$db_password,$db_name);
$dbconfig = mysqli_select_db($connection,$db_name);
if(isset($_POST['submit']))
{
    $make = $_POST['make'];
    $model = $_POST['model'];
    $part = $_POST['part'];
    $year = $_POST['year'];


    $query = "INSERT INTO  form (make,model,part,year) VALUES('$make','$model','$part','$year') ";
    $query_run = mysqli_query($connection, $query);
    if($query_run){
       
        header('location:part-request.php');
    }
else {

    header('location:index.php');    
}
}

?>
<!DOCTYPE html>
<html lang="en"><head><title>Used Auto Parts, Used Engines, Transmissions  Parts</title><base href=""><meta http-equiv="Content-type" content="text/html; charset=utf-8"><meta http-equiv="X-UA-Compatible" content="IE=Edge"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=0"><meta name="description" content="Trinity Auto Parts is your source for top-Trinity, used auto parts, including used engines, transmissions, auto body parts, and more."><meta name="keywords" content="used parts, used auto parts, used engines, used engine parts, used transmissions, used transmission parts, used car parts, used automobile parts, used auto body parts, used autoparts, auto parts used, auto parts, auto parts cost, car parts, car parts used, used oem car parts, Trinity auto parts, Trinity parts, junk yard, junk yards, junk yard parts"><meta name="author" content="Trinity Auto Parts"><meta name="robots" content="index,follow"><meta name="og:title" property="og:title" content=" "><meta name="og:keywords" property="og:title" content=" "><meta name="og:description" property="og:title" content=" "><meta property="og:type" content="website"><meta property="og:image" content="images/9112018.jpg"><meta name="og_site_name" property="og:site_name" content="Trinityautoparts.com"><meta name="google-site-verification" content="Ci1UAaMoIyjjClKjrhu6t2RuL51si053pw2ZhxF-H1U">
<!-- Bootstrap core CSS -->
<link href="css/css-bootstrap.min.css" rel="stylesheet">
<!-- animate css -->
<link href="css/css-animate.css" rel="stylesheet">
<!-- slick css -->
<link rel="stylesheet" type="text/css" href="css/slick-slick.css">
<link rel="stylesheet" type="text/css" href="css/slick-slick-theme.css">
<link href="css/css-main.css" rel="stylesheet">
<!-- fontawesome css -->
<link href="css/css-all.css" rel="stylesheet">
<link href="css/font-flaticon.css" rel="stylesheet">
<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<!-- Favicons -->
<link rel="icon" href="favicons/.-7208-favicon.ico">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120708795-1"></script>
<!--custom js -->
<script src="js/custom.js">
</script>

		</head>
		<!-- Body Starts Here -->
		<body>	
		<nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
				<a class="navbar-brand logodefault" href="index.html"><img src="images/Trinity (1).png"  width="40%" alt="Trinity Auto Parts"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
		<div class="collapse navbar-collapse" id="navbarCollapse">
		<ul class="navbar-nav mr-auto"></ul>


			<ul class="navbar-nav custom-nav"><li class="nav-item active home">
					<a class="nav-link" href="index.php">home</a>
				</li>
				<li class="nav-item aboutus">
					<a class="nav-link" href="aboutus.html">about us</a>
				</li>
				<li class="nav-item partlist">
					<a class="nav-link" href="partlist.html">part list</a>
				</li>
				<li class="nav-item partrequest">
					<a class="nav-link" href="partrequest.html">part request</a>
				</li>
				<li class="nav-item customerservice">
					<a class="nav-link" href="customerservice.html">contact us</a>
				</li>
			</ul></div>
	</nav>
     <section class="">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 col-md-12 col-sm-12">
					<div class="invisible" style="height:70px">height</div>
				</div>
				<div class="col-sm-12 d-block d-sm-block d-md-none">
					<div class="caption">
            			<h1 class='captionh5 text-black text-left'><strong>You have selected a <span class='text-blue'>
					<strong>
					
Welcome <?php echo $_POST["make"]; ?><br>
Your email address is: <?php echo $_POST["model"]; ?>

					</strong>
						</span> Complete the fields to get an Instant Quote </strong></h1>
					</div>
				</div>
				<div class="col-md-5 col-sm-12 divblk order-md-2">
					<div class="form-block">
						<div class="form-title">
							<div class="form-titleh1">Find A Part Now</div>
						</div>
					
						<form  method="POST" action="code2.php" class="form-custom bg-light">
					 	<div class="form-group row optone ">
							<img src="images/arrow.png" class="arrowrequired d-block MainOpt1" alt="Arrow for Required" />
							<label for="MainOpt1" class="col-2 col-form-label">Make<span class="text-danger">*</span></label>
							<div class="col-10">
							<input type="name" id="name" name="name" class="form-control" placeholder="Enter Your Name" />
							</div>
						</div>
						<div style="position: relative;width: 100%;"><div class='col-md-12 pull-left d-none' id='pmsg'></div></div>
							<div class="form-group row">
								<img src="images/arrow.png" class="arrowrequired d-none email" alt="Arrow for Required" />
								<label for="email" class="col-2 col-form-label">Email <span class="text-danger">*</span></label>
								<div class="col-10">
									<input type="email" id="email" name="email" class="form-control" placeholder="Enter Your Email" />
								</div>
							</div>
						
							<div style="position: relative;width: 100%;"><div class='col-md-12 pull-left d-none' id='pmsg'></div></div>
							<div class="form-group row">
								<img src="images/arrow.png" class="arrowrequired d-none email" alt="Arrow for Required" />
								<label for="phone" class="col-2 col-form-label">Phone <span class="text-danger">*</span></label>
								<div class="col-10">
									<input type="phone" id="phone" name="phone" class="form-control" placeholder="Enter Your phone Number" />
								</div>
							</div>
							<div class="form-group row">
								<img src="images/arrow.png" class="arrowrequired d-none zip" alt="Arrow for Required" />
								<label for="zip" class="col-2 col-form-label">Zip <span class="text-danger">*</span></label>
								<div class="col-10">
									<input type="text" id="zip" name="zip" class="form-control" placeholder="Enter Your zip" />
								</div>
							</div>
						  
							<div class="form-group row">
								<div class="col-md-7 offset-md-5 col-sm-12 text-right">
								<input type="submit" name="partrequest" value="Find Our Part Now" class="btn btn-custom">
								</div>
							</div>
							
						</form>
					</div>
				</div>
				<div class="col-md-5 offset-md-1 col-sm-12 order-md-1 partrequestsubtdiv">
					<div class="partrequestsubt">
					    <div class="caption d-none d-md-block d-lg-block">
							<h1 class='captionh5 text-black text-left'><strong>You have selected a <span class='text-blue'><strong></strong></span> Complete the fields to get an Instant Quote </strong></h1>
						</div>
						<div class="partrequestsubtdcp">
						<p>Module or Brain Box</p><p>Plugs or wiring harness</p><p>It must be matched to the exact part number of your current ECU.  This data must be provided to complete your order.  You will be shipped a matching ECU that must be reset by your authorized dealer to ensure proper function.</p><p>All Modules are sold as exact matches and must be reset before proper function can be ensured.</p>
						</div>
						<div class="authimg">
							<img src="images/auth.jpg" alt="Authorized" />
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
    	<!--Brands section-->
	<section class=" P-4">
		<div class="container-fluid ">
			<div class="row">
					<div class="col-12 brands ">
						<div class="caption">
							<div class="captionh1">BRANDS WE DEAL WITH !!</div>
							
						</div>
			
				<div class="col-12">
						<marquee  behavior="alternate" onmouseout="this.start();" loop="infinite" onmouseover="this.stop();" direction="left" scrollamount="" style="padding: 15px;overflow: hidden; padding: 10px; margin: 10px;" > 
							<div class="p-5 ml-4 d-inline">
								<img src="images/partnerslogos-acura.jpg" alt="ACURA">
							</div>
							<div class="p-5 ml-4 d-inline">
								<img src="images/partnerslogos-Cooper.png" alt="COOPER">
							</div>
							<div class="p-5 ml-4 d-inline">
								
							<img src="images/partnerslogos-British-Leyland.png" alt="BRITISH-LEYLAND">
							</div>
							<div class="p-5 ml-4 d-inline">
								<img src="images/partnerslogos-BMW.png" alt="BMW">
							</div>
							<div class="p-5 ml-4 d-inline">
								<img src="images/partnerslogos-audi.png" alt="AUDI">
							</div>
							<div class="p-5 ml-4 d-inline">
								<img src="images/partnerslogos-acura.jpg" alt="ACURA">
							</div>
							<div class="p-5 ml-4 d-inline">
								
								<img src="images/partnerslogos-alfa-romeo.png" alt="ALFA-ROMEO">
							</div>
							<div class="p-5 ml-4 d-inline">
								<img src="images/partnerslogos-British-Leyland.png" alt="BRITISH-LEYLAND">
							</div>
							<div class="p-5 ml-4 d-inline">
								
							<img src="images/partnerslogos-BMW.png" alt="BMW">
							</div>
							<div class="p-5 ml-4 d-inline">
								<img src="images/partnerslogos-audi.png" alt="AUDI">
							</div>
							<div class="p-5 ml-4 d-inline">
								<img src="images/partnerslogos-AMC.jpg" alt="AMC">
							</div>
							<div class="p-5 ml-4 d-inline">
								<img src="images/partnerslogos-alfa-romeo.png" alt="ALFA-ROMEO">

							</div>
						</marquee>	
				   </div>
				
				</div>
			</div>
		</div>
	</section>
		<!-- call to action button -->
		<section class="cta mb-">
			<div class="container">
				<div class="row">
				  <div class="col-12 p-5 mb-5 ">
					<h1 class=" ctaheading">Call to Action</h2>
					<p class="lead ctaheading2">Description of the call to action</p>
					<div class="col-md-5 ml-auto mr-auto  col-sm-12 text-center">
						<a class="btn btn-custom" href="#">Call Now</a>
				  </div>
				</div>
			  </div>
			</section>
	<section class="footercontactdiv lineargradient3">
		<div class="container-fluid">
			<div class="row classicvh">
			
				<div class="col-md-4 col-sm-12 ftcontactdivbk">
					<div class="col-12 addressdiv row">
						<div class="col-2">
							<i class="glyph-icon flaticon-flag"></i>
						</div>
						<div class="col-10">
							<div class="addressdivh1">Trinity Auto Parts </div>
							<div class="addressdivh2">5900 Balcones Dr,<br>
						 	Austin, TX 78731</div>						

						</div>
					</div>
					<div class="col-12 addressdiv row">
						<div class="col-2">
							<i class="glyph-icon flaticon-mail"></i>
						</div>
						<div class="col-10">
							<h2><a href="mailto:info@Trinityautoparts.com">info@Trinityautoparts.com</a></h2>
						</div>
					</div>
					<div class="col-12 addressdiv row">
						<div class="col-2">
							<i class="glyph-icon flaticon-phone"></i>
						</div>
						<div class="col-10">
							<h2><a href="tel:1-888-418-3631">866-373-0916</a></h2>
						</div>
					</div>
				
					</div>
					<div class="col-md-4 col-sm-12 ftcontactdivbk">
						<div class="col-12 addressdiv row">
							<div class="col-2">
								<i class="glyph-icon flaticon-flag"></i>
							</div>
							<div class="col-10">
								<div class="addressdivh1">Trinity Auto Parts </div>
								<div class="addressdivh2">5900 Balcones Dr,<br>
								 Austin, TX 78731</div>						
	
							</div>
						</div>
						<div class="col-12 addressdiv row">
							<div class="col-2">
								<i class="glyph-icon flaticon-mail"></i>
							</div>
							<div class="col-10">
								<h2><a href="mailto:info@Trinityautoparts.com">info@Trinityautoparts.com</a></h2>
							</div>
						</div>
						<div class="col-12 addressdiv row">
							<div class="col-2">
								<i class="glyph-icon flaticon-phone"></i>
							</div>
							<div class="col-10">
								<h2><a href="tel:1-888-418-3631">866-373-0916</a></h2>
							</div>
						</div>
					
						</div>
						<div class="col-md-4 col-sm-12 ftcontactdivbk">
							<div class="col-12 addressdiv row">
								<div class="col-2">
									<i class="glyph-icon flaticon-flag"></i>
								</div>
								<div class="col-10">
									<div class="addressdivh1">Trinity Auto Parts </div>
									<div class="addressdivh2">5900 Balcones Dr,<br>
									 Austin, TX 78731</div>						
		
								</div>
							</div>
							<div class="col-12 addressdiv row">
								<div class="col-2">
									<i class="glyph-icon flaticon-mail"></i>
								</div>
								<div class="col-10">
									<h2><a href="mailto:info@Trinityautoparts.com">info@Trinityautoparts.com</a></h2>
								</div>
							</div>
							<div class="col-12 addressdiv row">
								<div class="col-2">
									<i class="glyph-icon flaticon-phone"></i>
								</div>
								<div class="col-10">
									<h2><a href="tel:1-888-418-3631">866-373-0916</a></h2>
								</div>
							</div>
						
							</div>
				</div>
			</div>
		</div>
	</section>
	<section class="footercopyrightdiv bg-dark">
			<div class="container-fluid">
			<div class="row">
				<div class="copyrighttext m-auto "><p class="">Copyright © <script type="text/javascript">document.write(new Date().getFullYear());</script>. TrinityAutoParts.com. All Rights Reserved</p></div>
			</div>
		</div>
	</section>
	<!-- Bootstrap core JS --><script src="js/6761-js-jquery-3.3.1.min.js"></script>
	<script src="js/9428-js-bootstrap.min.js"></script>
	<script src="js/4791-js-wow.js">
	</script>
	<script src="js/1981-js-main.js"></script>
	<!-- Include Slick Slider -->
	<script src="js/slick-slick.min.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript" src="js/recaptcha-api.js"></script>
	</body>
	</html>