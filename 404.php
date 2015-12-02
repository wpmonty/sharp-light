<?php get_header(); ?>
	
	<?php /* Post lead */ ?>
	<section class="row">
		<div class="col-md-12">
			<div class="post-lead">
				<h1 class="post-title"><?php _e( 'Page Not Found', 'gabfire' ); ?></h1>
			
				<p class='subtitle bigpicture_subtitle'><?php _e( 'It looks like nothing was found at this location.', 'gabfire' ); ?></p>
			</div>
		</div>
	</section>
	
	<section class="row">
		<div class="col-xs-12 col-md-8">		
			
			<article <?php post_class('entry'); ?>>		
				<p><?php _e('Oops. Something obviously isn\'t right if you\'re reading this. The page you are looking for does not exist; it may have been moved, or removed altogether. If you were looking for specific content, please try searching for it in the search box below.', 'gabfire') ; ?></p>
								
				<form class="" role="search" method="get" action="<?php echo home_url( '/' ); ?>">
				  <div class="form-group">
					<input type="text" class="form-control input-medium " name="s" placeholder="<?php _e('Type Keyword & Hit Enter','gabfire'); ?>">
				  </div>
				</form>				
			</article>					
		</div><!-- col-md-8 --><div class="clearfix hidden-lg hidden-md"></div>

		<?php get_sidebar(); ?>

	</section>
		
<?php get_footer(); ?>