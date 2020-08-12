<!DOCTYPE html>
<html lang="en">



<meta http-equiv="content-type" content="text/html;charset=UTF-8" />


<head>
    <meta charset="UTF-8">
    <title>BacBon || Contact us</title>

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="fonts/flaticon.css" />
    <!--favicon-->
	<link rel="shortcut icon" href="images/favicon/favicon.png">

	<!-- jQuery js -->
	<script src="js/jquery.js"></script>

</head>

<body>
    <div class="boxed_wrapper">

			<!-- header start -->
			<?php include_once('layout/header.php'); ?>
            <!-- header end -->


        <!-- <div class="contact_details sec-padd">
			
				<div class="home-google-map">
					<div 
						class="google-map" 
						id="contact-google-map" 
						data-map-lat="40.7128" 
						data-map-lng="-74.0060" 
						data-icon-path="images/logo/map-marker.png"
						data-map-title="Chester"
						data-map-zoom="10" >
					</div>
				</div>
			
		</div> -->


        <section>
            <div class="container" style="margin-top:60px">
                <div class="text-content">
                    <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.8s">
                        <h3 class="center"><span>Tell us how we can help you ?</span></h3>
                    </div>
                </div>
                <div class="col-lg-12" style="padding:60px 0px; >
        <div class=" mapouter ">
							<div class="gmap_canvas ">
								<iframe  style="width: 100%; height: 500px; "  id="gmap_canvas " src="https://maps.google.com/maps?q=bacbon%20ltd%20&t=&z=17&ie=UTF8&iwloc=&output=embed " frameborder="0 " scrolling="no " marginheight="0 " marginwidth="0 "></iframe><a href="https://www.bitgeeks.net/embed-google-map/ ">
								</a>
							</div>
                        <style>
                            .mapouter {
                                position: relative;
                                text-align: right;
                                height: 500px;
                                width: 100%;
                            }

                            .gmap_canvas {
                                overflow: hidden;
                                background: none !important;
                                height: 500px;
                                width: 100%;
                            }
						</style>
						</div>
        </div>
		</div>
		</section>
		
		<section class="feature-style-three ">
			<div class="container ">			
				<div class="item-list ">
					<div class="row ">
						<div class="item ">
							<div class="column col-md-4 col-sm-6 col-xs-12 ">
								<div class="inner-box " style="height:180px ">
									<div class="icon-box "><span class="icon flaticon-pin-1 "></span></div>
									<h3>Location</h3>
									<div class="text "><p>House #13(5th Floor), Block-C, <br> Main Road, Banasree, Rampura, Dhaka-1219.</p></div>
								</div>
							</div>
						</div>
						
						<div class="item ">
							<div class="column col-md-4 col-sm-6 col-xs-12 ">
								<div class="inner-box " style="height:180px ">
									<div class="icon-box "><span class="icon flaticon-cell-phone "></span></div>
									<h3>Phone Number</h3>
									<div class="text "><p>+88 01836 14 9699 <br> +88 02 8396601</p></div>
								</div>
							</div>
						</div>
						
						<div class="item ">
							<div class="column col-md-4 col-sm-6 col-xs-12 ">
								<div class="inner-box " style="height:180px ">
									<div class="icon-box "><span class="icon flaticon-message "></span></div>
									<h3>E-Mail Us</h3>
									<div class="text "><p>info@bacbonltd.com</p></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="contact_us " style="background-color: whitesmoke ">
			<div class="container ">   
                <div class="sec-title text-center ">
                    <h2>Get In Touch</h2>
					<p>We're happy to answer any questions you have.</p>
                </div>
                <div class="default-form-area ">
					<form id="contact-form " method="post" data-toggle="validator" class="col-md-10 col-md-offset-1 default-form " >
						<div class="row clearfix ">
							<div class="col-md-6 col-sm-6 col-xs-12 ">
												
							<div class="form-group">
								<label for="inputName">Your Name <span class="font10 text-danger">(required)</span></label>
								<input id="inputName" type="text" name="name" class="form-control" data-error="Your name is required" required>
								<div class="help-block with-errors"></div>
							</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12 ">
							<div class="form-group">
								<label for="inputEmail">Your Email <span class="font10 text-danger">(required)</span></label>
								<input id="inputEmail" type="email" name="email"  class="form-control" data-error="Your email is required and must be a valid email address" required>
								<div class="help-block with-errors"></div>
							</div>
							</div>
							<div class="col-md-12 col-sm-12 col-xs-12 ">
							<div class="form-group">
								<label for="inputSubject">Subject <span class="font10 text-danger">(required)</span></label>
									<input  id="inputSubject" type="text" name="subject" class="form-control" data-error="Subject is required" required />
									<div class="help-block with-errors"></div>
								</div>	
							</div>	
							
							<div class="col-md-12 col-sm-12 col-xs-12 ">
							<div class="form-group">
									<label for="inputMessage">Message <span class="font10 text-danger">(required)</span></label>
									<textarea id="inputMessage" name="message" class="form-control" rows="8" data-minlength="50" data-error="Your message is required and must not less than 50 characters" required></textarea>
									<div class="help-block with-errors"></div>
								</div>
							</div>   											  
						</div>
						<div class="contact-section-btn text-center ">
							<div class="form-group style-two ">							
								<button type="submit" name="submit" value="submit" class="thm-btn thm-color">Send Message</button>
							</div>
						</div> 
					</form>

					<?php if (isset($_POST['submit']))  {
						$to = "info@bacbonltd.com";
						$from = $_POST['email']; 
						$name = $_POST['name'];
						$subject = $_POST['subject'];
						$message = $_POST['message'];
					
						$headers = "From:" . $from;																		

						if (mail($to, $subject, $message, $headers)) {											

							echo '<script type="text/javascript">alert(" Mail Sent.  Thank you ' .$name.', we will contact you shortly.");</script>';
						}
						else {
							echo "<script type='text/javascript'>failed</script>";
						}									
					}
					?>


				</div>          
			</div>
		</section>

		
 
		<!-- footer start -->
		<?php include_once('layout/footer.php'); ?>
		<!-- footer end -->

<!-- Scroll Top Button -->
	<button class="scroll-top tran3s color2_bg ">
		<span class="fa fa-angle-up "></span>
	</button>
	<!-- pre loader  -->
	<div class="preloader "></div>


	<!-- bootstrap js -->
	<script src="js/bootstrap.min.js "></script>
	<!-- jQuery ui js -->
	<script src="js/jquery-ui.js "></script>
	<!-- owl carousel js -->
	<script src="js/owl.carousel.min.js "></script>
	<!-- jQuery validation -->
	<script src="js/jquery.validate.min.js "></script>
	
	<script src="js/validator.min.js"></script>
	<!-- google map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRvBPo3-t31YFk588DpMYS6EqKf-oGBSI "></script> 
	<script src="js/gmap.js "></script>
	<!-- mixit up -->
	<script src="js/wow.js "></script>
	<script src="js/jquery.mixitup.min.js "></script>
	<script src="js/jquery.fitvids.js "></script>
    <script src="js/bootstrap-select.min.js "></script>
	<script src="js/menuzord.js "></script>

	<!-- fancy box -->
	<script src="js/jquery.fancybox.pack.js "></script>
	<script src="js/jquery.polyglot.language.switcher.js "></script>
	<script src="js/nouislider.js "></script>
	<script src="js/jquery.bootstrap-touchspin.js "></script>
    <script src="js/SmoothScroll.js "></script>
	<script src="js/validation.js "></script>
	<script src="js/jquery.appear.js "></script>
	<script src="js/jquery.countTo.js "></script>
	<script src="js/jquery.flexslider.js "></script>
	<script src="js/imagezoom.js "></script>	
	<script id="map-script " src="js/default-map.js "></script>
	<script src="js/custom.js "></script>

</div>
	
</body>


</html>