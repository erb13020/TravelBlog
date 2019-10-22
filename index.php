<?php

get_header(); ?>


<div class="container">
	<div class="row">
		<div class="col-lg-8 col-md-10 mx-auto">
			<?php
				while(have_posts()) {
				the_post(); ?>
		<div>

		<h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
		<div class="metabox">Posted by <?php esc_url(the_author_posts_link()) ?> on <?php the_time('F j, Y');?> in <?php echo get_the_category_list(', ');?></div>

		<div>
			<?php the_excerpt(); ?>
			<p><a class="btn btn-primary btn-blog" href="<?php esc_url(the_permalink()); ?>">Continue Reading</a></p>
		</div>
		<hr>
	</div>
	<?php } echo paginate_links();
?>

		</div>
	</div>
</div>

<?php 
get_footer(); ?>
