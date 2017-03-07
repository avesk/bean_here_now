<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

	<?php
		if(have_posts()){
			while (have_posts()) {
				the_post();
				echo '<h2 class="post-title">' . get_the_title() . "</h2>";
				echo the_content();
			} 

		}

	?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>

