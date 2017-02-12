<?php
/**
 * The template for displaying gallery single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package hitorilab
 */

get_header(); ?>
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.9.0/styles/dracula.min.css">
	<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.9.0/highlight.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/processing.js/1.6.4/processing.js"></script>


	<div id="primary" class="content-area">
		<main id="main" class="l-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content-gallery', get_post_format() );

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<script>
		jQuery(function($){
			var codeBtn = $('.code-btn');
			codeBtn.on('click', function(){
				if(codeBtn.hasClass('active')){
					$(this).text('SHOW CODE');
					$(this).removeClass('active');
					$('.source-container').removeClass('active');
				} else {
					$(this).text('HIDE CODE');
					$(this).addClass('active');
					$('.source-container').addClass('active');
				}
			});

		});
		jQuery(function($){
			$.ajax({
				url: '/wp-content/themes/hitorilab/processing/20170126.pde',
				success : function(data){
					$('pre.ajax').text(data);
					$('pre.ajax').each(function(i, block) {
						hljs.highlightBlock(block);
					});
				}
			});
		});
		hljs.initHighlightingOnLoad();
	</script>
<?php
get_sidebar();
get_footer();
