<?php
session_start();
include "config.php";

include_once("constants.php");

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
			<li class="active"><a href="list.php"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"></use></svg> List Item</a></li>
			<li><a href="add.php"><svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"></use></svg> Add Item</a></li>
			<li><a href="update.php"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Update Item</a></li>
			<li><a href="delete.php"><svg class="glyph stroked trash"><use xlink:href="#stroked-trash"></use></svg> Delete Item</a></li>
		</ul>

	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">List Item</h1>
			</div>
		</div><!--/.row-->


	<!--Tab panel start-->		
	<div class="row">
		<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body tabs">
					
						<ul class="nav nav-pills">
							<li class="active"><a href="#pilltab1" data-toggle="tab">FLOOR</a></li>
							<li><a href="#pilltab2" data-toggle="tab">WALL</a></li>						
							
						</ul>
		
						<div class="tab-content">
							<div class="tab-pane fade in active" id="pilltab1">
								<h4>FLOOR</h4>
								<table class="table table-hover">
  								<thead>
								<tr>
								<th>No.</th>
								<th>Category</th>
								<th>Sub Category</th>
								<th>Image Title</th>
								<th>Image</th>
								<th>Status</th>
								<th>Action</th>
								
								</tr>
								</thead>
								<tbody>
								<?php
									$que = mysql_query("SELECT * FROM products where type=1");
									$i = 1;
									
									$res = [];
								
									while ($res = mysql_fetch_array($que))
									{
										echo "<tr scope='row'><td width='10%'>".$i."</td><td width='20%'>".$GLOBALS['MAIN_CATEGORY'] [$res['type']]."</td><td width='20%'>".$GLOBALS['SUB_CATEGORY'][$res['type']][$res['sub_type']]."</td><td width='20%'>".$res['image_title']."</td><td width='30%'><img height='50%' width='30%' class='img-responsive' src='../img/portfolio/".$res['img_origional_name']."'/></td><td>".$GLOBALS['STATUS'][$res['status']]."</td>";
										echo "<td><a href='deleteImage.php?id=".$res[0]."&status=".$res['status']."'>";
										$r = ($res['status'] == 0) ? "<span class='glyphicon glyphicon-ok'></span>" : '<span class="glyphicon glyphicon-remove"></span>';
										echo $r ."</a></td>";
										echo "</tr>";
										$i++;	
									}
									if(empty($res)) {
										echo "<tr><td colspan='7'>No Record Found.</td></tr>";
									}
								?>
								</tbody>
								</table>
							</div>
							<div class="tab-pane fade" id="pilltab2">
								<h4>WALL</h4>
								<table class="table table-hover">
  								<thead>
								<tr>
								<th>No.</th>
								<th>Category</th>
								<th>Sub Category</th>
								<th>Image Title</th>
								<th>Image</th>
								<th>Status</th>
								<th>Action</th>
								
								</tr>
								</thead>
								<tbody>
								<?php
									$que = mysql_query("SELECT * FROM products where type=2");
									$i = 1;
									
									$res = [];
								
									while ($res = mysql_fetch_array($que))
									{
										echo "<tr scope='row'><td width='10%'>".$i."</td><td width='20%'>".$GLOBALS['MAIN_CATEGORY'] [$res['type']]."</td><td width='20%'>".$GLOBALS['SUB_CATEGORY'][$res['type']][$res['sub_type']]."</td><td width='20%'>".$res['image_title']."</td><td width='30%'><img height='50%' width='30%' class='img-responsive' src='../img/portfolio/".$res['img_origional_name']."'/></td><td>".$GLOBALS['STATUS'][$res['status']]."</td>";
										echo "<td><a href='deleteImage.php?id=".$res[0]."&status=".$res['status']."'>";
										$r = ($res['status'] == 0) ? "<span class='glyphicon glyphicon-ok'></span>" : '<span class="glyphicon glyphicon-remove"></span>';
										echo $r ."</td>";
										echo "</tr>";
										$i++;	
									}
									if(empty($res)) {
										echo "<tr><td colspan='7'>No Record Found.</td></tr>";
									}
								?>
								</tbody>
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
	<script src="js/bootstrap-table.js"></script>
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