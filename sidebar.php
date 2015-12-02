<div class="col-md-4 sidebar" role="complementary" itemscope="itemscope" itemtype="http://schema.org/WPSideBar">

	<?php
	if (is_page_template('templates/tpl-homepage-noslider.php')) {
		sharp_dynamic_sidebar('home-right-sidebar');

	} elseif (is_page_template('templates/tpl-homepage-bigslider.php')) {
		sharp_dynamic_sidebar('home-right-sidebar');

	} else {
		sharp_dynamic_sidebar('default-sidebar');
	}
	?>

    <div class="clearfix"></div>
</div>