<div class="col-md-4 sidebar pull-left" role="complementary" itemscope="itemscope" itemtype="http://schema.org/WPSideBar">

	<?php 
	if (is_page_template('templates/tpl-homepage-noslider.php')) {
		gabfire_dynamic_sidebar('sidebar-5');
		
	} elseif (is_page_template('templates/tpl-homepage-bigslider.php')) { 
		gabfire_dynamic_sidebar('sidebar-3');
		
	} else {
		gabfire_dynamic_sidebar('sidebar-1');	
	}

	  get_template_part('loops/sidebar-tabbedposts');
	  
	if (is_page_template('templates/tpl-homepage-noslider.php')) {
		gabfire_dynamic_sidebar('sidebar-6');
		
	} elseif (is_page_template('templates/tpl-homepage-bigslider.php')) { 
		gabfire_dynamic_sidebar('sidebar-4');
		
	} else {
		gabfire_dynamic_sidebar('sidebar-2');	
	}
	?>
	
</div>