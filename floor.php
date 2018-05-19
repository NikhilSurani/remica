<?php
    include_once("header.php");
    require_once ("admin/config.php");
    require_once ("admin/constants.php");
?>

<!--page-->
<div id="banner">
		<div class="container intro_wrapper">
			<div class="inner_content">
				<h1>Work</h1>
					<h1 class="title">4 Column Portfolio</h1>
						<h1 class="intro">
							Web design is the creation of <span class="hue">digital environments</span>, that <span>facilitate</span> and encourage
							human activity; <span>reflect </span> or adapt to individual voices and content. - Jeffrey Zeldman
						</h1>
					</div>
				</div>
			</div>

			<div class="container wrapper">
			<div class="inner_content">

			<div id="options">
                    <ul id="filters" class="option-set" data-option-key="filter">
                        <li><a href="#filter" data-option-value="*" class=" selected">All</a></li>
                        <?php
                            $subTypeQuery = mysql_query("SELECT DISTINCT sub_type FROM products WHERE type = 1 AND status = 1");
                            while ($row = mysql_fetch_array($subTypeQuery)) {
                                echo '<li><a href="#filter" data-option-value=".category'.$row[0].'">'.$GLOBALS['SUB_CATEGORY'][1][$row[0]].'</a></li>';
                            }
                        ?>
                    </ul>
                    <div class="clear"></div>
                </div>
                    <!-- portfolio_block -->
					<div class="row">
                    <div class="projects">
                        <?php
                        $productSelect = mysql_query("SELECT sub_type,img_origional_name, image_title, description FROM products WHERE type = 1 and status = 1");
                        while ($row = mysql_fetch_array($productSelect)) {
                            echo '<div class="col-xs-12 col-sm-6 col-md-3 element category'.$row[0].'" data-category="category'.$row[0].'">';
                            echo '<div class="hover_img">';
							echo '<a href="img/portfolio/'.$row[1].'" data-rel="prettyPhoto[portfolio1]">';
                            echo '<img src="img/portfolio/'.$row[1].'" class="img-responsive" alt="" /></a>';
                            echo '</div>';
                            echo '<div class="item_description">';
                            echo '<a><span>'.$row[2].'</span></a><br/>';
                            echo $row[3];
                            echo '</div>';
                            echo '</div>';
                        }
                        ?>
                        <div class="clear"></div>
                    </div>
                    <!-- //portfolio_block -->
                </div>
            </div>
        </div>
	<div class="pad25 hidden-md hidden-lg"></div>
    <!--//page-->

<?php
    include_once("footer.php");
?>