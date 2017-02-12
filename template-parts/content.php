<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package hitorilab
 */

?>
<div class="blog-container">
	<div class="blog-paginationLink blog-previousLink"><a href="#">PREVIOUS</a></div>
	<div class="blog-paginationLink blog-nextLink"><a href="#">NEXT</a></div>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php the_post_thumbnail('thumbnail'); ?>
		<div class="blog-info"><span class="blog-tag">#<?php the_category(' '); ?></span><span class="blog-date"><?php echo get_post_time('F j, Y'); ?></span></div>
		<h1 class="blog-title"><?php the_title(); ?></h1>
		<div class="blog-contents">
			<?php
			the_content( sprintf(
			/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'hitorilab' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'hitorilab' ),
				'after'  => '</div>',
			) );
			?>
		</div>
	</article>

	<div class="blog-footer">
		<div class="related-heading">You may also like</div>
		<div class="related-container">
			<div class="related-item element">
				<a href="#">
					<div class="related-info"><span class="related-tag">#css</span><span class="related-date">01.Nov.2017</span></div>
					<h3 class="related-title">Processingで作った作品をWebで公開するまで</h3>
				</a>
			</div>
			<div class="related-item element">
				<a href="#">
					<div class="related-info"><span class="related-tag">#css</span><span class="related-date">01.Nov.2017</span></div>
					<h3 class="related-title">border-box</h3>
				</a>
			</div>
		</div>
	</div>
</div>

<footer class="entry-footer">
	<?php hitorilab_entry_footer(); ?>
</footer><!-- .entry-footer -->
</article><!-- #post-## -->
