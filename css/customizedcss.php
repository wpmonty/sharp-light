<?php
echo "<style type='text/css' media='screen'>";

	$fonts = array( 'Georgia, serif',
					'"Palatino Linotype", "Book Antiqua", Palatino, serif',
					'"Times New Roman", Times, serif',
					'Arial, Helvetica, sans-serif',
					'Tahoma, Geneva, sans-serif',
					'"Trebuchet MS", Helvetica, sans-serif',
					'Verdana, Geneva, sans-serif'
				  );

	if(get_option('sharp_bodytype') == 1) {
		echo "body,article p,.entry p,.primarytop-midlist .posttitle a {";
			$body_fontfamily = $fonts[get_option('sharp_bodyfontfamily')];
			$body_fontsize   = get_option('sharp_bodyfontsize') . 'px';
			$body_fontcolor  = get_option('sharp_bodyfontcolor');
			$body_lineheight = get_option('sharp_bodyfontsize') + 4 . 'px';
			
			if ($body_fontfamily != '' ) { echo "font-family: $body_fontfamily;"; }
			if ($body_fontsize   != '' ) { echo "font-size: $body_fontsize;"; }
			if ($body_fontcolor  != '' ) { echo "color: $body_fontcolor;"; }
			if ($body_fontsize  != '' ) { echo "line-height: $body_lineheight;"; }
		echo "}";
	}

	if(get_option('sharp_change_colors') == 1) {
		$light_red = get_option('sharp_light_red');
		echo "
		a,
		.posttitle a:hover,
		.widgetinner a,
		.post-column .highlight,
		.gab_custom_query .widgetinner a:hover,
		.primarytop-midlist .posttitle a,
		.sidebar-slider-pager a.cycle-pager-active,
		article.entry h1, article.entry h2, article.entry h3, article.entry h4, article.entry h5, article.entry h6,
		.highlightme
		.below-fea-left .belowfea_firstcol .btn,
		.inner-cycle .template-pager span.cycle-pager-active {color:$light_red}

		.m_gallery .gallerycaption,
		#respond .form-submit #submit:hover,
		.sidebarsocial a:hover,
		nav .mastheadnav li ul li a:hover,
		nav .mastheadnav li li.has-child-menu > a:hover,
		nav .mainnav li ul li a:hover,
		nav .mainnav li li.has-child-menu > a:hover,
		nav .mainnav li.colored-nav-item a:hover, 
		.widget.events,
		.sidebarsocial a:hover,
		.footer-nav nav a:hover.colored-nav-item,
		.archive-pagination .page-numbers:hover,
		.post-lead p.post-category {background-color:$light_red !important}";
	}
echo "</style>";