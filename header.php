<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>

	<!--[if lt IE 9]>
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
</head>

<body <?php body_class(); ?> itemscope="itemscope" itemtype="http://schema.org/WebPage">

<div class="container">
	<header itemscope="itemscope" itemtype="http://schema.org/WPHeader">
		<div class="row">
			<div class="col-md-12">
				<div class="site-masthead">
					<nav itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
						<ul class="mastheadnav responsive_menu">

							<?php
                            if ( has_nav_menu( 'masthead' ) ) {
								wp_nav_menu( array('theme_location' => 'masthead', 'container' => false, 'items_wrap' => '%3$s'));
							} else {
								wp_list_pages('sort_column=menu_order&title_li=');
							}
							?>

							<?php if (get_option('sharp_socialhead' ) == 1) { ?>

								<li class="pull-right social_header">

    								<?php
        								$icon_facebook = get_option('sharp_facebook');
        								$icon_twitter = get_option('sharp_twitter');
        								$icon_gplus = get_option('sharp_gplus');
        								$icon_linkedin = get_option('sharp_linkedin');
        								$icon_pinterest = get_option('sharp_pinterest');
        								$icon_tumblr = get_option('sharp_tumblr');
        								$icon_instagram = get_option('sharp_instagram');
        								$icon_youtube = get_option('sharp_youtube');
        								$icon_vimeo = get_option('sharp_vimeo');
        								$icon_email = get_option('sharp_email');
        								$icon_rss = get_option('sharp_rss');
    								?>

									<?php if ( $icon_facebook <> "" ) { ?>
										<a href="<?php echo $icon_facebook; ?>" data-toggle="tooltip" title="<?php _e('Facebook', 'gabfire'); ?>" rel="nofollow"><span><?php _e('Friend on Facebook','gabfire'); ?></span>
											<i class="fa fa-facebook pull-left"></i>
										</a>
									<?php } ?>

									<?php if ( $icon_twitter <> "" ) { ?>
										<a href="<?php echo $icon_twitter; ?>" title="<?php _e('Twitter', 'gabfire'); ?>" rel="nofollow"><span><?php _e('Follow on Facebook','gabfire'); ?></span>
											<i class="fa fa-twitter pull-left"></i>
										</a>
									<?php } ?>

									<?php if ( $icon_gplus <> "" ) { ?>
										<a href="<?php echo $icon_gplus; ?>" title="<?php _e('Google+', 'gabfire'); ?>" rel="nofollow"><span><?php _e('Add to Google+ Circle','gabfire'); ?></span>
											<i class="fa fa-google-plus pull-left"></i>
										</a>
									<?php } ?>

									<?php if ( $icon_linkedin <> "" ) { ?>
										<a href="<?php echo $icon_linkedin; ?>" title="<?php _e('LinkedIn', 'gabfire'); ?>" rel="nofollow"><span><?php _e('Connect on Linked in','gabfire'); ?></span>
											<i class="fa fa-linkedin pull-left"></i>
										</a>
									<?php } ?>

									<?php if ( $icon_pinterest <> "" ) { ?>
										<a href="<?php echo $icon_pinterest; ?>" title="<?php _e('Pinterest', 'gabfire'); ?>" rel="nofollow"><span><?php _e('Follow on Pinterest','gabfire'); ?></span>
											<i class="fa fa-pinterest pull-left"></i>
										</a>
									<?php } ?>

									<?php if ( $icon_tumblr <> "" ) { ?>
										<a href="<?php echo $icon_tumblr; ?>" title="<?php _e('tumblr', 'gabfire'); ?>" rel="nofollow"><span><?php _e('Follow on Tumblr','gabfire'); ?></span>
											<i class="fa fa-tumblr pull-left"></i>
										</a>
									<?php } ?>

									<?php if ( $icon_instagram <> "" ) { ?>
										<a href="<?php echo $icon_instagram; ?>" title="<?php _e('Instagram', 'gabfire'); ?>" rel="nofollow"><span><?php _e('Find on Instagram','gabfire'); ?></span>
											<i class="fa fa-instagram pull-left"></i>
										</a>
									<?php } ?>

									<?php if ( $icon_vimeo <> "" ) { ?>
										<a href="<?php echo $icon_vimeo; ?>" title="<?php _e('Vimeo', 'gabfire'); ?>" rel="nofollow"><span><?php _e('Watch on Vimeo','gabfire'); ?></span>
											<i class="fa fa-vimeo-square pull-left"></i>
										</a>
									<?php } ?>

									<?php if ( $icon_youtube <> "" ) { ?>
										<a href="<?php echo $icon_youtube; ?>" title="<?php _e('Youtube', 'gabfire'); ?>" rel="nofollow"><span><?php _e('Watch on YouTube','gabfire'); ?></span>
											<i class="fa fa-youtube pull-left"></i>
										</a>
									<?php } ?>

									<?php if ( $icon_email <> "" ) { ?>
										<a href="<?php echo $icon_email; ?>" title="<?php _e('Subscribe by Email', 'gabfire'); ?>" rel="nofollow"><span><?php _e('Subscribe by Email','gabfire'); ?></span>
											<i class="fa fa-envelope-o pull-left"></i>
										</a>
									<?php } ?>

									<a href="<?php if ( $icon_rss <> "" ) { echo $icon_rssl; } else { echo bloginfo('rss2_url'); } ?>" title="<?php _e('Site feed', 'gabfire'); ?>" rel="nofollow">
										<span><?php _e('Subscribe to RSS','gabfire'); ?></span> <i class="fa fa-rss pull-left"></i>
									</a>

							</li>

							<?php } ?>

							<li class="pull-right gabfire_headersearch"> <a data-toggle="modal" href="#searchModal"><i class="fa fa-search"></i> <?php _e('Search','gabfire'); ?></a></li>

						</ul>
					</nav>

					<!-- Modal -->
					<div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
						<div class="modal-dialog">
						  <div class="modal-content">
							<div class="modal-header">
							  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							  <h4 class="modal-title"><?php _e('Search in Site','gabfire'); ?></h4>
							</div>
							<div class="modal-body">
								<form action="<?php echo esc_url( home_url( '/' ) ); ?>">
									<div class="input-prepend">
										<label><?php _e('To search in site, type your keyword and hit enter', 'gabfire'); ?></label>
										<input type="text" name="s" class="form-control" placeholder="<?php _e('Type keyword and hit enter', 'gabfire'); ?>">
									</div>
								</form>
							</div>
							<div class="modal-footer">
							  <button type="button" class="btn btn-default" data-dismiss="modal"><?php _e('Close','gabfire'); ?></button>
							</div>
						  </div><!-- /.modal-content -->
						</div><!-- /.modal-dialog -->
					</div><!-- /.modal -->
				</div>
			</div>
		</div><!-- /.row -->

		<div class="row logo-banner">

			<div class="col-sm-12 col-md-12 col-lg-4">

				<div class="sitelogo" style="padding:<?php echo get_option('sharp_padding_top', 0); ?>px 0px <?php echo get_option('sharp_padding_bottom', 0); ?>px <?php echo get_option('sharp_padding_left', 0); ?>px;">
					<?php if ( get_option('sharp_logo_type') == 'image') { ?>
						<div itemprop="headline">
							<a href="<?php echo home_url('/'); ?>" title="<?php bloginfo('description'); ?>">
								<img src="<?php echo get_option('sharp_logo'); ?>" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>"/>
							</a>
						</div>
					<?php } else { ?>
						<h1 itemprop="headline">
							<a href="<?php echo home_url('/'); ?>" title="<?php bloginfo('name'); ?>"><?php echo get_bloginfo('name'); ?></a>
							<span><a itemprop="description" href="<?php echo home_url('/'); ?>" title="<?php bloginfo('description'); ?>"><?php echo get_option('description'); ?></a></span>
						</h1>
					<?php } ?>
					<div class="clearfix"></div>
				</div><!-- .logo -->

			</div>

			<div class="headerbanner col-sm-12 col-md-12 col-lg-8 pull-right hidden-xs">
				<div class="innerad">
					<?php sharp_dynamic_sidebar('header-ad'); ?>
				</div>
			</div>
		</div>

		<div class="row site-nav">
			<div class="col-md-12">
				<nav class="main-navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
					<ul class="mainnav responsive_menu">
						<?php
						if ( has_nav_menu( 'primary' ) ) {
							wp_nav_menu( array('theme_location' => 'primary', 'container' => false, 'items_wrap' => '%3$s'));
						} else {
							wp_list_categories('title_li=');
						}

						$colored_itemcount = get_option('sharp_navcolornr');
						$options = array();
						for ($i=1; $i<=$colored_itemcount;$i++) {

						$catname =  get_cat_name(get_option('sharp_navlink'.$i));
						?>
							<li class="color<?php echo $i; ?> colored-nav-item">
								<a href="<?php echo get_category_link(get_option('sharp_navlink'.$i)); ?>" style="background-color:<?php echo get_option('sharp_navcolor'.$i); ?>"><?php echo $catname; ?></a>
							</li><?php echo "\n";
						}
						?>
					</ul>
				</nav>
			</div>
		</div>

	</header>