<!DOCTYPE html>
<html>
<head>
	<title>Pardor 2.0</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$(window).scroll(function(){
				if(this.pageYOffset>=160){
					$("#nav").attr("style","padding-top:0px");
					$("li").attr("style","padding: 20px 33px 15px 33px;");
					$("#nav").css({background:"rgba(96,125,139,1)",height:"60px"});
					$("#hd").attr("style","padding-left: 100px;padding-top: 15px;font-size: 20px;");
				}
				if(this.pageYOffset<160){
					$("#nav").css({background:"rgba(96,125,139,0.7)",height:"80px"});
					$("li").attr("style","padding: 33px 33px 23px 33px;");
					$("#hd").attr("style","padding-left: 200px;padding-top: 20px;");
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
					<li>Home</li>
					<li>Top Hostels</li>
					<li>Featured</li>
				</ul>
			</div>			
		</div>
	<div class="row">
		<div class="col-sm-12" id="banner" style="padding-top: 200px;">
			<center>
				<input type="text" name="search" class="input-group" id="search" placeholder="Search in your location..."><span id="sbtn"><button type="submit" id="sbtn">Search</button></span><br><br>
				<span style="font-size: 3em; color: white; background: rgba(0,0,0,0.7);padding: 10px;">Find Your Parador</span>
			</center>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12" id="hiw">
			<center>
				<span class="h1 text-center">How it WORKS?</span>
			</center>
			<div class="row" style="margin-top: 40px;">
			<center>
				<div class="col-sm-12">
					<div class="col-sm-4">
						<img src="assets/images/search.png" width="40%"><br><br>
						<span class="h3">Explore</span>
					</div>
					<div class="col-sm-4">
						<img src="assets/images/schedule.png" width="40%"><br><br>
						<span class="h3">Parafy</span>
					</div>
					<div class="col-sm-4">
						<img src="assets/images/move.png" width="40%"><br><br>
						<span class="h3">Move</span>
					</div>
				</div>
				</center>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12" id="featured">
			<div class="col-sm-4">
			<center>
				<div class="feat">
					
				</div>
			</center>
			</div>
			<div class="col-sm-4">
			<center>
				<div class="feat">
					
				</div>
			</center>
			</div>
			<div class="col-sm-4">
			<center>
				<div class="feat">
					
				</div>
			</center>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12" id="hiw">
			<center>
				<span class="h1 text-center">The Team</span>
			</center>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12" id="team">
			<center>
				<span class="h1 text-center">How it WORKS?</span>
			</center>
		</div>
	</div>
</div>
</body>
</html>