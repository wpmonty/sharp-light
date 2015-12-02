<?php
	$count = 1;
	if (have_posts()) : while (have_posts()) : the_post();
	if ($count % 3 == 0) {
		$postclass = 'entry pull-left nomarginright';
	} else { 
		$postclass = 'entry pull-left';
	}
	?>
	
		<?php if ((!is_paged()) and ($count < 4)) { ?>
		
		<?php if($count == 1) { ?>
		
		<?php 
		if (get_option('sharp_mediatimeout') == 0) {
			$rotate = 'false';
		} else {
			$rotate = 'true';
			$speed = get_option('sharp_mediatimeout') . '000';
		} 
		?>
		<script type="text/javascript">			
		(function($) {
			$(document).ready(function() {
				$('.inner-cycle').owlCarousel({
					loop				: true,
					nav					: true,
					navText: [
					  '<i class="fa fa-angle-left"></i>',
					  '<i class="fa fa-angle-right"></i>'
					  ],
					dots				: true,
					mouseDrag			: false,
					touchDrag			: true,
					items				: 1,
					autoplay			: <?php echo $rotate; ?>,
					autoplayTimeout		: <?php echo $speed; ?>,
					animateOut			: 'fadeOut',
					autoHeight			: true
				});	
			});
		})(jQuery);				
		</script>
		
		<div class="inner-cycle">
		<?php } ?>
			<article <?php post_class(); ?> itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">	
				<?php
				gabfire_media(array(	
					'name' => 'postthumbnail-big', 
					'imgtag' => 1,
					'link' => 1,
					'enable_video' => 0, 
					'video_id' => 'postfull',
					'enable_thumb' => 1, 
					'resize_type' => 'c', 
					'media_width' => 1120, 
					'media_height' => 500, 
					'thumb_align' => '',
					'enable_default' => 0
				)); 
				?>				
				<div class="postcaption">
					<h2 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf( esc_attr__( 'Permalink to %s', 'gabfire' ), the_title_attribute( 'echo=0' ) ); ?>"><?php the_title(); ?></a></h2>
					<p class="postmeta hidden-xs"><?php gabfire_bydate(); ?></p>									
					<p class="hidden-xs"><?php echo string_limit_words(10); ?></p>
				</div>
			</article>				
		<?php if( $count == 3) { ?>
		</div>
		
		<p class="catname"><span><?php printf(__('MORE ON %s', 'gabfire'), single_cat_title()); ?></span></p>
		<?php } ?>
		
		<?php } else { ?>
			
			<article <?php post_class($postclass); ?>>	
				<?php
					gabfire_media(array(	
						'name' => 'th-loopgrid-2', 
						'imgtag' => 1,
						'link' => 1,
						'enable_video' => 1, 
						'video_id' => 'postfull',
						'enable_thumb' => 1, 
						'resize_type' => 'c', 
						'media_width' => 351, 
						'media_height' => 217, 
						'thumb_align' => 'aligncenter',
						'enable_default' => 0
					)); 
					?>
					
					<h2 class="entry-title">
						<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf( esc_attr__( 'Permalink to %s', 'gabfire' ), the_title_attribute( 'echo=0' ) ); ?>" ><?php the_title(); ?></a>
					</h2>
					
					<p class="post-datecomment">
						<?php gabfire_bydate(); ?>
						
						<?php
						/* get the number of comments */
						 $num_comments = get_comments_number();
						 if ( comments_open() ){
							  if($num_comments == 0){  $comments = __('No Comments', 'gabfire');  }
							  elseif($num_comments > 1){ $comments = $num_comments. __(' Comments', 'gabfire'); }
							  else{ $comments = __('1 Comment', 'gabfire'); }
						 }
						 echo '<span class="commentnr">' . $comments . '</span>';
						?>
					</p>
			</article>
			<?php if ($count % 3 == 0) {  echo '<div class="clearfix"></div>'; } ?>
		<?php } ?>
	<?php $count++; endwhile; else: endif; ?>
	
<?php 
gabfire_archivepagination();
wp_reset_query(); 
?>
