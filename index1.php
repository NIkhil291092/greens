<?php
	session_start();

?>
<!DOCTYPE html>
<html>
	<head>
		<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
		 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<title> Pristine Greens</title>
		<meta name="viewport" width="device-width,initial-scale=1.0">
		   <!-- Compiled and minified CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

		<!-- Compiled and minified JavaScript -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
		<link rel="stylesheet" href="slick-master/slick/slick.css">
		<link rel="stylesheet" href="slick-master/slick/slick-theme.css">
		
		<script src="slick-master/slick/slick.js"></script>
		
		
		<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
		<link rel="stylesheet" href="min.css">
		
			
		
		
		
	</head>
	<body onload="bg()">
		
			
		
			<div class="navbar-fixed">
			<nav class="topnav z-depth-0">
				<div class="nav-wrapper">
					<a href="#" class="brand-logo" ><img src="images/19.jpeg" class="responsive-img " style="margin-left:20px;"></a>
					<a href="#" data-target="mobile-demo" class="sidenav-trigger white-text "><i class="material-icons">menu</i></a>
					<ul class="right hide-on-med-and-down black-text ">
						<li><a ><strong>UP RERA-UPRERAPRJ282359</strong></a></li>
						<li><a href="#welcome" >Home</a></li>
						<li><a href="#about" >About Us</a></li>	
						<li><a href="#features" >Features</a></li>
						<li><a href="#apartment" >Floor Plan</a></li>
						<li><a href="#gallery" >Gallery</a></li>											
						<li><a href="#register" >Contact Us</a></li>
						
					</ul>
					
				</div>
			</nav>
		</div>
		<ul class="sidenav black-text " id="mobile-demo">
						<li><a ><strong>UP RERA-UPRERAPRJ282359</strong></a></li>
						<li><a href="#welcome" >Home</a></li>
						<li><a href="#about" >About Us</a></li>	
						<li><a href="#features" >Features</a></li>
						<li><a href="#apartment" >Floor Plan</a></li>
						<li><a href="#gallery" >Gallery</a></li>											
						<li><a href="#register" >Contact Us</a></li>
						
					</ul>
		<section id="welcome">			
			<div class="section bg-image">
				<div class="bg-content">
				<h3 class="center text-content1">Greetings From</h2>
				<h1 class="center text-content ">Pristine Greens </h3>
				<div class="astrodivider"><div class="astrodividermask"></div><span><i>&#10038;</i></span></div>
				<p class="center green-text text-content2" >Luxary At Affordable Price</p>
			</div>

			</div>
		</section>
			
			<div class="modal m-css" id="modal1" >
            <button type="button" class="modal-close right green btn" data-dismiss="modal1" id="cls">&times;</button>			
				<div class="modal-content center ">
					
					<h3 class="green-text">GET IN TOUCH</h3>
					<form name="frm1" method="post" action="greendb.php">
					<div class="divider"></div>					
						<div class="row ">
						
							<div class="input-field col l6 s12  m12">
								<i class="material-icons prefix green-text" >account_circle</i>
								<input id="icon_prefix" type="text" class="validate " name="t1">
								<label for="icon_prefix">Name</label>
							</div>													
							<div class="input-field col l6 s12  m12 ">
								<i class="material-icons prefix green-text">phone</i>
								<input id="mobile" type="tel" class="validate" name="t3">
								<label for="mobile">Mobile Number</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col l6 s12  m12 ">
								<i class="material-icons prefix green-text">email</i>
								<input id="email" type="email" class="validate" name="t4">
								<label for="email">Email</label>
							</div>												
							<div class="input-field col l6 s12  m12 ">
								<i class="material-icons prefix green-text ">location_on</i>
								<input id="address" type="text" class="validate" name="t5">
								<label for="address">Address</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col l12 s12  m12 ">
								<i class="material-icons prefix green-text">web_asset</i>
								<input id="enquery" type="text" class="validate" name="t6">
								<label for="enquery">Enquery</label>
							</div>
						</div>
						<div class="row ">
							<div class="col l12 s12  m12  ">
								<button type="submit" class="btn green large-btn" type="submit" name="action" value="action">submit</button>
							</div>
						</div>
					</div>					
				</form>
			</div>			
		</div>
		<section id="about" >
			<div class="section" style="background-color:#009C03 ;" id="work"><br><br>
				<h1 class="text-content center">About Us</h1> 
				<div class="row">
					<div class="col l6 s6 m6">
						
						<p class="text-content4">"Pristine Greens is a trusted customer is God so, it can be better relations develop to customers so the company can provide 24 hours customer service & security The company also provides the best suggestion some time customer satisfaction is the most important part of a company."</p>
					</div>
					<div class="col l6 s6 m6">
						<div class="img-content"></div>
					</div>
						
					
				</div>
					
				</div>
			</div>
		</section>
		
		<section id="features">
			<div class="section" style="background-color: #F2F2F2;height:450px;" id="work" ><br><br>
				<h3 class="text-content center">Amenities</h3>
				<div class="container">
					<div class="MultiCarousel" data-items="1,2,4,4" data-slide="1" id="MultiCarousel"  data-interval="1000">
						<div class="MultiCarousel-inner">
							<div class="item">
								<div class="card cd hoverable">									
									<div class="card-image">
										<span class="iconify" data-icon="mdi-gate" data-inline="false" height="190" style="color:green;"></span>
									</div>
									<div class="overlay">
										<h3 class="text" >Gated Society</h3>
									</div>										
								</div>
							</div>
							<div class="item">
								<div class="card cd hoverable">									
									<div class="card-image">
										<span class="iconify" data-icon="mdi-cctv" data-inline="false" height="190" style="color:#c6ff00 ;"></span>
									</div>
									<div class="overlay1">
										<h3 class="text1"  >Cctv </h3>
									</div>										
								</div>
							</div>
							<div class="item">
								<div class="card cd hoverable">									
									<div class="card-image">
										<span class="iconify" data-icon="mdi-security" data-inline="false" height="190" style="color:#0277bd;"></span>
									</div>
									<div class="overlay2">
										<h3 class="text2"  >Security</h3>
									</div>										
								</div>
							</div>                
							<div class="item">
								<div class="card cd hoverable">
									
									<div class="card-image">
										<span class="iconify" data-icon="oi-elevator" data-inline="false" height="190" style="color:#424242;"></span>
									</div>
									<div class="overlay4">
										<h3 class="text4"  >Elevator Lift</h3>
									</div>
										
								</div>
							</div>						             
						</div>
						<button class="btn btn-primary leftLst" ><i class="material-icons">chevron_left</i></button>
						<button class="btn btn-primary rightLst"><i class="material-icons">chevron_right</i></button></button>
					</div>					
				</div>
			</div>
			
			
			<div class="section" style="background-color:white;" id="work">
				<h3 class="text-content center"> Nearby Amenities</h3>
				<div class="container">
					<div class="MultiCarousel" data-items="1,2,4,4" data-slide="1" id="MultiCarousel"  data-interval="1000">
						<div class="MultiCarousel-inner">
							<div class="item">
								<div class="card cd hoverable">									
									<div class="card-image">
										<span class="iconify" data-icon="emojione:school" data-inline="false" height="150" style="margin-bottom:40px;"></span>
									</div>
									<div class="overlay12">
										<h3 class="text12">Schools</h3>
									</div>										
								</div>
							</div>
							<div class="item">
								<div class="card cd hoverable">									
									<div class="card-image">
										<span class="iconify" data-icon="bx:bxs-shopping-bags" data-inline="false" height="190" style="color:#6d4c41;"></span>
									</div>
									<div class="overlay11">
										<h3 class="text11"  >Market </h3>
									</div>										
								</div>
							</div>
							<div class="item">
								<div class="card cd hoverable">									
									<div class="card-image">
										<span class="iconify" data-icon="map:atm" data-inline="false" height="185" style="color:#d32f2f;"></span>
									</div>
									<div class="overlay10">
										<h3 class="text10"  >Bank</h3>
									</div>										
								</div>
							</div>                
							<div class="item">
								<div class="card cd hoverable">
									
									<div class="card-image">
										<span class="iconify" data-icon="emojione:oncoming-police-car" data-inline="false" height="150" style="margin-bottom:40px;"></span>
									</div>
									<div class="overlay9">
										<h3 class="text9">Police Station</h3>
									</div>
										
								</div>
							</div>						             
						</div>
						<button class="btn btn-primary leftLst " ><i class="material-icons">chevron_left</i></button>
						<button class="btn btn-primary rightLst"><i class="material-icons">chevron_right</i></button></button>
					</div>					
				</div>
			</div>
			<div class="section" style="background-color:white; height:600px;" id="work">
				
				<div class="container">
					<div class="MultiCarousel" data-items="1,2,4,4" data-slide="1" id="MultiCarousel"  data-interval="1000">
						<div class="MultiCarousel-inner">
							<div class="item">
								<div class="card cd hoverable">									
									<div class="card-image">
										<span class="iconify" data-icon="noto:hospital" data-inline="false" height="150" style="margin-bottom:40px;"></span>
									</div>
									<div class="overlay5">
										<h3 class="text5"  >Hospitals </h3>
									</div>
																			
								</div>
							</div>
							<div class="item">
								<div class="card cd hoverable">									
									<div class="card-image">
										<span class="iconify" data-icon="twemoji:hindu-temple" data-inline="false" height="150" style="margin-bottom:40px;"></span>
									</div>
									<div class="overlay6">
										<h3 class="text6"  >Tample </h3>
									</div>										
								</div>
							</div>
							<div class="item">
								<div class="card cd hoverable">									
									<div class="card-image">
										<span class="iconify" data-icon="emojione-v1:deciduous-tree" data-inline="false" height="190"></span>
									</div>
									<div class="overlay7">
										<h3 class="text"  >Park</h3>
									</div>										
								</div>
							</div>                
							<div class="item">
								<div class="card cd hoverable ">
									
									<div class="card-image">
										<span class="iconify" data-icon="emojione-v1:fuel-pump" data-inline="false" height="190"></span>
									</div>
									<div class="overlay8">
										<h3 class="text8">Fuel</h3>
									</div>
										
								</div>
							</div>						             
						</div>
						<button class="btn btn-primary leftLst " ><i class="material-icons">chevron_left</i></button>
						<button class="btn btn-primary rightLst"><i class="material-icons">chevron_right</i></button></button>
					</div>					
				</div>
			</div>
		</section>	
		<section id="apartment">
			<div class="section" style="background-color:#F2F2F2; height:800px;width:auto;" id="work"><br><br>
				<h3 class="text-content center"> Floor Plan</h3>
				<div class="container">
					<ul id="tabs-swipe-demo" class="tabs center tabs-i">
						
						<li class="tab col l4"><a class="active" href="#test-swipe-2"><h5 class="text-content1">2 BHK</h5></a></li>
						<li class="tab col l4"><a href="#test-swipe-3"><h5 class=" text-content1">3 BHK</h5></a></li>
					</ul>
						
						<div id="test-swipe-2" class="col s12  " style="padding-top:50px;">
							<div class="row">
							<div class="col s6">
							
								<div id="2bhk1"><img src="images/2bhk.jpg" height="450" width="450" class="materialboxed"></div>
								<div id="study" style="display:none;"><img src="images/study.jpg" height="450" width="450" class="materialboxed"> </div>
							</div>
							<div class="col s6">
								<h3 class="text-content1" style="margin-left:60px;">2 BHK Apartments</h3>
								<h6 style="margin-left:60px;">Starting Just @ Rs.2145000/- </h6>						
							  <label style="margin-left:60px;">
								<input name="group1" type="radio" value = "2bhk" checked onclick = "opt()" />
								<span>2 BHK 910 Sqft.</span>
							  </label>
							
							  <label style="margin-left:60px;">
								<input name="group1" type="radio" value = "study" onclick = "opt()" />
								<span>2 BHK +Study 1125 Sqft</span>
							  </label>
    
								<h4 style="margin-left:60px;">Dimension</h4>
								<ol class="l" id="85">
									<li class="uli" style="font-size:23px;margin-left:60px; ">Dining + Drawing : 10' x 16'</li>
									<li class="uli" style="font-size:23px;margin-left:60px;">Bedroom : 10' x 11'6" </li>	
									<li class="uli" style="font-size:23px;margin-left:60px;">Kitchen : 7' x 5'3"</li>
									<li class="uli" style="font-size:23px;margin-left:60px;">Attached Toilet : 9'9" x 4"</li>								
									<li class="uli" style="font-size:23px;margin-left:60px;">Combine Toilet : 4' x 6'</li>
									<li class="uli" style="font-size:23px;margin-left:60px;">Balcony  : 3' x 6'</li>
									
								</ol>
								<ol class="l" id="125" style="display:none;">
									<li class="uli" style="font-size:23px;margin-left:60px; ">Dining + Drawing : 15' x 13'6"</li>
									<li class="uli" style="font-size:23px;margin-left:60px;">Bedroom : 11' x 10' </li>
									<li class="uli" style="font-size:23px;margin-left:60px;">Bedroom : 12' x 10' </li>
									<li class="uli" style="font-size:23px;margin-left:60px;">Study Room : 11' x 7'6" </li>
									<li class="uli" style="font-size:23px;margin-left:60px;">Kitchen : 6' x 7'</li>
									<li class="uli" style="font-size:23px;margin-left:60px;">Attached Toilet : 5' x 6'5"</li>								
									<li class="uli" style="font-size:23px;margin-left:60px;">Combine Toilet : 4' x 6'3"</li>
									<li class="uli" style="font-size:23px;margin-left:60px;">Balcony  : 5' wide</li>
									
								</ol>
							</div>
							</div>
							</div>
						
						<div id="test-swipe-3" class="col s12 " style="padding-top:50px;">
							<div class="row">
							<div class="col s6">
								<div ><img src="images/3bhk.jpg" height="450" width="450" class="materialboxed"></div> 
							</div>
							<div class="col s6">
								<h3 class="text-content1" style="margin-left:60px;">3 BHK Apartments </h3>
								<h6 style="margin-left:60px;">Starting Just @ Rs.3095000/- </h6>								
								<p  style="margin-left:60px; color:#b0bec5;">1325 sqft</p>
								<h4 style="margin-left:60px;">Dimension</h4>
								<ol class="l" >
									<li class="uli" style="font-size:23px;margin-left:60px; ">Dining + Drawing Room : 15' x 13'</li>
									<li class="uli" style="font-size:23px;margin-left:60px;">Bedroom : 12' x 10'</li>
									<li class="uli" style="font-size:23px;margin-left:60px;">Bedroom : 11' x 12'</li>								
									<li class="uli" style="font-size:23px;margin-left:60px;">Bedroom : 11' x 10'</li>
									<li class="uli" style="font-size:23px;margin-left:60px;">Kitchen : 6' x 10'2"</li>
									<li class="uli" style="font-size:23px;margin-left:60px;">Attached Toilet : 7' x 4'6"</li>								
									<li class="uli" style="font-size:23px;margin-left:60px;">Combine Toilet : 4'6" x 6'3"</li>
									<li class="uli" style="font-size:23px;margin-left:60px;">Balcony Front : 5' Wide </li>
								</ol>
							</div>
							
							</div>
						</div>
					</ul>
				</div>
			</div>
		</section>
			<br>
			<section id="gallery">
			<div class="section" style="background-color:white; height:800px;" id="work"><br><br>
				<h3 class="text-content1 center">Gallery</h3>
				<div class="container ">
					<div class="row " >
						<div class="col s12 m3  ">
							<div class="card">
								<div class="card-image">
									<img class="materialboxed " src="images/33.jpeg"/>
								</div>
							</div>
						</div>
						<div class="col s12 m3  ">
							<div class="card">
								<div class="card-image">
									<img class="materialboxed " src="images/40.jpeg"/>
								</div>
							</div>
						</div>
						<div class="col s12 m3 ">
							<div class="card">
								<div class="card-image">
									<img class="materialboxed " src="images/41.jpeg"/>
								</div>
							</div>
						</div>
						<div class="col s12 m3 ">
							<div class="card">
								<div class="card-image"> 
									

									<img class="materialboxed thumb" src="images/42.jpeg" height="160">
								</div>
							</div>
						</div>
						
					</div>
					 <div class="row" >
						<div class="col s12 m3  ">
							<div class="card">
								<div class="card-image">
									<img class="materialboxed " src="images/36.jpeg"/>
								</div>
							</div>
						</div>
						<div class="col s12 m3  ">
							<div class="card">
								<div class="card-image">
									<img class="materialboxed " src="images/37.jpeg"/>
								</div>
							</div>
						</div>
						<div class="col s12 m3 ">
							<div class="card">
								<div class="card-image">
									<img class="materialboxed " src="images/38.jpeg" >
								</div>
							</div>
						</div>
						<div class="col s12 m3 ">
							<div class="card">
								<div class="card-image">
									<img class="materialboxed imgthumbnail" src="images/39.jpeg" >
								</div>
							</div>
						</div>
						
					</div>
					<div class="row " style="padding:20px;">
						
						
						<div class="col s12 m4  ">
							<div class="card">
								<div class="card-image">
									<video class="materialboxed responsive-video " controls>
										<source src="images/44.mp4" type="video/mp4">
									</video>
								</div>
							</div>
						</div>
						<div class="col s12 m4 ">
							<div class="card">
								<div class="card-image">
									<video class="materialboxed responsive-video " controls>
										<source src="images/44.mp4" type="video/mp4">
									</video>
								</div>
							</div>
						</div>
						<div class="col s12 m4 ">
							<div class="card">
								<div class="card-image"> 
									<video class="materialboxed responsive-video " controls>
										<source src="images/44.mp4" type="video/mp4">
									</video>

									
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			</section>
			<section id="register">
				<div class="section dbt" style="background-color:#F2F2F2;  id="work"><br><br>
					<h3 class="text-content1 center">GET IN TOUCH</h3>
					<div class="container">
					<div class="row">
						
						<div class="col l6 m6 s6 bd">							
							<p class="white-text">Take your first step towards luxury.</p>
							<p class="white-text">Visit Us :</p>
							<h5 class="white-text">Pristine Greens </h5>
							<address>
								
								<p class="p-content" >Behind Stellar Jeevan<br>
									Sector 1, Greater Noida, West, Uttar Pradesh 201306</p>
								<p class="p-content">Phone Number: 8001233456</p>	
								<p class="p-content"> Email: sales@pristrinegreen.in</p>
							</address>
							
							<a class="waves-effect waves-light btn green modal-trigger" href="#modal1">Know More</a>
						</div>
						<div class="col l6 m6 s6">
							<div class="card " >
							<div class="card-content">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3504.240970026604!2d77.44384251744383!3d28.562525899999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cefde2359075b%3A0x73a5f2bbbcb73efb!2sPristine%20Green!5e0!3m2!1sen!2sin!4v1614476146984!5m2!1sen!2sin" width="400" height="390" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
							</div>
							</div>
						</div>
					
					
					</div>
					</div>
				</div>
			</section>
			<div class="iv">
				<a href="Images/pristinegreen.pdf " download class="btn green   white-text" >Brochures
				</a>					
			</div>
			<div id="modal_box" class="modal ba">
				<div class="modal-content">
				<h4 class="center green-text text-darken-4">Welcome To Pristine Green</h4>
				<p class="center">Thank You For Sharing Your Details With Us. Your Query Has Been Submited. Our Executive Will Contact You Shortly. </p>
				</div>
			
			<footer class="page-footer "style="background-color: #009C03; opacity:.9;" >
					  <div class="container" >
						<div class="row">
						  <div class="col l4 s4 m4">
							<h5 class="white-text">Pristine Greens</h5>
							<p class="grey-text text-lighten-4">behind Stellar Jeevan</p>
							<p class="grey-text text-lighten-4">Sector 1, Greater Noida, West, Uttar Pradesh 201306</p>
							<p class="grey-text text-lighten-4">UP RERA-UPRERAPRJ282359</p>
						  </div>
						  <div class="col l4  s4 m4">
							<h5 class="white-text">Contact </h5>
							<ul>
							  <li><a class="white-text text-lighten-4 " href="tel:+91927884444" style="font-size:20px;"><i class="fa fa-mobile"></i>  9278884444</a></li>
							  <li><a class="white-text text-lighten-4" href="mailto:gmail.com" style="font-size:20px;"><i class="fa fa-envelope" aria-hidden="true"></i>  info@pristrinegreen.com</a></li>
							  
							</ul>
						  </div>
						
						   <div class="col l4 s4 m4">
							<h5 class="white-text">Social Links</h5>
								<a ><span class="iconify" data-icon="mdi:facebook" data-inline="false" height="50px" style="color:white;"></span></a>
								<a ><span class="iconify" data-icon="mdi:linkedin" data-inline="false" height="50px" style="color:white;"></span></a>
								<a><span class="iconify" data-icon="mdi:twitter" data-inline="false" height="50px" style="color:white;"></span></a>
						  </div>
						</div>
					  </div>
				</footer>
			
			

			
	
			
			
	<script>
	function opt(){
		var rad = document.getElementsByName('group1');		;
		if(rad[0].checked){
		//alert("2bhk");
			var ele = document.getElementById('125');
			ele.style.display = "none";
			var ele = document.getElementById('85');
			ele.style.display = "block";
			var rad1 = document.getElementById('2bhk1');
			rad1.style.display = "block";
			var rad2 = document.getElementById('study');
			rad2.style.display = "none";
		}
		if(rad[1].checked){
		//alert("study");
			var ele = document.getElementById('85');
			ele.style.display = "none";
			var ele = document.getElementById('125');
			ele.style.display = "block";
			var rad1 = document.getElementById('2bhk1');
			rad1.style.display = "none";
			var rad2 = document.getElementById('study');
			rad2.style.display = "block";
		}
		}
		 
             $(document).ready(function(){
				$('.modal').modal();
                 $('#modal1').modal('open');
				
					
                });
				$(document).ready(function(){
					$('.tabs').tabs();
			  });
			  $(document).ready(function(){
				$('.materialboxed').materialbox();
				});
		
            
			
		function bg(){
			var bgimage = ["images/1.jpg","images/2.jpg","images/3.jpg","images/4.jpg","images/5.jpg","images/6.jpg"];
			var size = bgimage.length;
			var x = Math.floor(size * Math.random());
			var element = document.getElementsByClassName("bg-image");
				element[0].style["background-image"] = "url(" + bgimage[x] + ")";

			
			
		
		
		}
		$(document).ready(function () {
    var itemsMainDiv = ('.MultiCarousel');
    var itemsDiv = ('.MultiCarousel-inner');
    var itemWidth = "";

    $('.leftLst, .rightLst').click(function () {
        var condition = $(this).hasClass("leftLst");
        if (condition)
            click(0, this);
        else
            click(1, this)
    });

    ResCarouselSize();




    $(window).resize(function () {
        ResCarouselSize();
    });

    //this function define the size of the items
    function ResCarouselSize() {
        var incno = 0;
        var dataItems = ("data-items");
        var itemClass = ('.item');
        var id = 0;
        var btnParentSb = '';
        var itemsSplit = '';
        var sampwidth = $(itemsMainDiv).width();
        var bodyWidth = $('body').width();
        $(itemsDiv).each(function () {
            id = id + 1;
            var itemNumbers = $(this).find(itemClass).length;
            btnParentSb = $(this).parent().attr(dataItems);
            itemsSplit = btnParentSb.split(',');
            $(this).parent().attr("id", "MultiCarousel" + id);


            if (bodyWidth >= 1200) {
                incno = itemsSplit[3];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 992) {
                incno = itemsSplit[2];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 768) {
                incno = itemsSplit[1];
                itemWidth = sampwidth / incno;
            }
            else {
                incno = itemsSplit[0];
                itemWidth = sampwidth / incno;
            }
            $(this).css({ 'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers });
            $(this).find(itemClass).each(function () {
                $(this).outerWidth(itemWidth);
            });

            $(".leftLst").addClass("over");
            $(".rightLst").removeClass("over");

        });
    }


    //this function used to move the items
    function ResCarousel(e, el, s) {
        var leftBtn = ('.leftLst');
        var rightBtn = ('.rightLst');
        var translateXval = '';
        var divStyle = $(el + ' ' + itemsDiv).css('transform');
        var values = divStyle.match(/-?[\d\.]+/g);
        var xds = Math.abs(values[4]);
        if (e == 0) {
            translateXval = parseInt(xds) - parseInt(itemWidth * s);
            $(el + ' ' + rightBtn).removeClass("over");

            if (translateXval <= itemWidth / 2) {
                translateXval = 0;
                $(el + ' ' + leftBtn).addClass("over");
            }
        }
        else if (e == 1) {
            var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
            translateXval = parseInt(xds) + parseInt(itemWidth * s);
            $(el + ' ' + leftBtn).removeClass("over");

            if (translateXval >= itemsCondition - itemWidth / 2) {
                translateXval = itemsCondition;
                $(el + ' ' + rightBtn).addClass("over");
            }
        }
        $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
    }

    //It is used to get some elements from btn
    function click(ell, ee) {
        var Parent = "#" + $(ee).parent().attr("id");
        var slide = $(Parent).attr("data-slide");
        ResCarousel(ell, Parent, slide);
    }

});
			$(window).scroll(function()
		  {
		     $('nav').toggleClass('scrolled',$(this).scrollTop() > 100);
		  });

	
	</script>
	<script>
		 $(document).ready(function(){
    $('.sidenav ').sidenav();
  });
	
	</script>
	
	</body>
</html>
<?php
$b=isset($_SESSION['se1']);
if($b!=0)
{
 echo "<script>
		$(document).ready(function(){
				$('.ba').modal('open');
			});
    
        </script>";

}
session_unset();
session_destroy();
?>