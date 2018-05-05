<?php
session_start();
include "config.php";
if (isset($_SESSION['uname']))
{
		if (isset($_POST['change']))
		{
			$que = mysql_query("SELECT * FROM login WHERE username  = '$_SESSION[uname]'");
			$res = mysql_fetch_array($que);
			$opass = $_POST['old'];
			$pass1 = $_POST['password'];
			$pass2 = $_POST['password1'];
			if ($opass == $res['password'])
				{
					if ($pass1 == $pass2)
					{
								$que1 = mysql_query("UPDATE login SET password = '$pass1' WHERE id = '$res[id]'");
								session_destroy();
								header("location:index.php");
					}
					else
					echo "password dose not match";
				}
				else
					echo "Enter correct old password";

		}
	
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SiddharthManufacturing</title>

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
				<div class="panel-heading">Log in</div>
				<div class="panel-body">
					<form role="form" action="#" method="post">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Old Password" name="old" type="password" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="New Password" name="password" type="password" value="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Conform Password" name="password1" type="password" value="">
							</div>
								<input type="submit" class="btn btn-primary" value="Change Password" name="change">
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
<?php


}
else 
echo "You are not allowed";
?>
