<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
$con=mysqli_connect("localhost","root","","bookyourshow");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Bookyourshow - KR's online tiket booking portal</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="images/fave-icon.png" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
   		<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
   		<link href="css/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />
		<script src="js/modernizr.custom.28468.js"></script>
		<link rel="stylesheet" type="text/css" href="css/simptip-mini.css" media="screen,projection" />
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script>
			function bookseats(show_id, seat_id){
				if (confirm("Are you sure you want to buy this ticket?") == true) {
					var timing=$('#show-timing'+show_id).val();
					var email=$('#booking_email'+show_id).val();
					  $.post("book_seat.php",{show_id:show_id,seat_id:seat_id,timing:timing,email:email},function(result){
					    alert("Congratulations! Your ticket has been successfully booked.\n\n Please use your Ticket ID at the theatre to get your ticket.\n\n Your Ticket ID is "+result+".\n\n Enjoy the show.");
					    $.post("check_booking.php",{show_id:show_id,timing:timing},function(result){
							$('#show_seats'+show_id).html('');
							$('#show_seats'+show_id).html(result);
						});
					  });
				 }
			}

			// Function that validates email address through a regular expression.
			function validateEmail(email) { 
			    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			    return re.test(email);
			} 
			
			/*
			$(document).ready(function(){
							$('#show-timing').change(function(){
								alert($('#show-timing').val());
								if($('#show-timing').val()!=''){
									$('#select_seats').show();
								}else{
									$('#select_seats').hide();
								}
							});
						});*/
			
			
		</script>
		<style>
			.available{
				background: rgb(28, 184, 65);
				color: white;
				border-radius: 4px;
				text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
				font-size: 100%;
				padding: .5em 1em;
				border: 0 rgba(0,0,0,0);
				display: inline-block;
				zoom: 1;
				line-height: normal;
				white-space: nowrap;
				vertical-align: baseline;
				text-align: center;
				cursor: pointer;
				-webkit-user-drag: none;
				-webkit-user-select: none;
				-webkit-appearance: button;
			}
			
			.taken{
				background: rgb(223, 117, 20);
				color: white;
				border-radius: 4px;
				text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
				font-size: 100%;
				padding: .5em 1em;
				border: 0 rgba(0,0,0,0);
				display: inline-block;
				zoom: 1;
				line-height: normal;
				white-space: nowrap;
				vertical-align: baseline;
				text-align: center;
				cursor: pointer;
				-webkit-user-drag: none;
				-webkit-user-select: none;
				-webkit-appearance: button;
				cursor:not-allowed;
			}
			
		</style>
	</head>
	<body>
		<!---start-wrap----->
			<!---start-header----->
			<div class="header" id="home">
				<div class="wrap">
				<div class="top-header">
					<div class="logo">
						<a href="index.html"><span> </span>BookYourShow</a>
					</div>
					<div class="top-nav">
						<ul>
							<li class="active"><a href="#home" class="scroll">Home</a></li>
							<li><a href="#portfolio" class="scroll">Shows</a></li>
							<li><a href="#reviews" class="scroll">Reviews</a></li>
							<li><a href="#team" class="scroll">Meet our team</a></li>
							<li><a href="#contact" class="scroll">Contact</a></li>
							<div class="clear"> </div>
						</ul>
					</div>
					<div class="clear"> </div>
				</div>
			<!---End-header----->
			<!----start-content-slider---->
			<div id="da-slider" class="da-slider">
					  <div id="intro" class="da-slide">
					    <div class="da-title">
					      <h3 style="margin-top: -20%;"> Enjoy This Diwali<br />
					      	 With A Third Dimension!</h3>
					    </div>
					    <div class="da-img">
					      <img src="images/3d_slider.png" alt="Drupal Powered" title="Presenting the Drupalien" style="margin-top: 10%;" />
					    </div>
					  </div>
					  <div id="user-experience" class="da-slide">
					   <div class="da-title">
					   <h3 style="margin-top: -30%;"> Get The Theater Experience<br />
					      	 In Your Office!</h3>
					    </div>
					     <div class="da-img">
					      <img src="images/theater.png" alt="Drupal Powered" title="Presenting the Drupalien" style="margin-left: -100%;" />
					    </div>
					  </div>
					  <div id="design" class="da-slide">
					   <div class="da-title">
					    <h3 style="margin-top: -20%"> Choose From A Selection Of</h3> <h3 style="margin-left: 200%;">Amazing 3D Movies!</h3>
					    </div>
					     <div class="da-img">
					      <img src="images/selection.png" alt="Drupal Powered" title="Presenting the Drupalien" style="margin-left: -100%; width: 200%; margin-top: 25%;" />
					    </div>
					  </div>
					  <div>
					  </div>
					</div>
					<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
					<script src="js/jquery.cslider.js"></script>
					<script>
					//jQuery(document).ready(function() {
					$('#da-slider').cslider({
					  autoplay : true,
					  interval: 5000,
					  bgincrement : 10
					});
					//});
					</script>
		<!----start-content-slider---->
			</div>
		</div>
		<!---End-header----->
		<!---start-content---->
		<div class="content">
			<div class="wrap">

			</div>
			-start-recent-works----->
			<div class="recent-works" id="portfolio">
				<div class="wrap">
				<div class="recent-works-head">
					<h3>Shows</h3>
					<h5>We have a wide range of 3D shows including Animation, Comedy, Sport, Music, Extreme 3D Effects among others for you to choose from</h5>
				</div>

						<?php 
						
							$result = mysqli_query($con,"SELECT * FROM shows");

							while($row = mysqli_fetch_array($result)) { ?>
								<div id="small-dialog<?php echo $row[0]; ?>" class="mfp-hide">
									<div class="pop_up">
										<h2><?php echo $row[1]; ?></h2>
										<div style="display: inline-flex;">
											<div style="display: inline; width: 50%;">
											<img  style="display: inline; vertical-align: text-top;" src="images/<?php echo $row[4]; ?>" alt="Movie" title="Movie #1" width="351px;"; />
											</div>
											<div style="display: inline-block; width: 50%;">
												<p class="para">Synopsis: </p>
												<br />
												<?php echo nl2br($row[3]); ?>
												<hr>
												<p class="para">Show Details:</p>
												<br />
												<div style="display: inline; margin-left: 5%; font-weight: bold;">Title:</div><div style="display: inline; margin-left: 15%;"> <?php echo $row[1]; ?></div>
												<br />
												<div style="display: inline; margin-left: 5%; font-weight: bold;">Genre:</div><div style="display: inline; margin-left: 11%;"> <?php echo $row[2]; ?></div>
												<br />
												<hr>
												<p class="para">Book your show: </p>
												<br />
												<div style="display: inline; margin-left: 5%; font-weight: bold;">Email:</div><div style="display: inline; margin-left: 38%;"> 
													<input type="text" id="booking_email<?php echo $row[0]; ?>" >
													<p id="email_msg<?php echo $row[0]; ?>" style="display:none; font-size: small; margin-left:45%; color:red;"></p>
												</div>
												<br /><br />
												<div id="timings" style="display:none;">
												<div style="display: inline; margin-left: 5%; font-weight: bold;">Select show timing:</div><div style="display: inline; margin-left: 11%;"> 
													<select id="show-timing<?php echo $row[0]; ?>">
														<option value="">--Select--</option>
													<?php 
												
															$query="SELECT * FROM schedule WHERE show_id=".$row[0];
															$res = mysqli_query($con,$query);
			
															while($r = mysqli_fetch_array($res)) { ?>
															<option value="<?php echo $r[0]; ?>"><?php echo $r[2]; ?></option>		
													<?php	} ?>		
														
													</select>
													<br />
												</div>

													<br /><br />
														

												 </div>
											</div>
											
										</div>
										<div id="show_seats<?php echo $row[0]; ?>">
										<div id="select_seats<?php echo $row[0]; ?>" style="border: 2px solid; width: 60%; padding: 5%; margin: 5% auto; display: block;">
											<button id="seat_1" value="1" style="width: 75px; height: 40px; margin: 2% 5%;" onclick="bookseats(<?php echo $row[0]; ?>,this.value);" /> Seat C1 </button>
											<button id="seat_2" value="2" style="width: 75px; height: 40px; margin: 2% 5%;" onclick="bookseats(<?php echo $row[0]; ?>,this.value);" />Seat B1</button>
											<button id="seat_3" value="3" style="width: 75px; height: 40px; margin: 2% 5%;" onclick="bookseats(<?php echo $row[0]; ?>,this.value);" />Seat A1</button>
											<br />
											<button id="seat_4" value="4" style="width: 75px; height: 40px; margin: 2% 5%;" onclick="bookseats(<?php echo $row[0]; ?>,this.value);" />Seat C2</button>
											<button id="seat_5" value="5" style="width: 75px; height: 40px; margin: 2% 5%;" onclick="bookseats(<?php echo $row[0]; ?>,this.value);" />Seat B2</button>
											<button id="seat_6" value="6" style="width: 75px; height: 40px; margin: 2% 5%;"onclick="bookseats(<?php echo $row[0]; ?>,this.value);" />Seat A2</button>
											
											<img src="images/screen.jpg" style="margin-top: -5%; margin-left: 10%;"/>
										</div>
										</div>
									</div>
								</div>
								
								<script>
								
									$(document).ready(function(){


										$('#booking_email<?php echo $row[0]; ?>').blur(function(){

											var validate = validateEmail($('#booking_email<?php echo $row[0]; ?>').val());

											if(validate){

												$('#timings').show();

												$('#email_msg<?php echo $row[0]; ?>').html('').hide();

											}else{
												$('#timings').hide();
												$('#email_msg<?php echo $row[0]; ?>').html('Please enter a valid email address').show();

											}

										});
										
										$('.popup-with-zoom-anim').click(function(){
											$('#show-timing<?php echo $row[0]; ?>').val('');
											$('#select_seats<?php echo $row[0]; ?>').hide();
											$('#booking_email<?php echo $row[0]; ?>').val('');
											});
										
										
										$('#select_seats<?php echo $row[0]; ?>').hide();
										$('#show_seats<?php echo $row[0]; ?>').hide();
										$('#show-timing<?php echo $row[0]; ?>').change(function(){
											  var show_id=<?php echo $row[0]; ?>;
											  var timing=$('#show-timing<?php echo $row[0]; ?>').val();
											  $.post("check_booking.php",{show_id:show_id,timing:timing},function(result){
											    $('#show_seats'+show_id).html('');
											    $('#show_seats'+show_id).html(result);
											  });
											
											if($('#show-timing<?php echo $row[0]; ?>').val()!=''){
												$('#select_seats<?php echo $row[0]; ?>').show();
												$('#show_seats<?php echo $row[0]; ?>').show();
											}else{
												$('#select_seats<?php echo $row[0]; ?>').hide();
												$('#show_seats<?php echo $row[0]; ?>').hide();
											}
										});
									});
									
								</script>
								
							<?php } ?>

				
				<div class="gallery">
					<div class="clear"> </div>
					<div class="container">
					<ul id="filters" class="clearfix">
						<li><span class="filter active" data-filter="<?php $result = mysqli_query($con,"SELECT * FROM shows"); while($row = mysqli_fetch_array($result)) { echo $row[2]." "; } ?> ">All</span></li>
						
						<?php 
						
							$result = mysqli_query($con,"SELECT * FROM shows");

							while($row = mysqli_fetch_array($result)) { ?>
								<li><span class="filter" data-filter="<?php echo $row[2]; ?>"><?php echo $row[2]; ?></span></li>
							<?php } ?>
					</ul>
						<div id="portfoliolist" style="     ">
							
						<?php 
						
							$result = mysqli_query($con,"SELECT * FROM shows");

							while($row = mysqli_fetch_array($result)) { ?>
							
								<div class="portfolio <?php echo $row[2]; ?> mix_all" data-cat="<?php echo $row[2]; ?>" style=" ">
									<div class="portfolio-wrapper">				
										<a class="popup-with-zoom-anim" href="#small-dialog<?php echo $row[0]; ?>">
											<img src="images/<?php echo $row[5]; ?>" alt="Image 2" style="top: 0px;">
										</a>
										<div class="label" style="bottom: -40px;">
											<div class="label-text">
												<a class="text-title"><?php echo $row[1]; ?></a>
												<span class="text-category"><?php echo $row[2]; ?></span>
											</div>
											<div class="label-bg"></div>
										</div>
									</div>
								</div>				

							<?php } ?>							
							
						
					</div>
				</div><!-- container 
				<a class="morebtn popup-with-zoom-anim" href="#small-dialog1">Show More</a>
				<div class="clear"> </div>
				<script type="text/javascript" src="js/fliplightbox.min.js"></script>
				<script type="text/javascript">$('body').flipLightBox()</script>
				<!---start-gallery-script----->
					<script type="text/javascript" src="js/jquery.easing.min.js"></script>	
					<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
					<script type="text/javascript">
					$(function () {
						
						var filterList = {
						
							init: function () {
							
								// MixItUp plugin
								// http://mixitup.io
								$('#portfoliolist').mixitup({
									targetSelector: '.portfolio',
									filterSelector: '.filter',
									effects: ['fade'],
									easing: 'snap',
									// call the hover effect
									onMixEnd: filterList.hoverEffect()
								});				
							
							},
							
							hoverEffect: function () {
							
								// Simple parallax effect
								$('#portfoliolist .portfolio').hover(
									function () {
										$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
										$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
									},
									function () {
										$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
										$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
									}		
								);				
							}
						};
						// Run the show!
						filterList.init();
					});	
					</script>
					<!-- Add fancyBox main JS and CSS files -->
					<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
					<link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
							<script>
								$(document).ready(function() {
									$('.popup-with-zoom-anim').magnificPopup({
										type: 'inline',
										fixedContentPos: false,
										fixedBgPos: true,
										overflowY: 'auto',
										closeBtnInside: true,
										preloader: false,
										midClick: true,
										removalDelay: 300,
										mainClass: 'my-mfp-zoom-in'
								});
							});
							</script>
				<!---//End-gallery-script----->
				<div class="clear"> </div>
				</div>
			</div>
			</div>
			<!---End-recent-works----->
			<!--- start-blog----->
			<div class="blog" id="reviews">
				<div class="wrap">
					<div class="blog-grids">
						<div class="blog-grid blog-grid1">
							<div class="blog-grid-left" onclick="location.href='#';">
								<span> </span>
							</div>
							<div class="blog-grid-right">
								<h3><a href="#">Layered Neatly Photoshop Template</a></h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam est. Mauris faucibus tellus ac auctor posuere. Integer lobortis purus a felis adipiscing, eget ornare justo semper. Etiam commodo tincidunt ante.</p>
								<a class="blogbtng popup-with-zoom-anim" href="#small-dialog1">Show More</a>
							</div>
							<div class="clear"> </div>
						</div>
						<!----->
						<div class="blog-grid2">
							<div class="blog-grid2-left">
								<h3><a href="#">Layered Neatly Photoshop Template</a></h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam est. Mauris faucibus tellus ac auctor posuere. Integer lobortis purus a felis adipiscing, eget ornare justo semper. Etiam commodo tincidunt ante.</p>
								<a class="blogbtnb popup-with-zoom-anim" href="#small-dialog1">Show More</a>
							</div>
							<div class="blog-grid2-right" onclick="location.href='#';">
								<span> </span>
							</div>
							<div class="clear"> </div>
						</div>
						<!----->
						<div class="clear"> </div>
					 </div>
				</div>
			</div>
			<!--- End-blog----->
			<!---start-meet-our-team---->
			<div class="team" id="team">
				<div class="wrap">
					<div class="team-head">
						<h3>Meet Our team</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam est. Mauris faucibus tellus ac auctor posuere.</p>
					</div>
					<div class="team-members">
						<div class="team-member">
							<span><a href="#"> </a></span>
							<h4><a href="#">John Smith</a></h4>
						   <label>Creative Director</label>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam est.</p>
							<ul>
								<li>
									<li><a class="facebook simptip-position-bottom simptip-movable" data-tooltip="Facebook" href="#"> </a></li>
									<li><a class="twitter simptip-position-bottom simptip-movable" data-tooltip="Twitter" href="#"> </a></li>
									<li><a class="pin simptip-position-bottom simptip-movable" data-tooltip="Pintrest" href="#"> </a></li>
									<div class="clear"> </div>
								</li>
							</ul>
						</div>
						<div class="team-member">
							<span><a href="#"> </a></span>
							<h4><a href="#">John Smith</a></h4>
						   <label>Creative Director</label>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam est.</p>
							<ul>
								<li>
									<li><a class="facebook simptip-position-bottom simptip-movable" data-tooltip="Facebook" href="#"> </a></li>
									<li><a class="twitter simptip-position-bottom simptip-movable" data-tooltip="Twitter" href="#"> </a></li>
									<li><a class="pin simptip-position-bottom simptip-movable" data-tooltip="Pintrest" href="#"> </a></li>
									<div class="clear"> </div>
								</li>
							</ul>
						</div>
						<div class="team-member">
							<span><a href="#"> </a></span>
							<h4><a href="#">John Smith</a></h4>
						   <label>Creative Director</label>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam est.</p>
							<ul>
								<li>
									<li><a class="facebook simptip-position-bottom simptip-movable" data-tooltip="Facebook" href="#"> </a></li>
									<li><a class="twitter simptip-position-bottom simptip-movable" data-tooltip="Twitter" href="#"> </a></li>
									<li><a class="pin simptip-position-bottom simptip-movable" data-tooltip="Pintrest" href="#"> </a></li>
									<div class="clear"> </div>
								</li>
							</ul>
						</div>
						<div class="clear"> </div>
						<div class="clear"> </div>
					</div>
				</div>
			</div>
			<!---//End-meet-our-team---->

			<!---start-contact---->
			<div class="contact" id="contact">
				<div class="wrap">
				<div class="contact-head">
					<h3>Leave a review</h3>
					<p>Please leave your reviews of the shows and the 3D movie experience. We will be sharing them with everyone :)</p>	
				</div>
				<div class="contatct-form">
					<form>
						<input type="text" value="Name :" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name :';}">
						<input type="text" value="Email :" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email :';}">
						<textarea rows="2" cols="70" onfocus="if(this.value == 'Message :') this.value='';" onblur="if(this.value == '') this.value='Message :';" >Review :</textarea>
						<input type="submit" value="Send" />
					</form>
				</div>
			</div>
			</div>
			<!---End-contact---->
		</div>
		<!---End-content---->
		<!----start-footer---->
		<div class="footer">
			<div class="wrap">
				<div class="footer-grids">
					<div class="footer-left">
						<ul>
							<li><a class="ftwiter" href="#"> </a></li>
							<li><a class="fface" href="#"> </a></li>
							<li><a class="fhtml" href="#"> </a></li>
							<li><a class="fflick" href="#"> </a></li>
							<div class="clear"> </div>
						</ul>
					</div>
					<div class="footer-right">
						<p>Powered By <a href="#">IT Brainiacs</a></p>
									<script type="text/javascript">
						$(document).ready(function() {
							$().UItoTop({ easingType: 'easeOutQuart' });
						});
					</script>
					<!----move-top-path---->
					<script type="text/javascript" src="js/move-top.js"></script>
					<script type="text/javascript" src="js/easing.js"></script>
					<script type="text/javascript">
						jQuery(document).ready(function($) {
							$(".scroll").click(function(event){		
								event.preventDefault();
								$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
							});
						});
					</script>
					<!----move-top-path---->
			    <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>

					</div>
					<div class="clear"> </div>
				</div>
			</div>
		</div>
		<!----//End-footer---->
		<!---End-wrap----->
	</body>
</html>

<?php mysqli_close($con); ?>