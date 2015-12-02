	<?php if ( is_active_sidebar( 'body728xany_left' ) ) { ?>
		<section class="row bottomads">
			<div class="col-md-12">
				<div class="bottomads-innerdiv">
					<?php if ( is_active_sidebar( 'body728xany_left' ) ) { ?>
						<div class="col pull-left">
							<?php sharp_dynamic_sidebar( 'body728xany_left' ); ?>
						</div>
					<?php } ?>

					<?php if ( is_active_sidebar( 'body728xany_right' ) ) { ?>
						<div class="col pull-right">
							<?php sharp_dynamic_sidebar( 'body728xany_right' ); ?>
						</div>
					<?php } ?>
				</div>
			</div>
		</section>
	<?php } ?>

	<?php if ((get_option('sharp_navcolornr') <> '') && (intval(get_option('sharp_navcolornr')) > 0 )) { ?>
		<section class="row footer-nav hidden-xs">
			<div class="col-md-12">
				<div class="footernav-innerdiv clearfix">

					<?php if( get_option('sharp_footerlogo') == 1) { ?>
						<div class="sitelogo">
							<?php if ( get_option('sharp_logo_type') == 'image') { ?>
								<h1>
									<a href="<?php echo home_url('/'); ?>" title="<?php bloginfo('description'); ?>">
										<img src="<?php echo get_option('sharp_logo'); ?>" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>"/>
									</a>
								</h1>
							<?php } else { ?>
								<h1>
									<a href="<?php echo home_url('/'); ?>" title="<?php bloginfo('name'); ?>"><?php echo get_bloginfo('name'); ?></a>
									<span><a href="<?php echo home_url('/'); ?>" title="<?php bloginfo('description'); ?>"><?php echo get_option('description'); ?></a></span>
								</h1>
							<?php } ?>
						</div>
					<?php } ?>

					<nav>
						<?php
						$colored_itemcount = get_option('sharp_navcolornr');
						$options = array();
						for ($i=1; $i<=$colored_itemcount;$i++) {
							$catname =  get_cat_name(get_option('sharp_navlink'.$i)); ?>
							<a class="color<?php echo $i; ?> colored-nav-item" style="background-color:<?php echo get_option('sharp_navcolor'.$i); ?>" href="<?php echo get_category_link(get_option('sharp_navlink'.$i)); ?>"><?php echo $catname; ?></a><?php echo "\n";
						}
						?>
					</nav>
				</div>
			</div>
		</section>
	<?php } ?>

	<footer itemscope="itemscope" itemtype="http://schema.org/WPFooter">

		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-3">
				<?php sharp_dynamic_sidebar('footer-1'); ?>
			</div>

			<div class="col-xs-12 col-sm-6 col-md-3">
				<?php sharp_dynamic_sidebar('footer-2'); ?>
			</div>

			<div class="col-xs-12 col-sm-6 col-md-3">
				<?php sharp_dynamic_sidebar('footer-3'); ?>
			</div>

			<div class="col-xs-12 col-sm-6 col-md-3 footerlast">
				<?php sharp_dynamic_sidebar('footer-4'); ?>
			</div>
		</div>

		<div class="row">
    		<div class="footer-widgets">
        		<div class="col-xs-6 col-sm-6 col-md-3">
            		<?php sharp_dynamic_sidebar('footer-5'); ?>
        		</div>
        		<div class="col-xs-6 col-sm-6 col-md-3">
            		<?php sharp_dynamic_sidebar('footer-6'); ?>
        		</div>
        		<div class="col-xs-6 col-sm-6 col-md-3">
            		<?php sharp_dynamic_sidebar('footer-7'); ?>
        		</div>
        		<div class="col-xs-6 col-sm-6 col-md-3">
            		<?php sharp_dynamic_sidebar('footer-8'); ?>
        		</div>
    		</div>
		</div>

		<div class="row">
			<div class="footer-meta">
				<div class="col-md-12">

					<p class="footer-metaleft pull-left">
						<?php _e('Copyright','gabfire') ?> &copy; <?php echo date("Y")?> <a href="#top" title="<?php bloginfo('name'); ?>" rel="home"> <?php bloginfo('name'); ?> <?php _e('All Rights Reserved','gabfire') ?></a>
					</p><!-- #site-info -->

					<p class="footer-metaleft pull-right">
						<?php
						$del = ' ';
						printf( __( 'Powered by %s', 'gabfire'), '<strong>WordPress</strong>' );
						echo $del;
						printf( __( 'Designed by %s', 'gabfire'), '<strong>Gabfire</strong>' );
						?>
					</p> <!-- #footer-right-side -->

					<?php wp_footer(); ?>
				</div>
			</div>
		</div>
	</footer>
</div><!-- container -->

</body>
</html>