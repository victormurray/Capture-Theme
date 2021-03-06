<?php
/*
 * This template is used for the display of blog posts (archive; river).
 */

get_header(); ?>
	<section class="content-wrapper home-content home cf">
		<article class="content cf">
			<?php
				get_template_part( 'loop', 'home' ); // Loop - Home
				get_template_part( 'post', 'navigation' ); // Post Navigation
			?>
		</article>

		<?php get_sidebar(); ?>
	</section>

<?php get_footer(); ?>