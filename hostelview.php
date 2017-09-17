<!DOCTYPE html>
<html>
<head>
	<title>Pardor 2.0</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			
			$(window).scroll(function(){
				if($(window).width()>480){
				if(this.pageYOffset>=20){
					$("#nav").attr("style","padding-top:0px");
					$(".nav-tab").attr("style","padding: 20px 33px 15px 33px;");
					$("#nav").css({background:"rgba(96,125,139,1)",height:"60px"});
					$("#hd").attr("style","padding-left: 100px;padding-top: 15px;font-size: 20px;");
				}
				if(this.pageYOffset<20){
					$("#nav").css({background:"rgba(96,125,139,0.7)",height:"80px"});
					$(".nav-tab").attr("style","padding: 33px 33px 22px 33px;");
					$("#hd").attr("style","padding-left: 200px;padding-top: 20px;");
				}
			}
			});
		});
	</script>
</head>
<body style="background: #f3f3f3;">
<div class="container-fluid">
		<div id="nav">
			<div id="hd">
				<span>para<strong>dor</strong></span>
			</div>
			<div id="menu">
				<ul>
					<li class="nav-tab">Home</li>
					<li class="nav-tab">IET</li>
					<li class="nav-tab">Integeral University</li>
					<li class="nav-tab">BBD University</li>
				</ul>
			</div>
			<div id="res-menu-btn">
				<i class="fa fa-bars" aria-hidden="true"></i>
			</div>			
		</div>
		
		<div class="hv-body container">
			<div class="row">
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-7 slider" style="overflow: hidden; height: 400px;">
						<div class="sld">


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="assets/images/banner.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="assets/images/mbgirls.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="assets/images/ft21.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


						<!-- <img src="assets/images/mbgirls.JPG" style="height: 100%; width: 100%;"> -->
							<div class="hostel-title" style="bottom: 0;position: absolute;width: 95.5%; margin-bottom: 0px; color: #f8f8f8; padding-left: 2%; padding-top: 1%;">
								<span class="qsand h2">Hostel Name</span>
								<p>
									<span class="qsand" style="color: #c0c0c0">Address of the concerned hostel.</span>
								</p>
							</div>	
						</div>
					</div>
					<div class="col-sm-5 abt">
						<div class="about">
							<div class="head-title" style="color: #f8f8f8; padding: 3.5%;">
								<span class="qsand h3">About the Hostel</span>
							</div>
						</div>
					</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-12">
					<div class="hostel-details">
						<div class="head-title" style="color: white;padding-top: 1.4%;padding-left: 2%;">
							<span class="qsand h3">Details about the Hostel</span>
						</div>
						<div class="col-sm-12">
							<div class="row">
								<div class="col-sm-4">
								<span><img src="assets/images/icons/ac.png" width="20%"></span> <span class="qsand" style="margin-left: 22%;color: #29B6F6;">available</span><br><br>
								<span><img src="assets/images/icons/food.png" width="20%"></span> <span class="qsand" style="margin-left: 22%;color: #29B6F6;">available</span><br><br>
								<span><img src="assets/images/icons/bathroom.png" width="20%"></span> <span class="qsand" style="margin-left: 22%;color: #29B6F6;">available</span><br><br>
								<span><img src="assets/images/icons/furnish.png" width="20%"></span> <span class="qsand" style="margin-left: 22%;color: #29B6F6;">available</span><br><br>
								<span><img src="assets/images/icons/geyser.png" width="20%"></span> <span class="qsand" style="margin-left: 22%;color: #29B6F6;">available</span><br><br>
							</div>
							<div class="col-sm-4">
								<span><img src="assets/images/icons/invertor.png" width="20%"></span> <span class="qsand" style="margin-left: 22%;color: #29B6F6;">available</span><br>
								<span class="qsand" style="font-size: 12px;">Invertor</span>
								<br>
								<span><img src="assets/images/icons/laundry.png" width="20%"></span> <span class="qsand" style="margin-left: 22%;color: #29B6F6;">available</span><br><br>
								<span><img src="assets/images/icons/parking.png" width="20%"></span> <span class="qsand" style="margin-left: 22%;color: #29B6F6;">available</span><br><br>
								<span><img src="assets/images/icons/rooms.png" width="20%"></span> <span class="qsand" style="margin-left: 22%;color: #29B6F6;">available</span><br><br>
								<span><img src="assets/images/icons/securityguard.png" width="20%"></span> <span class="qsand" style="margin-left: 22%;color: #29B6F6;">available</span><br><br>
							</div>
							<div class="col-sm-4">
								<span><img src="assets/images/icons/timing.png" width="20%"></span> <span class="qsand" style="margin-left: 22%;color: #29B6F6;">available</span><br><br>
								<span><img src="assets/images/icons/visitor.png" width="20%"></span> <span class="qsand" style="margin-left: 22%;color: #29B6F6;">available</span><br><br>
								<span><img src="assets/images/icons/roomswithbalcony.png" width="20%"></span> <span class="qsand" style="margin-left: 22%;color: #29B6F6;">available</span><br><br>
								<span><img src="assets/images/icons/water.png" width="20%"></span> <span class="qsand" style="margin-left: 22%;color: #29B6F6;">available</span><br><br>
								<span><img src="assets/images/icons/wifi.png" width="20%"></span> <span class="qsand" style="margin-left: 22%;color: #29B6F6;">available</span><br><br>
							</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>	
			

		<div class="container text-center" style="margin-bottom: 7%;margin-top: 1%">
			<button class="btn" style="width: 49.7%; background-color: #29B6F6">
				<span class="qsand" style="font-size: 1.5em; color: #f1f1f1">
					Parafy
				</span>
			</button>
			<button class="btn" style="width: 49.7%; background-color: #64DD17">
				<span class="qsand" style="font-size: 1.5em; color: #f1f1f1">
					Get contact info.
				</span>
			</button>	
		</div>

		<div class="row">
			<div class="col-sm-12 text-center" style="margin-bottom: 9%;">
				<span class="qsand h1" style="border-bottom: 1px solid #444;color: #333">Reviews & Ratings</span>
			</div>
		</div>
		<div class="container" style="margin-bottom: 5%">
		<div class="row">
			<div class="col-sm-12" style="padding-left: 3%; padding-right: 3%">
				<div class="col-sm-12" style="min-height: 340px;background: #fff">
					<div class="row">
						<div class=" col-sm-1">
						</div>
						<div class="col-sm-1 dp">
							<img src="assets/images/stefan.png" width="60px" style="border-radius: 100%">							
						</div>
						<div class="col-sm-9 rev" style="padding-top: 1%">
							<span class="qsand">Some review written here.</span>
							<div><img src="assets/images/3star.png" width="10%" style="bottom: 0; position: absolute; margin-bottom: 1%"></div>
						</div>
						<div class="col-sm-1">
							
						</div>
					</div>
					<div class="row">
						<div class=" col-sm-1">
						</div>
						<div class="col-sm-1 dp">
							<img src="assets/images/stefan.png" width="60px" style="border-radius: 100%">							
						</div>
						<div class="col-sm-9 rev" style="padding-top: 1%">
						<textarea class="qsand" placeholder="Write review here..."></textarea>
						<br>
							<div style="float: left;"><img src="assets/images/3star.png" width="10%" style="bottom: 0; position: absolute; margin-bottom: 5%"></div>
							<div style="float: right;">
								<button class="btn" style="margin-bottom: 6%;width: 180px; background: #29B6F6;"><span class="qsand" style="color: #f3f3f3">Submit</span></button>
							</div>
						</div>
						<div class="col-sm-1">
							
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
		<div class="row">
			<div class="col-sm-12 ftr">
					<div class="row">
						<div class="col-sm-12" style="margin-top: 4%; margin-bottom: 2%;">
							<div class="row">
						<div class="col-sm-6 text-center" style="border-right: 1px solid #444">
							<img src="assets/images/parador.png" width="15%"><br><br>
							<span class="qsand">&copy; Parador 2017</span>
						</div>
						<div class="col-sm-6 text-center" style="">
							<img src="assets/images/foremen.png" width="22%">
						</div>								
							</div>
						</div>
					</div>
			</div>
		</div>
</div>
</body>
</html>