<?php 
$count = 1;
if (have_posts()) : while (have_posts()) : the_post();

if ((!is_paged()) and ($count < 4)) { ?>
	<?php if($count == 1) { ?>
	<section class="row archive-mag-top"><?php } ?>
		
		<div class="col-md-4 col-sm-4">
			<article <?php post_class('mag_latest'); ?>>
				<div class="arc_maglatest_media">
					<?php
					gabfire_media(array(	
						'name' => 'th-mag1', 
						'imgtag' => 1,
						'link' => 1,
						'enable_video' => 0, 
						'video_id' => 'postfull',
						'enable_thumb' => 1, 
						'resize_type' => 'c', 
						'media_width' => 360, 
						'media_height' => 245, 
						'thumb_align' => 'postmedia',
						'enable_default' => 0
					)); 
					?>
					<img class="post_topleft" src="<?php echo get_template_directory_uri(); ?>/images/star.png" alt="" />
				</div>
				
				<div class="arc_maglatest_desc">
				
					<?php gabfire_postmeta(true,true,false,false,false,false,true); ?>
					
					<h2 class="entry-title">
						<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf( esc_attr__( 'Permalink to %s', 'gabfire' ), the_title_attribute( 'echo=0' ) ); ?>" ><?php the_title(); ?></a>
					</h2>
					
					<p class="postexcerpt"><?php echo string_limit_words(14); ?></p>
				</div>
			</article>
		</div>
		
	<?php if($count == 3) { ?>
	</section>
	
	<section class="row archive-mag-bottom">
		<div class="col-xs-12 col-md-8 archive-withsidebar">		
			<div class="row">
				<div class="col-md-3 mag-leftsidebar"><?php gabfire_dynamic_sidebar('archive-mag-left'); ?></div>
				<div class="col-md-9"><?php } ?>
<?php } ?>
					
					<?php if($count == 4 ) { ?>
						<article <?php post_class('entry'); ?>>
							<div class="mag_bigmedia">
								<?php
								gabfire_media(array(	
									'name' => 'th-loopgrid-1',
									'imgtag' => 1,
									'link' => 1,
									'enable_video' => 0, 
									'video_id' => 'postfull',
									'enable_thumb' => 1, 
									'resize_type' => 'c', 
									'media_width' => 555, 
									'media_height' => 343, 
									'thumb_align' => 'postmedia',
									'enable_default' => 0
								)); 
								?>
								<h2 class="entry-title title_onmedia hidden-sm hidden-xs">
									<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf( esc_attr__( 'Permalink to %s', 'gabfire' ), the_title_attribute( 'echo=0' ) ); ?>" ><?php the_title(); ?></a>
								</h2>	
							</div>
							
							<div class="mag_excerpt">
								<h2 class="entry-title visible-sm visible-xs">
									<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf( esc_attr__( 'Permalink to %s', 'gabfire' ), the_title_attribute( 'echo=0' ) ); ?>" ><?php the_title(); ?></a>
								</h2>								
								<p><?php echo string_limit_words(30); ?></p>
								<p class="postmeta">
									<?php
									gabfire_bydate();
									gabfire_commentsnr();
									?>
								</p>						
							</div>
							<div class="clearfix visible-sm"></div>
						</article>
						<?php }?>
						

						<?php if (($count == 5) or ($count == 6)) { ?>
							<?php if ($count == 5) { $postclass = 'entry pull-left'; } else { $postclass = 'entry pull-right'; } ?>
							<article <?php post_class($postclass); ?>>
									<?php
									gabfire_media(array(	
										'name' => 'th-mag2', 
										'imgtag' => 1,
										'link' => 1,
										'enable_video' => 0, 
										'video_id' => 'postfull',
										'enable_thumb' => 1, 
										'resize_type' => 'c', 
										'media_width' => 265, 
										'media_height' => 155, 
										'thumb_align' => 'aligncenter hidden-sm',
										'enable_default' => 0
									)); 
									?>
									<h2 class="entry-title s_posttitle">
										<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf( esc_attr__( 'Permalink to %s', 'gabfire' ), the_title_attribute( 'echo=0' ) ); ?>" ><?php the_title(); ?></a>
									</h2>	
								
									<p><?php echo string_limit_words(18); ?></p>
									<p class="postmeta">
										<?php
										gabfire_bydate();
										gabfire_commentsnr();
										?>								
									</p>						
							</article>
						<?php } ?>						
						
						<?php if($count == 7 ) { ?>
							<div class="clearfix"></div>
							<article <?php post_class('entry'); ?>>
								<div class="mag_bigmedia">
									<?php
									gabfire_media(array(	
										'name' => 'th-loopgrid-1', 
										'imgtag' => 1,
										'link' => 1,
										'enable_video' => 0, 
										'video_id' => 'postfull',
										'enable_thumb' => 1, 
										'resize_type' => 'c', 
										'media_width' => 555, 
										'media_height' => 343, 
										'thumb_align' => 'postmedia',
										'enable_default' => 0
									)); 
									?>
									<h2 class="entry-title title_onmedia hidden-sm hidden-xs">
										<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf( esc_attr__( 'Permalink to %s', 'gabfire' ), the_title_attribute( 'echo=0' ) ); ?>" ><?php the_title(); ?></a>
									</h2>	
								</div>
								
								<div class="mag_excerpt">
									<h2 class="entry-title visible-sm visible-xs">
										<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf( esc_attr__( 'Permalink to %s', 'gabfire' ), the_title_attribute( 'echo=0' ) ); ?>" ><?php the_title(); ?></a>
									</h2>		
									<p><?php echo string_limit_words(30); ?></p>
									<p class="postmeta">
										<?php
										gabfire_bydate();
										gabfire_commentsnr();
										?>								
									</p>						
								</div>
								<div class="clearfix visible-sm"></div>
							</article>
							<?php }?>		

						<?php if (($count == 8) or ($count == 9)) { ?>
							<?php if ($count == 8) { $postclass = 'entry pull-left'; } else { $postclass = 'entry pull-right'; } ?>
							
							<article <?php post_class($postclass); ?>>
									<?php
									gabfire_media(array(	
										'name' => 'th-mag2', 
										'imgtag' => 1,
										'link' => 1,
										'enable_video' => 0, 
										'video_id' => 'postfull',
										'enable_thumb' => 1, 
										'resize_type' => 'c', 
										'media_width' => 265, 
										'media_height' => 155, 
										'thumb_align' => 'aligncenter hidden-sm',
										'enable_default' => 0
									)); 
									?>
									<h2 class="entry-title s_posttitle">
										<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf( esc_attr__( 'Permalink to %s', 'gabfire' ), the_title_attribute( 'echo=0' ) ); ?>" ><?php the_title(); ?></a>
									</h2>	
								
									<p><?php echo string_limit_words(18); ?></p>
									<p class="postmeta">
										<?php
										gabfire_bydate();
										gabfire_commentsnr();
										?>							
									</p>						
							</article>
						<?php } ?>								
					<?php $count++; endwhile; else: endif; ?>
					<div class="clearfix"></div>
					
					<div class="mag_moreposts"><?php posts_nav_link('','', __('MORE POSTS', 'gabfire')); ?> <i class="fa fa-angle-double-right"></i></div>
				</div>
			</div>
			<div class="clearfix"></div>	
		</div><!-- col-md-8 -->
		<div class="clearfix hidden-lg hidden-md"></div>

		<?php get_sidebar(); ?>
	</section>