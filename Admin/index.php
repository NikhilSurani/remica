<?php
session_start();
require_once "config.php";
require_once "../constants.php";
if(!empty($_POST['uname']) && !empty($_POST['psw']) ){
	
	$user = $_POST['uname'];
	$pass = $_POST['psw'];
}

if (isset($_POST['login']))
{
	$que = mysql_query("SELECT * FROM login  WHERE username = '$user' AND password='$pass'");
	$no = mysql_num_rows($que);
	
	if ($no)
	{
		header ("location:list.php");
		
		$_SESSION['uname'] = $user;	
	}
	else 
	echo "Invalid";
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo SITE_TITLE; ?></title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	
	<div class="row" style="margin-top:10%">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading"><a><span	><?php echo SITE_TITLE; ?><span style="float:right">Log in</span></div>
				<div class="panel-body">
					<form role="form" action="#" method="post">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="User Name" name="uname" type="text" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="psw" type="password" value="">
							</div>
								<input type="submit" class="btn btn-primary" value="Log In" name="login">
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	
		

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
