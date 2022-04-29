<?php
/*
Template Name: Home Page
*/

?>
<?php get_header(); ?>

<div class="container">

	<div class="row">
		<div class="col-sm-8">
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
		</div>
		<div class="col-sm-4">
			<?php the_post_thumbnail(' img-responsive '); ?>
		</div>
	</div>


	<h4>Banner</h4>
	<h4>Welcome</h4>
	<h4>Service</h4>
	<h4>How We Work</h4>
	<h4>Testimonial</h4>
	<h4>Project</h4>

</div>

<?php get_footer(); ?>