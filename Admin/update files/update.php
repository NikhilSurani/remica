<?php
session_start();
include "config.php";

if (isset($_SESSION['uname']))
{
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

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
<style>
.table{
	border-bottom:solid 1px #CCCCCC;
	border-top:solid 1px #CCCCCC;
}
</style>

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>Siddharth</span>Manufacturing</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> User <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="change_password.php"><svg class="glyph stroked lock"><use xlink:href="#stroked-lock"/></svg> Change Password</a></li>
							<li><a href="logout.php"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
		<li><a href="list.php"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"></use></svg> List Item</a></li>
			<li><a href="add.php"><svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"></use></svg> Add Item</a></li>
			<li class="active"><a href="update.php"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Update Item</a></li>
			<li><a href="delete.php"><svg class="glyph stroked trash"><use xlink:href="#stroked-trash"></use></svg> Delete Item</a></li>
		</ul>

	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Update Item</h1>
			</div>
		</div><!--/.row-->
		
		
			
			<!--Tab panel start-->		
	<div class="row">
		<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body tabs">
					
						<ul class="nav nav-pills">
							<li class="active"><a href="#pilltab1" data-toggle="tab">Jewellery</a></li>
							<li><a href="#pilltab2" data-toggle="tab">Catalog & Main Slider</a></li>
							<li><a href="#pilltab3" data-toggle="tab">Home Img</a></li>
						</ul>
		
						<div class="tab-content">
							<div class="tab-pane fade in active" id="pilltab1">
								<h4>Jewellery</h4>
								<table class="table table-hover">
								  <thead>
									<tr>
								<th>No.</th>
								<th>Name</th>
								<th>Image</th>
								</tr>
								</thead>
								<tbody>
								<?php
									$que = mysql_query("SELECT * FROM jew");
									while ($res = mysql_fetch_array($que))
									{
										echo "<tr scope='row'><td width='10%'>".$res['id']."</td><td width='20%'>".$res['name']."</td><td width='30%'><img height='50%' width='30%' class='img-responsive' src='images/".$res['name']."/".$res[img]."'/></td>";
										echo "<td><a href='edit.php?type=j&id=".$res[id]."'>Edit</a></td></tr>";
									}
								?>
								</tbody>
								</table>
							</div>
							<div class="tab-pane fade" id="pilltab2">
								<h4>Catalog & Slider</h4>
								<table class="table table-hover">
								  <thead>
								<th>No.</th>
								<th>Name</th>
								<th>Image</th>
								</tr></thead>
								<tbody>
								<?php
									$que1 = mysql_query("SELECT * FROM home");
									while ($res1 = mysql_fetch_array($que1))
									{
										echo "<tr scope='row'><td width='10%'>".$res1['id']."</td><td width='20%'>".$res1['name']."</td><td width='30%'><img height='50%' width='30%' class='img-responsive' src='images/".$res1['name']."/".$res1['img']."'/></td>";
										echo "<td><a href='edit2.php?type=c&id=".$res1[id]."'>Edit</a></td></tr>";
									}
								?></tbody>
								</table>
							</div>
							
							
									<div class="tab-pane fade" id="pilltab3">
								<h4>Home Img</h4>
								<table class="table table-hover">
								  <thead>
								<th>No.</th>
								<th>Name</th>
								<th>Image</th>
								</tr></thead>
								<tbody>
								<?php
									$que1 = mysql_query("SELECT * FROM h_img");
									while ($res1 = mysql_fetch_array($que1))
									{
										echo "<tr scope='row'><td width='10%'>".$res1['id']."</td><td width='30%'>".$res1['h_name']."</td><td width='30%'><img height='50%' width='30%' class='img-responsive' src='images/h_img/".$res1['h_img']."'/></td>";
										echo "<td><a href='edit2.php?type=h&id=".$res1[id]."'>Edit</a></td></tr>";
									}
								?></tbody>
								</table>
							</div>
							
							
							
							
						</div>
					</div>
				</div><!--/.panel-->
			</div><!-- /.col-->
			
		</div><!--tab panel end -->	
			
		
		
								
		
	</div>	<!--/.main-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
		$('#calendar').datepicker({
		});

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