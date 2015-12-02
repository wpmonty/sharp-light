<?php $tabbedpostsnr = get_option('sharp_tabnr1') + get_option('sharp_tabnr2') + get_option('sharp_tabnr3') + get_option('sharp_tabnr4'); ?>
	<?php if (intval($tabbedpostsnr) > 0 ) { ?>
	<div class="sidebar-slider widget">
		<h3 class="widgettitle"><?php echo get_option('sharp_tabtitle'); ?></h3>
		<ul class="tabs-sidebar-titles" data-tabs="tabs">
			<?php
			$cat_count = 4;
			$options = array();
			for ($i=1; $i<=$cat_count;$i++) {
				
				$catname = get_cat_name(get_option('sharp_tabcat'.$i));
				
				if ($i == 1) {
					$class = 'active';
				}
				else {
					$class = '';
				}

				if(get_option('sharp_tabnr'.$i) !== '0' ) {
					echo "<li class='$class'><a href='#sidebartab$i' data-toggle='tab'>$catname</a></li>\n";
				} 
			}
			?>
		</ul>

		<div class="tab-content">
			<?php 
			$cat_count = 4;
			$options = array();

			for ($i=1; $i<=$cat_count;$i++) {
				if(0 < strlen($variable = get_option('sharp_tabnr'.$i))) {
					$options[$i]['posts_per_page'] = $variable;
				}
				if(0 < strlen($variable = get_option('sharp_tabcat'.$i))) {
					$options[$i]['cat'] = $variable;
				}
			}

			$current = 1;
			foreach ($options as $id => $option)
			{
				 if (0 == $options[$id]['posts_per_page']) {
					continue;
				}
			?>
				<div class="tab-pane<?php if ($current == 1) { echo ' active'; } ?>" id="sidebartab<?php echo $current; ?>">
					<div class="sidebar-tabbedposts">
						<?php
						$count = 1;
						$args = array(
						  'post__not_in'=> $GLOBALS['do_not_duplicate'],
						  'posts_per_page' => $options[$id]['posts_per_page'], 
						  'cat' => $options[$id]['cat']
						);
						$wp_query = new WP_Query();$wp_query->query($args); 
						while ($wp_query->have_posts()) : $wp_query->the_post();						
						if (get_option('sharp_dnd') == 1) { $do_not_duplicate = $post->ID; }
						?>	
							<article>
								<?php 
								gabfire_media(array(
								'name' => 'th-block5', 
								'imgtag' => 1,
								'link' => 1,
								'enable_video' => 0, 
								'video_id' => 'featured',
								'enable_thumb' => 1, 
								'resize_type' => 'c', 
								'media_width' => 500, 
								'media_height' => 294, 
								'thumb_align' => 'alignnone',
								'enable_default' => 0
								));
								?>
								<div class="post-caption">
									<h2 class="sidebar-entry-title">
										<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'gabfire' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
									</h2>									
								</div>
							</article>
						<?php $count++; endwhile; wp_reset_query(); ?>							
					</div>
					<div class="sidebar-slider-pager sidebarpager<?php echo $current; ?>"></div>
				</div>
			<?php $current++; } ?>
		</div>							
	</div><!-- Sidebar Slider -->
	<?php 
	if (get_option('sharp_sidebartimeout') == 0) {
		$rotate = 'false';
	} else {
		$rotate = 'true';
		$speed = get_option('sharp_sidebartimeout') . '000';
	} 
	?>
	<script type="text/javascript">			
	(function($) {
		$(document).ready(function() {
			$('#sidebartab1 > div,#sidebartab2 > div,#sidebartab3 > div,#sidebartab4 > div').owlCarousel({
				loop				: true,
				nav					: false,
				dots				: true,
				mouseDrag			: false,
				touchDrag			: true,
				autoplay			: <?php echo $rotate; ?>,
				autoplayTimeout		: <?php echo $speed; ?>,
				animateOut			: 'fadeOut',
				items				: 1,
				autoplay			: true,
				autoHeight			: true
			});	
		});
	})(jQuery);				
	</script>
<?php } ?>