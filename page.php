<?php

get_header();

while(have_posts()) {
	the_post(); ?>

  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
	
	<?php
}

get_footer();

?>
