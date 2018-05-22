<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
        <h2>Sticky Contact Form for Bootstrap</h2>
        <!-- Form -->
        <div class="nb-form">
            <p class="title">Send a message</p>
<!--            <img src="https://lh3.googleusercontent.com/-LvTWzTOL4c0/V2yhfueroyI/AAAAAAAAGZM/Ebwt4EO4YlIc03tw8wVsGrgoOFGgAsu4wCEw/w140-h140-p/43bf8578-86b8-4c1c-86a6-a556af8fba13" alt="" class="user-icon">-->
            <p class="message">This is an awesome example of sticky contact form on right bottom of the page</p>

            <form>
                <input type="text" name="cpname" placeholder="Name:" required>
                <input type="email" name="cpemail" placeholder="Email:" required>
                <input type="tel" name="cpphone" placeholder="Phone:" required>
                <textarea name="cpmessage" placeholder="Message:" required></textarea>
                <input type="submit" value="Send message">
            </form>
        </div>
    </div>
</div>

<div id="footer">
		<h1>get in touch</h1>
			<h3 class="center follow">
				We're social and we'd love to hear from you! Feel free to send us an email, find us on Google Plus, follow us on Twitter and join us on Facebook.
			</h3>
	<div class="follow_us">
		<a href="http://twitter.com/share?text=Test Message&url=http://www.remicatiles.com" class="fa fa-twitter follow_us" target="_blank"></a>
		<a href="http://www.facebook.com/sharer.php?s=100&p[url]=http://www.remicatiles.com&p[images][0]=http://www.remicatiles.com/img/the-best-school-logo.png&p[title]=Remica Tiles&p[summary]=Remica Tiles" class="fa fa-facebook follow_us" target="_blank"></a>
		<a href="#" class="fa fa-linkedin follow_us" target="_blank"></a>

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
<script type="text/javascript">

jQuery(document).ready(function($) {
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

	});

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

</script>
<script src="styleswitcher/js/styleswitcher.js"></script>

