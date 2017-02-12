<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package hitorilab
 */

get_header(); ?>
<main class="l-main">
	<div class="l-gallery">
		<div class="hero element">
			<a href="single-gallery.html">
			<div class="hero-bg" style="background: url('<?php echo get_stylesheet_directory_uri(); ?>/images/demo/hero@2x.png') center center / cover no-repeat;">
					<h2 class="hero-title">Processingとは環境構築から最初の作品まで</h2>
			</div>
			</a>
		</div>
		<div class="gallery">
			<?php
			global $post;
			$args = array(
				'posts_per_page' => 20,
				'post_type'=> 'gallery'
			);
			$myposts = get_posts( $args );
			foreach ( $myposts as $post ) : setup_postdata( $post );
				$thumbnail_id = get_post_thumbnail_id();
				$eye_img = wp_get_attachment_image_src($thumbnail_id, 'medium');
			?>
				<article class="gallery-item element">
					<a href="<?php the_permalink(); ?>"><img src="<?php echo $eye_img[0] ?>"></a>
					<div class="tag-title">#<?php the_category(' '); ?></div>
					<a href="<?php the_permalink(); ?>"><h3 class="gallery-title"><span class="gallery-title-width"><?php the_title(); ?></span></h3></a>
				</article>
				<?php
			endforeach;
			wp_reset_postdata();
			?>
		</div>
	</div>
	<div class="l-blog">
		<div class="blog-container">
			<h2 class="category-title">BLOG</h2>
			<?php
			if ( have_posts() ) :
				while ( have_posts() ) : the_post();
			?>
					<article class="blog-item element">
						<div class="blog-info"><span class="blog-tag">#<?php the_category(' '); ?></span><span class="blog-date"><?php echo get_post_time('F j, Y'); ?></span></div>
						<a href="<?php the_permalink(); ?>"><h3 class="blog-title"><?php the_title(); ?></h3></a>
					</article>
			<?php
				endwhile;
				the_posts_navigation();
			endif; ?>
		</div>
	</div>
</main>
<?php
get_sidebar();
get_footer();
