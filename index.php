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
				if(this.pageYOffset>=40){
					$("#nav").attr("style","padding-top:0px");
					$("li").attr("style","padding: 20px 33px 15px 33px;");
					$("#nav").css({background:"rgba(96,125,139,1)",height:"60px"});
					$("#hd").attr("style","padding-left: 100px;padding-top: 15px;font-size: 20px;");
				}
				if(this.pageYOffset<40){
					$("#nav").css({background:"rgba(96,125,139,0.7)",height:"80px"});
					$("li").attr("style","padding: 33px 33px 23px 33px;");
					$("#hd").attr("style","padding-left: 200px;padding-top: 20px;");
				}
			}
			});
		});
	</script>
</head>
<body>
<div class="container-fluid">
		<div id="nav">
			<div id="hd">
				<span>para<strong>dor</strong></span>
			</div>
			<div id="menu">
				<ul>
					<li class="activ nav-tab">Home</li>
					<li class="nav-tab">Top Hostels</li>
					<li class="nav-tab">Featured</li>
				</ul>
			</div>
			<div id="res-menu-btn">
				<i class="fa fa-bars" aria-hidden="true"></i>
			</div>			
		</div>
		<div >
			
		</div>
	<div class="row">
		<div class="col-sm-12" id="banner" style="padding-top: 200px;">
			<center>
				<input type="text" name="search" class="input-group" id="search" placeholder="Search in your location..."><span id="sbtn"><button type="submit" id="sbtn">Search</button></span><br><br>
				<span style="font-size: 3em; color: white; background: rgba(0,0,0,0.7);padding: 10px;font-family: 'Quicksand', sans-serif;">Find Your Parador</span>
			</center>
			<center>
				<div id="loc">
					<span class="points">· BBD University</span><span class="points">· IET Lucknow</span><span class="points">· Integeral University</span>
				</div>
			</center>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12" id="hiw">
			<center>
				<span class="h1 text-center" style="font-family: 'Quicksand', sans-serif;">Explore</span>
			</center><br>
			<br><br>
			<div class="row">
				<div class="col-sm-12">
					<center>
					<span style="font-size: 2em">
						I 'm a?
					</span>
						<div class="">
							<img src="assets/images/girl.png" width="160px" style="margin-right: 0px">
							<img src="assets/images/boy.png" width="160px" style="margin-left: 0px">
						</div>
					</center>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12" id="featured">
			<div class="col-sm-4">
			<center>
			<br>
			<div class="feat">
			<center>
				<img src="assets/images/mbgirls.jpg" width="90%">
			</center>
			<div class="overlay">
				
			</div>
			</div>
			
			</center>
			</div>
			<div class="col-sm-4">
			<center>
			<br>
				<div class="feat">
					
				</div>
			</center>
			</div>
			<div class="col-sm-4">
			<center>
			<br>
				<div class="feat">
					
				</div><br>
			</center>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12" id="hiw">
			<center>
			<br>
				<span class="h1 text-center" style="font-family: 'Quicksand', sans-serif;">How it WORKS?</span>
			</center>
			<div class="row" style="margin-top: 40px;">
			<center>
				<div class="col-sm-12">
					<div class="col-sm-4">
						<img src="assets/images/search.png" width="40%"><br><br>
						<span class="h3">Explore</span><br><br>
					</div>
					<div class="col-sm-4">
						<img src="assets/images/schedule.png" width="40%"><br><br>
						<span class="h3">Parafy</span><br><br>
					</div>
					<div class="col-sm-4">
						<img src="assets/images/move.png" width="40%"><br><br>
						<span class="h3">Move</span><br><br>
					</div>
				</div>
				</center>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12" id="team">
			<center>
				<span class="h1 text-center" style="padding: 20px; background: rgba(0,0,0,0.7);font-family: 'Quicksand', sans-serif;">Why Parador<sup style="font-size: 20px;">TM</sup>?</span>
				<div class="col-sm-12 wu" >
					
				</div>
			</center>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12" id="footer"><br><br>
			<center>
			<span style="font-size: 15px;">copyright 2017, Parador&trade;</span>
			<br>
				<img src="assets/images/parador.png" width="80px">
			</center>
		</div>
	</div>
</div>
</body>
</html>