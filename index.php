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
				if(this.pageYOffset>50){
					$("#nav").attr("style","padding-top:0px");
					$("li").attr("style","padding: 26px 26px 26px 26px;");
					$("#nav").css({background:"rgba(96,125,139,1)",height:"80px"});
					$("#hd").attr("style","padding-left: 60px;padding-top: 20px;");
				}
				if(this.pageYOffset<50){
					$("#nav").css({background:"rgba(96,125,139,0.7)",height:"100px"});
					$("li").attr("style","padding: 26px 26px 36px 26px;");
					$("#nav").attr("style","padding-top:10px");
					$("#hd").attr("style","padding-left: 200px;padding-top: 20px;");
				}
			});
		});
	</script>
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12" id="nav">
			<div class="col-sm-10">
			<div class="row">
				<div class="col-sm-12">
				<div class="col-sm-4"  style="padding-top: 20px; padding-left: 200px;" id="hd">
					<span class="h2" style="text-transform: uppercase;">Para<strong>dor</strong></span>
				</div>
				<div class="col-sm-3">
					
				</div>
				<div class="col-sm-5">
					<ul>
						<li>Home</li>
						<li>Gallery</li>
						<li>Contact</li>
					</ul>
				</div>
			</div>
			</div>				
			</div>
			<div class="col-sm-2">
				
			</div>			
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12" id="banner" style="padding-top: 200px;">
			<center>
				<input type="text" name="search" class="input-group" id="search"><span id="sbtn"><button type="submit" id="sbtn">Search</button></span><br><br>
				<span style="font-size: 3em; color: white; background: rgba(0,0,0,0.7);padding: 10px;">Find Your Parador</span>
			</center>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12" id="featured">
			
		</div>
	</div>
</div>
</body>
</html>