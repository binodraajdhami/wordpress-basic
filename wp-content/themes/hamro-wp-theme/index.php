<?php get_header(); ?>

<section class="welcome">
	<div class="container">

		<?php

			if(have_posts()){

				while (have_posts()) {

					the_post();

					the_title('<h1>','</h1>');

					the_content();

					the_post_thumbnail();
					
				}

			}

		?>

	</div>
</section>



<?php get_footer(); ?>