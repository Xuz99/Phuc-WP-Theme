 <?php 
	get_header(); 
 
	while(have_posts()) {
		 the_post(); ?>
		<section class="phuc-bg text-white max-w-full">
 			<article class="container m-auto p-5">
 				<p>You are viewing the: ID: <?php echo wp_get_post_parent_id(get_the_ID()); ?> <?php the_title(); ?> page</p>
 				<p>
 				<?php
 					if (wp_get_post_parent_id(get_the_ID())) {
 						echo "I am a child page. this will need to be edited in the future to avoid bad code";
 					}
 				?>
 				</p>
	 			<h2 class="text-5xl "><?php the_title(); ?></h2>
			 	<?php the_content(); ?>
 			</article>
 		</section>
	<?php }

 	get_footer();
?>

