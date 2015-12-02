<dl <?php post_class(); ?>>
	<dt class="entry-title">
		<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf( esc_attr__( 'Permalink to %s', 'gabfire' ), the_title_attribute( 'echo=0' ) ); ?>" >
			<i class="fa fa-arrow-circle-right visible-xs pull-left"></i> <?php the_title(); ?>
		</a>
	</dt>
	
	<dd class="hidden-xs">
		<?php gabfire_postmeta(true,true,false,false,false,false,false); ?>
	</dd>
	
</dl>		