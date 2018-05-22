<?php 
	include_once('constants.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?= SITE_TITLE ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="<?=AUTHOR ?>">

<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Lato:400,700,300' rel='stylesheet' type='text/css'>
<!--[if IE]>
	<link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Lato:400" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Lato:700" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Lato:300" rel="stylesheet" type="text/css">
<![endif]-->

<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/theme.css" rel="stylesheet">
<link rel="stylesheet" href="styleswitcher/css/styleswitcher.css">
<link id="colours" rel="stylesheet" href="css/colour.css" />
<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css"/>
<link href="css/zocial.css" rel="stylesheet" type="text/css"/>
<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
<link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />

<link rel="icon" type="image/png" href="img/favicon.png" sizes="196x196">
<link href="Backend_CSS/developer.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
    <style type="text/css">
        /*------------- Form ---------------*/

        .nb-form {
            position: fixed;
            z-index: 9999;
            width: 300px;
            background: #FFF;
            right: 20px;
            bottom: -367px;
            transition: all .8s cubic-bezier(.22, .67, .43, 1.22) .2s;
            border-radius: 10px 10px 0 0;
            box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14),0 1px 5px 0 rgba(0,0,0,0.12),0 3px 1px -2px rgba(0,0,0,0.2);
        }
        .nb-form:hover {
            bottom: 0px;
        }

        /*-- User Icon --*/

        .nb-form .user-icon {
            position: absolute;
            top: -49px;
            right: 12px;
            display: block;
            width: 58px;
            margin: 20px auto 15px;
            border-radius: 100%;
        }

        /*-- Title --*/

        .nb-form .title {
            background: #03a9f4;
            font-size: 16px !important;
            padding: 20px 18px !important;
            color: #fff !important;
            border-radius: 10px 10px 0 0;
        }

        /*-- Text --*/

        .nb-form p {
            font-size: 13px;
            margin: 0;
            padding: 15px;
            color: #666;
        }

        .nb-form p.message {
            margin-left: 7px;
        }

        /*-- Form Elements --*/

        .nb-form form {
            padding: 0 15px 15px 15px;
        }

        .nb-form input,
        .nb-form textarea {
            font-family: Tahoma, Geneva, sans-serif;
            font-size: 12px;
            width: 254px;
            max-width: 254px;
            margin-bottom: 10px;
            margin-left: 7px;
            padding: 6px;
            border: none;
            border-radius: 4px;
            color: #999;
            border-bottom: 1px solid #f0f0f0;
        }

        .nb-form input:focus,
        .nb-form textarea:focus {
            outline: none;
            box-shadow: none;
        }

        .nb-form input[type='submit'] {
            display: block;
            width: 120px;
            margin: 0 auto;
            padding: 0 20px;
            height: 40px;
            line-height: 40px;
            border-radius: 20px;
            cursor: pointer;
            transition: all .4s ease;
            color: #fff !important;
            border: none;
        }

        .nb-form input[type='submit']:hover {
            box-shadow: 0 3px 3px 0 rgba(0,0,0,0.07),0 1px 7px 0 rgba(0,0,0,0.02),0 3px 1px -1px rgba(0,0,0,0.1);
        }

        .nb-form textarea {
            min-height: 110px;
        }


        .nb-form ::-webkit-input-placeholder {
            color: #ccb0b0;
        }

        .nb-form ::-moz-placeholder{
            color: #ccb0b0;
        }

        .nb-form :-ms-input-placeholder {
            color: #ccb0b0;
        }

        .nb-form :-moz-placeholder {
            color: #ccb0b0;
        }

        .nb-form input[type='submit'] {
            background: #03a9f4;
        }

        @media screen and (max-width: 676px) {
            .nb-form:hover .user-icon {
                display: none;
            }

            .nb-form .message {
                display: none;
            }

            .nb-form form {
                padding-top: 15px;
            }
            .nb-form{
                right: 50%;
                bottom: -320px;
                left: 50%;
                transform: translateX(-50%);
            }
        }
    </style>

</head>

<body>

<!--header-->
	<div class="header">
<!--menu-->
    <nav id="main_menu" class="navbar" role="navigation">
      <div class="container">
            <div class="navbar-header">						
        <!--toggle-->
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
				<i class="fa fa-bars"></i>
			</button>
		<!--logo-->
		
			<div class="logo">				
				<a href="index.php"><img src="img/logo.png" alt="Remica Tiles" class="animated bounceInDown" /></a> 
				<div class="caption rev-title-sub logo-text"><?= SITE_TITLE ?></div>
			</div>
		</div>
           
            <div class="collapse navbar-collapse" id="menu">
                <ul class="nav navbar-nav pull-right drop_down_nav">
                   			<li class="" id="index"><a href="index.php">Home</a>
                            <!-- <ul class="dropdown-menu">
                                <li><a href="index-2.html">Slider Revolution</a></li>
                                <li><a href="index2.html">Nerve Slider</a></li>
                                <li><a href="index3.html">NivoSlider</a></li>
                                <li><a href="index4.html">Slides</a></li>
                                <li><a href="index5.html">Html5 Video</a></li>
                            </ul> -->
                        	</li>
                        	 <li class="dropdown page_drop_down" id="about"><a href="about.php">About</a>
                            <!-- <ul class="dropdown-menu">
                                <li><a href="team.html">The Team</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="testimonials.html">Testimonials</a></li>
                                <li><a href="timeline.html">Timeline</a></li>
                                <li><a href="full.html">Full Width</a></li>
                                <li><a href="left_sidebar.html">Left Sidebar</a></li>
                                <li><a href="right_sidebar.html">Right Sidebar</a></li>
                            </ul> -->
                        </li>

							<li class="dropdown page_drop_down "><a href="javascript:{}">Works</a>
						<ul class="dropdown-menu">
								<li><a href="portfolio_2columns.html">2 Columns</a></li>
								<li><a href="portfolio_3columns.html">3 Columns</a></li>
								<li><a href="portfolio_4columns.html">4 Columns</a></li>
								<li><a href="portfolio_masonry.html">Masonry</a></li>
								<li><a href="gallery.html">Paginated Gallery</a></li>
								<li><a href="video_gallery.html">Video Gallery</a></li>
								<li><a href="single_portfolio.html">Single Slider</a></li>
								<li><a href="single_video.html">Single Video</a></li>
								<li><a href="single_image.html">Single Image</a></li>
								<li><a href="full_slider.html">Full Slider</a></li>
								<li><a href="full_video.html">Full Video</a></li>
						</ul>
							</li>
							<li class="dropdown "><a href="javascript:{}">Portfolio</a>
						<ul class="dropdown-menu">								
								<li><a href="floor.php">FLOOR</a>

<!--								<ul class="dropdown-menu sub-menu">-->
<!--									<li><a href="#">600x600-mm-digital-glossy-floor-tiles</a></li>-->
<!--									<li><a href="#">600x600-mm-digital-matt-floor-tiles</a></li>-->
<!--									<li><a href="#">600x600-mm-non-digital-floor-tiles</a></li>									-->
<!--								</ul>-->
								<li><a href="wall.php">WALL</a>
<!--								<ul class="dropdown-menu sub-menu">-->
<!--									<li><a href="#">Sub One</a></li>-->
<!--									<li><a href="#">Sub Two</a></li>-->
<!--									<li><a href="#">Sub Three</a></li>-->
<!--									<li><a href="#">Sub Four</a></li>-->
<!--								</ul>-->
						</ul>
							</li>
							<!-- <li class="dropdown"><a href="javascript:{}">Extras</a> -->
						<!-- <ul class="dropdown-menu">
								<li><a href="dribbble_stream.html">Dribbble Stream</a></li>
								<li><a href="alt_footer.html">Alt. Footer & Boxes</a></li>
								<li><a href="pricing_table.html">Pricing Table</a></li>
								<li><a href="404.html">404 Page</a></li>
						</ul> -->
							<!-- </li> -->
							<!-- <li class="dropdown page_drop_down "><a href="javascript:{}">Blog</a> -->
						<!-- <ul class="dropdown-menu">
								<li><a href="blog.html">Blog</a></li>
								<li><a href="blog_two.html">Blog II</a></li>
								<li><a href="blog_post.html">Blog Post</a></li>
								<li><a href="blog_post2.html">Blog Post II</a></li>
						</ul> -->
							<!-- </li> -->
							<li class="dropdown page_drop_down" id="contact"><a href="contact.php">Contact</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	<!--//header-->