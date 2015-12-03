	<footer itemscope="itemscope" itemtype="http://schema.org/WPFooter">

		<div class="row">
			<div class="col-xs-12">
				<?php sharp_dynamic_sidebar('footer-full'); ?>
			</div>
		</div>

		<div class="row">
    		<div class="footer-widgets">
        		<div class="col-xs-6 col-sm-6 col-md-3">
            		<?php sharp_dynamic_sidebar('footer-1'); ?>
        		</div>
        		<div class="col-xs-6 col-sm-6 col-md-3">
            		<?php sharp_dynamic_sidebar('footer-2'); ?>
        		</div>
        		<div class="col-xs-6 col-sm-6 col-md-3">
            		<?php sharp_dynamic_sidebar('footer-3'); ?>
        		</div>
        		<div class="col-xs-6 col-sm-6 col-md-3">
            		<?php sharp_dynamic_sidebar('footer-4'); ?>
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