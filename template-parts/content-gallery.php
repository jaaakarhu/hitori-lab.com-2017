<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package hitorilab
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div id="canvas-wrapper" class="canvas-wrapper">
		<canvas id="fullcanvas" data-processing-sources="<?php echo get_stylesheet_directory_uri(); ?>/processing/20170126.pde"></canvas>
	</div>
	<div class="gallery-container">
		<article class="article">
			<h1><?php the_title(); ?></h1>
			<?php
			the_content( sprintf(
			/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'hitorilab' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
			?>
			<div id="code-btn" class="code-btn">SHOW CODE</div>
			<div class="gallery-paginationLink">
				<?php posts_nav_link('','<PREVIOUS','NEXT>'); ?>
			</div>
		</article>
	</div>
	<div class="source-container">
		<pre class="ajax"></pre>
	</div>
</div><!-- #post-## -->
