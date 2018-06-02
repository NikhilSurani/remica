

<div id="footer">
		<h1>get in touch</h1>
			<h3 class="center follow">
			Have requirements for tiles? We would love to help.
Drop us an email or message us on social media and we will get back to you soon.

			</h3>
	<div class="follow_us">
		<a href="http://twitter.com/share?text=Test Message&url=http://www.remicatiles.com" class="fa fa-twitter follow_us" target="_blank"></a>		
		<a href="#" class="fa fa-linkedin follow_us" target="_blank"></a><br/>		
		<!-- <button type="button" class="btn btn-default">Contact us</button> -->
		<!-- <a href="contact.php" class="btn btn-primary btn-custom btn-rounded">Contact Us</a> -->

		
	</div>
</div>


<!-- footer 2 -->
	<div id="footer2">
		<div class="container">
			<div class="row">
				<div class="col-md-12">							
				<!-- <a href="javascript:void(0)"><img src="img/logo.png" alt="Remica Tiles" class="animated bounceInDown"  align="left" /></a> 			 -->
				<div class="copyright">									
				<?= SITE_TITLE ?> &copy; Copyright
							<script type="text/javascript">							
								var d = new Date()
								document.write(d.getFullYear())							
								</script>
							 - All Rights Reserved.							
						</div>						
						</div>
					</div>
				</div>
					</div>
				<!-- up to top -->
				<a href="#"><i class="go-top fa fa-angle-double-up"></i></a>
				


								
<!-- SCRIPTS -->
<script src="js/jquery.js"></script>			
<script src="js/bootstrap.min.js"></script>	
<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>   
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<!-- slider settings -->
<script type="text/javascript">
	
			jQuery(document).ready(function() {
					jQuery('.tp-banner').show().revolution(
				{
					delay:9000,
					startwidth:1170,
					startheight:600,
					navigationType:"bullet",
					navigationStyle:"square",
					hideBulletsOnMobile:"on",
					hideArrowsOnMobile: "on",
					shadow:0,
					fullWidth:"on",
				});


				
			});
	</script>
	
<script src="js/retina.js"></script>
<script src="js/jquery.touchSwipe.min.js"></script>
<script src="js/jquery.mousewheel.min.js"></script>				
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
<script src="js/jquery.isotope.min.js" type="text/javascript"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>

<script type="text/javascript" src="Backend_JS/validate.js" ></script>
<script type="text/javascript" src="Backend_JS/common.js" ></script>
<!-- carousel -->
<script type="text/javascript" src="js/jquery.carouFredSel-6.2.1-packed.js"></script>
<script>
						var map;
						function initMap() {
							map = new google.maps.Map(document.getElementById('map'), {
							center: {lat: 21.761524, lng: 70.627625},
							zoom: 8
							});
						}
						</script>
						<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDF9iOBTHg56eGBu-eWx05Aj53fz31Up_0&callback=initMap"
						async defer>
						</script>
		
<script type="text/javascript">


jQuery(document).ready(function($) 	{
	if($("#slider_home").length > 0){
		$("#slider_home").carouFredSel({ 
		width : "100%", 
		height : "auto",
		responsive : true,
		auto : false,
		items : { width : 280, visible: { min: 1, max: 3 }
		},
		swipe : { onTouch : true, onMouse : true },
		scroll: { items: 1, },
		prev : { button : "#sl-prev", key : "left"},
		next : { button : "#sl-next", key : "right" }
		});
	}
	if($('.projects').length > 0){
		var $container = $('.projects');
		$container.imagesLoaded(function() {
		$('.projects').fadeIn(1000).isotope({
		layoutMode : 'fitRows',
		itemSelector : '.element' });
		});
		$('.element').css('opacity',0);
		$('.element').each(function(i){
		$(this).delay(i*150).animate({'opacity':1},350);	
		});
	}

	});	

</script>
<script src="styleswitcher/js/styleswitcher.js"></script>

