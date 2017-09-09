<!DOCTYPE html>
<html>
<head>
	<title>Pardor 2.0</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			
			$(window).scroll(function(){
				if($(window).width()>480){
				if(this.pageYOffset>=20){
					$("#nav").attr("style","padding-top:0px");
					$("li").attr("style","padding: 20px 33px 15px 33px;");
					$("#nav").css({background:"rgba(96,125,139,1)",height:"60px"});
					$("#hd").attr("style","padding-left: 100px;padding-top: 15px;font-size: 20px;");
				}
				if(this.pageYOffset<20){
					$("#nav").css({background:"rgba(96,125,139,0.7)",height:"80px"});
					$("li").attr("style","padding: 33px 33px 22px 33px;");
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
					<li>Home</li>
					<li>IET</li>
					<li>Integeral University</li>
					<li>BBD University</li>
				</ul>
			</div>
			<div id="res-menu-btn">
				<i class="fa fa-bars" aria-hidden="true"></i>
			</div>			
		</div>
		
		<div class="hv-body container">
			<div class="row">
				<div class="col-sm-12">
					<div class="col-sm-7 slider">
						<div class="sld">
						<img src="assets/images/mbgirls.JPG" style="height: 100%; width: 100%;">
							<div class="hostel-title" style="bottom: 0;position: absolute;width: 93.6%; margin-bottom: 0px; color: #f8f8f8; padding-left: 2%; padding-top: 1%;">
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

			<div class="row">
				<div class="col-sm-12">
					<div class="hostel-details">
						<div class="head-title" style="color: white;padding-top: 1.4%;padding-left: 2%;">
							<span class="qsand h3">Details about the Hostel</span>
						</div>
						<div class="col-sm-12">
							<div class="col-sm-4">
								<span><img src="assets/images/icons/ac.png" width="15%"></span> <span class="qsand" style="margin-left: 22%;color: #29B6F6;">available</span><br><br>
								<span><img src="assets/images/icons/food.png" width="15%"></span> <span class="qsand" style="margin-left: 22%;color: #29B6F6;">available</span><br><br>
								<span><img src="assets/images/icons/bathroom.png" width="15%"></span> <span class="qsand" style="margin-left: 22%;color: #29B6F6;">available</span><br><br>
								<span><img src="assets/images/icons/furnish.png" width="15%"></span> <span class="qsand" style="margin-left: 22%;color: #29B6F6;">available</span><br><br>
								<span><img src="assets/images/icons/geyser.png" width="15%"></span> <span class="qsand" style="margin-left: 22%;color: #29B6F6;">available</span><br><br>
							</div>
							<div class="col-sm-4">
								<span><img src="assets/images/icons/invertor.png" width="15%"></span> <span class="qsand" style="margin-left: 22%;color: #29B6F6;">available</span><br><br>
								<span><img src="assets/images/icons/laundry.png" width="15%"></span> <span class="qsand" style="margin-left: 22%;color: #29B6F6;">available</span><br><br>
								<span><img src="assets/images/icons/parking.png" width="15%"></span> <span class="qsand" style="margin-left: 22%;color: #29B6F6;">available</span><br><br>
								<span><img src="assets/images/icons/rooms.png" width="15%"></span> <span class="qsand" style="margin-left: 22%;color: #29B6F6;">available</span><br><br>
								<span><img src="assets/images/icons/securityguard.png" width="15%"></span> <span class="qsand" style="margin-left: 22%;color: #29B6F6;">available</span><br><br>
							</div>
							<div class="col-sm-4">
								<span><img src="assets/images/icons/timing.png" width="15%"></span> <span class="qsand" style="margin-left: 22%;color: #29B6F6;">available</span><br><br>
								<span><img src="assets/images/icons/visitor.png" width="15%"></span> <span class="qsand" style="margin-left: 22%;color: #29B6F6;">available</span><br><br>
								<span><img src="assets/images/icons/waiter.png" width="15%"></span> <span class="qsand" style="margin-left: 22%;color: #29B6F6;">available</span><br><br>
								<span><img src="assets/images/icons/water.png" width="15%"></span> <span class="qsand" style="margin-left: 22%;color: #29B6F6;">available</span><br><br>
								<span><img src="assets/images/icons/wifi.png" width="15%"></span> <span class="qsand" style="margin-left: 22%;color: #29B6F6;">available</span><br><br>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>	
			

		<div class="container" style="margin-left: 4.7%; margin-right: 5%; margin-bottom: 7%;">
			<button class="btn" style="width: 48.1%; background-color: #29B6F6"><span class="qsand" style="font-size: 1.5em; color: #f1f1f1">Parafy</span></button>	<button class="btn" style="width: 48.1%; background-color: #64DD17"><span class="qsand" style="font-size: 1.5em; color: #f1f1f1">Get contact info.</span></button>	
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
							<img src="assets/images/stefan.png" width="100%" style="border-radius: 100%">							
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
							<img src="assets/images/stefan.png" width="100%" style="border-radius: 100%">							
						</div>
						<div class="col-sm-9 rev" style="padding-top: 1%">
						<textarea placeholder="Write review here...">
							
						</textarea>
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
				<center>
					<div class="col-sm-12" style="margin-top: 2%; margin-bottom: 2%;">
						<div class="col-sm-6 text-right" style="border-right: 1px solid #444">
							<img src="assets/images/parador.png" width="15%"><br><br>
							<span class="qsand">&copy; Parador 2017</span>
						</div>
						<div class="col-sm-6 text-left" style="">
							<img src="assets/images/foremen.png" width="22%">
						</div>
					</div>
				</center>
			</div>
		</div>
</div>
</body>
</html>