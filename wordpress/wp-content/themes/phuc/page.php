 <?php 
	get_header(); 
 
	while(have_posts()) {
		 the_post(); ?>
		<section class="phuc-bg text-white ">
 			<article class=" container m-auto p-5">
 				<p>You are viewing the: ID: <?php echo wp_get_post_parent_id(get_the_ID()); ?> <?php the_title(); ?> page</p>
 				<p>
 				<?php
 					$theParent = wp_get_post_parent_id(get_the_ID());
 					if ($theParent ) { ?>
 						 <span><a href="<?php echo get_permalink($theParent); ?>">Back to <?php echo get_the_title($theParent); ?></a></span>
 						 <span> >> <?php the_title(); ?></span>
 					<?php }
 				?>
 				<?php
 				$testArray = get_pages(array(
 					'child_of' => get_the_ID()
 				));

 				if ($theParent or $testArray) { ?>
 				<aside class="float-right border border-5 border-blue-600 p-3">
 				<h2><a href="<?php echo get_permalink($theParent) ?>">
 					<?php echo get_the_title($theParent) ?></a></h2>
	 			<?php 
	 				if ($theParent) {
	 					$findChildrenOf = $theParent;
	 				} else {
	 					$findChildrenOf = get_the_ID();
	 				}

			 		wp_list_pages(array(
			 			'title_li' => NULL, 
			 			'child_of' => $findChildrenOf,
			 			'sort_column' => 'menu_order'
			 		));
			 	?>
	 			</aside>
 				</p>
 				<?php } ?>
 				
	 		
	 		
	 			<h2 class="text-5xl "><?php the_title(); ?></h2>

				<?php the_content(); ?>


		


 			</article>
 		</section>
	<?php }

 	get_footer();
?>

