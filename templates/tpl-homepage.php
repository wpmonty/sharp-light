<?php
	/*
		Template Name: Homepage
	*/
	$do_not_duplicate = '';
?>

<?php get_header(); ?>

	<section class="row mainpage-tophalf">
	
		<div class="col-xs-12 col-md-8">
		
			<?php if (intval(get_option('sharp_nr')) > 0 ) { ?>
				<div class="featured-slider">				
						<?php
						if (get_option('sharp_featype') == 'mrecent') {
							$args = array(
							  'posts_per_page' => get_option('sharp_nr'),
							);
						}
						elseif (get_option('sharp_featype') == 'tagbased') {
							$args = array(
							  'posts_per_page' => get_option('sharp_nr'),
							  'tag_id' => get_option('sharp_tag')
							);
						}
						elseif (get_option('sharp_featype') == 'cfbased') {
							$args = array(
							  'post_type' => 'any',
							  'posts_per_page' => get_option('sharp_nr'),
							  'meta_key' => 'featured', 
							  'meta_value' => 'true'
							);
						}				
						else {
							$args = array(
							  'cat' => get_option('sharp_cat'), 
							  'posts_per_page' => get_option('sharp_nr')
							);
						}	
						$wp_query = new WP_Query();$wp_query->query($args); 
						while ($wp_query->have_posts()) : $wp_query->the_post();						
						if (get_option('sharp_dnd') == 1) { $do_not_duplicate[] = $post->ID; }
						
							get_template_part( 'loops/featured-slider-default' );
						
						endwhile; wp_reset_query(); 
						?>

				</div><!-- Featured Slider -->
				<?php 
				if (get_option('sharp_featimeout') == 0) {
					$rotate = 'false';
				} else {
					$rotate = 'true';
					$speed = get_option('sharp_featimeout') . '000';
				} 
				?>
				<script type="text/javascript">			
				(function($) {
					$(document).ready(function() {
						$('.featured-slider').owlCarousel({
							loop				: true,
							nav					: true,
							navText: [
							  '<i class="fa fa-angle-left"></i>',
							  '<i class="fa fa-angle-right"></i>'
							  ],
							dots				: false,
							mouseDrag			: false,
							touchDrag			: true,
							items				: 1,
							autoplay			: <?php echo $rotate; ?>,
							autoplayTimeout		: <?php echo $speed; ?>,
							animateOut			: 'fadeOut',
							autoplayHoverPause	: true
						});	
					});
				})(jQuery);				
				</script>
			<?php } ?>
			
			<div class="row">
				<div class="col-xs-12 col-sm-9 col-md-9 below-fea-left">
				
					<?php gabfire_dynamic_sidebar('primary-left-top'); ?>
					
					<div class="belowfea_firstcol">
					
						<?php if (intval(get_option('sharp_nr2')) > 0 )
						{ 
						
							gabfire_categoryname(get_option('sharp_cat2'), get_option('sharp_cap2'));

							$count = 1; 
							$args = array(
							  'post__not_in'=> $do_not_duplicate,
							  'posts_per_page' => 2, 
							  'ignore_sticky_posts' => 0,
							  'cat' => get_option('sharp_cat2')
							);		
							$wp_query = new WP_Query();$wp_query->query($args); 
							while ($wp_query->have_posts()) : $wp_query->the_post();						
							if (get_option('sharp_dnd') == 1) { $do_not_duplicate[] = $post->ID; }
							
								get_template_part('loops/primarytop-left-firstrow');	
							
							$count++; endwhile; wp_reset_query();
						} ?>
						
					</div><!-- belowfea_firstcol -->
					
					<div class="belowfea_secondcol">
					
						<?php
						if (intval(get_option('sharp_nr4')) > 0 )
						{
						
							gabfire_categoryname(get_option('sharp_cat4'), get_option('sharp_cap4'));
							
							$args = array(
							  'post__not_in'=>$do_not_duplicate,
							  'posts_per_page' => get_option('sharp_nr4'),
							  'cat' => get_option('sharp_cat4')
							);		
							$wp_query = new WP_Query();$wp_query->query($args); 
							while ($wp_query->have_posts()) : $wp_query->the_post();						
							if (get_option('sharp_dnd') == 1) { $do_not_duplicate[] = $post->ID; }
							
								get_template_part('loops/primarytop-left-secondrow');	

							endwhile; wp_reset_query();
						} ?>
					</div><!-- belowfea_secondcol -->
					
					<?php if (intval(get_option('sharp_top3nr1') + get_option('sharp_top3nr2') + get_option('sharp_top3nr3')) > 0 ) { ?>
						<div class="row belowfea_thirdcol clearfix">	

							<?php for ($i=1; $i <= 3; $i++) { ?>
							
								<div class="col-xs-4 col-sm-4 col-md-4">
									<?php
									$catid = get_option('sharp_top3cat'.$i);
									$postnr = get_option('sharp_top3nr'.$i);

									if (intval($postnr) > 0 ) {
										
										$args = array(
										  'post__not_in'=>$do_not_duplicate,
										  'posts_per_page' => $postnr,
										  'cat' => $catid
										);	

										$wp_query = new WP_Query();$wp_query->query($args); 
										while ($wp_query->have_posts()) : $wp_query->the_post();
										
										if (get_option('sharp_dnd') == 1) { $do_not_duplicate[] = $post->ID; }
										
											get_template_part('loops/primarytop-left-thirdrow');
											
										endwhile; wp_reset_query();
									}
									?>
								</div>
								
							<?php } ?>
							
						</div><!-- belowfea_thirdcol -->
					<?php } ?>
					
					<?php gabfire_dynamic_sidebar('primary-left-bottom'); ?>
				</div>
				
				<div class="col-xs-12 col-sm-3 col-md-3 primarytop-mid">
					<?php gabfire_dynamic_sidebar('primary-mid-top'); ?>
				
					<div class="widget text-center">
						<?php if ( get_option('sharp_cap3img') <> "" ) { ?>
							<a href="<?php echo get_category_link(get_option('sharp_cat3'));?>">
								<img src="<?php echo get_option('sharp_cap3img'); ?>" class="aligncenter gabfire-image-caption" alt="" />
							</a>
						<?php } else { ?>
							<p class="catname">
								<a href="<?php echo get_category_link(get_option('sharp_cat3'));?>">
									<?php if ( get_option('sharp_cap3') <> "" ) { 
										echo get_option('sharp_cap3'); 
									} else { 
										echo get_cat_name(get_option('sharp_cat3')); 
									} ?>
								</a>
							</p>
						<?php } ?>
						
						<div class="primarytop-midlist">
						
							<?php if (intval(get_option('sharp_nr3')) > 0 ) {
								
								$args = array(
								  'cat' => get_option('sharp_cat3'), 
								  'posts_per_page' => get_option('sharp_nr3')
								);
								$wp_query = new WP_Query();$wp_query->query($args); 
								while ($wp_query->have_posts()) : $wp_query->the_post();				
								if (get_option('sharp_dnd') == 1) { $do_not_duplicate[] = $post->ID; }
								
									get_template_part('loops/primarytop-midcol');
								
								endwhile; wp_reset_query();
								
							} ?>
							
						</div>
					</div><!-- widget -->
					
					<?php gabfire_dynamic_sidebar('primary-mid-bottom'); ?>
					
					<div class="clearfix visible-xs"></div>
					
				</div><!-- primarytop-mid -->
				
			</div><!-- row -->
			
		</div><!-- col-md-8 -->
		
		<div class="clearfix hidden-lg hidden-md"></div>
		
		<?php get_sidebar(); ?>
		
	</section><!-- row mainpage tophalf-->	
	
	<?php if (intval(get_option('sharp_subnr1') + get_option('sharp_subnr1') + get_option('sharp_subnr1') + get_option('sharp_subnr4')) > 0 ) { ?>
		<section class="row subnews">
			<?php 				
			$cat_count = 4; /* foreach loop will be repeated four times */
			$current = 1; /* we will use this var to get the index of current foreach */
			$widgetid = 1; /* We need to start an id for 8 of widget zones that will increment by one after each widget display   */

			// RGB Colors for categories on subnews
			$rgb1 = gabfire_hex2rgb(get_option('sharp_subnew1color'));
			$rgb2 = gabfire_hex2rgb(get_option('sharp_subnew2color'));
			$rgb3 = gabfire_hex2rgb(get_option('sharp_subnew3color'));
			$rgb4 = gabfire_hex2rgb(get_option('sharp_subnew4color'));
				
			$options = array();

			// set default if no option selected
			if (get_option('sharp_subcat1') == '') { update_option('sharp_subcat1', 1); }
			if (get_option('sharp_subcat2') == '') { update_option('sharp_subcat2', 1); }
			if (get_option('sharp_subcat3') == '') { update_option('sharp_subcat3', 1); }
			if (get_option('sharp_subcat4') == '') { update_option('sharp_subcat4', 1); }
			
			for ($i=1; $i<=$cat_count;$i++) {
				if(0 < strlen($variable = get_option('sharp_subnr'.$i))) {
					$options[$i]['posts_per_page'] = $variable;
				}
				if(0 < strlen($variable = get_option('sharp_subcat'.$i))) {
					$options[$i]['cat'] = $variable;
				}
			}
			
			foreach ($options as $id => $option)
			{
				if (0 == $options[$id]['posts_per_page']) {
					continue;
				}
				
				if ($current == 1 ) { 
					$rgb = implode(',',$rgb1);
				} elseif ($current == 2 ) { 
					$rgb = implode(',',$rgb2);
				} elseif ($current == 3 ) { 
					$rgb = implode(',',$rgb3);
				} elseif ($current == 4 ) { 
					$rgb = implode(',',$rgb4);
				}
				?>

				<div class="col-xs-6 col-sm-6 col-md-3 subnewscol col<?php echo $current; ?>">

					<?php gabfire_dynamic_sidebar( 'primarybottom-'.$widgetid ); ?>
					
					<span class="topspan" style="background-color: rgb(<?php echo $rgb; ?>);"></span>

					<?php
					$catid = $options[$id]['cat'];
					$postnr =  $options[$id]['posts_per_page'];
					if ( get_option('sharp_subcap'.$current) <> "" ) { 
						$catname = get_option('sharp_subcap'.$current);
					} else { 
						$catname =  get_cat_name($options[$id]['cat']); 
					} 

					$count = 1; 
					$args = array(
					  'post__not_in'=>$do_not_duplicate,
					  'posts_per_page' =>  $postnr,
					  'cat' => $catid
					);	
					$wp_query = new WP_Query();$wp_query->query($args); 
					while ($wp_query->have_posts()) : $wp_query->the_post();						
					if (get_option('sharp_dnd') == 1) { $do_not_duplicate[] = $post->ID; }
					
						get_template_part('loops/primarybottom-4col');
					
					$count++; endwhile; wp_reset_query();
					?>
				</div>
				
			<?php
			$current++;$widgetid++;;
			} ?>
		</section>
	<?php } ?>
	
<?php get_footer(); ?>